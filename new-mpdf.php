<?php
require_once __DIR__ . '/vendor/autoload.php';

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$html = file_get_contents('index.html');
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
