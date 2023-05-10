<?php
include('header.php');
?>
<!-- ================sidebar-Start============== -->
<div class="sidebar">
  <div class="logo_details">
    <i class="bx bxl-audible icon"></i>
    <div class="logo_name">Cv Maker</div>
    <i class="bx bx-menu" id="btn"></i>
  </div>
  <ul class="nav-list m-0 p-0">
    <li>
      <a href="./userpanel.php">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-user"></i>
        <span class="link_name">Your Information</span>
      </a>
      <span class="tooltip">Your Information</span>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-chat"></i>
        <span class="link_name">Message</span>
      </a>
      <span class="tooltip">Message</span>
    </li>

    <li>
      <a href="#">
        <i class="bx bx-folder"></i>
        <span class="link_name">File Manger</span>
      </a>
      <span class="tooltip">File Manger</span>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-cog"></i>
        <span class="link_name">Settings</span>
      </a>
      <span class="tooltip">Settings</span>
    </li>
    <li class="profile">

      <i class="bx bx-log-out" id="log_out"></i>
    </li>
  </ul>
</div>
<!-- ================sidebar-End================ -->

<section class="home-section">
  <!-- ================navbar-start================== -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <div class="logo">
        <img src="./image/Cv-Builder-Logo.svg" alt="">
      </div>

    </div>
    </div>
    </div>
  </nav>
  <!-- ================navbar-End================== -->
  <!-- ================heading-start================== -->

  <div class="container-fluid p-0">
    <div class="user_information_heading">
      <div class="User_info_heading">
        <div class="text">
          <h1>Your Saved Information</h1>
          <p>Here is Your information.You can Change your information in just oneclick</p>
        </div>
      </div>
    </div>
  </div>
  <!-- ================heading-End==================== -->
  <div class="container">
    <div class="info_form">
      <div class="form_heading">
        <h1>Personal Information</h1>

        <div class="user_inf_form">

          <!-- =============form_start============== -->
          <form action="">
            <div class="container">
              <div class="row">
                <!-- ===============first_name=============== -->
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
            </div>
            <!-- =============form_End================ -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  window.onload = function() {
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector("#btn");
    const searchBtn = document.querySelector(".bx-search")

    closeBtn.addEventListener("click", function() {
      sidebar.classList.toggle("open")
      menuBtnChange()
    })

    searchBtn.addEventListener("click", function() {
      sidebar.classList.toggle("open")
      menuBtnChange()
    })

    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right")
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu")
      }
    }
  }
</script>