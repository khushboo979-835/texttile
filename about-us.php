<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ================ Main Section ================ -->
    <style>
        .about-breadcrumb {
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

        .about-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .about-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="about-breadcrumb">
        <div class="container text-center">
            <h1>About Us</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ================================================== -->
    <section class="py-5 about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="head-title mb-4 text-center">
                    <span>About Us</span>
                    <h2>Welcome to A&T Tensile Techworkers</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <img src="assets/images/about/1.jpg" alt="A&T Tensile Techworkers" class="img-fluid ">
                </div>
                <div class="col-md-6">
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworkers</strong>, we specialize in designing, manufacturing, and
                        installing high-quality tensile structures that combine functionality with aesthetic appeal.
                        With years of experience in the industry, we have established ourselves as a trusted name in
                        providing innovative solutions for various architectural needs.
                    </p>
                    <p class="text-muted text-justify">
                        Our expertise spans across a wide range of applications, including car parking sheds, tensile
                        roofs, canopies, and custom projects tailored to meet the specific requirements of our clients.
                        We utilize advanced materials and cutting-edge technology to ensure durability, safety, and
                        sustainability in every project we undertake.
                    </p>
                    <p class="text-muted text-justify">
                        Committed to excellence, we work closely with our clients from concept to completion, ensuring
                        that each project is executed with precision and attention to detail. Our team of skilled
                        professionals is dedicated to delivering solutions that not only meet but exceed client
                        expectations.
                    </p>
                    <p class="text-muted text-justify">
                        Whether you're looking for a stylish car parking solution or a custom tensile structure, A&T
                        Tensile Techworkers is your go-to partner for innovative and reliable architectural solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================== -->
    <section class="py-5 mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="head-title mb-4 text-center">
                    <span>Our Mission</span>
                    <h2>What We Do</h2>
                </div>
                <div class="col-md-4 order-md-1 order-lg-2">
                    <img src="assets/images/about/2.jpg" alt="leaving room bed in patna" class="img-fluid">
                </div>
                <div class="col-md-8 order-md-2 order-lg-1">
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, our mission is to design, manufacture,
                        and deliver world-class <strong>tensile structures</strong> that combine durability,
                        innovation, and aesthetic appeal. We specialize in <strong>tensile fabric structures</strong>,
                        including <strong>car parking sheds, walkways, canopies, stadium covers, atriums,
                            and customized shade solutions</strong> that enhance both functionality and style.
                    </p>
                    <p class="text-muted text-justify">
                        With a strong commitment to <strong>quality, timely delivery, and client satisfaction</strong>,
                        we use premium-grade materials and advanced engineering techniques to ensure every
                        project exceeds expectations. Whether it's <strong>commercial, industrial, or residential
                            tensile
                            structures</strong>, we aim to provide solutions that are modern, reliable, and
                        cost-effective.
                    </p>
                    <p class="text-muted text-justify">
                        Guided by innovation and backed by years of expertise,
                        <strong>A&T Tensile Techworks</strong> strives to become the leading name in
                        <strong>tensile structure manufacturing and installation in Patna and across India</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================== -->
    <?php include 'common/footer.php'; ?>
</body>

</html>