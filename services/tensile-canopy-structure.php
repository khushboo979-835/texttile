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
        .canopy-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/canopy.jpg) center/cover no-repeat;
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

        .canopy-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .canopy-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="canopy-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Canopy Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Canopy Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 canopy">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/4.jpg"
                        alt="Tensile Canopy Structure in Patna and Bihar" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Canopy Structure in Patna & Across Bihar</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> specializes in designing and installing
                        premium-quality <strong>tensile canopy structures</strong> that combine style,
                        durability, and functionality. Our canopies are widely used for
                        <strong>residential spaces, commercial complexes, shopping areas,
                            schools, colleges, hotels, resorts, petrol pumps, and outdoor event venues</strong>.
                    </p>
                    <p class="text-muted text-justify">
                        As one of the trusted <strong>tensile canopy structure manufacturers in Patna and
                            Bihar</strong>,
                        we deliver canopies that provide effective shade, protection from harsh weather,
                        and an elegant modern look. Whether you need a <strong>car parking canopy</strong>,
                        <strong>walkway canopy</strong>, or <strong>commercial canopy installation</strong>,
                        we ensure long-lasting performance and reliable service.
                    </p>
                    <p class="text-muted text-justify">
                        Our office is located at <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>, and we proudly serve
                        clients <strong>not only in Patna but across all major cities of Bihar</strong>.
                        Get in touch today for customized <strong>tensile canopy solutions</strong> tailored
                        to your space and requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 canopy-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Canopy Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine modern architecture with
                        high-quality engineering to provide canopies that are strong, lightweight,
                        and visually appealing. Our <strong>tensile canopy structures in Bihar</strong>
                        are designed to meet both functional and aesthetic needs, making them perfect
                        for <strong>residential, commercial, and industrial applications</strong>.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Durable and
                                weather-resistant canopy fabric</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Custom sizes, shapes, and
                                designs available</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Ideal for car parking,
                                gardens, walkways, and commercial areas</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Quick installation and
                                low maintenance</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Affordable canopy
                                solutions with long-term reliability</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you are searching for the <strong>best tensile canopy structure supplier in Bihar</strong>,
                        including <strong>Patna, Gaya, Bhagalpur, Muzaffarpur, Darbhanga, and other cities</strong>,
                        <strong>A&T Tensile Techworks</strong> is your trusted partner. We ensure superior
                        quality, timely delivery, and complete customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>