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
      <a href="./index.php">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="./user_information.php">
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

<!-- ======================================= -->
<section class="home-section">
  <div class="container">
    <div class="info-panel">
      <div class="table">
        <table>

        </table>
      </div>
    </div>
  </div>

</section>
<!-- ======================================= -->
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