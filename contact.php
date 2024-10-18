<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital - Digital Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php
        include "header.php";
        ?>

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            
            <style>
                .hero-header {
                    background-image: linear-gradient(#000000c4, #000000c2), url(image/contact.jpg);
                    background-size: cover;
                    background-position: center;
                }
            </style>
            <div class="container-xxl py-5    hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5  pt-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Contact Us</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <section class="my-5 ">
            <div class="container text-center">
                <div class="section- ">
                    <h4 class="text-primary text-uppercase text-center" style="letter-spacing: 5px;">Contact Us</h4>
                    
                </div>
                <div class="row px-3 pb-2 my-5">
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Address</h4>
                        <p>UG-23B, Jaina Tower-1, District Center, Janakpuri, New Delhi-110058</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Phone</h4>
                        <p>+91 8527450318</p>
                    </div>
                    <div class="col-sm-4 text-center mb-3">
                        <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                        <h4 class="font-weight-bold">Email</h4>
                        <p>info@arvmedia1998.com</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <form action="" class="  ">
                            <div class="row">
                                <div class="col-lg-6 my-2">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control name" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-2">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control phone " id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 my-2">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control email" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">Your E-Mail</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 my-2">
                                    <div class="form-floating">
                                        <textarea class="form-control message" placeholder="Leave a comment here"
                                            id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message</label>
                                    </div>
                                    <a href="" class="btn btn-success px-5 rounded-pill my-4" onclick="contact()">Submit</a>
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-lg-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.9509885837!2d76.76358542663657!3d28.64428736325543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1728624042740!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" class="rounded shadow-lg" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>



        <?php
        include "footer.php";
        ?>