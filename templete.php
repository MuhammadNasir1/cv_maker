<?php

include('header.php');
include('navbar.php');
?>
<?php
include('db.php');
$sql_cv = "SELECT * FROM `templetes`";
$result_tem = mysqli_query($conn, $sql_cv);
?>
<?php
$per_inf = "SELECT * FROM `per_info`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$per_res = mysqli_query($conn, $per_inf);
$per_info =  mysqli_fetch_assoc($per_res);

if (@$_REQUEST['del']) {
  @$del_per = $_REQUEST['del'];
  @$del_per_inf = "DELETE FROM `per_info` WHERE per_info_id = '$del_per'";
  $del_table = mysqli_query($conn, $del_per_inf);

  if ($del_table) {
?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./templete.php";
      });
    </script>
  <?php
  }
}
if (isset($_POST['upt_perinfo'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $father_name = $_POST['father_name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $profession = $_POST['profession'];
  $website = $_POST['website'];
  $personal_no = $_POST['personal_no'];
  $tel_no = $_POST['tel_no'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $about_u = $_POST['about_u'];


  if (!empty($_REQUEST['upd_id'])) {
    $upd_id = $_REQUEST['upd_id'];
    $sql_upd = "UPDATE `per_info` SET `fname`='$fname',`lname`='$lname',`father_name`='$father_name',`gender`='$gender',`profession`='$profession',`dob`='$dob',`website`='$website',`per_no`='$personal_no',`tel_no`='$tel_no',`email`='$email',`country`='$country',`city`='$city',`about_us`= '$about_u' WHERE  user_id =  $upd_id";
  }
  $result = mysqli_query($conn, $sql_upd);
  if ($result) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your Changes Was Update',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./templete.php";
      });
    </script>
  <?php
  }
}

// =============education-Table===================
$edu_sql = "SELECT * FROM `education`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$edu_res =  mysqli_query($conn, $edu_sql);


if (isset($_POST['edu_ids'])) {
  $institute_names = $_POST['institute_name'];
  $degrees = $_POST['degree'];
  $total_marks = $_POST['total_marks'];
  $ob_marks = $_POST['ob_marks'];
  $edu_st_dates = $_POST['edu_st_date'];
  $edu_end_dates = $_POST['edu_end_date'];
  $edu_fields = $_POST['edu_field'];

  for ($i = 0; $i < count($institute_names); $i++) {
    $edit_education = $_POST['edit_edu'][$i] ?? '';
    $institute_name = $institute_names[$i] ?? '';
    $degree = $degrees[$i] ?? '';
    $total_marks = $total_marks[$i] ?? '';
    $ob_marks = $ob_marks[$i] ?? '';
    $edu_st_date = $edu_st_dates[$i] ?? '';
    $edu_end_date = $edu_end_dates[$i] ?? '';
    $edu_field = $edu_fields[$i] ?? '';

    if (!empty($edit_education) && !empty($institute_name) && !empty($degree) && !empty($total_marks) && !empty($ob_marks) && !empty($edu_st_date) && !empty($edu_end_date) && !empty($edu_field)) {
      $edu_sql = "UPDATE `education` SET `instutute_name`='$institute_name', `dagree`='$degree', `total_marks`='$total_marks', `obtain_marks`='$ob_marks', `deg_st_date`='$edu_st_date', `deg_end_date`='$edu_end_date', `field`='$edu_field' WHERE edu_id = $edit_education";

      print_r($edu_sql);
      $edu_result = mysqli_query($conn, $edu_sql);

      if ($edu_result) {
        echo "Success: Education record updated successfully";
      } else {
        echo "Error: Failed to update education record";
      }
    }
  }
}


if (@$_REQUEST['del_edu']) {
  @$del_edu = $_REQUEST['del_edu'];
  @$del_education = "DELETE FROM `education` WHERE edu_id = '$del_edu'";
  $del_edu_table = mysqli_query($conn, $del_education);

  if ($del_edu_table) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./userinfo.php";
      });
    </script>
  <?php
  }
}

