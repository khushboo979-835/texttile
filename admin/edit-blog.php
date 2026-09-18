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
$max_file_size = 5242880; // 5MB
$allowed_types = ['image/jpeg', 'image/png', 'image/webp', 'image/gif'];
$blog = null;

if (!is_dir($upload_dir)) {
    @mkdir($upload_dir, 0755, true);
}

if (!isset($_GET['id'])) {
    header("Location: manage-blogs.php");
    exit();
}
$id = (int)$_GET['id'];

// Fetch Blog Data First
$fetch_stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
$fetch_stmt->bind_param("i", $id);
$fetch_stmt->execute();
$result = $fetch_stmt->get_result();

if ($result->num_rows > 0) {
    $blog = $result->fetch_assoc();
} else {
    header("Location: manage-blogs.php");
    exit();
}
$fetch_stmt->close();

function handleUploadUpdate($file_input_name, $upload_dir, $allowed_types, $max_file_size, $existing_file) {
    if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES[$file_input_name];
        if ($file['size'] > $max_file_size) { return $existing_file; }
        $file_ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $unique_filename = uniqid($file_input_name.'_') . '.' . $file_ext;
        $target = $upload_dir . $unique_filename;
        if (move_uploaded_file($file['tmp_name'], $target)) {
            // Delete old file if exists
            if (!empty($existing_file) && file_exists($upload_dir . $existing_file)) {
                @unlink($upload_dir . $existing_file);
            }
            return $unique_filename;
        }
    }
    return $existing_file; // Keep old image if no new one uploaded
}

