<?php require_once('../Connections/compass_institute.php'); ?>
<?php
if ( isset( $_GET[ 'gallery_id' ] ) ) {

    $deleteSQL = sprintf( "DELETE FROM `gallery` WHERE  `gallery_id` = %s",
        GetSQLValueString( $_GET[ 'gallery_id' ], "int" ) );
    $Result1 = mysqli_query( $compass_institute, $deleteSQL )or die( mysqli_error( $compass_institute ) );

    unlink( "assets/images/gallery/" . $row_photo[ 'image' ] );

    $deleteGoTo = "gallery.php";
    if ( isset( $_SERVER[ 'QUERY_STRING' ] ) ) {
        $deleteGoTo .= ( strpos( $deleteGoTo, '?' ) ) ? "&" : "?";
        $deleteGoTo .= $_SERVER[ 'QUERY_STRING' ];
    }
    header( sprintf( "Location: %s", $deleteGoTo ) );
}
?>