<?php
include('header.php')
?>

<style>
  .rounded-full {
    border-radius: 100%;
  }


  
  #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
    box-shadow: 0px 2px 20px 13px rgba(0, 0, 0, 0.100);
  }


  #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
  }

  #sidebar-wrapper .list-group {
    width: 15rem;
  }

  #page-content-wrapper {
    min-width: 100vw;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
  }

  #menu-toggle {
    cursor: pointer;
  }

  .list-group-item {
    border: none;
    padding: 20px 30px;
  }

  .list-group-item.active {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
  }

  @media (min-width: 768px) {
    #sidebar-wrapper {
      margin-left: 0;
    }

    #page-content-wrapper {
      min-width: 0;
      width: 100%;
    }

    #wrapper.toggled #sidebar-wrapper {
      margin-left: -15rem;
    }
  }
</style>
<div class="d-flex " id="wrapper">
  <!-- ==============sidebar-start=================== -->

  <div class="bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading text-center"> <img style="width:10rem" src="./image/Cv-Builder-Logo.svg" alt=""></div>
    <div class="list-group list-group-flush my-3">
      <a style="font-size:1.2rem; font-weight:600 " href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i style="color:#C21010; " class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
      <a style="font-size:1.2rem; font-weight:600 " href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i style="color:#C21010; " class="fas fa-project-diagram me-2"></i>Add Templete</a>
      <a style="font-size:1.2rem; font-weight:600 " href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i style="color:#C21010; " class="fas fa-power-off me-2"></i>Logout</a>
    </div>
  </div>
    <!-- ==============sidebarEnd======================== -->
    <!-- ==============#sidebar-wrapper ======================== -->
    <!-- ==============Page Content ======================== -->
  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg   px-3 py-2">

      <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <div class="logo">
          <img src="./image/Cv-Builder-Logo.svg" alt="">
        </div>
      </div>
    </nav>

    <div class="container-fluid px-4 mt-4">
      <div class="row g-3 my-2">
        <div class="col-lg-3 col-md-6">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div style="line-height: 2rem;">
              <p style="color:#C21010 ; font-weight:600" class="fs-2">Users</p>
              <h3 style="font-weight: 600;" class="fs-3">720K</h3>
            </div>
            <i style="color:#C21010 ; border:2px solid#C21010" class='bx bxs-user  rounded-full fs-1  p-3'></i>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div style="line-height: 2rem;">
              <p style="color:#C21010 ; font-weight:600" class="fs-2">Users</p>
              <h3 style="font-weight: 600;" class="fs-3">720K</h3>
            </div>
            <i style="color:#C21010 ; border:2px solid#C21010" class='bx bxs-user  rounded-full fs-1  p-3'></i>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div style="line-height: 2rem;">
              <p style="color:#C21010 ; font-weight:600" class="fs-2">Users</p>
              <h3 style="font-weight: 600;" class="fs-3">720K</h3>
            </div>
            <i style="color:#C21010 ; border:2px solid#C21010" class='bx bxs-user  rounded-full fs-1  p-3'></i>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
            <div style="line-height: 2rem;">
              <p style="color:#C21010 ; font-weight:600" class="fs-2">Users</p>
              <h3 style="font-weight: 600;" class="fs-3">720K</h3>
            </div>
            <i style="color:#C21010 ; border:2px solid#C21010" class='bx bxs-user  rounded-full fs-1  p-3'></i>
          </div>
        </div>
      </div>

      <div class="row my-5">
        <h3 class="fs-4 mb-3">User Details</h3>
        <div class="col">
          <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
              <tr>
                <th scope="col" width="50">#</th>
                <th scope="col">USER </th>
                <th scope="col">User</th>
                <th scope="col">User</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Harry</td>
                <td>Jonny</td>
                <td>peter</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /#page-content-wrapper -->
</div>

<script>
  var el = document.getElementById("wrapper");
  var toggleButton = document.getElementById("menu-toggle");

  toggleButton.onclick = function() {
    el.classList.toggle("toggled");
  };
</script>