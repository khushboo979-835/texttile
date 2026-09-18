<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <!-- Fancybox CSS -->
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ==================================== -->
    <style>
        .clients-breadcrumb {
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

        .clients-breadcrumb::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: -1;
        }

        .clients-breadcrumb h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: var(--tertiary-color);
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>

    <section class="clients-breadcrumb">
        <div class="container text-center">
            <h1>Our Clients</h1>

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="<?= $base_url ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Clients</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- =================================== -->
     <style>
        .our-clients img{
            height: 150px;
            width: 100%;
            object-fit: contain;
            border-radius: 10px;
            transition: all 0.7s ease-in-out;
            border: 5px solid var(--tertiary-color);
        }

        .our-clients img:hover{
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.7s ease-in-out;
        }
     </style>
    <section class="py-5 our-clients">
        <div class="container">
            <div class="row">
                <div class="head-title mb-4 text-center">
                    <span>Our Clients</span>
                    <h2>Our Trusted Partners</h2>
                </div>
            </div>

            <div class="row g-4 align-items-center">
                <!-- Client 1 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/1.png" alt="Client 1" class="img-fluid">
                    </div>
                </div>

                <!-- Client 2 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/2.png" alt="Client 2" class="img-fluid">
                    </div>
                </div>

                <!-- Client 3 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/3.png" alt="Client 3" class="img-fluid">
                    </div>
                </div>

                <!-- Client 4 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/4.png" alt="Client 4" class="img-fluid">
                    </div>
                </div>

                <!-- Client 5 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/5.png" alt="Client 5" class="img-fluid">
                    </div>
                </div>

                <!-- Client 6 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/6.png" alt="Client 6" class="img-fluid">
                    </div>
                </div>

                <!-- Client 7 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/7.png" alt="Client 7" class="img-fluid">
                    </div>
                </div>

                <!-- Client 8 -->
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/8.png" alt="Client 8" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/9.png" alt="Client 8" class="img-fluid">
                    </div>
                </div>


                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/10.png" alt="Client 8" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/11.png" alt="Client 8" class="img-fluid">
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 col-6">
                    <div class="client-box">
                        <img src="assets/images/client/12.png" alt="Client 8" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================== -->
    <?php include 'common/footer.php'; ?>
</body>

</html>