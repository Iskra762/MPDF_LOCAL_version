<?php
require_once __DIR__ . '/vendor/autoload.php';
$htmlFilePath = __DIR__ . '/templates/index.html';
$mpdf = new \Mpdf\Mpdf();
$html = file_get_contents($htmlFilePath);
$mpdf->WriteHTML($html);
$mpdf->Output('result.pdf', \Mpdf\Output\Destination::FILE);
?>