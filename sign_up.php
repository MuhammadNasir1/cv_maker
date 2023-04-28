<?php include("header.php") ?>

<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CV </h3> -->
          <img style="width:150px;"  src="./image/Cv-Builder-Logo.svg" alt="">
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
              <form>
                <div class="mb-3">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/user-icon.svg" alt="Email">
                  <label for="username" class="form-label">username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                    placeholder="Enter your user name">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;"  class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <div class="mb-4">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;"  class="pass-icon" id="pass_show_icon" href="#"><i class="fa-regular fa-eye"></i></a>
                  </div>
                </div>
                <button type="submit" class=" mt-3 btn btn-primary">Register</button>
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
                      <a href="#"><img class="s-icon" src="./image/google-icon.svg" alt=""></a>
                    </li>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- =========socail-icons-End========= -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <?php include("Infographic.php") ?>
    </div>
  </div>
