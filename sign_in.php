<?php include("header.php") ?>

<?php
include('db.php');
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $email = $_POST['email'];
//   $password = md5($_POST['password']);

//   $sql = "SELECT * FROM `login` WHERE email = '$email' AND password = $password";
//   $result = mysqli_query($conn, $sql);
//   $row = mysqli_num_rows($result);
//   if ($row == 1) {
//     $row = mysqli_fetch_assoc($result);
//     session_start();
//     $_SESSION['login'] = true;
//     header("location: cv_maker/sign_up.php");
//   } else {
//     $showError = "Email not match";
//   }
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM `login` WHERE email = '$email' AND password = '$password' ";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_num_rows($result);
  if ($row == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['login'] = true;
    header("location:./index.php");
  } else {
    $showError = "Phone number not match";
  }
}
?>
<?php

require 'congfig.php';
@include('config.php');
// echo '<div align="center">' . $login_button . '</div>';
if (!isset($_SESSION['access_token'])) {

  // $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
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
          <!-- <h3>CRM</h3> -->
          <img style="width:150px;" src="./image/Cv-Builder-Logo.svg" alt="">
        </div>
        <div class="sign-input">
          <div class="sign-txt">
            <h4 class="form-heading">Sign in</h4>
            <h3>If you Don't have an account register</h3>
            <h3>You Can <a href="./sign_up.php">Register here !</a></h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form action="#" method="post">
                <div class="mb-3">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" placeholder="Enter your email address">
                  <span class="" style="margin-left:95%; margin-top:-28px ;  position: absolute;"><?php echo  @$showeror ?></span>
                  <div style="color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$showError ?></b></div>
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="Password" class="form-label">Password</label>
                  <input id="password" name="password" type="password" class="form-control" placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>

                <div class="check-box mb-4">
                  <input class="checkbox" type="checkbox" name="" id=""> <span>Rememebr me</span>
                  <a href="./forgot_Password.php">Forgot Password ?</a>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
              </form>
              <!-- =========socail-icons========= -->
              <div class="socail-icons">
                <p>or continue with</p>
                <div class="icon">
                  <ul>
                    <li>
                      <a href="#"><img src="./image/Facebook.svg" alt=""></a>
                    </li>
                    <li>
                      <a href="#"><img class="s-icon" src="./image/apple-icon.svg" alt=""></a>
                      <?php
                      echo '<li>
                      ' . $login_button . '
                      <!-- <a href="#"><img class="s-icon" src="./image/google-icon.svg" alt="" ></a> -->
                    </li>'
                      ?>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- =========socail-icons-End========= -->
            </div>
          </div>
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <div class="col-lg-6 col-md-5">
        <div class="header-image">
          <div class="image">
            <img src="./image/cv.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>