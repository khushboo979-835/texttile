<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <?php
    include_once 'common/location-form-handler.php';
    function location_text_variant($location, $options) {
        $index = abs(crc32(strtolower($location))) % count($options);
        return str_replace('{location}', htmlspecialchars($location), $options[$index]);
    }
    function get_location_content($location) {
        $introOptions = [
            "A&T Tensile Techworks stands as a premier manufacturer and supplier of cutting-edge tensile structures across India, offering solutions that are visually striking, functionally superior, and highly cost-effective. Through continuous research and engineering excellence, we have mastered the art of designing products that elevate outdoor spaces. We take pride in our specialization as a leading provider of various tensile solutions in {location}, including <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile car parking</a>, car parking shades, tensile fabric structures, tensile membrane structures, indoor tensile solutions, and premium awning canopies. Our years of hands-on experience and dedication to structural integrity have earned us a trusted and leading position in the industry.",
            "Recognized as one of the most innovative companies in the industry, A&T Tensile Techworks delivers architectural tensile structures that blend classical elegance with modern engineering. Our commitment to extensive research and rigorous quality control allows us to provide some of the finest shading products available to our prospective clients. As specialized manufacturers operating in {location}, we offer a comprehensive range of solutions such as <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile car parking</a>, modular car parking shades, tensile roofing, membrane structures, and custom outdoor canopies. Decades of robust field experience and technological advancement have firmly established us as market leaders in creating durable outdoor structures.",
            "A&T Tensile Techworks is a distinguished name in the manufacturing and installation of premium tensile membrane structures, known for delivering exceptional aesthetics at highly competitive prices. We have invested heavily in product development and structural engineering to offer state-of-the-art solutions that meet global standards. For clients in {location}, our expertise covers a wide array of products including <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile car parking</a> structures, advanced car parking shades, tensile fabric roofing, and customized outdoor canopies. Our persistent focus on durability and rugged performance has cemented our reputation as a trusted partner for commercial and residential architectural shading."
        ];
        $paragraphTwoOptions = [
            "Our uppermost priority is delivering uncompromising quality and result-oriented architectural solutions to our esteemed clients. It is our firm commitment to fabricate exclusive, durable, and weather-resistant structures that stand out from the competition. With years of rich industry experience, we utilize the latest technology, advanced fabrication machines, and premium materials to ensure flawless execution. Whether you are planning to renovate an existing space or build a new outdoor shade extension in {location}, our tensile roofing is the perfect choice. The investment you make in our products guarantees long-lasting satisfaction, structural safety, and aesthetic brilliance. Tensile membrane structures serve as an incredibly economical roofing alternative that can span large distances without internal support pillars. Our custom-designed <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile Structures</a> are crafted to achieve the perfect balance of strength and attractiveness, welcoming you to experience the very best in the market.",
            "We place the highest emphasis on quality, aiming to provide practical, result-driven shade solutions to our valued customers. We make a solemn promise to engineer unique structures that not only meet but exceed expectations, setting new benchmarks in the industry. Leveraging our vast experience, cutting-edge machinery, and modern architectural practices, we deliver impeccable service from design to installation. If you are looking to upgrade or expand your existing facilities in {location}, our tensile options offer unparalleled value. You can rest assured that your investment will yield 100% satisfaction through superior longevity and visual appeal. Because tensile membranes are lightweight yet incredibly strong, they form highly economical roofs capable of covering expansive areas. Every <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile Structure</a> we design is focused on providing the ultimate combination of premium quality and striking aesthetics.",
            "Quality and customer satisfaction are at the core of our operations, driving us to deliver outstanding, result-oriented structural solutions. Our dedicated team is passionate about fabricating exclusive, standout structures that easily distinguish themselves from standard alternatives. Backed by extensive experience, we employ the most advanced manufacturing technologies and high-grade materials to ensure every project is a success. For anyone looking to enhance their property in {location}, our tensile architecture provides the smartest, most versatile option available. Our products are designed to deliver complete peace of mind, offering exceptional value for your money. Tensile membrane roofing is widely favored because it is highly cost-effective, incredibly attractive, and capable of spanning vast open spaces effortlessly. By choosing our expertly designed <a href='#' style='color: #0073cc; font-weight: 700; text-decoration: none;'>Tensile Structures</a>, you are investing in top-tier quality that transforms any environment into a stunning architectural masterpiece."
        ];
        $summaryOptions = [
            "<strong style='color: #333;'>Tensile Structures</strong> focus on providing quality and result-oriented solutions to our esteemed customers. We work with a crystal-clear aim to provide the ultimate product service and quality, keeping in mind positive long-term outcomes. Quality and commitment are foremost for us. We manufacture the best quality products with the finest structural designs aimed at achieving the most attractive results in {location}. Let us join hands and build something extraordinary together.",
            "Our <strong style='color: #333;'>Tensile Structures</strong> are designed to deliver high-quality, dependable, and visually appealing solutions for our clients. We operate with a transparent and focused approach, ensuring that every project results in a highly positive outcome for the customer. Dedication to premium craftsmanship and steadfast commitment remains our top priority. By offering the finest materials and superior engineering in {location}, we guarantee an attractive and long-lasting end product. Partner with us for your next architectural shading project.",
            "Every <strong style='color: #333;'>Tensile Structure</strong> we build is centered around delivering excellence, durability, and practical value to our clients. Our clear objective is to supply industry-leading products and unparalleled service, ensuring absolute customer satisfaction. For us, maintaining top-tier quality and honoring our commitments is non-negotiable. We take pride in manufacturing exquisitely designed, highly durable structures that elevate the aesthetic of any space in {location}. Connect with our team today and experience the difference of working with true industry experts."
        ];
        return [
            'intro' => location_text_variant($location, $introOptions),
            'paragraph_1' => location_text_variant($location, $paragraphTwoOptions),
            'summary' => location_text_variant($location, $summaryOptions),
        ];
    }
    $location_content = get_location_content($location_name ?? 'India');
    if (!isset($meta_title)) {
        $meta_title = (isset($page_title) ? $page_title : "Tensile Structure") . " - A&T Tensile Techworks";
    }
    if (!isset($meta_description)) {
        $meta_description = "A&T Tensile Techworks provides expert tensile structures in " . $location_name . ". We design and install car parking sheds, tensile roofs, gazebos, awnings and membrane structures with quality materials and experienced craftsmanship.";
    }
    if (!isset($meta_keywords)) {
        $meta_keywords = strtolower($location_name) . ", tensile structure in " . strtolower($location_name) . ", car parking sheds, tensile membrane, tensile fabric";
    }
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . 
        ($_SERVER['HTTP_HOST'] ?? ($_SERVER['SERVER_NAME'] ?? '')) . ($_SERVER['REQUEST_URI'] ?? '');
    ?>
    <title><?= htmlspecialchars($meta_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($current_url) ?>">
    <!-- Open Graph / Social -->
    <meta property="og:title" content="<?= htmlspecialchars($meta_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:site_name" content="A&T Tensile Techworks">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($meta_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($meta_description) ?>">
</head>
<body>
    <?php include 'common/header.php'; ?>
    <style>
        .loc-header {
            background-color: #111;
            padding: 40px 0;
            color: #fff;
        }
        .loc-header .breadcrumb {
            font-size: 0.9rem;
            margin-bottom: 15px;
            background: transparent;
            padding: 0;
        }
        .loc-header .breadcrumb a {
            color: #ccc;
            text-decoration: none;
        }
        .loc-header .breadcrumb-item.active {
            color: #888;
        }
        .loc-header .breadcrumb-item+.breadcrumb-item::before {
            content: ">>";
            color: #666;
        }
        .loc-header h1 {
            font-size: 2.2rem;
            font-weight: 600;
            margin: 0;
        }
        .loc-content {
            padding: 50px 0;
        }
        .loc-keywords {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .loc-text {
            font-size: 0.95rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 25px;
            text-align: justify;
        }
        .loc-services {
            background-color: #f8fbff;
            padding: 35px;
            border-radius: 12px;
            border-left: 4px solid #0073cc;
        }
        .loc-services h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: #1a3f63;
        }
        .service-list ul {
            list-style-type: none;
            padding-left: 0;
        }
        .service-list ul li {
            margin-bottom: 14px;
            position: relative;
            padding-left: 28px;
            font-size: 0.95rem;
            color: #444;
        }
        .service-list ul li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #0073cc;
            font-size: 1rem;
            line-height: 1.2;
        }
        .service-list ul li a {
            color: #444;
            text-decoration: none;
            transition: color 0.3s;
        }
        .service-list ul li a:hover {
            color: #ff9900 !important;
        }
        .service-list ul li a.active-link {
            color: #0073cc !important;
            font-weight: 700;
            border-bottom: 1px dashed #0073cc;
        }
        .loc-contact {
            background-color: #fff;
        }
        .loc-contact .card {
            border-radius: 14px;
        }
        .loc-contact .form-label {
            font-weight: 600;
            color: #333;
        }
        .loc-contact .form-control {
            border-radius: 10px;
            border: 1px solid #d8dce2;
            box-shadow: none;
        }
        .btn-contact {
            background: linear-gradient(135deg, #0d6efd, #1a3f63);
            border: none;
            color: #fff;
            padding: 12px 22px;
            font-weight: 600;
            letter-spacing: 0.3px;
            border-radius: 10px;
        }
        .loc-contact .alert {
            border-radius: 10px;
            font-size: 0.95rem;
        }
    </style>
    <!-- Header Section -->
    <section class="loc-header">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= isset($page_title) ? $page_title : "" ?></li>
                </ol>
            </nav>
            <h1><?= isset($page_title) ? $page_title : "" ?></h1>
        </div>
    </section>
    <!-- Main Content Section -->
    <section class="loc-content">
        <div class="container">
            <!-- Keywords Paragraph -->
            <div class="loc-keywords">
                <strong>Tensile Structures in <?= $location_name ?></strong>, Tensile car Parking in <?= $location_name ?>, Tensile Canopies in <?= $location_name ?>, Tensile Membrane in <?= $location_name ?>, Architectural Structures in <?= $location_name ?>, Car Parking Sheds in <?= $location_name ?>, Roof Tensile Structures in <?= $location_name ?>, Food Court Tensile Structures in <?= $location_name ?>, Entrance Tensile Structures in <?= $location_name ?>, Auditorium Tensile Structures in <?= $location_name ?>, Walkway Covering Structures In <?= $location_name ?>, Commercial Shade Structures, Promotional Tents in <?= $location_name ?>, Military Shelters In <?= $location_name ?>, <a href="#" style="color: #0073cc; font-weight: 700; text-decoration: none;">Gazebo Tensile Structure in <?= $location_name ?></a>, Pool Covers in <?= $location_name ?>, Retractable Pool Enclosures in <?= $location_name ?>, Awnings & Canopies in <?= $location_name ?>, Polycarbonate Structure in <?= $location_name ?>, Swimming Pool Enclosures in <?= $location_name ?>, Tensile Fabric structure in <?= $location_name ?>.
            </div>
            <div class="loc-text">
                <?= $location_content['intro'] ?>
            </div>
            <div class="loc-text">
                <?= $location_content['paragraph_1'] ?>
            </div>
            <!-- Services Section -->
            <div class="loc-services mt-5">
                <h3>Explore Our Tensile Solutions</h3>
                <div class="row service-list">
                    <div class="col-md-4">
                        <ul>
                            <li><a href="#" class="active-link">Tensile Structure</a></li>
                            <li><a href="#" class="active-link">Tensile Membrane Structure</a></li>
                            <li><a href="#" class="active-link">Car Parking Sheds</a></li>
                            <li><a href="#">Tensile car parking</a></li>
                            <li><a href="#" class="active-link">Roof Tensile Structure</a></li>
                            <li><a href="#">Cricket Pitch Tarpaulin</a></li>
                            <li><a href="#">PVC Coated Tarpaulin</a></li>
                            <li><a href="#">Garden Tensile Structures</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="#" class="active-link">Garden Gazebo</a></li>
                            <li><a href="#">Entrance Tensile Structures</a></li>
                            <li><a href="#" class="active-link">Tensile Fabric Structure</a></li>
                            <li><a href="#">Awnings Canopies</a></li>
                            <li><a href="#">Outdoor Shades</a></li>
                            <li><a href="#">Outdoor furniture</a></li>
                            <li><a href="#">Advertising Canopies</a></li>
                            <li><a href="#" class="active-link">Polycarbonate Structure</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="#" class="active-link">Auditorium Tensile Structure</a></li>
                            <li><a href="#">Walkway Covering Structure</a></li>
                            <li><a href="#">Prefabricated Structures</a></li>
                            <li><a href="#" class="active-link">Swimming Pool Tensile Structure</a></li>
                            <li><a href="#" class="active-link">Gazebo Tensile Structure</a></li>
                            <li><a href="#">Cantilevers Tensile Structures</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Final SEO Paragraph -->
            <div class="loc-text mt-5">
                <?= $location_content['summary'] ?>
            </div>
            <?php include 'common/location-contact.php'; ?>
        </div>
    </section>
    <?php include 'common/footer.php'; ?>
</body>
</html>

