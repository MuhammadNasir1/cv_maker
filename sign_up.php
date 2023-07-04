<?php include("header.php") ?>
<?php
include('db.php');
require 'congfig.php';
@include('config.php');
if (isset($_REQUEST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $existSql = "select * from `users` WHERE email = '$email' ";
  $result = mysqli_query($conn, $existSql);
  $userRow = mysqli_num_rows($result);
  if ($userRow > 0) {
    $input_red = 'style="border-color:#C21010"';
    $showError = "email already Exists";
    $showeror = "<i style='color:#C21010; font-size:22px' class='bx bxs-error-circle'></i>";
  } else {
    if (($password == $cpassword and $email)) {
      $hach = md5($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO `users` (`username`, `email`,  `phone_no`,  `password`, `cpassword`) VALUES ('$username', '$email',  '$phone_no', '$password', '$cpassword')";
      $result = mysqli_query($conn, $sql);

?>
      <script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Thank You for Registration successful',
          showConfirmButton: false,
          timer: 1500
        }).then(function() {
          window.location.href = "./sign_in.php";
        });
      </script>

<?php

    } else {
      $passError = "Passwords not matched";
      $input_pass_eror = 'style="border-color:#C21010"';
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = '<a href="' . $google_client->createAuthUrl() . '"><img class="s-icon" src="./image/google-icon.svg" alt="" ></a>';
}
?>


<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CV </h3> -->
          <img style="width:150px;" src="./image/Cv-Builder-Logo.svg" alt="">
        </div>
        <div class="signup-input">
          <div class="sign-txt signup-txt">
            <h4 class="signup-heading">Sign Up</h4>
            <h3>If you have an account register</h3>
            <h3>You Can <a href="./sign_in.php">login here !</a></h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form action="#" method="post">
                <div class="mb-3">
                  <img class="input-icons" src="./image/user-icon.svg" alt="Email">
                  <label for="Fullname" class="form-label">Full name</label>
                  <input required name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your full name">
                </div>
                <div class="mb-3   position-relative">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input <?php echo @$input_red ?> name="email" type="email" class="form-control" id="email" required placeholder="Enter your email address">
                  <span class="" style="margin-left:95%; margin-top:-28px ;  position: absolute;"><?php echo  @$showeror ?></span>
                  <div style="color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$showError ?></b></div>
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/user-icon.svg" alt="Email">
                  <label for="Fullname" class="form-label">Phone no</label>
                  <input required name="phone_no" type="number" class="form-control" id="phone_no" placeholder="Enter your Phone no">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label">Password</label>
                  <input required <?php echo @$input_pass_eror ?>t name="password" type="password" id="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <div class="mb-4 position-relative">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="cpassword" class="form-label">Conform Password</label>
                  <input required <?php echo @$input_pass_eror ?> name="cpassword" type="password" id="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter your password again">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                    <div style="color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$passError ?></b></div>
                  </div>
                </div>
                <button name="submit" type="submit" class=" mt-3 btn btn-primary">Register</button>
              </form>
            </div>
          </div>
          <!-- ==========form-End=========== -->
          <!-- =========socail-icons========= -->
          <div class="socail-icons mt-2">
            <p>or continue with</p>
            <div class="icon">
              <ul>
                <li>
                  <a href="#"><img src="./image/Facebook.svg" alt=""></a>
                </li>
                <li>
                  <a href="#"><img class="s-icon" src="./image/apple-icon.svg" alt=""></a>
                <li>
                  <?php

                  print_r($login_button);

                  ?>
                </li>
                </li>
              </ul>
            </div>
          </div>
          <!-- =========socail-icons-End========= -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <div class="col-lg-6 col-md-5">
        <div class="header-image cv_image_login">
          <div class="image">
            <img src="./image/cv.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>