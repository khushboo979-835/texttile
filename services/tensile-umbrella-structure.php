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
        .umbrella-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/umbrella.jpg) center/cover no-repeat;
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

        .umbrella-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .umbrella-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="umbrella-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Umbrella Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Umbrella Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 tensile">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/1.jpg"
                        alt="Tensile Umbrella Structure in Patna" class="img-fluid ">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Umbrella Structure in Patna</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> specializes in high-quality
                        <strong>tensile umbrella structures</strong> that are stylish, durable, and
                        weather-resistant. Our umbrella designs are widely used for
                        <strong>cafes, restaurants, gardens, resorts, hotels, swimming pools,
                            and outdoor seating areas</strong>.
                    </p>
                    <p class="text-muted text-justify">
                        As a leading <strong>tensile umbrella structure manufacturer in Patna</strong>,
                        we focus on delivering products that provide shade, comfort, and elegance
                        while being easy to install and maintain. Our designs not only enhance the
                        aesthetic appeal of spaces but also ensure long-lasting performance.
                    </p>
                    <p class="text-muted text-justify">
                        We proudly serve clients across Bihar, with our office located at
                        <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>.
                        Contact us today for customized <strong>tensile umbrella structures in Patna</strong>
                        that perfectly suit your space.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================== -->
    <section class="py-5 tensile-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Umbrella Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine innovation and
                        engineering expertise to create umbrella structures that meet
                        international quality standards. Whether you need
                        <strong>commercial tensile umbrellas for cafes</strong> or
                        <strong>residential garden umbrella structures in Patna</strong>,
                        we ensure premium material, modern design, and reliable service.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Durable and weather-resistant tensile fabric</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Customizable sizes and colors</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Perfect for cafes, restaurants, resorts, and gardens</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Easy installation and low maintenance</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Affordable pricing with long-lasting performance</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you are searching for the <strong>best tensile umbrella structure supplier in Patna</strong>,
                        look no further than <strong>A&T Tensile Techworks</strong>. We are trusted for
                        our quality products, timely delivery, and customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>