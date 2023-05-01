<?php
require 'congfig.php';
@include('config.php');
if (isset($_REQUEST['submit'])) {
  $forgot_email = $_POST['forgot_email'];
  $existemail = "select * from `login` WHERE email = '$forgot_email' ";
  $result = mysqli_query($conn, $existemail);
  $allemails = mysqli_num_rows($result);
  if ($allemails == 1) {
    echo  "email is foutn";
  }
  else{
   $input_red = 'style="border-color:#C21010"';
    $showerror = "Email  not match";
    $showeror = "<i style='color:#000000; font-size:22px' class='bx bxs-error-circle'></i>";
  }
}

?>
<?php include("header.php") ?>

<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CRM</h3> -->
          <img style="width:150px;  " class="mt-2" src="./image/Cv-Builder-Logo.svg" alt="">
        </div>
        <div class="sign-input">
          <div class="forgot-page-txt ">
            <h4 class="form-heading">Forgot Password?</h4>
            <h3>Please enter the email assaciated with
              <br>You account and we'll send an email with
              <br>link, where you can change your passsword.
            </h3>
          </div>
          <!-- ==========form-start=========== -->
          <div class="form-section">
            <div class="form">
              <form action="#" method="POST">
                <div class="mb-3 mt-5  position-relative">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input <?php echo @$input_red ?> name="forgot_email" type="email" class="form-control" placeholder="Enter your email address">
                  <span class="" style="margin-left:95%; margin-top:-28px ;  position: absolute;"><?php echo  @$showeror ?></span>
                  <div style="color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$showerror ?></b></div>
                </div>
                <button name="submit" type="submit" class=" mt-5 btn btn-primary">Register</button>
              </form>
              <h4 class="mt-4">You Can <a href="./sign_in.php">login here !</a></h4>
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