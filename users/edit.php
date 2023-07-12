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
        window.location.href = "./userinfo.php";
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
        window.location.href = "./userinfo.php";
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
        window.location.href = "./userinfo.php";
      });
    </script>
<?php
  }
}

?>