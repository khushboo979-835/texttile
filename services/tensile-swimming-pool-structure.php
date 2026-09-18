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
        .swimming-pool-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/swimming-pool.jpg) center/cover no-repeat;
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

        .swimming-pool-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .swimming-pool-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="swimming-pool-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Swimming Pool Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Swimming Pool Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 swimming-pool">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/7.jpg"
                        alt="Tensile Swimming Pool Structure in Patna and Bihar" class="img-fluid mb-3">
                    <img src="<?= $base_url ?>assets/images/services/services/8.jpg"
                        alt="Tensile Swimming Pool Structure in Patna and Bihar" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Swimming Pool Structure in Patna & Across Bihar</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> offers premium-quality
                        <strong>tensile swimming pool structures</strong> in <strong>Patna</strong> and
                        across <strong>Bihar</strong>, designed to protect your pool area from harsh
                        sunlight, UV rays, heavy rain, and dust — while adding a modern and stylish
                        touch to the space. Our solutions not only enhance the aesthetics of your
                        swimming area but also ensure a safer and more comfortable environment for
                        users all year round.
                    </p>
                    <p class="text-muted text-justify">
                        As one of the most trusted <strong>swimming pool tensile shed manufacturers in Bihar</strong>,
                        we specialize in custom-designed structures suitable for <strong>residential pools,
                            commercial swimming facilities, hotels, resorts, schools, sports complexes, and
                            water parks</strong>. Our tensile covers are lightweight, long-lasting, and require
                        minimal maintenance — a perfect alternative to traditional roofing solutions.
                    </p>
                    <p class="text-muted text-justify">
                        Our office is located at <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>, and we proudly serve
                        clients across <strong>Gaya, Muzaffarpur, Bhagalpur, Darbhanga, Nalanda, and other
                            cities in Bihar</strong>. Contact us today for a <strong>custom tensile swimming pool
                            shed installation</strong> tailored to your requirements and budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 swimming-pool-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Swimming Pool Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine advanced engineering,
                        premium-grade materials, and modern design to deliver strong, durable, and
                        visually appealing <strong>tensile pool roofing solutions</strong>. Whether
                        it’s a small backyard pool or a large commercial swimming facility, we focus
                        on providing weather-resistant protection and elegant designs that elevate
                        your pool area.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>UV-resistant and
                                waterproof fabric to keep the pool area shaded and protected</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Custom designs for pools
                                of all sizes and shapes</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Lightweight, strong, and
                                low-maintenance structure</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Quick and efficient
                                installation with long-lasting results</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Affordable pricing and
                                complete after-sales support</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you’re searching for the <strong>best tensile swimming pool shed supplier in Bihar</strong> —
                        including <strong>Patna, Gaya, Muzaffarpur, Bhagalpur, and beyond</strong> —
                        <strong>A&T Tensile Techworks</strong> is your trusted choice. Our innovative and
                        reliable pool cover solutions provide shade, safety, and style, making your swimming
                        area usable and enjoyable in every season.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>