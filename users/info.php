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
  <!-- ===============per_info_heading===================== -->
  <div class="container mt-5">
    <div class="info-panel">
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
              <td><?= @$per_info['fname'] ?></td>
              <td><?= @$per_info['fname'] ?></td>
              <td><?= @$per_info['father_name'] ?></td>
              <td><?= @$per_info['gender'] ?></td>
              <td><?= @$per_info['gender'] ?></td>
              <td><?= @$per_info['profession'] ?></td>
              <td><?= @$per_info['dob'] ?></td>
              <td><?= @$per_info['website'] ?></td>
              <td><?= @$per_info['per_no'] ?></td>
              <td><?= @$per_info['tel_no'] ?></td>
              <td><?= @$per_info['email'] ?></td>
              <td><?= @$per_info['country'] ?></td>
              <td><?= @$per_info['city'] ?></td>
              <td><?= @$per_info['about_us'] ?></td>
              <td><img style="width:50px; height:50px; border-radius:50%" src="../uploads/images/<?= $per_info['user_img'] ?>" alt="Image"></td>

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
      <div class="table-heading mt-5 ">
        <h3>Education</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Instutute Name</th>
              <th>Dagree</th>
              <th>Total Marks</th>
              <th>Obtain Marks</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Field </th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $a = 1;
              $i = 1;
              while ($edu_data = mysqli_fetch_assoc($edu_res)) {
                $a = $a++;
                $i = $i++;

              ?>
                <tr>
                  <th><?= @$a++ ?></th>
                  <td><?= @$edu_data['instutute_name'] ?></td>
                  <td><?= @$edu_data['dagree'] ?></td>
                  <td><?= @$edu_data['total_marks'] ?></td>
                  <td><?= @$edu_data['obtain_marks'] ?></td>
                  <td><?= @$edu_data['deg_st_date'] ?></td>
                  <td><?= @$edu_data['deg_end_date'] ?></td>
                  <td><?= @$edu_data['field'] ?></td>
                  <td>
                    <a href="./info.php?del_edu=<?= $edu_data['edu_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                    <span data-bs-toggle="modal" data-bs-target="#education_modal"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none" class="bx bxs-pencil"></i></span>
                  </td>
                </tr>
              <?php    }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ===============Education_heading-End======================= -->

      <!-- ===============Skill_heading===================== -->
      <div class="table-heading mt-5 ">
        <h3>Skills</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Skill Name</th>
              <th>Skill Progress</th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $aa = 1;
              while ($skill_data = mysqli_fetch_assoc($skill_res)) {
                $aa = $aa++;

              ?>
                <tr>
                  <th><?= @$aa++ ?></th>
                  <td><?= @$skill_data['skill'] ?></td>
                  <td><?= @$skill_data['skill_per'] ?></td>
                  <td>
                    <a href="./info.php?del_skill=<?= $skill_data['skill_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                    <!-- <span data-bs-toggle="modal" data-bs-target="#education_modal"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none" class="bx bxs-pencil"></i></span> -->
                  </td>
                </tr>
              <?php    }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ===============Skill-End======================= -->

      <!-- ===============Work experience===================== -->
      <div class="table-heading mt-5 ">
        <h3>Work experience</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Company Name</th>
              <th>Role</th>
              <th>Start Data</th>
              <th>End Data</th>
              <th>Working Details</th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $we = 1;
              while ($work_data = mysqli_fetch_assoc($work_exp_res)) {
                $we = $we++;

              ?>
                <tr>
                  <th><?= @$we++ ?></th>
                  <td><?= @$work_data['company_name'] ?></td>
                  <td><?= @$work_data['role'] ?></td>
                  <td><?= @$work_data['work_st_data'] ?></td>
                  <td><?= @$work_data['work_end_date'] ?></td>
                  <td><?= @$work_data['city_country'] ?></td>
                  <td>
                    <a href="./info.php?del_work_exo=<?= $work_data['work_exp_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                    <!-- <span data-bs-toggle="modal" data-bs-target="#education_modal"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none" class="bx bxs-pencil"></i></span> -->
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- ===============Work experience-End======================= -->
      <!-- ===============Hobbies===================== -->
      <div class="table-heading mt-5 ">
        <h3>Hobbies</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Hobbies</th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $hob = 1;
              while ($hobbies_data = mysqli_fetch_assoc($hobbies_res)) {
                $hob = $hob++;

              ?>
                <tr>
                  <th><?= @$hob++ ?></th>
                  <td><?= @$hobbies_data['hobby'] ?></td>

                  <td>
                    <a href="./info.php?hob_del=<?= $hobbies_data['hobbies_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- ===============Hobbies-End======================= -->
      <!-- ===============Language===================== -->
      <div class="table-heading mt-5 ">
        <h3>Languages</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Language</th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $lan = 1;
              while ($language_data = mysqli_fetch_assoc($language_res)) {
                $lan = $lan++;

              ?>
                <tr>
                  <th><?= @$lan++ ?></th>
                  <td><?= @$language_data['language'] ?></td>

                  <td>
                    <a href="./info.php?lan_del=<?= $language_data['lang_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- ===============Language-End======================= -->
      <!-- ===============Reference===================== -->
      <div class="table-heading mt-5 ">
        <h3>References</h3>
        <div class="table-sec">
          <table class="table text-center table-bordered table-md table-responsive mt-3">
            <thead>
              <th>#</th>
              <th>Reference</th>
              <th>Action</th>

            </thead>
            <tbody>
              <?php
              $ref = 1;
              while ($reference_data = mysqli_fetch_assoc($reference_res)) {
                $ref = $ref++;

              ?>
                <tr>
                  <th><?= @$ref++ ?></th>
                  <td><?= @$reference_data['user_reference'] ?></td>

                  <td>
                    <a href="./info.php?ref_del=<?= $reference_data['ref_id'] ?>"> <i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration:none " class="bx bxs-trash-alt"></i></a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- ===============Language-End======================= -->
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


<!-- ===============per_info_Modal-Start===================== -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <!-- <button type="button" class="btn-close" ></button> -->
      <div class="modal-body user-form ">
        <!-- <h1 style=" cursor: pointer;" class=" text-gray" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></h1> -->
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
<!-- ======================================= -->

<!-- ===============Education_Modal-Start===================== -->
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
                  <label class="form-label">Institute Name</label>
                  <input class="form-control" name="instutute_name" type="text" value="<?= $edu_data['instutute_name'] ?>">
                </div>
              </div>

              <!-- ======================father-name================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Degree</label>
                  <input class="form-control" name="dagree" type="text" value="<?= $per_info['father_name'] ?>">
                </div>
              </div>

              <!-- ======================DOB================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Total Marks</label>
                  <input class="form-control" name="total_marks" type="Date" value="<?= $per_info['dob'] ?>">
                </div>
              </div>
              <!-- ======================Profession (skill)================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Obtains Marks</label>
                  <input name="ob_marks" class="form-control" type="text" value="<?= $per_info['profession'] ?>">
                </div>
              </div>
              <!-- ======================Website================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">Start Date</label>
                  <input name="edu_st_date" class="form-control" type="text" value="<?= $per_info['website'] ?>">
                </div>
              </div>
              <!-- ======================Personal #================== -->
              <div class="col-md-6">
                <div class="mt-3">
                  <label class="form-label">End Date</label>
                  <input name="edu_end_date" class="form-control" type="text" value="<?= $per_info['per_no'] ?>">
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