<?php
require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
include 'api/pdf.php';
$data = 'api/pdf.php';
$mpdf->WriteHTML('$data');

$mpdf->Output();
?>
