<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;

if (isset($_POST['table'])) {
  $table = $_POST['table'];

  // Create a new Dompdf instance
  $dompdf = new Dompdf();

  // Load the HTML content
  $dompdf->loadHtml($table);

  // (Optional) Set the paper size and orientation
  $dompdf->setPaper('A4', 'portrait');

  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF
  $output = $dompdf->output();
  echo $output;
}
?>




