<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 800
    });
</script>
<!-- Bootstrap 5.3.3 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<!-- JS Scripts -->

<!-- ============================================================================================ -->
<style>
    .footer-section {
        font-family: 'Poppins', sans-serif;
    }

    /* ======= MAIN FOOTER ======= */
    .footer-main {
        background: var(--primary-color);
        color: var(--tertiary-color);
        padding-top: 60px;
        padding-bottom: 50px;
    }

    .footer-main h5 {
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: 20px;
        color: #fff;
        position: relative;
    }

    .footer-main h5::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 2px;
        background: var(--tertiary-color);
    }

    .footer-main p {
        font-size: 0.95rem;
        line-height: 1.7;
        margin-bottom: 12px;
    }

    /* ======= LINKS ======= */
    .footer-main a {
        color: var(--tertiary-color);
        text-decoration: none;
        display: inline-block;
        transition: all 0.25s ease-in-out;
        font-size: 0.95rem;
    }

    .footer-main a:hover {
        color: #fff;
        padding-left: 4px;
    }

    .footer-main ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .footer-main ul li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }

    .footer-main ul li::before {
        content: "›";
        margin-right: 8px;
        color: #fff;
        font-weight: bold;
        transition: transform 0.2s ease;
    }

    .footer-main ul li:hover::before {
        transform: translateX(3px);
    }

    /* ======= SOCIAL ======= */
    .footer-social a img {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        transition: transform 0.25s ease, background 0.25s ease;
        background: rgba(255, 255, 255, 0.08);
        padding: 8px;
    }

    .footer-social a img:hover {
        transform: scale(1.15);
        background: rgba(255, 255, 255, 0.2);
    }

    /* ======= CONTACT ======= */
    .footer-main .contact-info p i {
        color: #fff;
        font-size: 1.1rem;
        margin-right: 8px;
    }

    /* ======= BOTTOM ======= */
    .footer-bottom {
        background: #0d1b2a;
        color: #ddd;
        font-size: 0.9rem;
        padding: 15px 0;
    }

    .footer-bottom a {
        color: #fff;
        font-weight: 500;
    }

    .footer-bottom a:hover {
        text-decoration: underline;
        color: #0dcaf0;
    }

    /* ======= RESPONSIVE ======= */
    @media (max-width: 768px) {
        .footer-main {
            text-align: center;
        }

        .footer-main h5::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-social {
            justify-content: center;
        }

        .footer-social a img {
            margin: 0 6px;
        }
    }
</style>

<footer class="footer-section">
    <div class="footer-main">
        <div class="container">
            <div class="row gy-4">

                <!-- About -->
                <div class="col-md-4">
                    <h5>About A&T Tensile Techworks</h5>
                    <p>
                        At A&T Tensile Techworks, we specialize in designing, manufacturing, and installing
                        high-quality tensile structures that combine functionality with aesthetic appeal.
                        With years of experience, we’re a trusted name in delivering innovative architectural solutions.
                    </p>

                    <div class="footer-social mt-3 d-flex">
                        <a href="https://www.facebook.com/" target="_blank">
                            <img src="<?= $base_url ?>assets/images/user/facebook.webp" alt="facebook" class="me-2">
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="<?= $base_url ?>assets/images/user/instagram.webp" alt="instagram" class="me-2">
                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <img src="<?= $base_url ?>assets/images/user/twitter.webp" alt="twitter" class="me-2">
                        </a>
                        <a href="https://www.youtube.com/" target="_blank">
                            <img src="<?= $base_url ?>assets/images/user/youtube.webp" alt="youtube" class="me-2">
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-6">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="our-projects.php">Our Projects</a></li>
                                <li><a href="our-clients.php">Our Clients</a></li>
                            </ul>
                        </div>

                        <div class="col-6">
                            <h5>Our Services</h5>
                            <ul>
                                <li><a href="<?= $base_url ?>services/tensile-umbrella-structure.php">Tensile Umbrella</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-roof-structure.php">Tensile Roof</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-walkway-structure.php">Walkway Structure</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-canopy-structure.php">Awning Canopy</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-membrane-structure.php">Membrane Structure</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-car-parking-structure.php">Car Parking Shed</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-fabric-structure.php">Fabric Structure</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-swimming-pool-structure.php">Swimming Pool Cover</a></li>
                                <li><a href="<?= $base_url ?>services/tensile-gazebo-structure.php">Gazebo Structure</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <div class="col-md-4 contact-info">
                    <h5>Contact Us</h5>
                    <p><i class="bi bi-geo-alt"></i> Chandrakanta Appartment, Opp. Harihar Chamber, Boring Road, Pandooi
                        Kothi, Patna - 800001</p>
                    <p><i class="bi bi-envelope"></i> info@tensiletechworkers.com</p>
                    <p><i class="bi bi-telephone"></i> +91 9142569346</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom text-center">
        <p class="mb-0">
            &copy;
            <script>document.write(new Date().getFullYear());</script>
            A&T Tensile Techworks. All rights reserved. | Designed & Managed by
            <a href="http://coralwebtechnology.com/" target="_blank">Coral Web Technology</a>
        </p>
    </div>
