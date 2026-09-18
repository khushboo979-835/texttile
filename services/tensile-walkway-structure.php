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
        .walkway-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/walkway.jpg) center/cover no-repeat;
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

        .walkway-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .walkway-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="walkway-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Walkway Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Walkway Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 walkway">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/2.jpg"
                        alt="Tensile Walkway Structure in Patna" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h2>Tensile Walkway Structure in Patna</h2>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> offers premium
                        <strong>tensile walkway structures in Patna</strong> that are designed
                        to provide protection, durability, and aesthetic appeal. Our walkway
                        tensile structures are widely used in <strong>commercial complexes,
                            schools, colleges, hospitals, gardens, resorts, and public spaces</strong>.
                    </p>
                    <p class="text-muted text-justify">
                        As a trusted <strong>tensile walkway structure manufacturer in Patna</strong>,
                        we focus on delivering durable, weather-resistant, and cost-effective
                        solutions. Whether you need <strong>covered walkways for institutions</strong>
                        or <strong>modern tensile walkway roofing for residential areas</strong>,
                        we provide customized designs to suit your requirements.
                    </p>
                    <p class="text-muted text-justify">
                        We proudly serve clients across Bihar, with our office located at
                        <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>.
                        Contact us today for high-quality <strong>tensile walkway structures in Patna</strong>
                        that combine safety, style, and long-lasting performance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 walkway-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Walkway Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we specialize in delivering
                        world-class <strong>walkway tensile solutions</strong> that are not only
                        functional but also enhance the visual appeal of spaces. Whether it’s
                        for <strong>educational institutions, hospitals, resorts, or residential
                            colonies</strong>, our tensile walkway roofing is engineered with premium
                        quality material and modern design.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Durable and weather-resistant tensile fabric</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Customized sizes and walkway designs</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Ideal for schools, colleges, hospitals, and public pathways</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Easy to install, low maintenance, and long-lasting</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Affordable pricing with superior quality assurance</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you are looking for the <strong>best tensile walkway structure supplier
                            in Patna</strong>, <strong>A&T Tensile Techworks</strong> is your trusted partner.
                        We are known for our reliable services, professional installation, and
                        customer satisfaction across Bihar.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>