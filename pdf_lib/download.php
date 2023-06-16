<?php
ob_start(); // Start output buffering

require_once('./tcpdf.php');

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('My PDF Document');
$pdf->SetSubject('Example using TCPDF');
$pdf->SetKeywords('TCPDF, PDF, example');

// Add a page
$pdf->SetPrintHeader(false);
$pdf->AddPage();

// $phpFile = $_GET['phpfile'];
ob_start();
include("cv_2.php");
$phpOutput = ob_get_clean();

// Set the HTML content with the included PHP file content
$html = $phpOutput;

// Convert HTML to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to a variable
$pdfContent = $pdf->Output('', 'S');

ob_end_clean(); // Clean and end the output buffer
// Set margins
$pdf->SetMargins(0, 0, 0, true);
// Send appropriate headers for PDF output
header('Content-Type: application/pdf');
header('Content-Length: ' . strlen($pdfContent));
header('Content-Disposition: inline; filename="example.pdf"');

// Output the PDF content
echo $pdfContent;
exit;
?>
