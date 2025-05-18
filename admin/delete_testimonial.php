<?php require_once('../Connections/compass_institute.php'); ?>
<?php
if ( isset( $_GET[ 'testimonial_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `testimonial` WHERE  `testimonial_id` = %s",
        GetSQLValueString( $_GET[ 'testimonial_id' ], "int" ) );
    $Result1 = mysqli_query( $compass_institute, $deleteSQL )or die( mysqli_error( $compass_institute ) );

    unlink( "assets/images/testimonial/" . $row_photo[ 'image' ] );

    $deleteGoTo = "testimonial.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>