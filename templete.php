<?php
include('db.php');
$sql = "SELECT * FROM `per_info` WHERE user_id = '" . $_SESSION['user_id'] . "'";

$result = mysqli_query($conn, $sql);
$row = (mysqli_fetch_assoc($result));
// =====================Skill-start====================
$sql3 = "SELECT * FROM `skills` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result3 =  mysqli_query($conn, $sql3);
// =====================Skill-ENd=======================


// ============languages-start===========================
$sql2 = "SELECT * FROM `languages` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result2 = mysqli_query($conn, $sql2);
// ============languages-END=============================

// ============	user_references	-start===========================
$sql4 = "SELECT * FROM `user_references` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result4 = mysqli_query($conn, $sql4);
// ============	user_references	-END=============================

// ============	Euacation-start===========================
$sql5 = "SELECT * FROM `education` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result5 = mysqli_query($conn, $sql5);
// ============Eduacation-END=============================
// ============	Work-exp-start===========================
$sql6 = "SELECT * FROM `work_exp` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result6 = mysqli_query($conn, $sql6);
// ============Work-exp-END=============================



?>


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
  $mpdf->Output('output.pdf', 'D');
}
?>

<!-- ==============templete-sec-heading================== -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cv maker</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/cv-form.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="./css/templete.css">
  <link rel="stylesheet" href="./css/user_panel.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
  </link>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

  <style>
    #htmlContainer {
      /* transform: scale(0.90); */
      /* transform-origin: top left; */
      /* width: 100%; */
    }
  </style>
</head>
<?php

include('navbar.php');
?>
<div id="htmlContainer">
  <?php
  // include './uploads/pdf.php';
  include './uploads/index.html';
  ?>
</div>

<div class="container-fluid p-0 pt-3">
  <div class="templete_heading_img">
    <div class="heading">
      <h1><span style="color:#C21010; font-weight: 800;" href="" class="typewrite" data-period="2000" data-type='[ "CV", "Resume" ]'>
          <span class="wrap"></span>
        </span> Templete</h1>
      <h5>Select your favourite and premium CV or resume template, <br> create your template and download it easily </h5>
    </div>
  </div>
</div>

<!-- ==============templetes-navtab-start================== -->
<div class="container">
  <div class="templete-tap-panel">
    <div class="nav-tabs" id="nav-tab" role="tablist">
      <h2 class=" active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cv</h2>
      <h2 class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Resume</h2>
    </div>

  </div>
</div>
<div class="tab-content" id="nav-tabContent">
  <!-- ==============CV-templetes-Start================== -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="container-fluid ">
      <button id="downloadBtn">Download as PDF</button>
      <div class="row">



        <!-- ===================cv_templete_Image================== -->
        <div class="col-md-4 col-lg-3">
          <div class="cv_templete_img">
            <div style="width:90%">
              <div class="temp_img">
                <img src="./image/cv-image.png" alt="">
                <div class="tem_sel_btn">
                  <a href="#">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ===================cv_templete_Image=================== -->


      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>
  <!-- ==============templetes-navtab-end=======s============= -->
  <div class="templete-pagination">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a href="#" class="page-link ">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </div>


  <script>
    $(document).ready(function() {
      $('#downloadBtn').click(function() {
        var htmlContent = $('#htmlContainer').html();
        var request = $.ajax({
          url: '#', // Change the URL to point to generate_pdf.php
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
  <?php
  include('footer.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>

</html>