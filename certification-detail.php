<?php require_once('Connections/compass_institute.php') ?>
<?php

   if( isset( $_GET[ 'roll' ] ) ) {
    $roll = $_GET[ 'roll' ];

    $query_Recordset2 = "SELECT * FROM student WHERE roll = '$roll'";
    $Recordset2 = mysqli_query( $compass_institute, $query_Recordset2 )or die( mysqli_error( $compass_institute ) );
    $row_Recordset2 = mysqli_fetch_assoc( $Recordset2 );
    $totalRows_Recordset2 = mysqli_num_rows( $Recordset2 );
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Certification-Detail | Compass National Education</title>
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

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-img position-relative text-center"> <img
                                class="card-img-top rounded-0 img-fluid"
                                src="admin/assets/images/student/<?php echo $row_Recordset2['image_1']; ?>"
                                alt="event thumb">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-6 mb-5 mb-lg-0">
                    <div class="card border-0 rounded-0 hover-shadow">
                        <div class="card-body">
                            <p><strong>Name:</strong> <?php echo $row_Recordset2['fullname']; ?> </p>
                            <p><strong>Father's Name:</strong> <?php echo $row_Recordset2['father_name']; ?></p>
                            <p><strong>Registration Number:</strong> <?php echo $row_Recordset2['roll']; ?></p>
                            <p><strong>Trade:</strong> <?php echo $row_Recordset2['trade']; ?></p>
                            <p><strong>Session:</strong> <?php echo $row_Recordset2['session']; ?></p>
                            <p><strong>Grade:</strong> <?php echo $row_Recordset2['grade']; ?></p>
                        </div>
                    </div>
                    <button type="search" class="btn-certi-det"><a
                            href="admin/assets/images/student/<?php echo $row_Recordset2['image_2'] ?>"
                            target="_blank">View
                            Certificate</a></button>
                </div>
            </div>
        </div>
    </div>

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