<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
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
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .blog-card {
            transition: all 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .blog-card img {
            height: 250px;
            object-fit: cover;
        }
        .blog-card .card-body {
            padding: 25px;
        }
        .blog-card .category {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
        }
        .blog-card .title {
            font-size: 1.4rem;
            margin: 10px 0;
            color: var(--secondary-color);
        }
    </style>
</head>

<body>
    <?php include 'common/header.php'; ?>

    <section class="blog-header">
        <div class="container">
            <h1 class="display-4 fw-bold">Our Latest Blogs</h1>
            <p class="lead">Insights and updates from the world of Tensile Structures</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                $sql = "SELECT * FROM blogs ORDER BY id DESC";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-md-4">
                            <div class="card h-100 blog-card">
                                <?php if (!empty($row['cover_image'])): ?>
                                    <img src="assets/images/blogs/<?php echo htmlspecialchars($row['cover_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($row['page_title'] ?? 'Blog'); ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="title fw-bold"><?php echo htmlspecialchars($row['page_title']); ?></h5>
                                    <p class="text-muted small mb-3"><i class="bi bi-calendar3 me-2"></i><?php echo date('M d, Y', strtotime($row['created_at'])); ?></p>
                                    <p class="card-text text-justify"><?php echo substr(strip_tags($row['long_content']), 0, 120); ?>...</p>
                                    <a href="blog-details.php?id=<?php echo $row['id']; ?>" class="btn btn-primary rounded-pill btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<div class='col-12 text-center text-muted'><h3>No blogs found.</h3></div>";
                }
                ?>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>
</body>

</html>
