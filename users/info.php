<?php
include('../header.php');
?>
<?php
include("../db.php");
include("./edit.php");
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
  <nav class="navbar bg-body-tertiary" style="  box-shadow: 0px 2px 67px 13px rgba(0, 0, 0, 0.348);">
    <div class="container-fluid">
      <a href="../index.php"> <img style="width: 120px;" src="../image/Cv-Builder-Logo.svg" alt="Logo" class="d-inline-block align-text-top"></a>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="info-panel">
      <!-- ===============per_info_heading===================== -->
      <div class="table-heading ">
        <h3>Personal Information</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Father Name</th>
              <th>Gender</th>
              <th>Profession</th>
              <th>DOB</th>
              <th>Website </th>
              <th>Personal #</th>
              <th>Tel #</th>
              <th>Email</th>
              <th>Country</th>
              <th>City</th>
              <th>About us</th>
              <th>Image</th>
              <th>Action</th>
            </thead>
            <tbody>
              <th>1</th>
              <td><?= $per_info['fname'] ?></td>
              <td><?= $per_info['fname'] ?></td>
              <td><?= $per_info['father_name'] ?></td>
              <td><?= $per_info['gender'] ?></td>
              <td><?= $per_info['gender'] ?></td>
              <td><?= $per_info['profession'] ?></td>
              <td><?= $per_info['dob'] ?></td>
              <td><?= $per_info['website'] ?></td>
              <td><?= $per_info['per_no'] ?></td>
              <td><?= $per_info['tel_no'] ?></td>
              <td><?= $per_info['email'] ?></td>
              <td><?= $per_info['country'] ?></td>
              <td><?= $per_info['city'] ?></td>
              <td><?= $per_info['about_us'] ?></td>
              <td><img style="width:50px; height:50px; border-radius:50%" src="../uploads/images/<?= $per_info['user_img'] ?>" alt=""></td>

              <td>
                <a href="./info.php?del=<?= $per_info['per_info_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                <span data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none" class="bx bxs-pencil"></i></span>
              </td>
            </tbody>
          </table>
        </div>
      </div>
      <!-- ===============per_info_heading-End===================== -->
      <!-- ===============Education_heading===================== -->
      <div class="table-heading ">
        <h3>Education</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Father Name</th>
              <th>Gender</th>
              <th>Profession</th>
              <th>DOB</th>
              <th>Website </th>
              <th>Personal #</th>

            </thead>
            <tbody>
              <th>1</th>
              <td><?= $per_info['fname'] ?></td>
              <td><?= $per_info['fname'] ?></td>
              <td><?= $per_info['father_name'] ?></td>
              <td><?= $per_info['gender'] ?></td>
              <td><?= $per_info['gender'] ?></td>
              <td><?= $per_info['profession'] ?></td>
              <td><?= $per_info['dob'] ?></td>
              <td><?= $per_info['website'] ?></td>
              <td><?= $per_info['per_no'] ?></td>
              <td>
                <a href="./info.php?del_edu=<?= $per_info['per_info_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                <span data-bs-toggle="modal" data-bs-target="#education_modal"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none" class="bx bxs-pencil"></i></span>
              </td>
            </tbody>
          </table>
        </div>
      </div>
      <!-- ===============per_info_heading-End===================== -->
    </div>
  </div>

</section>

<!-- ===============per_info_Modal-Start===================== -->
<!-- Modal -->
<div class="modal fade " id="education_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body user-form ">
        <form action="#" method="POST">
          <div class="container">
            <div class="row">


              <!-- ======================f-name================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">First Name</label>
                  <input class="form-control" name="fname" type="text" value="<?= $per_info['fname'] ?>">
                </div>
              </div>
              <!-- ======================l-name================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Last Name</label>
                  <input class="form-control" name="lname" type="text" value="<?= $per_info['fname'] ?>">
                </div>
              </div>
              <!-- ======================father-name================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Father Name</label>
                  <input class="form-control" name="father_name" type="text" value="<?= $per_info['father_name'] ?>">
                </div>
              </div>
              <!-- ======================Gender================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label" name="gender">Gender</label>
                  <select name="gender" id="" class="form-select form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
              </div>
              <!-- ======================DOB================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">DOB (date of birth)</label>
                  <input class="form-control" name="dob" type="Date" value="<?= $per_info['dob'] ?>">
                </div>
              </div>
              <!-- ======================Profession (skill)================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Profession (skill)</label>
                  <input name="profession" class="form-control" type="text" value="<?= $per_info['profession'] ?>">
                </div>
              </div>
              <!-- ======================Website================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Website</label>
                  <input name="website" class="form-control" type="text" value="<?= $per_info['website'] ?>">
                </div>
              </div>
              <!-- ======================Personal #================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Personal #</label>
                  <input name="personal_no" class="form-control" type="text" value="<?= $per_info['per_no'] ?>">
                </div>
              </div>
              <!-- ======================Tel #================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Tel #</label>
                  <input name="tel_no" class="form-control" type="text" value="<?= $per_info['tel_no'] ?>">
                </div>
              </div>
              <!-- ======================Email================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Email</label>
                  <input name="email" class="form-control" type="email" value="<?= $per_info['email'] ?>">
                </div>
              </div>
              <!-- ======================Country================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Country</label>
                  <input name="country" class="form-control" type="text" value="<?= $per_info['country'] ?>">
                </div>
              </div>
              <!-- ======================City================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">City</label>
                  <input name="city" class="form-control" type="text" value="<?= $per_info['city'] ?>">
                </div>
              </div>
              <!-- ======================City================== -->
              <div class="col-md-12">
                <div class="mt-3">
                  <label class="form-label">About</label>
                  <textarea class="form-control" name="about_us" id="" style="height:150px"><?= $per_info['about_us'] ?></textarea>
                  <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                </div>
              </div>

            </div>
          </div>

      </div>
      <div class="modal-footer modal_foter">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
        <button class="btn update_btn" name="upt_perinfo">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ===============per_info_Modal-End======================= -->
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