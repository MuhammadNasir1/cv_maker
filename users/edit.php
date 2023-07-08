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
        window.location.href = "./info.php";
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
  $about_us = $_POST['about_us'];
  $sql = "UPDATE `per_info` SET `fname`='$fname',`lname`='$lname',`father_name`='$father_name',`gender`='$gender',`profession`='$profession',`dob`='$dob',`website`='$website',`per_no`='$personal_no',`tel_no`='$tel_no',`email`='$email',`country`='$country',`city`='$city',`about_us`='$about_us' WHERE  user_id =  1";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    // header('location: ./info.php');
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your Changes Was Update',
        showConfirmButton: false,
        timer: 1500
      }).then(function() {
        window.location.href = "./info.php";
      });
    </script>
<?php
  }
}

?>