</footer>

<!-- Professional Booking Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 0; max-width: 500px;">
        <div class="modal-content" style="border-radius: 0 0 20px 20px; overflow: hidden; border: none; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
            <div class="modal-header" style="background: linear-gradient(135deg, var(--primary-color), #1a3f63); border-bottom: none; padding: 25px 30px; position: relative;">
                <h5 class="modal-title fw-bold text-white" id="exampleModalLabel" style="letter-spacing: 0.5px; font-size: 1.3rem;"><i class="bi bi-calendar-event me-2"></i> Book an Appointment</h5>
                <button type="button" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 20px; background: transparent; border: none; color: #fff; font-size: 1.8rem; opacity: 0.7; padding: 0; line-height: 1; transition: opacity 0.3s ease, transform 0.3s ease;" onmouseover="this.style.opacity='1'; this.style.transform='rotate(90deg)';" onmouseout="this.style.opacity='0.7'; this.style.transform='rotate(0deg)';">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <div class="modal-body p-4 p-md-5" style="background-color: #fbfcfd;">
                <p class="text-muted mb-4 text-center" style="font-size: 0.95rem; line-height: 1.6;">Leave your details below and our experts will contact you shortly.</p>
                <form id="bookingForm" onsubmit="sendBookingToWhatsApp(event)">
                    <div class="mb-4">
                        <label for="bookingName" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg shadow-none" id="bookingName" name="name" placeholder="John Doe" required style="border-radius: 8px; border: 1px solid #dce1e6; font-size: 1rem; background-color: #fff; padding: 12px 15px;">
                    </div>
                    <div class="mb-4">
                        <label for="bookingPhone" class="form-label text-dark fw-semibold" style="font-size: 0.9rem;">Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control form-control-lg shadow-none" id="bookingPhone" name="phone" placeholder="+91 98765 43210" required style="border-radius: 8px; border: 1px solid #dce1e6; font-size: 1rem; background-color: #fff; padding: 12px 15px;">
                    </div>
                    <div class="d-grid mt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="background: linear-gradient(135deg, var(--primary-color), #1a3f63); border: none; border-radius: 8px; font-weight: 600; letter-spacing: 0.5px; padding: 14px; box-shadow: 0 8px 20px rgba(38, 95, 148, 0.25);">
                            Submit Request <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function sendBookingToWhatsApp(event) {
        event.preventDefault(); // Prevent standard form submission

        // Get form values
        var name = document.getElementById('bookingName').value;
        var phone = document.getElementById('bookingPhone').value;

        // Construct the WhatsApp message
        var message = "Hello! I would like to book an appointment.\n\n" +
                      "*Name:* " + name + "\n" +
                      "*Phone:* " + phone;

        // WhatsApp number
        var whatsappNumber = "919142569346";

        // Open WhatsApp URL
        var whatsappUrl = "https://wa.me/" + whatsappNumber + "?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
        
        // Hide modal
        var myModalEl = document.getElementById('exampleModal');
        var modal = bootstrap.Modal.getInstance(myModalEl);
        if(modal) {
            modal.hide();
        }
        
        // Optionally, clear the form
        document.getElementById('bookingForm').reset();
    }

    document.addEventListener("DOMContentLoaded", function() {
        var myModalEl = document.getElementById('exampleModal');
        
        // Listen for the modal being closed (cross button or click outside)
        if (myModalEl) {
            myModalEl.addEventListener('hidden.bs.modal', function () {
                sessionStorage.setItem('bookingModalClosed', 'true');
            });
        }

        // Only show if it hasn't been closed in this session
        if (!sessionStorage.getItem('bookingModalClosed')) {
            setTimeout(function() {
                if (myModalEl) {
                    var myModal = new bootstrap.Modal(myModalEl);
                    myModal.show();
                }
            }, 2000);
        }
    });
</script>