<?php
include('../header.php');
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
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="./info.php">
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
  <!-- ================navbar-End==================== -->
  <div class="container-fluid mt-4 ">
    <div class="row g-3">
      <!-- ================downloads_details_box-Start================ -->
      <div class="col-md-6">
        <div class="user_details_box">
          <div class="content">
            <h1> DOWNLOADS<br><span>105<span style="color:white;">K</span></span></h1>
            <div class="icon">
              <i class='bx bxs-download'></i>
            </div>
          </div>
        </div>
      </div>
      <!-- ================downloads_details_box-End================== -->
      <!-- ================Users_details_box-Start================ -->
      <div class="col-md-6">
        <div class="user_details_box">
          <div class="content">
            <h1>Credits  <br><span>10<span style="color:white; font-weight:500">$</span></span></h1>
            <div class="icon">
            <i class='bx bx-dollar' ></i>
            </div>
          </div>
        </div>
      </div>
      <!-- ================Users_details_box-End================== -->
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