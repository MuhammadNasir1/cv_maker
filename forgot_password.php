<?php include("header.php") ?>

<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CRM</h3> -->
          <img style="width:150px;  " class="mt-2"  src="./image/Cv-Builder-Logo.svg" alt="">
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
              <form>
                <div class="mb-3 mt-5">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email address">
                </div>
                <button type="submit" class=" mt-5 btn btn-primary">Register</button>
              </form>
              <h4 class="mt-4">You Can <a href="./sign_in.php">login here !</a></h4>
            </div>
          </div>
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <?php include("Infographic.php") ?>
    </div>
  </div>