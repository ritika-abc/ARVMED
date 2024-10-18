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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Rubik+Distressed&family=Rubik+Maps&display=swap"
        rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .box {
            height: 80vh;
            /* border: 1px solid red; */
            width: 100%;
        }

        .banner_content {
            position: absolute;
            top: 35%;
            left: 15%;
            text-align: center;
            /* color: white; */
            width: 70%;
        }
    </style>

</head>

<body>

<!--  -->

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0 ">
            <?php include "header.php"; ?>

            <div class="box position-relative">
                <iframe width="100%" height="100%" style="object-fit: cover;object-position: center;"
                    src="https://www.youtube.com/embed/usyYMVoJBBs?autoplay=1&mute=1&loop=1&playlist=usyYMVoJBBs&controls=0&modestbranding=1&rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <div class="banner_content  responsive_banner">
                    <h4 class="text-white display-6 mb-4">Maximize Your Brand’s Impact: Work with Premier Digital Experts</h4>
                    <h1 class="text-primary   font">Drive Awareness, Boost Engagement, Accelerate Sales, and Grow Online</h1>
                    <p class="fs-5 text-white mt-4">“We have a Complete Solution For Internet Marketing.”</p>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
         

        <!-- Our Agency Clients Start -->
        <div class="container-xxl py-5 wow fadeInUp" style="background-color: #f7f9fb;" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <!-- <p class="section-title text-secondary justify-content-center"><span></span>Our  Clients<span></span></p> -->
                <h1 class="text-center mb-3">Our Clients</h1>
                <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>

                <p class="text-center mt-2 mb-5  " sty>At ARV MEDIA 1998, we take pride in our diverse portfolio of clients across various industries.
                </p>
                <div class="owl-carousel logo">
                    <img src="image/clients/1.jpg" alt="">
                    <img src="image/clients/2.jpg" alt="">
                    <img src="image/clients/2.jpg" alt="">
                    <img src="image/clients/2.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Our Agency Clients End -->
        <!-- Digital Marketing Services start here -->
        <section class="" style="background-color: #f2f2f2; padding: 5rem 0rem;">
            <div class="container  ">
                <div class="row position-relative justify-content-center">
                    <div class="col-lg-5">
                        <div class="service_text text-center ">
                            <h4 class="fs-1">Our <span class="text-primary">Digital Marketing</span> Services in India
                            </h4>

                        </div>
                    </div>
                    <div class="">
                        <img src="image/gif/aniation1.gif" height="auto" width="15%" style="z-index: 1;"
                            class="position-absolute top-50  start-0" alt="">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards pb-5 bg-white rounded h-100  text-center">
                            <!-- <img src="image/seo.jpg" height="auto" width="100%" alt="SEO image"> -->
                            <div class="bg-  mb-4">
                                <img src="image/gif/seo.gif" height="280px" style="object-fit: cover;" width="100%"
                                    alt="SEO image">
                            </div>
                            <div class="pb-4 px-2 ">
                                <h4 class="fw-bold">SEO Services</h4>
                                <p>  Our SEO services are designed to enhance your visibility, drive organic traffic, and boost conversions. With a dedicated team of SEO experts, we tailor strategies to meet your unique business needs.
                                </p>
                            </div>
                            <a href="enquiry.php" class="btn btn-dark">Enquiry Now</a>
                            <a href="seo-services.php" class="btn btn-outline-dark">Details</a>
                        </div>
                        <!-- <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">15,000
                            INR /
                            180USD
                            Monthlty</a> -->
                    </div>
                    <div class="col-md-6 col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards bg-white pb-5 rounded h-100   text-center">
                            <div class="bg-  mb-4">
                                <img src="image/gif/modul-lettering-ux-slash-ui-with-toolbar-and-web-design-interface-text.gif"
                                    height="280px" style="object-fit: cover;" width="100%" alt="SEO image">
                            </div>
                            <div class="pb-4 px-2  ">
                                <h4 class="fw-bold">Website Designing</h4>
                                <p>  At <b>ARV MEDIA 1998</b> we specialize in creating visually appealing, user-friendly websites that not only attract visitors but also drive conversions. Our approach combines aesthetics, functionality, and strategy to deliver a website that meets your unique needs.
                                </p>
                            </div>
                            <a href="enquiry.php" class="btn btn-dark">Enquiry Now</a>
                            <a href="web-designing.php" class="btn btn-outline-dark">Details</a>
                        </div>
                        <!-- <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">25000
                            INR / 300 USD
                            Monthlty</a> -->
                    </div>
                    <div class="col-md-6 align-items-center col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards bg-white pb-5 rounded h-100  text-center">
                            <div class="bg-  mb-4">
                                <!-- <img src="image/gif/aa.gif" height="280px" style="object-fit: cover;" width="100%"
                                    alt="SEO image"> -->
                                <video src="image/gif/ppc.mp4" height="280px" style="object-fit: cover;" width="100%" type="video/mp4" autoplay muted loop></video>
                            </div>
                            <!-- Whereas recognition of the inherent dignity -->
                            <div class="pb-4 px-2  ">
                                <h4 class="fw-bold">PPC Services</h4>
                                <p>PPC is a powerful online advertising model where you only pay when a user clicks on your ad. It’s an effective way to increase visibility, drive traffic, and generate leads or sales quickly.
                                </p>
                            </div>
                            <a href="enquiry.php" class="btn btn-dark">Enquiry Now</a>
                            <a href="ppc-services.php" class="btn btn-outline-dark">Details</a>
                        </div>
                        <!-- <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">13000
                            INR / 156 USD
                            Monthlty</a> -->
                    </div>
                    <!-- <div class="col-md-6 col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards bg-white rounded h-100  text-center">
                            <div class="bg-  mb-4">
                                <img src="image/gif/juicy-web-designer-girl-making-landing-page-with-video-color-palette-and-site-blocks.gif"
                                    height="280px" style="object-fit: cover;" width="100%" alt="SEO image">
                            </div>
                            <div class="pb-4 px-2  ">
                                <h4 class="fw-bold">Video Creation <br> Service</h4>
                                <p>In a world where visual content reigns supreme, video is one of the most effective ways to engage your audience and communicate your message. Our Video Creation services offer compelling storytelling through high-quality visuals, ensuring your brand stands out in the crowded digital landscape.
                                </p>
                            </div>

                        </div>
                        <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">800
                            INR / 96 USD
                            Per hour</a>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards bg-white rounded  h-100 text-center">
                            <div class="bg-  mb-4">
                                <img src="image/gif/pablita-woman-leaving-a-positive-review-on-website.gif"
                                    height="280px" style="object-fit: cover;" width="100%" alt="SEO image">
                            </div>
                            <div class="pb-4 px-2  ">
                                <h4 class="fw-bold">Social Media Graphic Design
                                    Services</h4>
                                <p>In the fast-paced world of social media, eye-catching graphics are essential for capturing attention and engaging your audience. Our Social Media Graphic Design Services provide you with tailor-made visuals that enhance your brand identity and drive engagement across all platforms.
                                </p>
                            </div>

                        </div>
                        <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">300
                            INR / 12 USD
                            Per Poster</a>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center my-5 digital_marketing">
                        <div class="service_cards bg-white rounded h-100  text-center">
                            <div class="bg-  mb-4">
                                <img src="image/gif/social-recruitment-process-with-hr-finding-the-right-candidate.gif"
                                    height="280px" style="object-fit: cover;" width="100%" alt="SEO image">
                            </div>
                            <div class="pb-4 px-2  ">
                                <h4 class="fw-bold">Email Markeiting <br> Services</h4>
                                <p>In an age where communication is instant, email remains one of the most powerful tools for connecting with your audience. Our Email Marketing Services are designed to help you create impactful campaigns that engage, inform, and convert your subscribers into loyal customers.
                                </p>
                            </div>

                        </div>
                        <a style="margin-top: -27px;" href=""
                            class="btn btn-secondary  fw-bold  py-sm-3 px-sm-5 rounded-pill   animated slideInLeft">10,000
                            INR / 120 USD
                            Monthly
                        </a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Digital Marketing Services end here -->
        <section class=" w-100" style="background-color: black; letter-spacing: 1px;">
            <div class="bg_clip   "></div>
            <div class="container" style="padding: 5rem 0rem;">
                <div class="row justify-content-center text-center ">
                    <div class="col-lg-9  text-capitalize ">
                        <h4 class="fs-3 text-primary">Elevate Your Business with Premier SEO Services in India</h4>
                        <h2 class="display-6 text-white mt-3" style="font-family: sans-serif !important;">Unlock Your Business Potential with 400+ Housepower Engines in Just 6 Months!
                        </h2>
                        <a href="" class=" btn btn-primary p-3 mt-3 px-5 fw-bold fs-5 w-75 m-auto"> Boost Your Business
                            Click Here
                            For More Details</a>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #97979736;">
            <div class="container  " style="padding: 5rem 0rem;">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="  text-center">
                            <h4 class="fs-1">Tailored Digital Marketing Packages for Startups: Boost Your Growth in 1 Year! </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 my-5">
                        <div class="package_card bg-white py-3 shadow-lg rounded h-100 bg-  px-3 pt-2 ">
                            <h5 class="bg-primary text-white p-3 text-center mt-2 ">STARTUP</h5>
                            <ol class="text-dark fw-bold ">
                                <li>40 Promoter </li>
                                <li>50 Blog For Google Ranking</li>
                                <li>150 Social Media Poster</li>
                                <li>100 Testimonial Reels </li>
                                <li>30 Information Video</li>
                                <li>1 Website For 1 Year</li>
                                <li>40 Facebook Accounts</li>
                                <li>40 Instagram Accounts</li>
                                <li> Pinterest Accounts</li>
                                <li>Linkedin Accounts</li>
                                <li>Twitter Accounts</li>
                                <li>Quora Accounts</li>
                                <li>YouTube Channel</li>
                                <li> Year Support</li>
                                <li> Year SEO Services</li>
                            </ol>
                            <a href="" class="btn btn-light w-100 shadow-lg p-2 fw-bold">75,000 INR /
                                900 USD For 1 Year</a>
                        </div>
                    </div>
                    <div class="col-lg-4 my-5">
                        <div
                            class="package_card  bg-white py-3 border border-dark border-3 shadow-lg rounded h-100 bg-  px-3 pt-2 ">
                            <h5 class="bg-primary fw-bold mb-4  text-white p-3 text-center mt-2 ">ENTREPRENEUR</h5>
                            <ol class="text-dark fw-bold ">
                                <li>40 Promoter </li>
                                <li>50 Blog For Google Ranking</li>
                                <li>150 Social Media Poster</li>
                                <li>100 Testimonial Reels </li>
                                <li>30 Information Video</li>
                                <li>1 Website For 1 Year</li>
                                <li>40 Facebook Accounts</li>
                                <li>40 Instagram Accounts</li>
                                <li> Pinterest Accounts</li>
                                <li>Linkedin Accounts</li>
                                <li>Twitter Accounts</li>
                                <li>Quora Accounts</li>
                                <li>YouTube Channel</li>
                                <li> Year Support</li>
                                <li> Year SEO Services</li>
                            </ol>
                            <a href="" class="btn btn-light w-100 shadow-lg p-2 fw-bold">75,000 INR /
                                900 USD For 1 Year</a>
                        </div>
                    </div>
                    <div class="col-lg-4 my-5">
                        <div class="package_card bg-white py-3 shadow-lg rounded h-100 bg-  px-3 pt-2 ">
                            <h5 class="bg-primary text-white p-3 text-center mt-2 ">BUSINESS</h5>
                            <ol class="text-dark fw-bold ">
                                <li>40 Promoter </li>
                                <li>50 Blog For Google Ranking</li>
                                <li>150 Social Media Poster</li>
                                <li>100 Testimonial Reels </li>
                                <li>30 Information Video</li>
                                <li>1 Website For 1 Year</li>
                                <li>40 Facebook Accounts</li>
                                <li>40 Instagram Accounts</li>
                                <li> Pinterest Accounts</li>
                                <li>Linkedin Accounts</li>
                                <li>Twitter Accounts</li>
                                <li>Quora Accounts</li>
                                <li>YouTube Channel</li>
                                <li> Year Support</li>
                                <li> Year SEO Services</li>
                            </ol>
                            <a href="" class="btn btn-light w-100 shadow-lg p-2 fw-bold">75,000 INR /
                                900 USD For 1 Year</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">
                                <img src="1.png" height="auto" width="100%" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->





        <div class="box_conteiner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4 class="mb-5 text-center text-white fs-3">How Does ARV MEDIA 1998 Help Your Business Grow
                            Digitally?
                        </h4>

                    </div>
                </div>
            </div>
            <style>
                .icon_bg img {
                    height: auto;
                    width: 40% !important;
                    /* transform: scale(0.8); */
                }
            </style>
            <div class="owl-carousel caro">
                <div class="item ">
                    <div class="bg-white d-block shadow-lg pb-3 rounded icon_bg">
                        <img src="image/gif/1.gif" class="border-bottom border-dark border-2 sshadow-lg" height="300px"
                            width="100%" style="object-fit: cover;" alt="">
                        <!-- <img src="image/icon/why3.png" height="auto" width="50%" alt=""> -->
                        <div class="img_content_box text-center text-dark mt-2 p-2">
                            <h5 class="fw-bold mb-2">Increases Digital Reach</h5>
                            
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div href="" class="bg-white d-block pb-3 shadow-lg rounded icon_bg">
                        <img src="image/gif/2.gif" class="border-bottom border-dark border-2 sshadow-lg" height="300px"
                            width="100%" style="object-fit: cover;" alt="">
                        <div class="img_content_box text-center text-dark mt-2 p-2">
                            <h5 class="fw-bold mb-2">Connecting With Your Ideal Audience</h5>
                             
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div href="" class="bg-white d-block pb-3 shadow-lg rounded icon_bg">
                        <img src="image/gif/3.gif" class="border-bottom border-dark border-2 sshadow-lg" height="300px"
                            width="100%" style="object-fit: cover;" alt="">
                        <div class="img_content_box text-center text-dark mt-2 p-2">
                            <h5 class="fw-bold mb-2">Cost-effective Branding</h5>
                            

                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div href="" class="bg-white d-block pb-3 shadow-lg rounded icon_bg">
                        <img src="image/gif/6.gif" class="border-bottom border-dark border-2 sshadow-lg" height="300px"
                            width="100%" style="object-fit: cover;" alt="">
                        <div class="img_content_box text-center text-dark mt-2 p-2">
                            <h5 class="fw-bold mb-2">Increase Earnings</h5>
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facts Start -->
        <div class="container-xxl  fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="shadow-lg p-3 rounded ">
                            <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                            <div class="d-flex justify-content-center">
                                <h1 class=" mb-2" data-toggle="counter-up">10000</h1>
                                <h1>+</h1>
                            </div>
                            <p class=" mb-0  fs-4 text-dark fw-bold ">Keywords Ranked </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <div class="shadow-lg p-3 rounded">
                            <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                            <div class="d-flex justify-content-center">
                                <h1 class=" mb-2" data-toggle="counter-up">2000</h1>
                                <h1>+</h1>
                            </div>
                            <p class=" mb-0  fs-4 text-dark fw-bold">Case Studies
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <div class="shadow-lg p-3 rounded">
                            <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                            <div class="d-flex justify-content-center">
                                <h1 class=" mb-2" data-toggle="counter-up">1000</h1>
                                <h1>+</h1>
                            </div>
                            <p class=" mb-0  fs-4 text-dark fw-bold">Reviews </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.s">
                        <div class="shadow-lg p-3 rounded">
                            <i class="fa fa-check fa-3x text-secondary mb-3"></i>

                            <div class="d-flex justify-content-center">
                                <h1 class=" mb-2" data-toggle="counter-up">15</h1>
                                <h1>K+</h1>
                            </div>
                            <p class=" mb-0  fs-4 text-dark fw-bold">Leads Generated </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        <style>
            .fixed_bg {
                background-image: linear-gradient(rgba(0, 0, 0, 0.507), rgba(0, 0, 0, 0.438)), url(people-creating-new-project_23-2147656719.jpg);
                background-size: cover;
                background-attachment: fixed;
                padding: 5rem 0rem;
            }
        </style>
        <div class="fixed_bg">
            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-8 position-relative">
                        <div class="service_text text-center  ">
                            <h4 class="fs-1 text-white">Our Expert Web Designers and Developers
                                Specialize In
                                Industry-Leading Platforms</h4>

                        </div>
                        <img src="image/gif/animation.gif" class="position-absolute top-0" height="auto" width="30%"
                            alt="">

                    </div>
                </div>
                <div class="row my-5 p-2 ">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white">
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/wp.png" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary ">WordPress</h4>
                                <p>WordPress is the world’s most popular content management system, powering millions of websites. Whether you’re a startup, small business, or a large enterprise, our WordPress services are designed to help you create a stunning, functional, and user-friendly website that meets your specific needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white flex-column-reverse flex-lg-row">

                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">WooCommerce</h4>
                                <p>WooCommerce is the leading eCommerce platform for WordPress, enabling businesses of all sizes to sell online with ease. Whether you’re launching a new online store or enhancing an existing one, our WooCommerce services are designed to help you maximize your online sales and provide an exceptional shopping experience for your customers.</p>
                            </div>
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/wc.jpg" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white">
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/shopy.png" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Shopify</h4>
                                <p>Shopify is one of the most popular eCommerce platforms, enabling businesses to create stunning online stores with ease. Whether you’re starting from scratch or looking to optimize an existing store, our Shopify services are designed to help you succeed in the competitive online marketplace.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white flex-column-reverse flex-lg-row">
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Semrush (SEO)</h4>
                                <p>SEMrush is a leading digital marketing tool that provides comprehensive SEO solutions to help businesses enhance their online presence. Our SEMrush SEO services are designed to leverage its powerful features, enabling you to optimize your website, improve rankings, and drive organic traffic.</p>
                            </div>
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/semrush.jpg" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white">
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/meta-logo.jpg" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Meta</h4>
                                <p>Unlock your website's potential with our SEMrush SEO services. From in-depth site audits and keyword research to content optimization and backlink building, we leverage SEMrush's powerful tools to boost your online visibility and drive organic traffic. Contact us today for a free consultation!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white flex-column-reverse flex-lg-row">
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Mailchipm </h4>
                                <p>Mailchimp is one of the leading email marketing platforms, offering powerful tools to help businesses connect with their audience effectively. Our Mailchimp services are designed to help you create, manage, and optimize your email marketing campaigns, driving engagement and conversions.</p>

                            </div>
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/mailchimp.jpg" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white">
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/canva.png" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Canva </h4>
                                <p>Canva is a powerful design tool that enables businesses to create stunning visuals without the need for advanced design skills. Our Canva services are designed to help you harness the full potential of this platform, making it easy to produce high-quality graphics that enhance your brand identity and engage your audience.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white flex-column-reverse flex-lg-row">
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">PHP </h4>
                                <p>PHP is a powerful server-side scripting language that is widely used for web development. Our PHP development services are designed to help businesses create dynamic, robust, and scalable web applications tailored to their unique needs.</p>

                            </div>
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/PHP-logo.png" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row my-5 p-2">
                    <div class="col-12  ">
                        <div class="row px-4 border rounded py-4 bg-white">
                            <div class="col-lg-4 my-2">
                                <img src="image/lanuage-logo/ps.jpg" height="auto"
                                    class="border border-dark border-3 p-2 rounded shadow-lg" width="100%" alt="">
                            </div>
                            <div class="col-lg-8 my-2 pere_justify">
                                <h4 class="text-primary">Adobe Photoshop </h4>
                                <p>Adobe Photoshop is the industry standard for graphic design and photo editing, offering powerful tools for creating stunning visuals. Our Adobe Photoshop services are designed to help businesses elevate their brand imagery and create eye-catching graphics that capture attention.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- button -->

                <div class="col-12 mt-4 text-center text-lg-start">
                    <a href="tel:918527450318" class="btn btn-primary rounded-pill py-2 fs-5 px-4    text-white">Get Free
                        Consultation
                        Today !</a>

                </div>
            </div>

        </div>
    </div>
    <section>
        <div class="container my-5">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8 ">
                    <div class="service_text text-center  ">
                        <h4 class="fs-1 text- ">FAQ</h4>

                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    1. What does "Unlock Your Brand’s Potential" mean?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <p> Answer: Unlocking your brand’s potential means leveraging expert strategies and
                                        tools to maximize your brand’s visibility, engagement, and revenue online. It
                                        involves working with top digital experts to implement customized solutions that
                                        drive awareness, boost engagement, and accelerate your brand’s growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    2. How can partnering with digital experts help increase brand awareness?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <p> Answer: Digital experts use a combination of SEO, content marketing, social
                                        media strategies, and targeted advertising to enhance your brand’s visibility.
                                        They analyze market trends, optimize your online presence, and create compelling
                                        content to ensure your brand reaches a larger and more relevant audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    3. What strategies will be used to drive engagement with my target audience?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <p> Strategies to drive engagement include creating high-quality, relevant content,
                                        utilizing social media platforms effectively, implementing interactive elements
                                        such as polls or quizzes, and running personalized email campaigns. Digital
                                        experts will also analyze engagement metrics to refine strategies and maximize
                                        interaction with your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    4. How will partnering with digital experts boost sales for my brand?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <p> Answer: Digital experts use various tactics to boost sales, including optimizing
                                        your website for conversions, running targeted ad campaigns, and implementing
                                        effective sales funnels. They also leverage data-driven insights to understand
                                        customer behavior and tailor marketing efforts to drive more sales and increase
                                        revenue.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    5. What methods will be employed to accelerate online growth?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <p> Answer: Accelerating online growth involves a multi-faceted approach including
                                        improving your website’s user experience, investing in SEO and paid search,
                                        expanding your social media presence, and leveraging influencer partnerships.
                                        Digital experts will create and execute a growth strategy tailored to your
                                        brand’s specific needs and goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "review.php";
    ?>

    <?php include "footer.php"; ?>