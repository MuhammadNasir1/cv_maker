<?php
require 'congfig.php';
@include('config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);



    $_SESSION['access_token'] = $token['access_token'];
    $google_service = new Google_Service_Oauth2($google_client);



    $data = $google_service->userinfo->get();


    if (!empty($data['given_name'])) {
      $_SESSION['user_first_name'] = $data['given_name'];
    }

    if (!empty($data['family_name'])) {
      $_SESSION['user_last_name'] = $data['family_name'];
    }

    if (!empty($data['email'])) {
      $_SESSION['user_email_address'] = $data['email'];
    }

    if (!empty($data['gender'])) {
      $_SESSION['user_gender'] = $data['gender'];
    }

    if (!empty($data['picture'])) {
      $_SESSION['user_image'] = $data['picture'];
    }

    if (!empty($data['id'])) {
      $_SESSION['google_id'] = $data['id'];
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
}

?>
<!-- =================== Navbar-Start =================== -->
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#"><b>LOGO</b></a> -->
    <div class="logo">
      <img src="./image/Cv-Builder-Logo.svg" alt="">
    </div>
    <span class="nav_collapse navbar-toggler">
      <i data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class='bx bx-menu'></i>
    </span>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
        <!-- ================phone-screen-collapse===================== -->
        <div class="nav_sm_drop p-3">
          <p>
            <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              CV <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="collapseExample">
            <div class="mt-2">
              <a href="./personal_info.php">Create cv</a>
              <a href="./personal_info.php">Show cv templete</a>
              <a href="#">How to create CV</a>
            </div>
          </div>
        </div>
        <!-- ================phone-screen-collapse===================== -->
        <!-- ================phone-screen-collapse===================== -->
        <div class="nav_sm_drop pe-3 ps-3">
          <p>
            <a class="" data-bs-toggle="collapse" href="#collaps" role="button" aria-expanded="false" aria-controls="collapseExample">
              Resume <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="collaps">
            <div class="mt-2">
              <a href="./personal_info.php">Create Resume</a>
              <a href="./personal_ssinfo.php">Show resume templete</a>
              <a href="#">How to create resume</a>
            </div>
          </div>
        </div>

        <div class="nav_sm_drop pe-3 ps-3 pt-4">
          <p>
            <a class="" data-bs-toggle="collapse" href="#colla" role="button" aria-expanded="false" aria-controls="collapseExample">
              Others <span class="float-end"><i class='bx bx-chevron-down'></i></span>
            </a>
          </p>
          <div class="collapse ph_dropdown" id="colla">
            <div class="mt-2">
              <a href="./blog.php">blogs</a>
              <a href="./userpanel.php">Setting</a>
              <a href="#">How to create resume</a>
            </div>
          </div>
        </div>
        <!-- ================phone-screen-collapse===================== -->

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CV
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./personal_info.php">Create</a></li>
            <li><a class="dropdown-item" href="./personal_info.php">Templete</a></li>
            <li><a class="dropdown-item" href="#">How to create CV</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resume
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./personal_info.php">Create</a></li>
            <li><a class="dropdown-item" href="./personal_info.php">Templete</a></li>
            <li><a class="dropdown-item" href="#">How to create Resume</a></li>
          </ul>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Others
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./blog.php">BLog</a></li>
            <li><a class="dropdown-item" href="./userpanel.php">Setting</a></li>
            <li><a class="dropdown-item" href="./privacypolicy.php">Privacy & Policy </a></li>
          </ul>
        </li>

      </ul>
      <div style="display: flex;justify-content: flex-end; ">
        <div class="lan_dropdown">
          <div class="btn-group dropstart">
            <img class="flag_img" src="./image/usa.svg" data-bs-toggle="dropdown" aria-expanded="false">

            <ul class="dropdown-menu">
              <li>
                <p><img style="width:25px" src="./image/usa.svg"><span>English</span></p>
              </li>
              <li>
                <p><img style="width:30px" src="./image/sa.svg"><span>Arabic</span></p>
              </li>
            </ul>
          </div>
        </div>

        <?php


        if (@!$_SESSION["loginemail"]) {
          if ($login_button == '') {
            echo '<div class="user_details_dropdown">
          <div class="btn-group dropstart" >
            <img src="' . $_SESSION["user_image"] . '" alt="" data-bs-toggle="dropdown" aria-expanded="false">
            <ul class="dropdown-menu"  style="margin-top:40px">
              <li>
                <p> <img src="' . $_SESSION["user_image"] . '" alt=""><span class="user-name">' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . ' <br>
                <span class="email">' . $_SESSION['user_email_address'] . '</span></span></p>
              </li>
              <li>
                <p><a href="logout.php"><i class="bx bx-log-out"></i> LOGOUT</a></p>
              </li>
  
            </ul>
          </div>
        </div>';
          } else {
            echo '  <a href="./sign_in.php" ><button class="sign_in_btn">Sign in</button></a>';
          }
        }
        echo '<div class="user_details_dropdown">' . @$_SESSION["loginemail"] . '  </div> ';
        ?>


      </div>
    </div>
  </div>
</nav>

<script src="./javascript/index.js"></script>
<!-- =================== Navbar-End ===================== -->