// =============Skill-Table===================
$skill_sql = "SELECT * FROM `skills`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$skill_res = mysqli_query($conn, $skill_sql);

if (@$_REQUEST['del_skill']) {
  @$del_skill = $_REQUEST['del_skill'];
  @$del_sk = "DELETE FROM `skills` WHERE skill_id = '$del_skill'";
  $del_skill_table = mysqli_query($conn, $del_sk);
  if ($del_skill_table) {

  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./userinfo.php";
      });
    </script>
  <?php
  }
}

// =============work-exp-Table===================
$work_res = "SELECT * FROM `work_exp`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$work_exp_res = mysqli_query($conn, $work_res);

if (@$_REQUEST['del_work_exo']) {
  $del_work = $_REQUEST['del_work_exo'];
  $del_wor_exp = "DELETE FROM `work_exp` WHERE work_exp_id = '$del_work'";
  $del_wor_exp_table = mysqli_query($conn, $del_wor_exp);
  if ($del_wor_exp_table) {

  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./userinfo.php";
      });
    </script>
  <?php
  }
}
// =============hobbies-Table===================
$hobbies_sql = "SELECT * FROM `hobbies`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$hobbies_res = mysqli_query($conn, $hobbies_sql);

if (@$_REQUEST['hob_del']) {
  $del_hobby = $_REQUEST['hob_del'];
  $del_hobb_exp = "DELETE FROM `hobbies` WHERE hobbies_id = '$del_hobby'";
  $del_hobby_table = mysqli_query($conn, $del_hobb_exp);
  if ($del_hobby_table) {

  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./userinfo.php";
      });
    </script>
  <?php
  }
}


// =============hobbies-Table===================
$languages_sql = "SELECT * FROM `languages`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$language_res = mysqli_query($conn, $languages_sql);

if (@$_REQUEST['lan_del']) {
  $del_lan = $_REQUEST['lan_del'];
  $del_language = "DELETE FROM `languages` WHERE lang_id = '$del_lan'";
  $del_lan_table = mysqli_query($conn, $del_language);
  if ($del_lan_table) {

  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./userinfo.php";
      });
    </script>
<?php
  }
}


// =============hobbies-Table===================
$reference_sql = "SELECT * FROM `user_references`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$reference_res = mysqli_query($conn, $reference_sql);


if (isset($_POST["action"])) {
  if ($_POST["action"] == "delete_ref") {
    delete_ref();
  }
}

function delete_ref()
{
  global $conn;
  $ref_id  = $_POST["ref_id"];

  $del_refere = "DELETE FROM user_references WHERE ref_id = $ref_id";
  $del_refere_res = mysqli_query($conn, $del_refere);

  if ($del_refere_res) {
    echo 1;
  } else {
    echo 0;
  }
}
?>


<!-- ==============templete-sec-heading================== -->



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
<div class="mt-4 edit-details-btn container-fluid  ">
  <a href="./users/userinfo.php" class="text-decoration-none"> <button class=" edit-details-btn me-3"> <i class='bx bxs-pencil'></i> <span class="ms-1">Edit Details</span></button></a>
</div>
<!-- ==============CV-templetes-Start================== -->
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
                <div class="cv_templete_img mt-4">
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
</div>
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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info_tab">
  Launch demo modal
</button>


