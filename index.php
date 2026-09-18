<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <meta name="google-site-verification" content="VIqBze8MdKsia_J0__4IzV0gMMZvdrrH39JW7EbevtA" />
    <style>
        /* Force clear view for carousel images */
        .carousel-item img {
            height: 65vh !important;
            object-fit: cover;
        }
        .carousel-caption {
            background: transparent !important;
            padding: 0;
            bottom: 20% !important;
            top: auto !important;
            transform: translateX(-50%) !important;
            width: 80% !important;
        }
        /* Subtle gradient to keep image clear but text readable */
        .carousel-item::before {
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.7) 100%) !important;
        }
        @media (max-width: 768px) {
            .carousel-item img {
                height: 45vh !important; 
            }
            .carousel-caption {
                width: 95% !important;
                bottom: 10% !important; 
                left: 50% !important;
                transform: translateX(-50%) !important;
                background: transparent !important;
            }
            .hero-title {
                font-size: 24px !important; 
                margin-bottom: 5px !important;
                text-shadow: 2px 2px 6px rgba(0,0,0,0.9);
            }
            .hero-subtitle {
                font-size: 14px !important;
                margin-bottom: 0px !important;
                white-space: normal !important;
                text-shadow: 1px 1px 6px rgba(0,0,0,0.9);
            }
        }
    </style>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ================ Main Section ================ -->
    <section class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>

            <div class="carousel-inner">
                <!-- Slide 1: Car Parking -->
                <div class="carousel-item active">
                    <img src="assets/images/services/6.jpg" class="d-block w-100" alt="Tensile Car Parking Structure">
                    <div class="carousel-caption">
                        <h1 class="hero-title text-white">Tensile Car Parking Structure</h1>
                        <p class="hero-subtitle text-white">Sturdy tensile car parking sheds engineered to protect vehicles from sun, rain, and dust with modern design.</p>
                    </div>
                </div>

                <!-- Slide 2: Fabric -->
                <div class="carousel-item">
                    <img src="assets/images/services/7.jpg" class="d-block w-100" alt="Tensile Fabric Structure">
                    <div class="carousel-caption">
                        <h2 class="hero-title text-white">Tensile Fabric Structure</h2>
                        <p class="hero-subtitle text-white">Flexible tensile fabric structures that combine lightweight materials with innovative design for multipurpose use.</p>
                    </div>
                </div>

                <!-- Slide 3: Gazebo -->
                <div class="carousel-item">
                    <img src="assets/images/services/9.jpg" class="d-block w-100" alt="Tensile Gazebo Structure">
                    <div class="carousel-caption">
                        <h2 class="hero-title text-white">Tensile Gazebo Structure</h2>
                        <p class="hero-subtitle text-white">Beautifully crafted tensile gazebo structures that enhance outdoor areas in gardens, resorts, and event venues.</p>
                    </div>
                </div>

                <!-- Slide 4: Membrane -->
                <div class="carousel-item">
                    <img src="assets/images/services/5.jpg" class="d-block w-100" alt="Tensile Membrane Structure">
                    <div class="carousel-caption">
                        <h2 class="hero-title text-white">Tensile Membrane Structure</h2>
                        <p class="hero-subtitle text-white">High-performance tensile membrane designs built for durability and architectural appeal in commercial and public spaces.</p>
                    </div>
                </div>

                <!-- Slide 5: Awning Canopy -->
                <div class="carousel-item">
                    <img src="assets/images/services/4.jpg" class="d-block w-100" alt="Awning Canopy Structure">
                    <div class="carousel-caption">
                        <h2 class="hero-title text-white">Awning Canopy Structure</h2>
                        <p class="hero-subtitle text-white">Custom-designed tensile awning canopies ideal for shops, balconies, and outdoor seating areas, offering both shade and style.</p>
                    </div>
                </div>

                <!-- Slide 6: Umbrella -->
                <div class="carousel-item">
                    <img src="assets/images/services/1.jpg" class="d-block w-100" alt="Tensile Umbrella Structure">
                    <div class="carousel-caption">
                        <h2 class="hero-title text-white">Tensile Umbrella Structure</h2>
                        <p class="hero-subtitle text-white">Elegant umbrella-style tensile structures that provide shade and comfort in open spaces like gardens, cafÃ©s, and resorts.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- ================================================ -->
    <section class="py-5 about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="head-title mb-4 text-center">
                    <span>About Us</span>
                    <h2>Welcome to A&T Tensile Techworkers</h2>
                </div>
                <div class="col-md-6 mb-3">
                    <img src="assets/images/about/1.jpg" alt="A&T Tensile Techworkers" class="img-fluid ">
                </div>
                <div class="col-md-6">
                    <p class="text-muted text-justify">
                        At <strong>A&T Tensile Techworkers</strong>, we specialize in designing, manufacturing, and
                        installing high-quality tensile structures that combine functionality with aesthetic appeal.
                        With years of experience in the industry, we have established ourselves as a trusted name in
                        providing innovative solutions for various architectural needs.
                    </p>
                    <p class="text-muted text-justify">
                        Our expertise spans across a wide range of applications, including car parking sheds, tensile
                        roofs, canopies, and custom projects tailored to meet the specific requirements of our clients.
                        We utilize advanced materials and cutting-edge technology to ensure durability, safety, and
                        sustainability in every project we undertake.
                    </p>
                    <p class="text-muted text-justify">
                        Committed to excellence, we work closely with our clients from concept to completion, ensuring
                        that each project is executed with precision and attention to detail. Our team of skilled
                        professionals is dedicated to delivering solutions that not only meet but exceed client
                        expectations.
                    </p>
                    <p class="text-muted text-justify">
                        Whether you're looking for a stylish car parking solution or a custom tensile structure, A&T
                        Tensile Techworkers is your go-to partner for innovative and reliable architectural solutions.
                    </p>

                    <div class="py-3">
                        <a href="about-us.php" class="btn ">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================= -->
    <section class="py-5 services" id="services">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <div class="head-title mb-3">
                        <span>Services</span>
                        <h2 class="fw-bold">What We Offer</h2>
                        <p class="text-muted">
                            At <strong>A&T Tensile Techworkers</strong>, we provide high-quality tensile solutions
                            designed to enhance both functionality and aesthetics. From durable car parking sheds
                            to custom tensile projects, we deliver structures that last.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/1.jpg" class="img-fluid mb-3"
                            alt="Tensile Umbrella Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Umbrella Structure</h5>
                        <p class="text-muted">
                            Elegant umbrella-style tensile structures that provide shade and comfort in open spaces like
                            gardens, cafÃ©s, and resorts.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/2.jpg" class="img-fluid mb-3"
                            alt="Tensile Roof Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Roof Structure</h5>
                        <p class="text-muted">
                            Strong and stylish tensile roofing solutions designed to cover walkways, stadiums, and large
                            open areas with durability and beauty.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/3.jpg" class="img-fluid mb-3"
                            alt="Tensile Walkway Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Walkway Structure</h5>
                        <p class="text-muted">
                            Covered tensile walkway structures that protect against harsh weather while enhancing the
                            aesthetics of pathways and corridors.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/4.jpg" class="img-fluid mb-3"
                            alt="Awning Canopy Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Awning Canopy Structure</h5>
                        <p class="text-muted">
                            Custom-designed tensile awning canopies ideal for shops, balconies, and outdoor seating
                            areas, offering both shade and style.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/5.jpg" class="img-fluid mb-3"
                            alt="Tensile Membrane Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Membrane Structure</h5>
                        <p class="text-muted">
                            High-performance tensile membrane designs built for durability and architectural appeal in
                            commercial and public spaces.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/6.jpg" class="img-fluid mb-3"
                            alt="Tensile Car Parking Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Car Parking Structure</h5>
                        <p class="text-muted">
                            Sturdy tensile car parking sheds engineered to protect vehicles from sun, rain, and dust
                            with modern design.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/7.jpg" class="img-fluid mb-3"
                            alt="Tensile Fabric Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Fabric Structure</h5>
                        <p class="text-muted">
                            Flexible tensile fabric structures that combine lightweight materials with innovative design
                            for multipurpose use.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/8.jpg" class="img-fluid mb-3"
                            alt="Tensile Swimming Pool Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Swimming Pool Structure</h5>
                        <p class="text-muted">
                            Attractive tensile coverings for swimming pools, offering shade, UV protection, and a modern
                            look to recreational spaces.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Service 9 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-4 service-card">
                        <img src="assets/images/services/9.jpg" class="img-fluid mb-3"
                            alt="Tensile Gazebo Structure in Patna">
                        <h5 class="fw-bold mb-2 title">Tensile Gazebo Structure</h5>
                        <p class="text-muted">
                            Beautifully crafted tensile gazebo structures that enhance outdoor areas in gardens,
                            resorts, and event venues.
                        </p>
                        <div class="py-2">
                            <a href="<?= $base_url ?>services/tensile-umbrella-structure.php"
                                class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================== -->
    <!-- ===== Get a Free Quote Section ===== -->
    <section class="py-5 text-center quote-section">
        <div class="container">
            <div class="head-title">
                <span class="text-white">Get a Free Quote</span>
                <h2 class="mb-3 text-white">Request a Quote</h2>
                <p class="text-white mb-4">
                    Looking for reliable tensile structure solutions in Patna?
                    Contact <strong>A&T Tensile Techworkers</strong> today and get a free, no-obligation quote.
                </p>
            </div>
            <a href="contact-us.php" class="btn btn-primary px-4 py-2">
                Request a Quote
            </a>
        </div>
    </section>
    <!-- ============================================= -->
    <!-- ===== Installation Process Section ===== -->
    <section class="py-5 bg-light process">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center mb-4">
                <div class="head-title text-center mb-3">
                    <span>Installation Process</span>
                    <h2>Our Tensile Fabric Structure <br> Installation Process</h2>
                    <p class="text-muted">
                        At <strong>A&T Tensile Techworkers</strong>, we follow a systematic process to ensure
                        every tensile structure is durable, stylish, and built to perfection.
                    </p>
                </div>
            </div>

            <!-- Steps -->
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-3 text-center">
                    <div class="card h-100">
                        <h4 class="fw-bold mb-2">1. Consultation</h4>
                        <p class="text-muted">We understand your requirements and inspect the site before starting the
                            project.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-3 text-center">
                    <div class=" card h-100">
                        <h4 class="fw-bold mb-2">2. Design & Planning</h4>
                        <p class="text-muted">Our experts create a customized tensile design that suits your space and
                            needs.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-3 text-center">
                    <div class=" card h-100">
                        <h4 class="fw-bold mb-2">3. Fabrication</h4>
                        <p class="text-muted">We use premium tensile fabric and materials to manufacture strong
                            structures.</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-3 text-center">
                    <div class="card h-100">
                        <h4 class="fw-bold mb-2">4. Installation</h4>
                        <p class="text-muted">Our skilled team installs the tensile structure with precision and safety
                            measures.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================= -->
    <?php include 'testimonials.php'; ?>
    <!-- ============================================ -->
    <?php include 'clients.php'; ?>
    <!-- ============================================ -->
    <?php include 'projects.php'; ?>
    <!-- ============================================ -->
    <!-- "We Serve Across India" badges removed as requested -->
    <section class="py-5 counter">
        <div class="container">
            <div class="row">
                <div class="head-title mb-5 text-center">
                    <span class="text-white">Our Achievements</span>
                    <h2 class="text-white">Why Choose Us</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="counter-box">
                        <h3 class="counter-number" data-target="150">0</h3>
                        <p>Satisfied Clients</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="counter-box">
                        <h3 class="counter-number" data-target="300">0</h3>
                        <p>Projects Delivered</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="counter-box">
                        <h3 class="counter-number" data-target="50">0</h3>
                        <p>Tensile Structure Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================= -->
    <style>
        .pan-india-link {
            color: #444;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s ease;
            display: inline-block;
        }
        .pan-india-link:hover {
            color: #265f94; /* Theme Primary Color */
            text-decoration: underline;
        }
        .pan-india-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .pan-india-list li {
            margin-bottom: 10px; /* Desktop spacing */
        }
        .pan-india-section {
            background-color: #f8f9fa; /* Light grey */
            border-top: 1px solid #ddd;
        }
        @media (max-width: 768px) {
            .pan-india-section h2 {
                font-size: 22px !important;
            }
            .pan-india-list {
                padding-left: 0 !important; /* Remove indent to give more space */
                margin-bottom: 0 !important; 
            }
            .pan-india-section .col-12 {
                margin-bottom: 0 !important; 
            }
            .pan-india-list li {
                text-align: left !important; 
                margin-bottom: 2px !important; /* Even tighter spacing */
                padding: 0 !important; 
                border: none !important; 
            }
            .pan-india-link {
                display: block !important;
                padding: 2px 0 !important;
                font-size: 14px !important; /* Slightly smaller to fit */
                white-space: nowrap !important; /* Force single line */
                overflow: hidden !important;
                text-overflow: ellipsis !important;
            }
        }
    </style>
    <section class="py-5 pan-india-section">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <h2>We Serve Across India</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php
                        $locations = [
                            'agartala' => 'Agartala', 'agra' => 'Agra', 'ahmedabad' => 'Ahmedabad', 'arunachal-pradesh' => 'Arunachal Pradesh', 'bangalore' => 'Bangalore', 'bhopal' => 'Bhopal', 'bhubaneswar' => 'Bhubaneswar', 'bihar' => 'Bihar', 'chandigarh' => 'Chandigarh', 'chennai' => 'Chennai', 'cuttack' => 'Cuttack', 'dehradun' => 'Dehradun', 'delhi' => 'Delhi', 'dispur' => 'Dispur', 'ernakulam' => 'Ernakulam', 'gandhi-nagar' => 'Gandhi Nagar', 'goa' => 'Goa', 'gujarat' => 'Gujarat', 'guntur' => 'Guntur', 'gurgaon' => 'Gurgaon', 'guwahati' => 'Guwahati', 'hyderabad' => 'Hyderabad', 'indore' => 'Indore', 'jabalpur' => 'Jabalpur', 'jammu-kashmir' => 'Jammu Kashmir', 'jammu' => 'Jammu', 'kadalundi-nagaram' => 'Kadalundi Nagaram', 'kanpur' => 'Kanpur', 'karnataka' => 'Karnataka', 'kochi' => 'Kochi', 'lucknow' => 'Lucknow', 'ludhiana' => 'Ludhiana', 'madhya-pradesh' => 'Madhya Pradesh', 'maharashtra' => 'Maharashtra', 'manipur' => 'Manipur', 'mattakkara' => 'Mattakkara', 'meerut' => 'Meerut', 'meghalaya' => 'Meghalaya', 'moradabad' => 'Moradabad', 'mumbai' => 'Mumbai', 'nagaland' => 'Nagaland', 'nagpur' => 'Nagpur', 'nainital' => 'Nainital', 'noida' => 'Noida', 'numaligarh' => 'Numaligarh', 'orissa' => 'Orissa', 'panaji' => 'Panaji', 'patna' => 'Patna', 'pune' => 'Pune', 'punjab' => 'Punjab', 'raipur' => 'Raipur', 'rajasthan' => 'Rajasthan', 'ranchi' => 'Ranchi', 'rudrapur' => 'Rudrapur', 'shillong' => 'Shillong', 'shimla' => 'Shimla', 'srinagar' => 'Srinagar', 'thiruvananthapuram' => 'Thiruvananthapuram', 'uttar-pradesh' => 'Uttar Pradesh', 'uttarakhand' => 'Uttarakhand', 'varanasi' => 'Varanasi', 'vijayawada' => 'Vijayawada', 'west-bengal' => 'West Bengal'
                        ];

                        $chunks = array_chunk($locations, ceil(count($locations) / 4), true);
                        foreach ($chunks as $chunk) {
                            echo '<div class="col-lg-3 col-md-4 col-12">';
                            echo '<ul class="pan-india-list">';
                            foreach ($chunk as $slug => $name) {
                                echo '<li><a href="tensile-structure-in-' . $slug . '.php" class="pan-india-link">Tensile Structure in ' . $name . '</a></li>';
                            }
                            echo '</ul>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'common/footer.php'; ?>
</body>
<script>
    // Simple Counter Animation with +
    const counters = document.querySelectorAll('.counter-number');
    counters.forEach(counter => {
        counter.innerText = '0';
        const updateCounter = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace('+', ''); // Remove + for calculation
            const increment = target / 200; // speed
            if (count < target) {
                counter.innerText = Math.ceil(count + increment) + '+';
                setTimeout(updateCounter, 10);
            } else {
                counter.innerText = target + '+';
            }
        };
        updateCounter();
    });
</script>

</html>
