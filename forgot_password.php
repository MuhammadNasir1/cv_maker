<?php
require 'congfig.php';
@include('config.php');
$pin = "Enter your email" ;   
if (isset($_REQUEST['submit'])) {
  $forgot_email = $_POST['forgot_email'];
  $existemail = "select * from `users` WHERE email = '$forgot_email' ";
  $result = mysqli_query($conn, $existemail);
  $allemails = mysqli_num_rows($result);
  if ($allemails == 1) {
    // echo  "email Found <br>"; 
    $pin = rand(10000,99999);
    // print_r($pin);
    $pinmessage = "Enter your 5 digit code!";
    $pin = "0 0 0 0 0" ;
    $input_num = "number";
  }
  else{
    $input_red = 'style="border-color:#C21010"';
    $showerror = "Email does  not exist!";
    $showeror = "<i style='color:#C21010; font-size:22px' class='bx bxs-error-circle'></i>";
    $pin = "Enter your email address";
  }
}
// $to  = "";
// $subject = "temp text";
// $message = "Ennter ths number to emial";
// $from = "";
// $header = "from: $from";

// mail($to, $subject , $message ,$header);
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
                  <input <?php echo @$input_red ?> name="forgot_email" type="$input_num" class="form-control" placeholder="<?php echo @$pin ?>">
                  <span class="" style="margin-left:95%; margin-top:-28px ;  position: absolute;"><?php echo  @$showeror ?></span>
                  <div style="   position: absolute;color:#C21010; letter-spacing:0.3px " class="form-text"><b><?php echo  @$showerror , @$pinmessage ?></b></div>
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
        <div class="header-image cv_image_login">
          <div class="image">
            <img src="./image/cv.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
include('footer_links.php');
?>