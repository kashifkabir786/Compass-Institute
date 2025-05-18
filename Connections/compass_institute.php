<?php
$hostname_compass_institute = "localhost";
$database_compass_institute = "compass_institute";
$username_compass_institute = "compass_institute";
$password_compass_institute = "123";
$compass_institute = mysqli_connect( $hostname_compass_institute, $username_compass_institute, $password_compass_institute, $database_compass_institute )or trigger_error( mysqli_connect_error(), E_USER_ERROR );

global $compass_institute;
if ( !function_exists( "GetSQLValueString" ) ) {
    function GetSQLValueString( $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "" ) {
        //  if (PHP_VERSION < 6) {
        //    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
        //  }
        global $compass_institute;
        $theValue = function_exists( "mysqli_real_escape_string" ) ? mysqli_real_escape_string( $compass_institute, $theValue ) : mysqli_escape_string( $theValue );
        switch ( $theType ) {
            case "text":
                $theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
                break;
            case "long":
            case "int":
                $theValue = ( $theValue != "" ) ? intval( $theValue ) : "NULL";
                break;
            case "double":
                $theValue = ( $theValue != "" ) ? doubleval( $theValue ) : "NULL";
                break;
            case "date":
                $theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
                break;
            case "defined":
                $theValue = ( $theValue != "" ) ? $theDefinedValue : $theNotDefinedValue;
                break;
        }
        return $theValue;
    }
}
?>