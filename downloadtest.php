<?php
require_once 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project setup

use Mpdf\Mpdf;

if (isset($_POST['html'])) {
  $htmlContent = $_POST['html'];

  // Create a new instance of mpdf
  $mpdf = new Mpdf();

  // Load the HTML content
  $mpdf->WriteHTML($htmlContent);

  // Output the PDF as a response
  $mpdf->Output('output.pdf', 'S');
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>HTML to PDF Conversion</title>
  <style>
    #htmlContainer {
      width: 100%;
      height: 100vh;
      overflow: auto;
      border: 1px solid #ccc;
    }
  </style>
</head>

<body>
  <div id="htmlContainer">
    <?php
     include 'pdf.php'; 
     ?>
    <?php 
    // include 'your_file.html'; 
    ?>
  </div>

  <button id="downloadBtn">Download as PDF</button>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#downloadBtn').click(function() {
        var htmlContent = $('#htmlContainer').html();
        var request = $.ajax({
          // url: 'generate_pdf.php',
          url: 'downloadtest.php',
          method: 'POST',
          data: {
            html: htmlContent
          },
          xhrFields: {
            responseType: 'blob' // Set the response type as blob
          }
        });

        request.done(function(data) {
          // Create a download link for the PDF
          var blob = new Blob([data]);
          var link = document.createElement('a');
          link.href = window.URL.createObjectURL(blob);
          link.download = 'converted.pdf';
          link.click();
        });

        request.fail(function(jqXHR, textStatus) {
          console.error('Request failed: ' + textStatus);
        });
      });
    });
  </script>
</body>

</html>