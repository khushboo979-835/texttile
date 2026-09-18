<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ==================================== -->
    <style>
        .projects-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(assets/images/background/1.jpg) center/cover no-repeat;
            background-attachment: fixed;
            padding: 60px 0;
            height: 300px;
            text-align: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 1;
        }

        .projects-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .projects-breadcrumb h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="projects-breadcrumb">
        <div class="container text-center">
            <h2>Our Projects</h2>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =================================== -->
     <style>
        .our-projects {
            padding: 60px 0;
            background: #eee;
        }
        .our-projects img{
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            transition: all 0.7s ease-in-out;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border: 5px solid var(--tertiary-color);
        }
     </style>
    <section class="py-5 our-projects">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <span>Our Projects</span>
                    <h2>Check out our previous projects</h2>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <!-- Project 1 -->
                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/1.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/1.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/2.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/2.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/3.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/3.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/4.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/4.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/5.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/5.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/6.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/6.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/7.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/7.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/8.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/8.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/9.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/9.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/10.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/10.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/11.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/3.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="assets/images/gallery/12.jpg" data-fancybox="gallery" data-caption="">
                        <div class="project-box">
                            <img src="assets/images/gallery/12.jpg" alt="" class="img-fluid">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================== -->
    <?php include 'common/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</body>

</html>