<div class="modal  fade" id="info_tab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-scrollable">
    <div class="modal-content">


      <div class="modal-body info-modal-scroll">
        <button style="position: absolute;" type="button" class="btn-close float-end " data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- ================= -->
        <ul class="nav nav-tabs" style="display:none;">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#per_info">per_info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#education">education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#skill">Skill</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#work-exp">work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#hoby">Hobbies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#langugage">langugage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#reference">reference</a>
          </li>


        </ul>
        <div class="tab-content" id="myTabContent">
          <!-- =================per_info-start================ -->
          <div class="tab-pane   active" id="per_info">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Personal Information </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Education</span></h3>

                          </div>
                          <div class="col-md-6">
                            <div class="mt-4">
                              <input type="hidden" name="upd_id" value="<?= @$per_info['user_id'] ?>">
                              <label for="" class="form-label">First Name</label>
                              <input class="form-control" name="fname" type="text" value="<?= $per_info['fname'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">Last Name</label>
                              <input class="form-control" name="lname" type="text" value="<?= $per_info['lname'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">Father Name</label>
                              <input class="form-control" name="father_name" type="text" value="<?= $per_info['father_name'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">Gender</label>
                              <input class="form-control" name="gender" type="text" value="<?= $per_info['gender'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">DOB (date of birth)</label>
                              <input class="form-control" name="dob" type="Date" value="<?= $per_info['dob'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">Profession (skill)</label>
                              <input name="profession" class="form-control" type="text" value="<?= $per_info['profession'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label for="" class="form-label">Website</label>
                              <input name="website" class="form-control" type="text" value="<?= $per_info['website'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label class="form-label">Personal No</label>
                              <input name="personal_no" class="form-control" type="text" value="<?= $per_info['per_no'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label class="form-label">Tel No</label>
                              <input name="tel_no" class="form-control" type="text" value="<?= $per_info['tel_no'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class=" mt-4">
                              <label class="form-label">Email</label>
                              <input name="email" class="form-control" type="email" value="<?= $per_info['email'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label class="form-label">Country</label>
                              <input name="country" class="form-control" type="text" value="<?= $per_info['country'] ?>">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="mt-4">
                              <label class="form-label">City</label>
                              <input name="city" class="form-control" type="text" value="<?= $per_info['city'] ?>">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="mt-4">
                              <label class="form-label">About</label>
                              <textarea class="form-control" style="height:150px" name="about_u"><?= $per_info['about_us'] ?></textarea>
                              <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                            </div>
                          </div>
                          <div class="col-12">
                            <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" name="upt_perinfo" class="btn text-white float-end">Change</button>

                          </div>

                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right-tab">
                  <div style="margin-top:36vh; position:fixed; ">
                    <i style="font-size:28px;   color:#C21010; margin-left:10px" class="fa-solid fa-angles-right  btnNext"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- =================per_info-end================= -->

          <!-- ===================Education-start=================== -->
          <div class="tab-pane " id="education">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px;color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <?php


                while ($edu_data = mysqli_fetch_assoc($edu_res)) {


                ?>
                  <div class="col-1023">
                    <div class="info-modal-form">
                      <form action="#" method="post">
                        <div class="container">
                          <div class="row">
                            <div class="col-12">
                              <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Education </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Skills</span></h3>
                            </div>

                            <div class="col-md-6">
                              <div class="mt-4">
                                <label class="form-label">Institute Name<b></b> </b></label>
                                <input class="form-control" name="institute_name[]" type="text" value="<?= $edu_data['instutute_name'] ?>">
                              </div>
                            </div>
                            <!-- ==================Dagree===================== -->
                            <div class="col-md-6">
                              <div class="mt-3">
                                <label class="form-label">Degree</label>
                                <input class="form-control" name="degree[]" type="text" value="<?= $edu_data['dagree'] ?>">
                              </div>
                            </div>
                            <!-- ===================Total Marks==================== -->
                            <div class="col-md-6">
                              <div class="mt-3">
                                <label class="form-label">Total Marks</label>
                                <input class="form-control" name="total_marks[]" type="number" value="<?= $edu_data['total_marks'] ?>">
                              </div>
                            </div>
                            <!-- ===================Obtains Marks==================== -->
                            <div class="col-md-6">
                              <div class="mt-3">
                                <label class="form-label">Obtains Marks</label>
                                <input class="form-control" name="ob_marks[]" type="number" value="<?= $edu_data['obtain_marks'] ?>">
                              </div>
                            </div>
                            <!-- ===================Start Date==================== -->
                            <div class="col-md-6">
                              <div class="mt-3">
                                <label class="form-label">Start Date</label>
                                <input class="form-control" name="edu_st_date[]" type="date" value="<?= $edu_data['deg_st_date'] ?>">
                              </div>
                            </div>
                            <!-- ===================Start Date==================== -->
                            <div class="col-md-6">
                              <div class="mt-3">
                                <label class="form-label">End Date</label>
                                <input class="form-control" name="edu_end_date[]" type="date" value="<?= $edu_data['deg_end_date'] ?>">
                              </div>
                            </div>
                            <!-- ===================Start Date==================== -->
                            <div class="col-md-12">
                              <div class="mt-4">
                                <label class="form-label">Education Details</label>
                                <textarea class="form-control" name="edu_field[]" id="" style="height:150px"><?= $edu_data['field'] ?></textarea>
                                <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                              </div>
                            </div>
                            <div class="col-12">
                              <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end">Delete</button>
                            </div>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="right-tab">
                    <div style="margin-top:36vh; position:fixed;">
                      <i style="font-size:28px; float:right; margin-left:10px;  color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                    </div>
                  </div>
              </div>
            </div>
          <?php
                }
          ?>
          </div>
          <!-- ===================Education-End=================== -->



          <!-- =====================Skill-start=============================== -->
          <div class="tab-pane " id="skill">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Skills </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Work Experience </span></h3>
                          </div>
                          <?php

                          while ($skill_data = mysqli_fetch_assoc($skill_res)) {

                          ?>
                            <div class="col-12">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="mt-3">
                                    <label class="form-label">Skill</label>
                                    <input class="form-control " name="text" type="text" value="<?= @$skill_data['skill'] ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mt-3">
                                    <label class="form-label">Skill Progress</label>
                                    <input class="form-control" name="number" type="number" value="<?= @$skill_data['skill_per'] ?>">
                                  </div>
                                </div>

                                <div class="col-12 mt-3">
                                  <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end">Delete</button>
                                </div>
                              </div>
                            </div>
                          <?php    }
                          ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px;margin-left:10px; float:right;color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ========================Skill-end============================ -->




          <!-- =========================work_exp_start=========================== -->
          <div class="tab-pane" id="work-exp">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Work Experience </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Hobbies </span></h3>
                          </div>
                          <?php

                          while ($work_data = mysqli_fetch_assoc($work_exp_res)) {


                          ?>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="mt-3">
                                  <label class="form-label">Company Name</label>
                                  <input class="form-control" name="text" type="text" value="<?= @$work_data['company_name'] ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mt-3">
                                  <label class="form-label">Role</label>
                                  <input class="form-control" name="text" type="text" value="<?= @$work_data['role'] ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mt-3">
                                  <label class="form-label">Start Date</label>
                                  <input class="form-control" name="date" type="date" value="<?= @$work_data['work_st_data'] ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="mt-3">
                                  <label class="form-label">End Date</label>
                                  <input class="form-control" name="date" type="date" value="<?= @$work_data['work_end_date'] ?>">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="mt-4">
                                  <label class="form-3">Working Details</label>
                                  <textarea class="form-control" name="about_us" id="" style="height:150px"><?= $work_data['city_country'] ?></textarea>
                                  <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                                </div>
                              </div>
                              <div class="col-12 mt-3 mb-4">
                                <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end">Delete</button>
                              </div>
                            </div>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; margin-left:10px; float:right; color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =========================work_exp_end=========================== -->



          <!-- =========================hoby_start=========================== -->
          <div class="tab-pane " id="hoby">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Hobbies </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Language </span></h3>
                          </div>
                        </div>
                        <div class="row">
                          <?php

                          while ($hobbies_data = mysqli_fetch_assoc($hobbies_res)) {


                          ?>
                            <div class="col-md-6">
                              <div class="mt-3 position-relative">
                                <label class="form-label">Hobbies </label>
                                <input class="form-control" name="date" type="text" value="<?= @$hobbies_data['hobby'] ?>">
                               <a > <span style="position:absolute;     margin-left: 92%;top: 34px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                                <!-- <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end mt-3">Delete</button> -->
                              </div>
                            </div>

                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; margin-left:10px; float:right; color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- =========================hoby_end=========================== -->





          <!-- =======================Language============================= -->
          <div class="tab-pane " id="langugage">
            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Language </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> Reference </span></h3>
                          </div>

                        </div>
                        <div class="row">
                          <?php

                          while ($language_data = mysqli_fetch_assoc($language_res)) {


                          ?>
                            <div class="col-md-6">
                              <div class="mt-3 position-relative ">
                                <label class="form-label">Language </label>
                                <input class="form-control" name="date" type="text" value="<?= @$language_data['language'] ?>">
                                <a> <span style="position:absolute;     margin-left: 92%;top: 34px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                                <!-- <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end mt-3">Delete</button> -->
                              </div>
                            </div>

                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="right-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; margin-left:10px; float:right; color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ========================Language============================ -->




          <!-- =======================reference============================= -->
          <div class="tab-pane " id="reference">

            <div class="container-fluid p-0">
              <div class="" style="display:grid;  grid-template-columns: 5% 90% 5%;">
                <div class="left-tab">
                  <div style="margin-top:36vh; position:fixed;">
                    <i style="font-size:28px; color:#C21010;" class="fa-solid fa-angles-left btnPrevious"></i>

                  </div>
                </div>
                <div class="col-1023">
                  <div class="info-modal-form">
                    <form action="#" method="post">
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <h3 class="text-center  " style="color:black; font-weight:600"> <span class="btnPrevious" style="cursor: pointer;   ">Reference </span><span style="color:#000000a4; font-size:12px; cursor: pointer; " class="btnNext"> <i class="fa-solid fa-angle-right" style="color:#C21010;"></i> ......... </span></h3>
                          </div>


                        </div>
                        <div class="row">
                          <?php

                          while ($reference_data = mysqli_fetch_assoc($reference_res)) {


                          ?>
                            <div class="col-md-6" id="del_refere">
                              <div class="mt-3 position-relative">
                                <label class="form-label">Reference </label>
                                <input class="form-control" name="date" type="text" value="<?= @$reference_data['user_reference'] ?>">
                                <a onclick="delete_refer(<?= $reference_data['ref_id'] ?>);"><span style="position:absolute;     margin-left: 92%;top: 34px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                                <!-- <button style="background: linear-gradient(168deg, #c21010 0%, #4c0d0d 80%)" class="btn text-white float-end mt-3">Delete</button> -->
                              </div>
                            </div>

                          <?php
                          }
                          ?>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="right-tab">
                <div style="margin-top:36vh; position:fixed;">
                  <i style="font-size:28px; margin-left:10px; float:right; color:#C21010;" class="fa-solid fa-angles-right  btnNext"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ========================reference============================ -->






      </div>
    </div>
  </div>
</div>
</div>
<script>
  function delete_refer(ref_id) {
    $(document).ready(function() {
      $.ajax({
        url: '#', // Replace with the actual URL of your PHP script
        type: 'post',
        data: {
          ref_id: ref_id,
          action: "delete_ref",
        },
        success: function(response) {
          console.log("Response from server:", response);

          if (response == 1) {
            alert("Data Deleted Successfully");
            $('#' + ref_id).remove(); // Remove the element with the matching ID
          } else if (response == 0) {
            alert("Data Cannot Be Deleted");
          }
        },
        error: function(xhr, status, error) {
          console.error("AJAX Error:", error);
        }
      });
    });
  }


  $('.btnNext').click(function() {
    const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
    const nextTab = new bootstrap.Tab(nextTabLinkEl);
    nextTab.show();
  });

  $('.btnPrevious').click(function() {
    const prevTabLinkEl = $('.nav-tabs .active').closest('li').prev('li').find('a')[0];
    const prevTab = new bootstrap.Tab(prevTabLinkEl);
    prevTab.show();
  });
</script>
<?php
include('footer.php');
?>
<?php
include('footer_links.php');
?>