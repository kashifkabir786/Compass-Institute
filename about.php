<?php require_once('Connections/compass_institute.php'); ?>
<?php

$query_Recordset2 = "SELECT * FROM `about`";
$Recordset2 = mysqli_query( $compass_institute, $query_Recordset2 )or die( mysqli_error( $compass_institute ) );
$row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
$totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us | Compass National Education</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border website-color" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <?php include('header.php'); ?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about-1.jpg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start website-color pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Compass National Education</h1>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Advanced Teaching</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right website-color me-2"></i>Join Our Community
                            </p>
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
                    <?php if($totalRows_Recordset2 > 0) { ?>
                    <p class="mb-4"><?php echo $row_Recordset2['about']; ?>.
                    </p>
                    <?php } ?>
                    <!-- <p class="mb-4">Since our inception, we have been dedicated to
                        providing cutting-edge education, hands-on training, and personalized support to empower our
                        students for success in today's dynamic world.
                    </p>
                    <p> With a focus on innovation, hands-on learning, and industry-relevant skills, we strive to
                        prepare our students for success in a rapidly evolving technological landscape.
                    </p> -->

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!--Mission-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">Mission</h5>
                            <p>Our mission is to nurture a community of forward-thinkers and problem-solvers who are
                                equipped with the knowledge, skills, and confidence to thrive in the ever-evolving
                                landscape of technology. We strive to create an inclusive learning environment that
                                encourages creativity, collaboration, and critical thinking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <h5 class="mb-3">Vision</h5>
                            <p>Our vision is to be a beacon of inspiration and innovation in the field of education,
                                recognized globally for our commitment to excellence, inclusivity, and transformative
                                learning experiences.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Vision-->

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
</body>

</html>