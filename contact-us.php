<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ==================================== -->
    <style>
        .contact-breadcrumb {
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

        .contact-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .contact-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="contact-breadcrumb">
        <div class="container text-center">
            <h1>Contact Us</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =================================== -->
    <section class="py-5 contact">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <span>Contact Us</span>
                    <h2>Get In Touch</h2>
                    <p class="text-muted">If you have any questions or inquiries, please don't hesitate to contact us.
                    </p>
                </div>

                <!-- Contact Form -->
                <div class="col-md-6">
                    <div class="card">
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text bg-white border-end-0"><i
                                                class="bi bi-person"></i></span>
                                        <input type="text" name="name" class="form-control border-start-0"
                                            placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text bg-white border-end-0"><i
                                                class="bi bi-envelope"></i></span>
                                        <input type="email" name="email" class="form-control border-start-0"
                                            placeholder="Enter Your Email" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="number">Number <span class="text-danger">*</span></label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text bg-white border-end-0"><i
                                                class="bi bi-telephone"></i></span>
                                        <input type="email" name="number" class="form-control border-start-0"
                                            placeholder="Enter Your Number" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="address">Address <span class="text-danger">*</span></label>
                                    <div class="mb-3 input-group">
                                        <span class="input-group-text bg-white border-end-0"><i
                                                class="bi bi-geo-alt"></i></span>
                                        <input type="email" name="address" class="form-control border-start-0"
                                            placeholder="Enter Your Address" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="message">Message <span class="text-danger">*</span></label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message" rows="5"
                                            placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-md-6">
                    <div class="contact-info p-4 bg-light rounded">
                        <h5 class="title">Contact Details</h5>
                        <p class="list-group-item"><i class="bi bi-telephone-fill me-2"></i> +91 91425 69346</p>
                        <p class="list-group-item"><i class="bi bi-envelope-fill me-2"></i> info@tensiletechworkers.com
                        </p>
                        <p class="list-group-item"><i class="bi bi-geo-alt-fill me-2"></i> Chandrakanta Appartment, Room
                            No:- 201, Opposite Harihar Chamber, Boring Road Chauraha, Pandooi Kothi, Patna - 800001</p>

                        <div class="py-3">
                            <h5 class="title">Follow Us On</h5>
                            <a href="https://www.facebook.com/"><img
                                    src="<?= $base_url ?>assets/images/user/facebook.webp" alt="" class="img-fluid me-3"
                                    style="width: 50px;"></a>
                            <a href="https://www.instagram.com/"><img
                                    src="<?= $base_url ?>assets/images/user/instagram.webp" alt=""
                                    class="img-fluid me-3" style="width: 50px;"></a>
                            <a href="https://www.youtube.com/"><img
                                    src="<?= $base_url ?>assets/images/user/youtube.webp" alt="" class="img-fluid"
                                    style="width: 50px;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d710.8910621041828!2d85.11958107221375!3d25.611958500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed593b06f0bc37%3A0x1e304fcb9cf6d46a!2sCoral%20Web%20Technology!5e1!3m2!1sen!2sin!4v1758880557337!5m2!1sen!2sin"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <style>
        .contact {
            background: #eee;
        }

        .contact .card {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            padding: 25px;
        }

        /* Remove focus transition and outline */
        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            /* optional: keep border color on focus */
        }

        .form-control {
            border-color: var(--primary-color);
        }

        .input-group-text {
            border-radius: .25rem 0 0 .25rem;
            border-color: var(--primary-color);
        }

        /* Input left border adjustment */
        .form-control {
            border-radius: 0 .25rem .25rem 0;
        }

        /* Contact info box */
        .contact-info h5 {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .contact-info p {
            font-size: 0.95rem;
            margin-bottom: 0.5rem;
        }

        label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .contact-info .list-group-item {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            background: var(--primary-color);
            color: var(--tertiary-color);
            font-weight: 500;
        }
    </style>
    <!-- =================================== -->
    <?php include 'common/footer.php'; ?>
</body>

</html>