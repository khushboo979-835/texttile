<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
include '../common/config.php';
include 'includes/db.php';

$message = "";
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/assets/images/blogs/";

// Delete functionality with prepared statements
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete']; // Ensure ID is integer
    
    // Get image information using prepared statement
    $img_stmt = $conn->prepare("SELECT cover_image FROM blogs WHERE id = ?");
    $img_stmt->bind_param("i", $id);
    $img_stmt->execute();
    $img_result = $img_stmt->get_result();
    
    if ($img_result->num_rows > 0) {
        $img_row = $img_result->fetch_assoc();
        $img_path = $upload_dir . $img_row['cover_image'];
        
        // Delete file from server
        if (file_exists($img_path)) {
            @unlink($img_path);
        }
        
        // Delete from database using prepared statement
        $delete_stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
        $delete_stmt->bind_param("i", $id);
        
        if ($delete_stmt->execute()) {
            $message = "<div class='alert alert-success'><strong>Success!</strong> Blog deleted successfully!</div>";
        } else {
            $message = "<div class='alert alert-danger'>Error deleting blog. Please try again.</div>";
        }
        $delete_stmt->close();
    }
    $img_stmt->close();
}

// Fetch all blogs using prepared statement
$fetch_stmt = $conn->prepare("SELECT * FROM blogs ORDER BY created_at DESC");
$fetch_stmt->execute();
$result = $fetch_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blogs | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root { --sidebar-width: 250px; }
        body { background-color: #f4f7f6; }
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--secondary-color);
            color: white;
            position: fixed;
            left: 0; top: 0; padding-top: 20px;
        }
        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 15px 25px;
            display: block;
        }
        .sidebar a:hover, .sidebar a.active {
            background: var(--primary-color);
            color: white;
        }
        .sidebar .logo {
            text-align: center; font-weight: 700; font-size: 1.2rem; margin-bottom: 30px; color: var(--primary-color);
        }
        .main-content { margin-left: var(--sidebar-width); padding: 40px; }
        .table-card {
            background: white; border-radius: 15px; padding: 25px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); border: none;
        }
        .blog-img-prev {
            width: 80px; height: 50px; object-fit: cover; border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">A&T ADMIN</div>
    <a href="dashboard.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    
    <div style="padding: 15px 25px; font-size: 0.85rem; color: rgba(255, 255, 255, 0.6); text-transform: uppercase; letter-spacing: 1px; margin-top: 20px;">Content Management</div>
    <a href="manage-blogs.php" class="active"><i class="bi bi-journal-text me-2"></i> Manage Blogs</a>
    <a href="add-blog.php"><i class="bi bi-plus-circle me-2"></i> Add New Blog</a>
    <a href="manage-services.php"><i class="bi bi-gear me-2"></i> Manage Services</a>
    <a href="add-service.php"><i class="bi bi-plus-circle me-2"></i> Add Service</a>
    
    <a href="logout.php" style="margin-top: auto;"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Manage Blogs</h4>
        <a href="add-blog.php" class="btn btn-primary btn-sm rounded-pill"><i class="bi bi-plus"></i> Add New Post</a>
    </div>

    <?php echo $message; ?>

    <div class="table-card">
        <table class="table table-hover align-middle table-sm">
            <thead class="table-light">
                <tr>
                    <th style="width: 80px;">Image</th>
                    <th>Title</th>
                    <th style="width: 100px;">Date</th>
                    <th style="width: 120px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <?php if (!empty($row['cover_image'])): ?>
                                <img src="../assets/images/blogs/<?php echo htmlspecialchars($row['cover_image']); ?>" class="blog-img-prev" alt="">
                            <?php else: ?>
                                <div class="bg-light" style="width: 80px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 5px; color: #999;">No Image</div>
                            <?php endif; ?>
                        </td>
                        <td class="fw-bold"><?php echo htmlspecialchars(substr($row['page_title'] ?? $row['content_title'] ?? 'Untitled', 0, 80)); ?></td>
                        <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="edit-blog.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></a>
                                <a href="manage-blogs.php?delete=<?php echo $row['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('Delete this blog?')" title="Delete"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No blogs found. <a href="add-blog.php">Create one now</a></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
