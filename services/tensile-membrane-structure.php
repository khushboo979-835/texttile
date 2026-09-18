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
        .membrane-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/membrane.jpg) center/cover no-repeat;
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

        .membrane-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .membrane-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="membrane-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Membrane Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Membrane Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 membrane">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/5.jpg"
                        alt="Tensile Membrane Structure in Patna and Bihar" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Membrane Structure in Patna & All Over Bihar</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> is a leading name in the design,
                        manufacturing, and installation of high-quality <strong>tensile membrane structures</strong>
                        across <strong>Patna and all major cities of Bihar</strong>. Our modern membrane designs
                        offer a perfect balance of aesthetics, durability, and functionality — making them ideal
                        for <strong>stadiums, atriums, outdoor canopies, commercial spaces, exhibitions,
                            and large-scale public infrastructure projects</strong>.
                    </p>
                    <p class="text-muted text-justify">
                        As a trusted <strong>tensile membrane structure manufacturer in Bihar</strong>, we use
                        premium-grade fabric materials and advanced engineering techniques to ensure weather-resistant,
                        UV-protected, and long-lasting solutions. Whether you need <strong>membrane roofing
                            for commercial buildings</strong>, <strong>architectural membrane canopies</strong>, or
                        <strong>custom fabric tensile structures</strong>, we deliver tailor-made solutions to match
                        your space and requirements.
                    </p>
                    <p class="text-muted text-justify">
                        Our office is based at <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>, and we proudly serve
                        clients in <strong>Gaya, Bhagalpur, Muzaffarpur, Darbhanga, Nalanda, and other cities</strong>
                        across Bihar. Get in touch with <strong>A&T Tensile Techworks</strong> for reliable and
                        innovative <strong>tensile membrane structure solutions in Bihar</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 membrane-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Membrane Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine cutting-edge technology
                        with architectural creativity to deliver membrane structures that are both
                        visually striking and highly functional. Our solutions are designed to
                        withstand extreme weather conditions while providing maximum natural light
                        and ventilation, making them ideal for <strong>commercial, residential,
                            and public infrastructure projects</strong>.
                    </p>
                    <div class="col-md-7">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>High-performance,
                                UV-resistant, and weatherproof membrane fabric</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Custom design options to
                                suit all types of spaces</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Ideal for stadiums,
                                malls, atriums, outdoor seating, and public spaces</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Quick installation, low
                                maintenance, and long lifespan</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Cost-effective and
                                energy-efficient roofing solutions</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you’re looking for the <strong>best tensile membrane structure supplier in Bihar</strong>,
                        including <strong>Patna, Gaya, Muzaffarpur, Bhagalpur, and beyond</strong>,
                        <strong>A&T Tensile Techworks</strong> is your trusted partner. We guarantee quality
                        construction, timely project delivery, and complete customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>