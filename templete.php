<?php
include('db.php');
$sql_cv = "SELECT * FROM `templetes`";
$result_tem = mysqli_query($conn, $sql_cv);
?>

<!-- ==============templete-sec-heading================== -->

<?php

include('header.php');
include('navbar.php');
?>
<!-- <img src="image1.jpg" id="image1" data-phpfile="pdf.php">
<img src="image2.jpg" id="image2" data-phpfile="pdf2.php">
<img src="image3.jpg" id="image3" data-phpfile="php_code3.php"> -->
<!-- <script>
  var image1 = document.getElementById("image1");
  var image2 = document.getElementById("image2");
  var image3 = document.getElementById("image3");

  image1.addEventListener("click", function() {
    var phpFile = image1.getAttribute("data-phpfile");
    window.location.href = "uploads/down.php?phpfile=" + encodeURIComponent(phpFile);
  });

  image2.addEventListener("click", function() {
    var phpFile = image2.getAttribute("data-phpfile");
    window.location.href = "uploads/down.php?phpfile=" + encodeURIComponent(phpFile);
  });

  image3.addEventListener("click", function() {
    var phpFile = image3.getAttribute("data-phpfile");
    window.location.href = "uploads/down.php?phpfile=" + encodeURIComponent(phpFile);
  });
</script> -->
<img src="image1.jpg" class="clickable-image" data-phpfile="pdf.php">
<img src="image2.jpg" class="clickable-image" data-phpfile="pdf2.php">
<img src="image3.jpg" class="clickable-image" data-phpfile="php_code3.php">
<script>

  // Get all the image elements with a specific class
  var images = document.getElementsByClassName("clickable-image");

  // Loop through the images
  for (var i = 0; i < images.length; i++) {
    // Add click event listener to each image
    images[i].addEventListener("click", function() {
      // Get the PHP file path from the data attribute
      var phpFile = this.getAttribute("data-phpfile");
      // Redirect to the next page and pass the PHP file path as a query parameter
      window.location.href = "uploads/down.php?phpfile=" + encodeURIComponent(phpFile);
    });
  }
</script>



<form action="./uploads/down.php" method="post">
  <button type="submit">DOWNLOAD PDF</button>
</form>
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
      <div class="row">
        <!-- ===================cv_templete_Image================== -->
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

<?php
include('footer.php');
?>