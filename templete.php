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


$sql_cv = "SELECT * FROM `templetes`";
$result_tem = mysqli_query($conn, $sql_cv);
?>



<!-- ==============templete-sec-heading================== -->

<?php

include('header.php');
include('navbar.php');
?>
<div id="table-content">
<?php 
 include('uploads/pdf.php')
?>
</div>

<button onclick="generatePDF()">Download PDF</button>

<script>
  function generatePDF() {
    var table = document.getElementById('table-content').innerHTML;
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'uploads/down.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.responseType = 'blob';

    xhr.onload = function () {
      if (xhr.status === 200) {
        var blob = new Blob([xhr.response], { type: 'application/pdf' });
        var url = window.URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.href = url;
        a.download = 'table.pdf';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);
      }
    };

    xhr.send('table=' + encodeURIComponent(table));
  }
</script>

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



        <!-- <input type="text" value="<?php echo htmlspecialchars($htmlContent); ?>"> -->



        <?php



        while ($cv = mysqli_fetch_assoc($result_tem)) {
          $phpFilePath = './uploads/' . $cv['templete_file'];
          $phpContent = file_get_contents($phpFilePath);
        ?>


          <textarea style="width: 100%; height:20rem" name="" value="<?= $phpContent ?>" id=""></textarea>

          <div class="col-md-4 col-lg-3">
            <div class="cv_templete_img">
              <div style="width:90%">
                <span style="position:absolute"><b><?= $cv['templete_name'] ?> </b></span>
                <div class="temp_img">
                  <!-- <img src="./image/cv-image.png"  alt=""> -->
                  <img src="<?php echo './uploads/' . $cv['templete_img']; ?>" alt="">
                  <a href="#">
                  </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    <?php } ?>
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

<!-- 
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
</script> -->
<?php
include('footer.php');
?>