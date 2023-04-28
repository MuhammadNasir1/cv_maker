<?php include("header.php") ?>

<body style="background-color: #ffffff;">
  <!-- ========logo============ -->
  <div class="container-fluid">
    <div class="row">
      <!-- ==========input-section==== -->
      <div class="col-lg-6">
        <div class="logo">
          <!-- <h3>CRM</h3> -->
          <img style="width:150px;"  src="./image/Cv-Builder-Logo.svg" alt="">
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
              <form>
                <div class="mb-3">
                  <img class="input-icons" src="./image/email-icons.svg" alt="Email">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Enter your email address">
                </div>
                <div class="mb-3">
                  <img class="input-icons" src="./image/passsword-icons.svg" alt="Pass">
                  <label for="Password" class="form-label">Password</label>
                  <input type="password" id="pass" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter your password">
                  <div onclick="showpassword()">
                    <a class="pass-icon" id="pass_hide_icon" href="#"><i class="fa-regular fa-eye-slash"></i></a>
                    <a style="display: none;" class="pass-icon" id="pass_show_icon" href="#"><i
                        class="fa-regular fa-eye"></i></a>
                  </div>
                </div>

                <div class="check-box mb-4">
                  <input class="checkbox" type="checkbox" name="" id=""> <span>Rememebr me</span>
                  <a href="./forgot_Password.php">Forgot Password ?</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
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
          <!-- ==========form-End=========== -->
        </div>
      </div>
      <!-- ==========input-section-End==== -->
      <?php include("Infographic.php") ?>
    </div>
  </div>
