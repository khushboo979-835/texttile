<style>
    /* Base Header Styling */

    .navbar {
        padding: 1rem 0;
        background-color: rgba(255, 255, 255, 0.8);
        /* semi-transparent white */
        transition: all 0.3s ease;
        z-index: 1000;
        border-radius: 20px 20px 0 0;
        backdrop-filter: blur(10px);
        /* optional, blur effect */
    }

    .navbar-shrink {
        padding-top: 0.3rem !important;
        padding-bottom: 0.3rem !important;
        background-color: #fff !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        border-radius: 0;
        backdrop-filter: none;
        /* optional, blur effect */
    }

    .navbar .nav-link {
        padding: 0.8rem 1rem;
        color: #333;
        font-weight: 500;
        position: relative;
        transition: color 0.3s ease;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
        color: var(--primary-color);
    }

    /* Nav Item Hover Effect */
    /* Nav Item Hover Effect, Excluding Dropdown Toggle */
    .navbar .nav-link:not(.dropdown-toggle) {
        position: relative;
        overflow: hidden;
    }

    .navbar .nav-link:not(.dropdown-toggle)::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background-color: var(--primary-color);
        /* Tumhara primary-color */
        transition: width 0.3s ease;
    }

    .navbar .nav-link:not(.dropdown-toggle):hover::after,
    .navbar .nav-link:not(.dropdown-toggle).active::after {
        width: 100%;
    }

    .navbar-brand img {
        max-height: 80px;
        transition: all 0.3s ease;
    }

    .navbar .nav-item {
        list-style: none;
    }

    /* Dropdown Styling */
    .navbar .dropdown-menu {
        background-color: var(--primary-color);
        border-radius: 0px;
        border-top: 2px solid var(--secondary-color);
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        margin-top: 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .navbar .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        display: block;
        position: absolute;
        top: 40px;
        left: 0;
    }

    .navbar .dropdown-item {
        padding: 0.6rem 1.2rem;
        color: #333;
        font-size: 1rem;
    }

    .navbar .dropdown-item:hover {
        background-color: var(--tertiary-color);
        color: var(--tertiary-color);
    }

    /* Offcanvas Styling */
    .offcanvas {
        background-color: #fff;
    }

    .offcanvas .nav-link {
        font-size: 1.1rem;
        padding: 0.6rem 0;
        color: #333;
        font-weight: 500;
    }

    .offcanvas .nav-link:hover {
        color: var(--tertiary-color);
    }

    .offcanvas .collapse .nav-link {
        padding-left: 1.5rem;
    }

    /* Smooth Transition */
    .transition {
        transition: all 0.3s ease;
    }

    .offcanvas .nav-link.toggle::after {
        content: '\25BC';
        /* Down Arrow */
        float: right;
        transition: transform 0.3s ease;
        font-size: 0.8rem;
    }

    .offcanvas .nav-link[aria-expanded="true"]::after {
        transform: rotate(180deg);
        /* Rotate Arrow Up when open */
    }
</style>
<style>
    .btn-close {
        --bs-btn-close-bg: none;
    }

    .navbar-brand .title {
        color: var(--primary-color);
        font-weight: 600;
        font-size: 1.5rem;
    }

    @media (max-width: 768px) {
        .navbar-brand .title {
            font-size: 17px;
        }
    }

    .offcanvas-header .offcanvas-title {
        color: var(--tertiary-color);
        font-weight: 600;
        font-size: 17px;
    }
