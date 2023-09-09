<?php
include('header.php');
include('navbar.php');
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
        window.location.href = "./user_information.php";
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
    $sql = "UPDATE `per_info` SET `fname`='$fname',`lname`='$lname',`father_name`='$father_name',`gender`='$gender',`profession`='$profession',`dob`='$dob',`website`='$website',`per_no`='$personal_no',`tel_no`='$tel_no',`email`='$email',`country`='$country',`city`='$city',`about_us`= '$about_u' WHERE  user_id =  $upd_id";
  }
  $result = mysqli_query($conn, $sql);
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
        window.location.href = "./user_information.php";
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
        window.location.href = "./user_information.php";
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
        window.location.href = "./user_information.php";
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
        window.location.href = "./user_information.php";
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
        window.location.href = "./user_information.php";
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
        window.location.href = "./user_information.php";
      });
    </script>
  <?php
  }
}


// =============hobbies-Table===================
$reference_sql = "SELECT * FROM `user_references`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$reference_res = mysqli_query($conn, $reference_sql);

if (@$_REQUEST['ref_del']) {
  $del_ref = $_REQUEST['ref_del'];
  $del_reference = "DELETE FROM `user_references` WHERE ref_id = '$del_ref'";
  $del_ref_table = mysqli_query($conn, $del_reference);
  if ($del_ref_table) {

  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Your Details Was Delete',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./user_information.php";
      });
    </script>
<?php
  }
}

