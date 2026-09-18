<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
include '../common/config.php';
include 'includes/db.php';

// Fetch blog count
$blog_count_query = "SELECT COUNT(*) as total FROM blogs";
$blog_count_result = $conn->query($blog_count_query);
$blog_count = $blog_count_result->fetch_assoc()['total'];

// Fetch user count
$user_count_query = "SELECT COUNT(*) as total FROM register";
$user_count_result = $conn->query($user_count_query);
$user_count = $user_count_result->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | A&T Tensile Techworks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root {
            --sidebar-width: 250px;
        }
        body {
            background-color: #f4f7f6;
            font-family: 'Roboto', sans-serif;
        }
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--secondary-color);
            color: white;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
            transition: all 0.3s;
        }
        .sidebar a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            padding: 15px 25px;
            display: block;
            font-size: 1.1rem;
            transition: all 0.3s;
        }
        .sidebar a:hover, .sidebar a.active {
            background: var(--primary-color);
            color: white;
            padding-left: 35px;
        }
        .sidebar .logo {
            text-align: center;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: var(--primary-color);
        }
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 40px;
        }
        .card-stat {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: none;
            transition: transform 0.3s;
        }
        .card-stat:hover {
            transform: translateY(-5px);
        }
        .card-stat .icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        .card-stat h3 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        .navbar-top {
            background: white;
            padding: 15px 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-left: var(--sidebar-width);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="logo">A&T ADMIN</div>
    <a href="dashboard.php" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <a href="manage-blogs.php"><i class="bi bi-journal-text me-2"></i> Manage Blogs</a>
    <a href="add-blog.php"><i class="bi bi-plus-circle me-2"></i> Add New Blog</a>
    <a href="logout.php" class="mt-auto"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<div class="navbar-top">
    <h4 class="mb-0">Overview</h4>
    <div class="user-profile">
        <span>Welcome, <?php echo $_SESSION['admin_name']; ?></span>
        <i class="bi bi-person-circle fs-4 text-primary"></i>
    </div>
</div>

<div class="main-content">
    <div class="row">
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon"><i class="bi bi-journal-richtext"></i></div>
                <h3><?php echo $blog_count; ?></h3>
                <p class="text-muted">Total Blogs</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon"><i class="bi bi-people"></i></div>
                <h3><?php echo $user_count; ?></h3>
                <p class="text-muted">Registered Admins</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="icon"><i class="bi bi-eye"></i></div>
                <h3>0</h3> <!-- Placeholder for views if needed -->
                <p class="text-muted">Blog Views</p>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4>Recent Actions</h4>
        <div class="card shadow-sm border-0 mt-3">
            <div class="card-body">
                <p>Welcome to your new admin panel. Use the sidebar to manage your website content.</p>
                <a href="add-blog.php" class="btn btn-primary">Create Your First Blog</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
