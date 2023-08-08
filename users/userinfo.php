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
      <a href="./userinfo.php">
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
  <form action="#" method="post">
    <nav class="navbar bg-body-tertiary" style="  box-shadow: 0px 2px 67px 13px rgba(0, 0, 0, 0.348);">
      <div class="container-fluid">
        <a href="../index.php"> <img style="width: 120px;" src="../image/Cv-Builder-Logo.svg" alt="Logo" class="d-inline-block align-text-top"></a>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="info-panel">
        <div class="table-heading "></div>
        <!-- ================personal_inforamtoin====================== -->

        <div class="container">
          <div class="row user-form">
            <div class="col-md-3">
              <div class="mt-4">
                <input type="hidden" name="upd_id" value="<?= @$per_info['user_id'] ?>">
                <label class="form-label">First Name</label>
                <input class="form-control" name="fname" type="text" value="<?= $per_info['fname'] ?>">
              </div>
            </div>
            <!-- ======================l-name================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Last Name</label>
                <input class="form-control" name="lname" type="text" value="<?= $per_info['fname'] ?>">
              </div>
            </div>
            <!-- ======================father-name================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Father Name</label>
                <input class="form-control" name="father_name" type="text" value="<?= $per_info['father_name'] ?>">
              </div>
            </div>
            <!-- ======================Gender================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Gender</label>
                <input class="form-control" name="gender" type="text" value="<?= $per_info['gender'] ?>">
              </div>
            </div>
            <!-- <div class="col-md-3">
            <div class="mt-4">
              <label class="form-label" >Gender</label>
              <select name="gender" id="" class="form-select form-control"">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div> -->
            <!-- ======================DOB================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">DOB (date of birth)</label>
                <input class="form-control" name="dob" type="Date" value="<?= $per_info['dob'] ?>">
              </div>
            </div>
            <!-- ======================Profession (skill)================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Profession (skill)</label>
                <input name="profession" class="form-control" type="text" value="<?= $per_info['profession'] ?>">
              </div>
            </div>
            <!-- ======================Website================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Website</label>
                <input name="website" class="form-control" type="text" value="<?= $per_info['website'] ?>">
              </div>
            </div>
            <!-- ======================Personal #================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Personal No</label>
                <input name="personal_no" class="form-control" type="text" value="<?= $per_info['per_no'] ?>">
              </div>
            </div>
            <!-- ======================Tel #================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Tel No</label>
                <input name="tel_no" class="form-control" type="text" value="<?= $per_info['tel_no'] ?>">
              </div>
            </div>
            <!-- ======================Email================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Email</label>
                <input name="email" class="form-control" type="email" value="<?= $per_info['email'] ?>">
              </div>
            </div>
            <!-- ======================Country================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">Country</label>
                <input name="country" class="form-control" type="text" value="<?= $per_info['country'] ?>">
              </div>
            </div>
            <!-- ======================City================== -->
            <div class="col-md-3">
              <div class="mt-4">
                <label class="form-label">City</label>
                <input name="city" class="form-control" type="text" value="<?= $per_info['city'] ?>">
              </div>
            </div>
            <!-- ======================City================== -->
            <div class="col-md-12">
              <div class="mt-4">
                <label class="form-label">About</label>
                <textarea class="form-control" style="height:150px" name="about_u"><?= $per_info['about_us'] ?></textarea>
                <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" name="upt_perinfo" class="btn update_btn float-end"><i class="bx bxs-pencil"></i> Update</button>
              </div>
            </div>
            <?php


            while ($edu_data = mysqli_fetch_assoc($edu_res)) {


            ?>

              <div class="row mt-5">

                <h3>Education <b><?= @$a++ ?></b></h3>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Institute Name<b></b> </b></label>
                    <input class="form-control" name="institute_name[]" type="text" value="<?= $edu_data['instutute_name'] ?>">
                  </div>
                </div>
                <!-- ==================Dagree===================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Degree</label>
                    <input class="form-control" name="degree[]" type="text" value="<?= $edu_data['dagree'] ?>">
                  </div>
                </div>
                <!-- ===================Total Marks==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Total Marks</label>
                    <input class="form-control" name="total_marks[]" type="number" value="<?= $edu_data['total_marks'] ?>">
                  </div>
                </div>
                <!-- ===================Obtains Marks==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Obtains Marks</label>
                    <input class="form-control" name="ob_marks[]" type="number" value="<?= $edu_data['obtain_marks'] ?>">
                  </div>
                </div>
                <!-- ===================Start Date==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Start Date</label>
                    <input class="form-control" name="edu_st_date[]" type="date" value="<?= $edu_data['deg_st_date'] ?>">
                  </div>
                </div>
                <!-- ===================Start Date==================== -->
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">End Date</label>
                    <input class="form-control" name="edu_end_date[]" type="date" value="<?= $edu_data['deg_end_date'] ?>">
                  </div>
                </div>
                <!-- ===================Start Date==================== -->
                <div class="col-md-12">
                  <div class="mt-4">
                    <label class="form-label">Education Details</label>
                    <textarea class="form-control" name="edu_field[]" id="" style="height:150px"><?= $edu_data['field'] ?></textarea>
                    <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                  </div>
                </div>
              </div>
              <input name="edit_edu[]" type="hidden" value="<?= $edu_data['edu_id'] ?>">
              <div class="row">
                <div class="col-12">
                  <button name="edu_ids" class="btn update_btn float-end ms-2"><i class="bx bxs-pencil"></i> Update</button>
                  <a href="./userinfo.php?del_edu=<?= $edu_data['edu_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- =======================Skill==================== -->
            <?php
            $aa = 1;
            while ($skill_data = mysqli_fetch_assoc($skill_res)) {
              $aa = $aa++;

            ?>
              <div class="row mt-3">
                <h3>Skills <b><?= $aa++ ?></b></h3>
                <div class="col-md-6">
                  <div class="mt-3">
                    <label class="form-label">Skill</label>
                    <input class="form-control " name="text" type="text" value="<?= @$skill_data['skill'] ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mt-3">
                    <label class="form-label">Skill Progress</label>
                    <input class="form-control" name="number" type="number" value="<?= @$skill_data['skill_per'] ?>">
                  </div>
                </div>
                <!-- =======================Skill-End==================== -->
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <a href="./userinfo.php?del_skill=<?= $skill_data['skill_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
                </div>
              </div>
            <?php    }
            ?>
            <?php
            $b = 1;
            while ($work_data = mysqli_fetch_assoc($work_exp_res)) {
              $b = $b++;

            ?>
              <div class="row mt-5">
                <h3>Working Experience <?= $b++ ?></h3>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Company Name</label>
                    <input class="form-control" name="text" type="text" value="<?= @$work_data['company_name'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Role</label>
                    <input class="form-control" name="text" type="text" value="<?= @$work_data['role'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">Start Date</label>
                    <input class="form-control" name="date" type="date" value="<?= @$work_data['work_st_data'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mt-3">
                    <label class="form-label">End Date</label>
                    <input class="form-control" name="date" type="date" value="<?= @$work_data['work_end_date'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mt-4">
                    <label class="form-3">Working Details</label>
                    <textarea class="form-control" name="about_us" id="" style="height:150px"><?= $work_data['city_country'] ?></textarea>
                    <div class="form-text mt-2" style="font-weight: 600;">Enter yourself in less than <b>30</b> words</div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <a href="./userinfo.php?del_work_exo=<?= $work_data['work_exp_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end"><i class="bx bxs-trash-alt"></i> DELETE</button></a>
                </div>
              </div>
            <?php
            }
            ?>
            <div class="row">
              <!-- <h3>Hobbies</h3> -->
              <?php
              $hob = 1;
              while ($hobbies_data = mysqli_fetch_assoc($hobbies_res)) {
                $hob = $hob++;

              ?>
                <div class="col-md-4">
                  <div class="mt-3 ">
                    <label class="form-label">Hobbies <b><?= $hob++ ?></b></label>
                    <input class="form-control" name="date" type="text" value="<?= @$hobbies_data['hobby'] ?>">
                    <div> <a href="./userinfo.php?hob_del=<?= $hobbies_data['hobbies_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>

            <div class="row">
              <!-- <h3>Languages</h3> -->
              <?php

              $lan = 1;
              while ($language_data = mysqli_fetch_assoc($language_res)) {
                $lan = $lan++;

              ?>
                <div class="col-md-4">
                  <div class="mt-3 ">
                    <label class="form-label">Language <b><?= $lan++ ?></b></label>
                    <input class="form-control" name="date" type="text" value="<?= @$language_data['language'] ?>">
                    <div> <a href="./userinfo.php?lan_del=<?= $language_data['lang_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
            <!-- ===================== -->
            <div class="row">
              <!-- <h3>References</h3> -->
              <?php
              $ref = 1;
              while ($reference_data = mysqli_fetch_assoc($reference_res)) {
                $ref = $ref++;

              ?>
                <div class="col-md-4">
                  <div class="mt-3 ">
                    <label class="form-label">Reference <b><?= $ref++ ?></b></label>
                    <input class="form-control" name="date" type="text" value="<?= @$reference_data['user_reference'] ?>">
                    <div> <a href="./userinfo.php?ref_del=<?= $reference_data['ref_id'] ?>" class="text-decoration-none"><button type="button" class="btn update_btn float-end mt-3 "><i class="bx bxs-trash-alt"></i> DELETE</button></a></div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </form>
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