?>
<section class="user-section">
  <form action="#" method="post">
    <div class="container mt-5">
      <div class="info-panel">
        <div class="table-heading "></div>
        <!-- ================personal_inforamtoin====================== -->

        <div class="container">
          <div class="row user-form">
            <div class="col-md-3">
              <div class="mt-4">
                <input type="hidden" name="upd_id" value="<?= @$per_info['user_id'] ?>">
                <label class="form-label">First Name</label>
                <input class="form-control" name="fname" type="text" value="<?= $per_info['fname'] ?>">
              </div>
            </div>
            <!-- ======================l-name================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Last Name</label>
                <input class="form-control" name="lname" type="text" value="<?= $per_info['fname'] ?>">
              </div>
            </div>
            <!-- ======================father-name================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Father Name</label>
                <input class="form-control" name="father_name" type="text" value="<?= $per_info['father_name'] ?>">
              </div>
            </div>
            <!-- ======================Gender================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Gender</label>
                <input class="form-control" name="gender" type="text" value="<?= $per_info['gender'] ?>">
              </div>
            </div>
            <!-- <div class="col-md-3">
            <div class="mt-4">
              <label class="form-label" >Gender</label>
              <select name="gender" id="" class="form-select form-control"">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div> -->
            <!-- ======================DOB================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">DOB (date of birth)</label>
                <input class="form-control" name="dob" type="Date" value="<?= $per_info['dob'] ?>">
              </div>
            </div>
            <!-- ======================Profession (skill)================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Profession (skill)</label>
                <input name="profession" class="form-control" type="text" value="<?= $per_info['profession'] ?>">
              </div>
            </div>
            <!-- ======================Website================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Website</label>
                <input name="website" class="form-control" type="text" value="<?= $per_info['website'] ?>">
              </div>
            </div>
            <!-- ======================Personal #================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Personal No</label>
                <input name="personal_no" class="form-control" type="text" value="<?= $per_info['per_no'] ?>">
              </div>
            </div>
            <!-- ======================Tel #================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Tel No</label>
                <input name="tel_no" class="form-control" type="text" value="<?= $per_info['tel_no'] ?>">
              </div>
            </div>
            <!-- ======================Email================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Email</label>
                <input name="email" class="form-control" type="email" value="<?= $per_info['email'] ?>">
              </div>
            </div>
            <!-- ======================Country================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Country</label>
                <input name="country" class="form-control" type="text" value="<?= $per_info['country'] ?>">
              </div>
            </div>
            <!-- ======================City================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">City</label>
                <input name="city" class="form-control" type="text" value="<?= $per_info['city'] ?>">
              </div>
            </div>
            <!-- ======================City================== -->
            <div class="col-md-12">
              <div class="mt-4">
                <label class="form-label">About</label>
                <textarea class="form-control" style="height:150px" name="about_u"><?= $per_info['about_us'] ?></textarea>
                <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" name="upt_perinfo" class="btn update_btn float-end"><i class="bx bxs-pencil"></i> Update</button>
              </div>
            </div>
            <?php


            while ($edu_data = mysqli_fetch_assoc($edu_res)) {


            ?>

              <div class="row mt-5">

                <h3>Education <b><?= @$a++ ?></b></h3>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Institute Name<b></b> </b></label>
                    <input class="form-control" name="institute_name[]" type="text" value="<?= $edu_data['instutute_name'] ?>">
                  </div>
                </div>
                <!-- ==================Dagree===================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Degree</label>
                    <input class="form-control" name="degree[]" type="text" value="<?= $edu_data['dagree'] ?>">
                  </div>
                </div>
                <!-- ===================Total Marks==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Total Marks</label>
                    <input class="form-control" name="total_marks[]" type="number" value="<?= $edu_data['total_marks'] ?>">
                  </div>
                </div>
                <!-- ===================Obtains Marks==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Obtains Marks</label>
                    <input class="form-control" name="ob_marks[]" type="number" value="<?= $edu_data['obtain_marks'] ?>">
                  </div>
                </div>
                <!-- ===================Start Date==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Start Date</label>
                    <input class="form-control" name="edu_st_date[]" type="date" value="<?= $edu_data['deg_st_date'] ?>">
                  </div>
                </div>
                <!-- ===================Start Date==================== -->
                <div class="col-md-3">
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
              </div>
              <input name="edit_edu[]" type="hidden" value="<?= $edu_data['edu_id'] ?>">
              <div class="row">
                <div class="col-12">
                  <!-- <button name="edu_ids" class="btn update_btn float-end ms-2"><i class="bx bxs-pencil"></i> Update</button> -->
                  <a href="./user_information.php?del_edu=<?= $edu_data['edu_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- =======================Skill==================== -->
            <?php
            $aa = 1;
            while ($skill_data = mysqli_fetch_assoc($skill_res)) {
              $aa = $aa++;

            ?>
              <div class="row mt-3">
                <h3>Skills <b><?= $aa++ ?></b></h3>
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
              </div>
              <!-- =======================Skill-End==================== -->
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <a href="./user_information.php?del_skill=<?= $skill_data['skill_id'] ?>" class="text-decoration-none ms-3"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
            </div>
          </div>
        <?php    }
        ?>
        <?php
        $b = 1;
        while ($work_data = mysqli_fetch_assoc($work_exp_res)) {
          $b = $b++;

        ?>
          <div class="row mt-5">
            <h3>Working Experience <?= $b++ ?></h3>
            <div class="col-md-3">
              <div class="mt-3">
                <label class="form-label">Company Name</label>
                <input class="form-control" name="text" type="text" value="<?= @$work_data['company_name'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="mt-3">
                <label class="form-label">Role</label>
                <input class="form-control" name="text" type="text" value="<?= @$work_data['role'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="mt-3">
                <label class="form-label">Start Date</label>
                <input class="form-control" name="date" type="date" value="<?= @$work_data['work_st_data'] ?>">
              </div>
            </div>
            <div class="col-md-3">
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
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <a href="./user_information.php?del_work_exo=<?= $work_data['work_exp_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
            </div>
          </div>
        <?php
        }
        ?>
        <div class="row">
          <h3 class="mt-5">Hobbies</h3>
          <?php
          $hob = 1;
          while ($hobbies_data = mysqli_fetch_assoc($hobbies_res)) {
            $hob = $hob++;

          ?>
            <div class="col-md-4">
              <div class="mt-3 " style="position:relative">
                <label class="form-label">Hobbies <b><?= $hob++ ?></b></label>
                <input class="form-control" name="date" type="text" value="<?= @$hobbies_data['hobby'] ?>">
                <a href="./user_information.php?hob_del=<?= $hobbies_data['hobbies_id'] ?>"> <span style="position:absolute; margin-left: 94%;top: 38px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                <!-- <div> <a href="./user_information.php?hob_del=<?= $hobbies_data['hobbies_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div> -->
              </div>
            </div>
          <?php
          }
          ?>
        </div>

        <div class="row">
          <h3 class="mt-5">Languages</h3>
          <?php

          $lan = 1;
          while ($language_data = mysqli_fetch_assoc($language_res)) {
            $lan = $lan++;

          ?>
            <div class="col-md-4">
              <div class="mt-3 position-relative">
                <label class="form-label">Language <b><?= $lan++ ?></b></label>
                <input class="form-control" name="date" type="text" value="<?= @$language_data['language'] ?>">
                <a href="./user_information.php?lan_del=<?= $language_data['lang_id'] ?>"> <span style="position:absolute; margin-left: 94%;top: 38px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                <!-- <div> <a href="./user_information.php?lan_del=<?= $language_data['lang_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div> -->
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <!-- ===================== -->
        <div class="row">
          <h3 class="mt-5">References</h3>
          <?php
          $ref = 1;
          while ($reference_data = mysqli_fetch_assoc($reference_res)) {
            $ref = $ref++;

          ?>
            <div class="col-md-4">
              <div class="mt-3 position-relative ">
                <label class="form-label">Reference <b><?= $ref++ ?></b></label>
                <input class="form-control" name="date" type="text" value="<?= @$reference_data['user_reference'] ?>">
                <a href="./user_information.php?hob_del=ref_del=<?= $reference_data['ref_id'] ?>"> <span style="position:absolute; margin-left: 94%;top: 38px;"><i class="fa-solid fa-trash" style="color:#c21010"> </i></span></a>
                <!-- <div> <a href="./user_information.php?" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div> -->
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        </div>
      </div>
    </div>
    </div>

  </form>
</section>
<?php
include('footer_links.php');
?>