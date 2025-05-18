<?php require_once('Connections/compass_institute.php'); ?>
<?php

$query_Recordset2 = "SELECT * FROM notice";
$Recordset2 = mysqli_query( $compass_institute, $query_Recordset2 )or die( mysqli_error( $compass_institute ) );
$row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
$totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );

$query_Recordset3 = "SELECT * FROM banner_image";
$Recordset3 = mysqli_query( $compass_institute, $query_Recordset3 )or die( mysqli_error( $compass_institute ) );
$row_Recordset3 = mysqli_fetch_assoc( $Recordset3 );
$totalRows_Recordset3 = mysqli_num_rows( $Recordset3 );

$query_Recordset4 = "SELECT * FROM testimonial";
$Recordset4 = mysqli_query( $compass_institute, $query_Recordset4 )or die( mysqli_error( $compass_institute ) );
$row_Recordset4 = mysqli_fetch_assoc( $Recordset4 );
$totalRows_Recordset4 = mysqli_num_rows( $Recordset4 );

$query_Recordset5 = "SELECT * FROM course WHERE popular = 'Yes' LIMIT 3";
$Recordset5 = mysqli_query( $compass_institute, $query_Recordset5 )or die( mysqli_error( $compass_institute ) );
$row_Recordset5 = mysqli_fetch_assoc( $Recordset5 );
$totalRows_Recordset5 = mysqli_num_rows( $Recordset5 );

$query_Recordset6 = "SELECT * FROM about";
$Recordset6 = mysqli_query( $compass_institute, $query_Recordset6 )or die( mysqli_error( $compass_institute ) );
$row_Recordset6 = mysqli_fetch_assoc( $Recordset6 );
$totalRows_Recordset6 = mysqli_num_rows( $Recordset6 );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Home | Compass National Education</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .my-nav {
        position: absolute;
        z-index: 10;
        width: 100%;
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border website-color" style="width: 3rem; height: 3rem;" role="status"> <span
                class="sr-only">Loading...</span> </div>
    </div>
    <!-- Spinner End -->

    <?php include('header.php'); ?>

    <nav class="my-nav navbar navbar-light navbar-expand-lg ">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand d-flex px-4 px-lg-5"><img src="img/logo.png"
                    style="height: 130px; width: auto; margin-top: -30px;" alt=""></a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="courses.php" class="nav-item nav-link active">Courses</a>
                    <a href="gallery.php" class="nav-item nav-link active">Gallery</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
            <?php do{ ?>
            <div class="owl-carousel-item position-relative"> <img class="img-fluid"
                    src="admin/assets/images/banner/<?php echo $row_Recordset3['banner_image']; ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="website-color text-white text-uppercase mb-3 animated slideInDown">
                                    Welcome
                                    to<br />
                                    Compass
                                    National Education </h1>
                                <h3 class="text-white animated slideInDown">Embark on a journey of Compass
                                    National Education </h3>
                                <p class="fs-5 text-white mb-4 pb-2">Explore our cutting-edge programs and unlock
                                    your
                                    potential in technology!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php }while($row_Recordset3=mysqli_fetch_assoc($Recordset3)); ?>
        </div>
    </div>


    <div class="container-fluid marquee p-2" align="center">
        <marquee width="100%">
            <b><?php echo $row_Recordset2['notice']; ?>.</b>
        </marquee>
    </div>

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4"> <i class="fa fa-3x fa-graduation-cap website-color mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p>At Compass National Education, our success is driven by our talented team of instructors
                                who bring
                                a wealth of knowledge and real-world experience to the classroom.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4"> <i class="fa fa-3x fa-globe website-color mb-4"></i>
                            <h5 class="mb-3">Advanced Teaching</h5>
                            <p>At Compass National Education, personalized guidance is paramount. Our instructors serve
                                as
                                mentors, providing individualized support and help you achieve
                                your goals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4"> <i class="fa fa-3x fa-home website-color mb-4"></i>
                            <h5 class="mb-3">Join Our Community</h5>
                            <p>Engage with our passionate instructors and fellow students, where collaboration and
                                innovation thrive, propelling you towards success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4"> <i class="fa fa-3x fa-book-open website-color mb-4"></i>
                            <h5 class="mb-3">Practical Learning</h5>
                            <p>Learn by doing with our dynamic instructors,they empower you to translate theory into
                                practice and develop essential
                                skills for the future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100"> <img class="img-fluid position-absolute w-100 h-100"
                            src="img/about-1.jpg" alt="" style="object-fit: cover;"> </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start website-color pe-3"><strong>About Us</strong></h6>
                    <h1 class="mb-4">Welcome to Compass National Education</h1>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Advanced Teaching</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Join Our Community </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Practical Learning</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Student Success Stories
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Personalized Guidance
                            </p>
                        </div>
                    </div>
                    <?php if($totalRows_Recordset6 > 0) { ?>
                    <p class="mb-4"><?php echo $row_Recordset6['about']; ?>.</p>
                    <?php } ?>
                    <a class="about-read-more py-3 px-5 mt-2" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center website-color px-3"><strong>Courses</strong></h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php do{ ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden"> <img class="img-fluid"
                                src="admin/assets/images/course/<?php echo $row_Recordset5['image']; ?>" alt=""> </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4"><?php echo $row_Recordset5['course_name']; ?></h5>
                        </div>
                    </div>
                </div>
                <?php }while($row_Recordset5=mysqli_fetch_assoc($Recordset5)); ?>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center website-color px-3"><strong>Testimonial</strong></h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <?php 
                if($totalRows_Recordset4 > 0) { 
                do{ ?>
                <div class="testimonial-item text-center"> <img class="border p-2 mx-auto mb-3"
                        src="admin/assets/images/testimonial/<?php echo $row_Recordset4['image']; ?>"
                        style="width: 100px; height: 100px;">
                    <h5 class="mb-0"><?php echo $row_Recordset4['name']; ?></h5>
                    <p><?php echo $row_Recordset4['proffession']; ?></p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"><?php echo $row_Recordset4['content']; ?>.</p>
                    </div>
                </div>
                <?php }while($row_Recordset4=mysqli_fetch_assoc($Recordset4)); } ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Partner logo Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel owl-theme position-relative">
                <div class="testimonial-item text-center"> <img class="p-2 mx-auto mb-3" src="img/image-1.jpg"
                        style="width: 60%;"> </div>
                <div class="testimonial-item text-center"> <img class="p-2 mx-auto mb-3" src="img/image-2.jpg"
                        style="width: 60%;"> </div>
                <div class="testimonial-item text-center"> <img class="p-2 mx-auto mb-3" src="img/image-3.jpg"
                        style="width: 60%;"> </div>
                <div class="testimonial-item text-center"> <img class="p-2 mx-auto mb-3" src="img/image-4.jpg"
                        style="width: 60%;"> </div>
                <div class="testimonial-item text-center"> <img class="p-2 mx-auto mb-3" src="img/image-5.jpg"
                        style="width: 60%;"> </div>
            </div>
        </div>
    </div>
    <!-- Partner logo End -->

    <?php include('footer.php'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: false,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 5,
            },
        },
    });
    </script>
</body>

</html>