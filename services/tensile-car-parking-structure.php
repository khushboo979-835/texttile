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
        .car-parking-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/car-parking.jpg) center/cover no-repeat;
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

        .car-parking-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .car-parking-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="car-parking-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Car Parking Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Car Parking Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 car-parking">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/6.jpg"
                        alt="Tensile Car Parking Structure in Patna and Bihar" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Car Parking Structure in Patna & Across Bihar</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> is a leading provider of
                        high-quality <strong>tensile car parking structures</strong> in
                        <strong>Patna and all over Bihar</strong>. We design and install
                        durable, weather-resistant, and stylish parking solutions that protect
                        your vehicles from harsh sunlight, heavy rain, and UV damage — all
                        while enhancing the overall look of your space.
                    </p>
                    <p class="text-muted text-justify">
                        As a trusted <strong>car parking shed manufacturer in Bihar</strong>,
                        we specialize in customized parking solutions for <strong>residential
                            buildings, apartments, offices, shopping complexes, hotels, hospitals,
                            schools, and industrial facilities</strong>. Our tensile structures are
                        lightweight, long-lasting, and require minimal maintenance, making them
                        a cost-effective alternative to traditional concrete sheds.
                    </p>
                    <p class="text-muted text-justify">
                        Our office is located at
                        <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>, and we
                        proudly serve clients across <strong>Gaya, Muzaffarpur, Bhagalpur,
                            Darbhanga, Nalanda, and other cities in Bihar</strong>. Contact us today
                        for the best <strong>tensile car parking shed installation</strong> tailored
                        to your space and budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 car-parking-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Car Parking Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine modern design,
                        advanced engineering, and premium materials to deliver reliable and
                        visually appealing <strong>tensile parking structures</strong>. Whether
                        it’s a small residential parking solution or a large commercial project,
                        our focus is on durability, safety, and elegance.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>UV-resistant and weatherproof fabric for maximum vehicle protection</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Custom designs for single, double, or multiple car parking spaces</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Lightweight, strong, and low-maintenance structure</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Fast installation with long-lasting performance</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Affordable pricing and excellent after-sales support</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you are searching for the <strong>best tensile car parking shed
                            supplier in Bihar</strong> — including <strong>Patna, Gaya, Muzaffarpur,
                            Bhagalpur, and beyond</strong> — <strong>A&T Tensile Techworks</strong>
                        is your trusted partner. Our innovative designs and high-quality
                        solutions ensure your vehicles are safe, shaded, and well-protected
                        all year round.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>