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
        .locations-breadcrumb {
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
        .locations-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }
        .locations-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        .location-card {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            text-align: center;
            border-bottom: 4px solid var(--primary-color);
        }
        .location-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        .location-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }
        .location-card h3 {
            font-size: 1.4rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }
        
        .location-card p {
            color: #666;
            font-size: 0.95rem;
        }
        .location-link-list li {
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        .location-link-list li a {
            color: #444;
            text-decoration: none;
            transition: color 0.3s;
        }
        .location-link-list li a:hover {
            color: var(--primary-color);
            font-weight: 600;
        }
    </style>
    <section class="locations-breadcrumb">
        <div class="container text-center">
            <h1>Our Service Areas & Expertise</h1>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Locations</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ================================================== -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="head-title mb-5 text-center">
                <span>Nationwide Reach</span>
                <h2>Bringing Quality Tensile Structures Across India</h2>
                <p class="text-muted mt-3 max-w-700 mx-auto">
                    A&T Tensile Techworkers is recognized as a leader in providing state-of-transform tensile structures. Explore our top service areas and specializations below.
                </p>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4">
                    <ul class="list-unstyled location-link-list">
                        <li><a href="top-tensile-manufacturer-in-udaipur.php">Top Tensile Manufacturer in Udaipur</a></li>
                        <li><a href="parking-shades-in-guwahati-assam.php">Parking Shades In Guwahati Assam</a></li>
                        <li><a href="tensile-structure-in-mattakkara.php">Tensile Structure in Mattakkara</a></li>
                        <li><a href="tensile-structure-in-vijayawada.php">Tensile Structure in Vijayawada</a></li>
                        <li><a href="tensile-structure-in-thiruvananthapuram.php">Tensile Structure in Thiruvananthapuram</a></li>
                        <li><a href="tensile-structure-in-meerut.php">Tensile Structure in Meerut</a></li>
                        <li><a href="tensile-structure-in-arunachal-pradesh.php">Tensile Structure in Arunachal Pradesh</a></li>
                        <li><a href="tensile-structure-in-jammu-kashmir.php">Tensile Structure in Jammu & Kashmir</a></li>
                        <li><a href="tensile-structure-in-guwahati.php">Tensile Structure in Guwahati</a></li>
                        <li><a href="tensile-structure-in-panaji.php">Tensile Structure in Panaji</a></li>
                        <li><a href="tensile-structure-in-uttar-pradesh.php">Tensile Structure in Uttar Pradesh</a></li>
                        <li><a href="tensile-structure-in-kanpur.php">Tensile Structure in Kanpur</a></li>
                        <li><a href="tensile-structure-in-patna.php">Tensile Structure in Patna</a></li>
                        <li><a href="tensile-structure-in-chandigarh.php">Tensile Structure in Chandigarh</a></li>
                        <li><a href="tensile-structure-in-madhya-pradesh.php">Tensile Structure in Madhya Pradesh</a></li>
                        <li><a href="tensile-structure-in-punjab.php">Tensile Structure in Punjab</a></li>
                        <li><a href="tensile-structure-in-bhopal.php">Tensile Structure in Bhopal</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Column 2 (To be added later) -->
                </div>
                <div class="col-md-4">
                    <!-- Column 3 (To be added later) -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================== -->
    <?php include 'common/footer.php'; ?>
</body>
</html>
