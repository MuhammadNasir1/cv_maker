<?php

// require_once '../vendor/autoload.php';

// $mpdf = new \Mpdf\Mpdf();
// $mpdf->WriteHTML('<h1>Hello world!</h1><h1>Hello world!</h1>');
// $mpdf->Output();

require_once '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'margin_left' => 4, 'margin_right' => 4, 'margin_top' => 4, 'margin_bottom' => 4, 'margin_header' => 2, 'margin_footer' => 2]);

ob_start();
include($_GET['phpfile']);
$html = ob_get_clean();

$mpdf->WriteHTML($html);
$mpdf->Output();



