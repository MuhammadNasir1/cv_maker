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
  <!-- <div class="templete-tap-panel">
    <div class="nav-tabs" id="nav-tab" role="tablist">
      <h2 class=" active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Cv</h2>
      <h2 class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Resume</h2>
    </div>

  </div> -->
</div>
<div class="tab-content" id="nav-tabContent">
  <!-- ==============CV-templetes-Start================== -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <div class="container-fluid mt-5">
      <div class="row">
        <!-- ===================cv_templete_Image================== -->
        <?php
        $a = 1;
        $id = 1;
        $ib = 1;
        while ($cv = mysqli_fetch_assoc($result_tem)) {
          $a = $a++;
          $id = $id++;
          $ib = $ib++;
        ?>
          <div class="modal fade view_img-modal" id="staticBackdrop<?= $id++ ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-body">
                  <h1 style=" cursor: pointer;" class="float-end text-gray" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></h1>
                  <div>
                    <img src="<?php echo './uploads/temp_img/' . $cv['templete_img']; ?>" ">
              </div>
            </div>

          </div>
        </div>
      </div>
          <div class=" col-md-4 col-lg-3">
                    <div class="cv_templete_img">
                      <div style="width:90%">
                        <span style="position:absolute"><b><?= $cv['templete_name'] ?> </b></span>
                        <div class="temp_img ">
                          <img src="<?php echo './uploads/temp_img/' . $cv['templete_img']; ?>" ">
                  <div class=" select-templte">

                          <button data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $ib++ ?>">View</button>
                          <button class="clickable-image" data-phpfile="cv_<?= $a++ ?>.php">Select</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <?php } ?>
              </div>
              <!-- ===================cv_templete_Image=================== -->
            </div>
          </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"></div>
      <!-- ==============templetes-navtab-end=======s============= -->
      <div class="templete-pagination mt-5">
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
        var images = document.getElementsByClassName("clickable-image");

        for (var i = 0; i < images.length; i++) {
          images[i].addEventListener("click", function() {
            var phpFile = this.getAttribute("data-phpfile");
            window.location.href = "uploads/down.php?phpfile=" + encodeURIComponent(phpFile);

          });
        }
      </script>
      <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>

      <?php
      include('footer.php');
      ?>


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary">
        Launch static backdrop modal
      </button>