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
$pdf->AddPage();

// Set some HTML content
$html = '

<h1>HTML to PDF Example</h1>
<p>This is an example of generating a PDF using TCPDF with HTML content.</p>
<table>
  <tr>
    <th>Column 1</th>
    <th>Column 2</th>
  </tr>
  <tr>
    <td>Data 1</td>
    <td>Data 2</td>
  </tr>
</table>
';

// Convert HTML to PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF to a variable
$pdfContent = $pdf->Output('', 'S');

ob_end_clean(); // Clean and end the output buffer

// Send appropriate headers for PDF output
header('Content-Type: application/pdf');
header('Content-Length: ' . strlen($pdfContent));
header('Content-Disposition: inline; filename="example.pdf"');

// Output the PDF content
echo $pdfContent;
exit;
?>

