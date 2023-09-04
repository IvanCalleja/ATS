<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CSPC SRR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/cspc-logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Apply a fixed position to the header */
        .header-transparent {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            z-index: 1000;
            transition: background-color 0.3s ease;
        }
        .header-transparent.scrolled {
            background-color: rgba(255, 255, 255, 1);
            /* Change background color when scrolled */
        }

        .about-container {
            display: grid;
            place-items: center;
            height: 80vh;
        }

        .red-card {
            text-align: center;
            padding: 100px;
            /* Reduce the padding at the top */
            margin-bottom: 40px;
            /* Add margin at the bottom */
            background-color: red;
            /* Change the background color to red */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <!--a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
                <!-- Uncomment below if you prefer to use a text logo -->
                <h1>
                    <a href="#" class="logo d-flex align-items-center">
                        <img src="{{ asset('img/cspc-logo.png') }}" alt="CSPC" class="smaller-logo">
                        <span class="d-none d-lg-block" style="margin-left: 10px;">Appoint<span
                                style="color: rgb(32, 2, 183)">Ease</span></span>
                    </a>
                </h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services" style="margin-right: 10px;">Services</a></li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 style="color: white;">Welcome to <span style="color: white;">Appoint<span
                        style="color: rgb(32, 2, 183);">Ease</span></span></h1>
            <h2 style="font-size: 20px; text-align: center;">
                Empowering Efficiency Through Precise Appointments
            </h2>
            <a href="about" class="btn-get-started">Get Started</a>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->

        <body>
            <section id="about">
                <div class="container" data-aos="fade-up">
                    <div class="row about-container">
                        <div class="col-lg-6 content order-lg-1 order-2">
                            <div class="red-card">
                                <h2 class="title"> <strong>About AppointEase</strong></h2>
                                <p>
                                    A system designed to simplify the process, reduce waiting time for clients and
                                    increase user satisfaction and improve efficiency at the registrar's office.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100">
                        </div>
                    </div>
                </div>
            </section>


            <div class="l-container s-special-box row section-padding no-gutters justify-content-center align-items-center text-center"
                id="yui_3_17_2_1_1692281177234_22">

                <div class="s-section-desc col-sm-11 col-md-8 col-lg-5 ml-auto mr-auto text-center"
                    id="yui_3_17_2_1_1692281177234_26">
                    <h3 class="c-section-desc-heading" id="yui_3_17_2_1_1692281177234_27"><strong>Managers and
                            Developers</strong></h3>
                    <div class="c-section-desc" id="yui_3_17_2_1_1692281177234_25">
                        <p dir="ltr" style="text-align: center;" id="yui_3_17_2_1_1692281177234_24">AppointEase is
                            maintained by the Team Black Clover and the Student's Registrar and Records Office.</p>
                    </div>

                </div>
            </div>
        </body>

</html>

<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Services</h3>
            <p class="section-description">Here are some of the services offered:</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
                    <h4 class="title"><a href="">Official Transcript of Records</a></h4>
                    <p class="description">Official document that provides a detailed record of a student's
                        academic performance and achievements at an educational institution</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a></div>
                    <h4 class="title"><a href="">Diploma Renewal</a></h4>
                    <p class="description">New or updated copy of an academic diploma or degree certificate</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
                    <h4 class="title"><a href="">Honorable Dismissal</a></h4>
                    <p class="description">Formal process by which a student voluntarily withdraws from an
                        institution in good standing and with a positive academic record</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-binoculars"></i></a></div>
                    <h4 class="title"><a href="">Authentication</a></h4>
                    <p class="description">Verifying the genuineness, accuracy, and legitimacy of a piece of
                        information, a document, or the identity of an individual or entity</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-brightness-high"></i></a></div>
                    <h4 class="title"><a href="">Certification, Authentication & Verification</a></h4>
                    <p class="description">Certification sets standards, Authentication confirms identity, and
                        Verification validates accuracy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="box">
                    <div class="icon"><a href=""><i class="bi bi-calendar4-week"></i></a></div>
                    <h4 class="title"><a href="">Others</a></h4>
                    <p class="description">Explore unique services designed to simplify your experience and
                        meet specialized needs.</p>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Services Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; <span id="copyright-year"></span> <strong>AppointEase.</strong> All Rights Reserved.
        </div>

        <div class="credits">
            <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
      -->
            Designed by <a> <strong> Black Clover </strong> </a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    const currentYear = new Date().getFullYear();
    const yearElement = document.getElementById("copyright-year");
    yearElement.textContent = currentYear;
</script>

<script>
    // Function to add or remove the 'scrolled' class based on scroll position
    function handleScroll() {
        const header = document.getElementById("header");
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    }

    // Attach the scroll event listener to the window
    window.addEventListener("scroll", handleScroll);
</script>

</body>

</html>
