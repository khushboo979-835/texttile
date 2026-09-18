<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <?php include 'admin/includes/db.php'; ?>
    <style>
        .blog-header {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/banner/1.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            text-align: center;
        }
        .blog-content {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.05);
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }
        .blog-content img.main-img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 30px;
        }
        .blog-content .category {
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        .blog-content .title {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin: 15px 0;
            font-weight: 700;
        }
        .blog-content .meta {
            color: #777;
            font-size: 0.95rem;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .content-body {
            line-height: 1.9;
            font-size: 1.15rem;
            color: #444;
            text-align: justify;
        }
        .content-body h2, .content-body h3, .content-body h4 {
            color: var(--secondary-color);
            margin-top: 40px;
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
        }
        .content-body h2 {
            font-size: 2rem;
            padding-bottom: 10px;
        }
        .content-body h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 70px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }
        .content-body h3 {
            font-size: 1.6rem;
            border-left: 5px solid var(--primary-color);
            padding-left: 15px;
        }
        .content-body img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin: 25px 0;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        .content-body ul, .content-body ol {
            margin: 20px 0;
            padding-left: 30px;
        }
        .content-body li {
            margin-bottom: 12px;
        }
        .content-body blockquote {
            background: #f8f9fa;
            border-left: 6px solid var(--primary-color);
            padding: 25px;
            margin: 35px 0;
            font-style: italic;
            font-size: 1.25rem;
            color: #555;
            border-radius: 0 12px 12px 0;
        }
        .sidebar-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <?php include 'common/header.php'; ?>

    <?php
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $sql = "SELECT * FROM blogs WHERE id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $blog = $result->fetch_assoc();
        } else {
            die("<div class='container py-5 text-center'><h1>Blog Not Found</h1><a href='blogs.php' class='btn btn-primary mt-3'>Back to Blogs</a></div>");
        }
    } else {
        header("Location: blogs.php");
        exit();
    }
    ?>

    <section class="blog-header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="blogs.php">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-content">
                        <?php if(!empty($blog['cover_image'])): ?>
                            <img src="assets/images/blogs/<?php echo htmlspecialchars($blog['cover_image']); ?>" class="main-img" alt="<?php echo htmlspecialchars($blog['page_title'] ?? 'Blog'); ?>">
                        <?php endif; ?>
                        <h1 class="title"><?php echo htmlspecialchars($blog['page_title'] ?? $blog['content_title'] ?? 'Untitled Blog'); ?></h1>
                        <div class="meta">
                            <span><i class="bi bi-calendar3 me-2"></i><?php echo date('F d, Y', strtotime($blog['created_at'])); ?></span>
                            <span class="mx-3">|</span>
                            <span><i class="bi bi-person me-2"></i>Admin</span>
                        </div>
                        <div class="content-body">
                            <?php echo $blog['long_content'] ?? ''; ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-card">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Recent Posts</h5>
                        <?php
                        $recent_sql = "SELECT * FROM blogs WHERE id != $id ORDER BY id DESC LIMIT 5";
                        $recent_result = $conn->query($recent_sql);
                        if ($recent_result->num_rows > 0) {
                            while($recent = $recent_result->fetch_assoc()) {
                                ?>
                                <div class="d-flex mb-3 align-items-center">
                                    <?php if(!empty($recent['cover_image'])): ?>
                                        <img src="assets/images/blogs/<?php echo htmlspecialchars($recent['cover_image']); ?>" style="width: 70px; height: 70px; object-fit: cover; border-radius: 10px;" alt="">
                                    <?php else: ?>
                                        <div class="bg-light d-flex align-items-center justify-content-center text-muted" style="width: 70px; height: 70px; object-fit: cover; border-radius: 10px;"><i class="bi bi-image"></i></div>
                                    <?php endif; ?>
                                    <div class="ms-3">
                                        <a href="blog-details.php?id=<?php echo $recent['id']; ?>" class="text-decoration-none text-dark fw-bold small d-block"><?php echo htmlspecialchars(substr($recent['page_title'] ?? 'Read more...', 0, 40)); ?></a>
                                        <span class="text-muted extra-small" style="font-size: 0.75rem;"><?php echo date('M d, Y', strtotime($recent['created_at'])); ?></span>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p class='text-muted small'>No recent posts.</p>";
                        }
                        ?>
                    </div>

                    <div class="sidebar-card bg-primary text-white">
                        <h5 class="fw-bold mb-3">Get a Quote</h5>
                        <p class="small">Contact us today for your tensile structure projects.</p>
                        <a href="contact-us.php" class="btn btn-outline-light border-white rounded-pill btn-sm w-100 mt-2">Enquiry Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>

</html>
