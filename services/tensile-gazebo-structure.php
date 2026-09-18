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
        .gazebo-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url(../assets/images/banner/gazebo.jpg) center/cover no-repeat;
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

        .gazebo-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .gazebo-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="gazebo-breadcrumb">
        <div class="container text-center">
            <h1>Tensile Gazebo Structure</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tensile Gazebo Structure</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5 gazebo">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Image -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <img src="<?= $base_url ?>assets/images/services/services/9.jpg"
                        alt="Tensile Gazebo Structure in Patna and Bihar" class="img-fluid">
                </div>

                <!-- Right Side Content -->
                <div class="col-md-7">
                    <div class="head-title mb-3">
                        <span>Our Services</span>
                        <h3>Tensile Gazebo Structure in Patna & Across Bihar</h3>
                    </div>
                    <p class="text-muted text-justify">
                        <strong>A&T Tensile Techworks</strong> is a trusted name for premium-quality
                        <strong>tensile gazebo structures</strong> in <strong>Patna</strong> and across
                        <strong>Bihar</strong>. Our gazebos are designed to transform outdoor spaces into
                        functional, shaded, and aesthetically pleasing areas that can be enjoyed all year
                        round. Perfect for gardens, resorts, rooftops, farmhouses, parks, restaurants, and
                        outdoor lounges — our tensile gazebos combine durability, style, and comfort.
                    </p>
                    <p class="text-muted text-justify">
                        As a leading <strong>tensile gazebo shed manufacturer in Bihar</strong>, we specialize
                        in custom-designed gazebos that are weather-resistant, UV-protected, and easy to install.
                        Whether you need a cozy seating space for your backyard or an elegant outdoor setup for a
                        commercial property, our tensile solutions are built to last while enhancing the visual
                        appeal of any location.
                    </p>
                    <p class="text-muted text-justify">
                        Our office is located at <strong>Chandrakanta Appartment, Opposite Harihar Chamber,
                            Boring Road Chauraha, Pandooi Kothi, Patna - 800001</strong>. We serve clients across
                        <strong>Gaya, Bhagalpur, Muzaffarpur, Darbhanga, Nalanda, and other cities in Bihar</strong>.
                        Contact us today to get a customized <strong>tensile gazebo structure</strong> that suits
                        your space and budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================================== -->
    <section class="py-5 gazebo-2">
        <div class="container">
            <div class="row">
                <div class="py-3">
                    <h3 class="mb-3 title">Why Choose Our Tensile Gazebo Structures?</h3>
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworks</strong>, we combine innovative design, superior
                        materials, and expert engineering to deliver <strong>tensile gazebo solutions</strong>
                        that are stylish, functional, and built to withstand tough weather conditions.
                        From residential gardens to commercial outdoor spaces, our gazebos create a perfect
                        shaded retreat while adding elegance to your property.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>UV-resistant and
                                waterproof fabric for long-lasting protection</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Custom shapes, sizes, and
                                color options</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Ideal for gardens,
                                terraces, resorts, parks, and cafés</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Lightweight, strong, and
                                low-maintenance structure</li>
                            <li class="list-group-item"><i class="bi bi-check-circle me-2"></i>Quick installation and
                                cost-effective solution</li>
                        </ul>
                    </div>
                    <p class="text-muted text-justify">
                        If you’re searching for the <strong>best tensile gazebo manufacturer in Bihar</strong> —
                        including <strong>Patna, Muzaffarpur, Bhagalpur, Gaya, and beyond</strong> —
                        <strong>A&T Tensile Techworks</strong> is your trusted choice. Our elegant and durable
                        gazebo designs are perfect for any outdoor setting, offering shade, comfort, and style
                        in every season.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================== -->
    <?php include '../common/footer.php'; ?>
</body>

</html>