</style>
<style>
    .top-header {
        font-size: 0.95rem;
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    .marquee {
        white-space: nowrap;
        display: inline-block;
        animation: scroll-left 15s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .offcanvas {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    .offcanvas .nav-link {
        color: var(--tertiary-color) !important;
        font-weight: 400;
    }

    .offcanvas .dropdown-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 10px 20px;
        margin: 0px 10px;
        font-weight: 400px;
    }

    .offcanvas .dropdown-item:hover {
        background: var(--secondary-color);
        color: var(--primary-color);
    }
</style>
<style>
    .dropdown-menu .dropdown-item {
        color: var(--tertiary-color);
        background-color: var(--primary-color);
        /* padding: 10px 20px; */
        font-size: 15px;
        transition: all 0.3s ease;
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-weight: 400;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: var(--secondary-color);
        color: var(--tertiary-color) !important;
    }

    /* Optional: Remove default Bootstrap border radius if needed */
    .dropdown-menu {
        border-radius: 0;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0px !important;
        left: 189px !important;
        margin-top: 0;
        display: none !important;
        border: none;
        border-top: 2px solid var(--primary-color);
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item {
        color: var(--tertiary-color) !important;
        background-color: var(--primary-color);
        border: none;
        border-top: 2px solid var(--primary-color);
        font-size: 15px;
        transition: all 0.6s ease;
        font-weight: 400;
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item:hover {
        background-color: var(--secondary-color) !important;
        color: var(--tertiary-color) !important;
    }

    /* webkit scrollbar */
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        background-color: var(--primary-color);
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--tertiary-color);
        border-radius: 10px;
    }

    /* For hover on desktop */
    @media (min-width: 992px) {
        .dropdown-submenu>.dropdown-menu {
            display: none;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block !important;
            position: absolute;
        }
    }
</style>



<div class="top-header py-2 border-bottom d-none d-md-block">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <!-- Left: Slogan -->
            <div class="col-md-3 fw-semibold border-end ">
                <i class="bi bi-envelope"></i> info@tensiletechworkers.com
            </div>

            <!-- Center: Scrolling Notification -->
            <div class="col-md-6 position-relative overflow-hidden">
                <div class="marquee  fw-medium">
                    <i class="bi bi-geo-alt text-white"></i> East Lakshmi Nagar, Ramkrishan Nagar, Patna, Bihar 800030
                </div>
            </div>

            <!-- Right: Contact Details -->
            <div class="col-md-3 text-md-end  fw-medium small border-start">

                <i class="bi bi-telephone"></i> +91 9142569346 | <i class="bi bi-whatsapp"></i> +91 9142569346
            </div>

        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg transition" id="mainNavbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
                <img src="<?php echo $base_url; ?>assets/images/logo/logo.png" alt="A&T Tensile Techworks Logo">
            </a>

            <!-- Mobile Call Button -->
            <style>
                .jelly-btn {
                    background: linear-gradient(135deg, #1e4b77, #1a3f63);
                    color: #fff !important;
                    border: 1px solid rgba(255,255,255,0.15);
                    border-radius: 30px;
                    padding: 8px 24px;
                    font-weight: 700;
                    font-size: 15px;
                    letter-spacing: 0.5px;
                    display: inline-flex;
                    align-items: center;
                    gap: 6px;
                    box-shadow: 
                        0 8px 15px rgba(26, 63, 99, 0.4),
                        inset 0 3px 5px rgba(255, 255, 255, 0.3),
                        inset 0 -3px 5px rgba(0, 0, 0, 0.2);
                    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    text-shadow: 0 1px 2px rgba(0,0,0,0.2);
                    text-decoration: none;
                }
                .jelly-btn:active {
                    transform: scale(0.95);
                    box-shadow: 
                        0 3px 5px rgba(26, 63, 99, 0.4),
                        inset 0 2px 3px rgba(0, 0, 0, 0.2),
                        inset 0 -2px 3px rgba(255, 255, 255, 0.2);
                }
                .jelly-icon {
                    font-size: 13px;
                    animation: ring-phone 2.5s infinite ease-in-out;
                    transform-origin: 50% 50%;
                }
                @keyframes ring-phone {
                  0% { transform: rotate(0); }
                  5% { transform: rotate(15deg); }
                  10% { transform: rotate(-10deg); }
                  15% { transform: rotate(15deg); }
                  20% { transform: rotate(-10deg); }
                  25% { transform: rotate(0); }
                  100% { transform: rotate(0); }
                }
            </style>
            <a href="tel:+919142569346" class="btn d-lg-none mx-auto jelly-btn">
                <i class="bi bi-telephone-fill jelly-icon"></i> 9142569346
            </a>

            <!-- Custom Animated Hamburger Button -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <div class="hamburger">
                    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="30" />
                        <path class="line line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
                        <path class="line line--2" d="M0 50h70" />
                        <path class="line line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
                    </svg>
                </div>
            </button>


            <!-- Desktop Navbar -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                    </li>

                    <!-- Discover Dropdown -->
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link " href="<?php echo $base_url; ?>about-us.php" role="button">
                            About
                        </a>

                    </li>
                </ul>
                </li>

                <!-- Services Dropdown -->
                <!-- Services Dropdown with Sub Dropdown -->
                <li class="nav-item dropdown me-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Our Services
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item "
                                href="<?= $base_url; ?>services/tensile-umbrella-structure.php">Tensile Umbrella
                                Structure</a>

                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item "
                                href="<?= $base_url; ?>services/tensile-roof-structure.php">Tensile Roof Structure</a>

                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item "
                                href="<?= $base_url; ?>services/tensile-walkway-structure.php">Tensile Walkway
                                Structure</a>

                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item "
                                href="<?= $base_url; ?>services/tensile-canopy-structure.php">Awning Canopy
                                Structure</a>

                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/tensile-membrane-structure.php">Tensile
                                Membrane Structure</a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/tensile-car-parking-structure.php">Tensile
                                Car Parking Structure</a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/tensile-fabric-structure.php">Tensile
                                Fabric Structure</a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/tensile-swimming-pool-structure.php">Tensile
                                Swimming Pool Structure</a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/tensile-gazebo-structure.php">Tensile
                                Gazebo Structure</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item me-2">
                    <a class="nav-link" href="<?php echo $base_url; ?>our-projects.php">Our Projects</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="<?php echo $base_url; ?>our-clients.php">Our Clients</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs.php">Blog</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $base_url; ?>contact-us.php" type="button" class="btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        Book Now
                    </a>
                </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                <img src="<?php echo $base_url; ?>assets/images/logo/logo.png" alt="A&T Tensile Techworks Logo" style="max-height: 40px;">
            </h5>
            <span type="button" class="btn-close bi bi-x text-white fs-1" data-bs-dismiss="offcanvas"></span>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>about-us.php">About</a>
                </li>

                <!-- Services in Offcanvas -->
                <li class="nav-item">
                    <a class="nav-link toggle" data-bs-toggle="collapse" href="#servicesCollapse" role="button"
                        aria-expanded="false">
                        Services
                    </a>
                    <div class="collapse" id="servicesCollapse">
                        <ul class="list-unstyled ps-3">

                            <li>
                                <a class="dropdown-item "
                                    href="<?= $base_url; ?>services/tensile-umbrella-structure.php">Tensile Umbrella
                                    Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item "
                                    href="<?= $base_url; ?>services/tensile-roof-structure.php">Tensile Roof
                                    Structure</a>

                            </li>

                            <li>
                                <a class="dropdown-item "
                                    href="<?= $base_url; ?>services/tensile-walkway-structure.php">Tensile Walkway
                                    Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item "
                                    href="<?= $base_url; ?>services/tensile-canopy-structure.php">Awning Canopy
                                    Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/tensile-membrane-structure.php">Tensile
                                    Membrane Structure</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/tensile-car-parking-structure.php">Tensile
                                    Car Parking Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/tensile-fabric-structure.php">Tensile
                                    Fabric Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/tensile-swimming-pool-structure.php">Tensile
                                    Swimming Pool Structure</a>
                            </li>

                            <li>
                                <a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/tensile-gazebo-structure.php">Tensile
                                    Gazebo Structure</a>
                            </li>
                            <!-- Repeat same structure for other services -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Enquiry Now
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php include __DIR__ . '/chat-bot.php'; ?>



<!-- ================================================================ -->
<script>
    let prevScrollPos = window.pageYOffset;
    const navbar = document.getElementById('mainNavbar');

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

        // Shrink navbar after 50px scroll
        if (currentScrollPos > 50) {
            navbar.classList.add('navbar-shrink');
        } else {
            navbar.classList.remove('navbar-shrink');
        }

        // Hide navbar on scroll down, show on scroll up
        if (currentScrollPos > prevScrollPos && currentScrollPos > 100) {
            navbar.classList.add('navbar-hidden');
        } else {
            navbar.classList.remove('navbar-hidden');
        }

        prevScrollPos = currentScrollPos;
    });

    // Active link highlight
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function () {
            document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const hamburger = document.querySelector(".hamburger");

        // Har 3 second me animation toggle karo
        setInterval(() => {
            hamburger.classList.add("animate");
            setTimeout(() => hamburger.classList.remove("animate"), 1500);
        }, 3000);
    });
</script>