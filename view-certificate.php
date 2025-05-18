<?php
require_once('Connections/compass_institute.php');
require_once('dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

if (isset($_GET['roll'])) {
    $roll = $_GET['roll'];

    $query_Recordset2 = "SELECT * FROM student WHERE roll = '$roll'";
    $Recordset2 = mysqli_query($compass_institute, $query_Recordset2) or die(mysqli_error($compass_institute));
    $row_Recordset2 = mysqli_fetch_assoc($Recordset2);
    $totalRows_Recordset2 = mysqli_num_rows($Recordset2);
}

// Create a Dompdf instance
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('isHtml5ParserEnabled', true);
$dompdf = new Dompdf($options);

// Load HTML content
$html = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 50px;
        }

        #certificate {
            border: 2px solid #333;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
    <title>Certificate</title>
</head>
<body>
    <div id='certificate'>
        <h1>Certificate of Completion</h1>
        <p>This is to certify that</p>
        <h2>{$row_Recordset2['fullname']}</h2>
        <p>has successfully completed the course on</p>
        <h3>{$row_Recordset2['trade']}</h3>
        <p>on</p>
        <p>March 5, 2024</p>
    </div>
</body>
</html>
";

// Load HTML into Dompdf
$dompdf->loadHtml($html);

// Set paper size (A4)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first save it to a variable)
$output = $dompdf->output();

// Save PDF to a file
file_put_contents('certificate.pdf', $output);

// Output the generated PDF to the browser
$dompdf->stream('certificate.pdf', array('Attachment' => 0));