if (isset($_POST['update_blog'])) {
    // Collect all fields
    $page_title = $_POST['page_title'] ?? '';
    $slug = $_POST['slug'] ?? '';
    if(empty($slug)) { $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $page_title), '-')); }
    
    $google_tag = $_POST['google_tag'] ?? '';
    $json_tag = $_POST['json_tag'] ?? '';
    
    $meta_title = $_POST['meta_title'] ?? '';
    $meta_description = $_POST['meta_description'] ?? '';
    $meta_keywords = $_POST['meta_keywords'] ?? '';
    $canonical_url = $_POST['canonical_url'] ?? '';
    
    $og_title = $_POST['og_title'] ?? '';
    $og_description = $_POST['og_description'] ?? '';
    $og_alt = $_POST['og_alt'] ?? '';
    
    $twitter_title = $_POST['twitter_title'] ?? '';
    $twitter_description = $_POST['twitter_description'] ?? '';
    $twitter_alt = $_POST['twitter_alt'] ?? '';
    
    $cover_title = $_POST['cover_title'] ?? '';
    $cover_desc = $_POST['cover_desc'] ?? '';
    $cover_alt = $_POST['cover_alt'] ?? '';
    
    $banner_alt = $_POST['banner_alt'] ?? '';
    
    $content_title = $_POST['content_title'] ?? '';
    $long_content = $_POST['long_content'] ?? '';

    // Handle Uploads
    $cover_image = handleUploadUpdate('cover_image', $upload_dir, $allowed_types, $max_file_size, $blog['cover_image']);
    $banner = handleUploadUpdate('banner', $upload_dir, $allowed_types, $max_file_size, $blog['banner']);
    $og_image = handleUploadUpdate('og_image', $upload_dir, $allowed_types, $max_file_size, $blog['og_image']);
    $twitter_image = handleUploadUpdate('twitter_image', $upload_dir, $allowed_types, $max_file_size, $blog['twitter_image']);

    if (empty($page_title) || empty($long_content)) {
        $message = "<div class='alert alert-danger'>Page Title and Content are required!</div>";
    } else {
        $query = "UPDATE blogs SET 
        google_tag = ?, json_tag = ?, page_title = ?, slug = ?, meta_title = ?, meta_description = ?, meta_keywords = ?, canonical_url = ?, 
        og_title = ?, og_description = ?, og_image = ?, og_alt = ?, twitter_title = ?, twitter_description = ?, twitter_image = ?, twitter_alt = ?, 
        cover_title = ?, cover_desc = ?, cover_image = ?, cover_alt = ?, banner = ?, banner_alt = ?, content_title = ?, long_content = ? 
        WHERE id = ?";
        
        $stmt = $conn->prepare($query);
        if ($stmt) {
            $stmt->bind_param("ssssssssssssssssssssssssi", 
                $google_tag, $json_tag, $page_title, $slug, $meta_title, $meta_description, $meta_keywords, $canonical_url,
                $og_title, $og_description, $og_image, $og_alt, $twitter_title, $twitter_description, $twitter_image, $twitter_alt,
                $cover_title, $cover_desc, $cover_image, $cover_alt, $banner, $banner_alt, $content_title, $long_content, $id
            );
            
            if ($stmt->execute()) {
                $message = "<div class='alert alert-success'><strong>Success!</strong> Blog properly updated! <a href='manage-blogs.php'>View blogs</a></div>";
                // Refresh blog variables
                $fetch_stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
                $fetch_stmt->bind_param("i", $id);
                $fetch_stmt->execute();
                $blog = $fetch_stmt->get_result()->fetch_assoc();
                $fetch_stmt->close();
            } else {
                $message = "<div class='alert alert-danger'>Database error: " . $stmt->error . "</div>";
            }
            $stmt->close();
        } else {
            $message = "<div class='alert alert-danger'>Prepare failed: " . $conn->error . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Complete Blog | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        :root { --sidebar-width: 250px; }
        body { background-color: #f4f7f6; }
        .sidebar { width: var(--sidebar-width); height: 100vh; background: var(--secondary-color); color: white; position: fixed; left: 0; top: 0; padding-top: 20px; z-index: 100; overflow-y: auto; }
        .sidebar a { color: rgba(255, 255, 255, 0.8); text-decoration: none; padding: 15px 25px; display: block; }
        .sidebar a:hover, .sidebar a.active { background: var(--primary-color); color: white; }
        .main-content { margin-left: var(--sidebar-width); padding: 40px; }
        .form-card { background: white; border-radius: 15px; padding: 25px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05); border: none; }
        .nav-tabs .nav-link { color: #555; font-weight: 500; }
        .nav-tabs .nav-link.active { color: var(--primary-color); font-weight: bold; }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="text-center fw-bold fs-5 mb-4 mt-2 text-primary">A&T ADMIN</div>
    <a href="dashboard.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
    <div style="padding: 15px 25px; font-size: 0.85rem; color: rgba(255, 255, 255, 0.6); text-transform: uppercase;">Content Management</div>
    <a href="manage-blogs.php" class="active"><i class="bi bi-journal-text me-2"></i> Manage Blogs</a>
    <a href="add-blog.php"><i class="bi bi-plus-circle me-2"></i> Add New Blog</a>
    <a href="logout.php" style="margin-top: 150px;"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
</div>

<div class="main-content">
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit Complete Blog Post</h4>
            <p class="text-muted">Updating: <strong><?php echo htmlspecialchars($blog['page_title'] ?? $blog['content_title'] ?? ''); ?></strong></p>
        </div>
        <a href="manage-blogs.php" class="btn btn-outline-secondary mb-4">Back to List</a>
    </div>
    
    <?php echo $message; ?>

    <div class="form-card mt-2">
        <form action="" method="POST" enctype="multipart/form-data">
            
            <ul class="nav nav-tabs mb-4" id="blogTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="content-tab" data-bs-toggle="tab" data-bs-target="#content-pane" type="button" role="tab">Main Content</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo-pane" type="button" role="tab">SEO Settings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social-pane" type="button" role="tab">Social Media (OG/Twitter)</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media-pane" type="button" role="tab">Images & Banners</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="scripts-tab" data-bs-toggle="tab" data-bs-target="#scripts-pane" type="button" role="tab">Scripts / Tags</button>
                </li>
            </ul>

            <div class="tab-content" id="blogTabsContent">
                <!-- MAIN CONTENT TAB -->
                <div class="tab-pane fade show active" id="content-pane" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Page Title (Used for header usually) *</label>
                            <input type="text" name="page_title" class="form-control" required value="<?php echo htmlspecialchars($blog['page_title'] ?? ''); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">URL Slug</label>
                            <input type="text" name="slug" class="form-control" value="<?php echo htmlspecialchars($blog['slug'] ?? ''); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Content Title (Heading inside content formatting)</label>
                            <input type="text" name="content_title" class="form-control" value="<?php echo htmlspecialchars($blog['content_title'] ?? ''); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Long Content *</label>
                            <textarea name="long_content" class="form-control" rows="12" required><?php echo htmlspecialchars($blog['long_content'] ?? ''); ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEO TAB -->
                <div class="tab-pane fade" id="seo-pane" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="<?php echo htmlspecialchars($blog['meta_title'] ?? ''); ?>">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3"><?php echo htmlspecialchars($blog['meta_description'] ?? ''); ?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" class="form-control" rows="2"><?php echo htmlspecialchars($blog['meta_keywords'] ?? ''); ?></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Canonical URL</label>
                            <input type="text" name="canonical_url" class="form-control" value="<?php echo htmlspecialchars($blog['canonical_url'] ?? ''); ?>">
                        </div>
                    </div>
                </div>

                <!-- SOCIAL TAB -->
                <div class="tab-pane fade" id="social-pane" role="tabpanel">
                    <h5 class="text-primary mt-2">Open Graph (Facebook/LinkedIn)</h5>
                    <div class="row border-bottom pb-3 mb-3">
                        <div class="col-md-6 mb-3"><label class="form-label">OG Title</label><input type="text" name="og_title" class="form-control" value="<?php echo htmlspecialchars($blog['og_title'] ?? ''); ?>"></div>
                        <div class="col-md-6 mb-3"><label class="form-label">OG Alt (Image Alt Text)</label><input type="text" name="og_alt" class="form-control" value="<?php echo htmlspecialchars($blog['og_alt'] ?? ''); ?>"></div>
                        <div class="col-md-12 mb-3"><label class="form-label">OG Description</label><textarea name="og_description" class="form-control" rows="2"><?php echo htmlspecialchars($blog['og_description'] ?? ''); ?></textarea></div>
                    </div>
                    <h5 class="text-primary">Twitter Cards</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3"><label class="form-label">Twitter Title</label><input type="text" name="twitter_title" class="form-control" value="<?php echo htmlspecialchars($blog['twitter_title'] ?? ''); ?>"></div>
                        <div class="col-md-6 mb-3"><label class="form-label">Twitter Alt</label><input type="text" name="twitter_alt" class="form-control" value="<?php echo htmlspecialchars($blog['twitter_alt'] ?? ''); ?>"></div>
                        <div class="col-md-12 mb-3"><label class="form-label">Twitter Description</label><textarea name="twitter_description" class="form-control" rows="2"><?php echo htmlspecialchars($blog['twitter_description'] ?? ''); ?></textarea></div>
                    </div>
                </div>

                <!-- MEDIA TAB -->
                <div class="tab-pane fade" id="media-pane" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Cover Image Upload</label>
                            <input type="file" name="cover_image" class="form-control">
                            <?php if(!empty($blog['cover_image'])): ?><div class="small text-muted mt-1">Current: <?php echo $blog['cover_image']; ?></div><?php endif; ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cover Image Alt Text</label>
                            <input type="text" name="cover_alt" class="form-control" value="<?php echo htmlspecialchars($blog['cover_alt'] ?? ''); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cover Title</label>
                            <input type="text" name="cover_title" class="form-control" value="<?php echo htmlspecialchars($blog['cover_title'] ?? ''); ?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cover Description</label>
                            <textarea name="cover_desc" class="form-control" rows="2"><?php echo htmlspecialchars($blog['cover_desc'] ?? ''); ?></textarea>
                        </div>
                        <div class="col-12 border-bottom my-3"></div>
                        
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Banner Image Upload</label>
                            <input type="file" name="banner" class="form-control">
                            <?php if(!empty($blog['banner'])): ?><div class="small text-muted mt-1">Current: <?php echo $blog['banner']; ?></div><?php endif; ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Banner Image Alt Text</label>
                            <input type="text" name="banner_alt" class="form-control" value="<?php echo htmlspecialchars($blog['banner_alt'] ?? ''); ?>">
                        </div>

                        <div class="col-12 border-bottom my-3"></div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">OG Image Upload (Social)</label>
                            <input type="file" name="og_image" class="form-control">
                            <?php if(!empty($blog['og_image'])): ?><div class="small text-muted mt-1">Current: <?php echo $blog['og_image']; ?></div><?php endif; ?>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Twitter Image Upload</label>
                            <input type="file" name="twitter_image" class="form-control">
                            <?php if(!empty($blog['twitter_image'])): ?><div class="small text-muted mt-1">Current: <?php echo $blog['twitter_image']; ?></div><?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- SCRIPTS TAB -->
                <div class="tab-pane fade" id="scripts-pane" role="tabpanel">
                    <div class="mb-3">
                        <label class="form-label">Google Tag (Scripts)</label>
                        <textarea name="google_tag" class="form-control text-monospace" rows="4"><?php echo htmlspecialchars($blog['google_tag'] ?? ''); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">JSON-LD Tag (Schema/Rich Snippets)</label>
                        <textarea name="json_tag" class="form-control text-monospace" rows="4"><?php echo htmlspecialchars($blog['json_tag'] ?? ''); ?></textarea>
                    </div>
                </div>
            </div>

            <div class="mt-4 pt-3 border-top text-end">
                <button type="submit" name="update_blog" class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm">Update Blog</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
