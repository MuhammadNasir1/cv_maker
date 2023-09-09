<?php
include('header.php');
include('navbar.php');
?>

<?php
$per_inf = "SELECT * FROM `per_info`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
$per_res = mysqli_query($conn, $per_inf);
$per_info =  mysqli_fetch_assoc($per_res);
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
        window.location.href = "./userpanel.php";
      });
    </script>
<?php
  }
}


?>
<div class="container mt-5 mb-5">
  <div class="main-box py-5 px-3">

    <!-- ================personal_inforamtoin====================== -->
    <form action="#" method="post">

      <div class="container user-form">
        <div class="row per_info_data">
          <div class="col-12">
            <div class="top-heading">
              <h4>Personal Information</h4>
            </div>
          </div>
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
              <input class="form-control" name="lname" type="text" value="<?= $per_info['lname'] ?>">
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
              <select name="gender" id="" class="form-select form-control">
                <option value=" male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
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
          <hr class="mt-5">
        </div>
        <div class="row mt-5">
          <div class="top-heading">
            <h4>Education</h4>
          </div>
        </div>
        <div class="row">
          
        </div>
      </div>
    </form>
  </div>
</div>


<?php
include('footer.php');
include('footer_links.php');
?>