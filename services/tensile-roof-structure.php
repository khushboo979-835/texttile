<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/config.php'; ?>
    <?php include '../common/head.php'; ?>
    <?php include '../common/plugins.php'; ?>
</head>

<body>
    <?php include '../common/header.php'; ?>
    <!-- ===================================== -->
    <style>
        .roof-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/roof.jpg) center/cover no-repeat;
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

        .roof-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .roof-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="roof-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Roof Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Roof Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 roof">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/4.jpg"
                        alt="Tensile Roof Structure in Patna" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Roof Structure in Patna</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> designs and installs
                        <strong>tensile roof structures in Patna</strong> that are modern,
                        durable, and versatile. Our tensile roofing solutions are ideal
                        for <strong>stadiums, shopping complexes, car parking areas,
                            auditoriums, terraces, schools, colleges, and industrial spaces</strong>.
                    </p>
                    <p class="text-muted text-justify">
                        As a leading <strong>tensile roof structure manufacturer in Patna</strong>,
                        we provide roofing systems that combine strength with aesthetics,
                        ensuring protection from sun, rain, and wind. Our tensile roofs
                        are engineered with high-quality fabric and steel framework, making
                        them long-lasting and low-maintenance.
                    </p>
                    <p class="text-muted text-justify">
                        With our office located at <strong>Chandrakanta Appartment, Opposite
                            Harihar Chamber, Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>,
                        we serve clients across Bihar. Get in touch with us today for
                        customized <strong>tensile roof structures in Patna</strong> designed
                        to match your space and budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 roof-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Roof Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we specialize in advanced
                        <strong>tensile roofing solutions</strong> that are lightweight,
                        durable, and visually striking. Whether you require
                        <strong>large-span roofing for stadiums</strong> or
                        <strong>compact tensile roofing for commercial spaces</strong>,
                        we ensure innovative design and reliable installation.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item "> <i class="bi bi-check-circle me-2"></i>Durable and
                                weather-resistant tensile roof fabric</li>
                            <li class="list-group-item "> <i class="bi bi-check-circle me-2"></i>Customizable designs
                                for residential, commercial, and industrial use</li>
                            <li class="list-group-item "> <i class="bi bi-check-circle me-2"></i>Lightweight structure
                                with high strength</li>
                            <li class="list-group-item "> <i class="bi bi-check-circle me-2"></i>Cost-effective and low
                                maintenance</li>
                            <li class="list-group-item "> <i class="bi bi-check-circle me-2"></i>Professional
                                installation with timely delivery</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you are looking for the <strong>best tensile roof structure supplier in Patna</strong>,
                        <strong>A&T Tensile Techworks</strong> is your trusted partner. Our expertise,
                        quality materials, and customer-first approach make us the top choice
                        for <strong>tensile roofing in Bihar</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>