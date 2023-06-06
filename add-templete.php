<?php

include("db.php");
if (isset($_POST['submit'])) {
  $templete_name = $_POST['templete_name'];

  $templete_img = $_FILES['templete_img']['name'];
  $temp_img = $_FILES['templete_img']['tmp_name'];
  $target_dir = "uploads/temp_img/";
  $target_file = $target_dir . basename($templete_img);
  if (move_uploaded_file($temp_img, $target_file)) {
  }


  $templete_file = $_FILES['templete_file']['name'];
  $temp_file = $_FILES['templete_file']['tmp_name'];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($templete_file);
  if (move_uploaded_file($temp_file, $target_file)) {
  }


  $sql = "INSERT INTO `templetes` ( `templete_name`, `templete_img`, `templete_file`) VALUES ( '$templete_name', '$templete_img', '$templete_file')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "data inserterd";
  }
}

$sql_cv = "SELECT * FROM `templetes`";
$result_cv = mysqli_query($conn, $sql_cv);
?>





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
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="link_name">Dashboard</span>
      </a>
      <span class="tooltip">Dashboard</span>
    </li>
    <li>
      <a href="./user_information.php">
        <i class="bx bx-pencil"></i>
        <span class="link_name">Add Templete</span>
      </a>
      <span class="tooltip">Add Templete</span>
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
  <div class="container mt-5 bg-white rounded shadow-sm pt-5 pb-5" style="border:2px solid r ">
    <div class="add-templete-form">
      <div class="">
        <form action="#" method="POST" enctype="multipart/form-data">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-md-4">
                <label class="form-label" for=""><b>Templete Name</b></label>
                <input name="templete_name" class=" form-control" type="text">
              </div>
              <div class="col-md-4">
                <label class="form-label" for=""><b>Templete image</b></label>
                <input name="templete_img" class=" form-control" type="file">
              </div>
              <div class="col-md-4">
                <label class="form-label" for=""><b>Templete code</b></label>
                <input name="templete_file" class=" form-control" type="file">
              </div>
              <div> <button class="btn btn-danger float-end mt-4 " type="submit" name="submit">ADD Templete</button></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row my-5">
      <div class="col-12 mt-5">

        <table class="table bg-white rounded shadow-sm  table-hover text-center">
          <thead>
            <tr>
              <th scope="col" width="50">#</th>
              <th scope="col">Templete Name </th>
              <th scope="col">Templte Image</th>
              <th scope="col">Templte File</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $id =  1;
            while ($cv_tem = mysqli_fetch_assoc($result_cv)) {
              $id = $id ++;

            ?>
              <tr>
                <th scope="row"><?= $id++ ?></th>
                <td><?= $cv_tem['templete_name'] ?></td>
                <td> <img style="height: 70px;" src="<?php echo './uploads/temp_img/' . $cv_tem['templete_img']; ?>" alt=""></td>
                <td><?= $cv_tem['templete_file'] ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
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