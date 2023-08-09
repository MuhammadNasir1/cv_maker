<?php
include('header.php');
?>
<link rel="stylesheet" href="./css/user_panel.css">
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
    <div class="info_form h-100 mb-5">
      <div class="form_heading">
        <h1 style="color:black">Personal Information</h1>
        <div class="user_inf_form">
          <!-- =============form_start============== -->
          <form action="">
            <div class="container">
              <div class="row">
                <!-- ===============first_name=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============last_name=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Father_name=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Father Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Gender=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="input-field   mb-3" style="margin-top: 32px;">
                    <select class="form-select gender-option w-100 " aria-label="Default select example">
                      <option selected>Male</option>
                      <option value="1">Female</option>
                      <option value="2">Other</option>
                    </select>
                    <label>Gender</label>
                  </div>
                </div>
                <!-- ===============Father_name=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">DOB (date of birth)</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Profession=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Profession (skill)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Website=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Website</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Persoanl #=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Personal #</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Tel #=============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Tel #</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Email============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Email============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Country</label>
                    <?php include("country_dropdown.php") ?>
                  </div>
                </div>
                <style>
                  .wrapper {
                    width: 100%;
                  }
                </style>
                <!-- ===============City============== -->
                <div class="col-md-12 col-lg-12">
                  <div class="mb-3">
                    <label>About Us</label>
                    <textarea class="email_width form-control w-100" name="" id="" rows="4"> </textarea>
                  </div>
                </div>
                <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                <!-- =============form_End================ -->
                <div class="col-12">
                  <h1 style="color:black">Education</h1>
                </div>
                <!-- ===============Email============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Institute Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Dagree============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Dagree</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Total Marks============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Total Marks</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Obtains Marks============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Obtains Marks</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Start Date============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============End Date============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">End Date</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Feild============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Feild</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                <div class="col-12">
                  <h1 style="color: black;">Skills</h1>
                </div>

                <!-- ===============Skills============== -->
                <div class=" col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Skills</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Range============== -->
                <div class=" col-12">
                  <div class="mb-3 d-flex">
                    <div class="form-group  h-100 w-100" style="  align-items: center;  justify-content: center;">
                      <label style="color:#C21010; font-weight:500;" for="formControlRange">Skill Progress</label>
                      <input class="slider range-slider" name="age_slider" id="age_slider" type="range" max="100" min="0" oninput="this.nextElementSibling.value = this.value+'%'">
                      <output>50%</output>
                    </div>
                  </div>
                </div>
                <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                <div class="col-12">
                  <h1 style="color: black;">Working Experience</h1>
                </div>
                <!-- ===============Company Name============== -->
                <div class=" col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Role============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============Start Date============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============End Date============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">End Date</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <!-- ===============City & Country============== -->
                <div class="col-md-4 col-lg-3">
                  <div class="mb-3">
                    <label class="form-label">City & Country</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="col-12">
                  <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                </div>
                <div class="col-12">
                  <h1 style="color: black;">Hobbies</h1>
                </div>

                <!-- ===============Skills============== -->
                <div class=" col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Hobby</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                <div class="col-12">
                  <h1 style="color: black;">Languages</h1>
                </div>

                <!-- ===============Language============== -->
                <div class=" col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                <div class="col-12">
                  <h1 style="color: black;">References</h1>
                </div>

                <!-- ===============Reference============== -->
                <div class=" col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Reference</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                </div>
                <div class="col-12">
                  <div class="w-50 mt-3 mb-3" style="border: 10px double #C21010; margin:auto; "></div>
                </div>
                <div class="col-12">
                  <div class="form-buttons mt-4 ">
                    <button style="color:white; background:#C21010; padding:8px 16px 8px 16px; border-radius:4px " class=" mb-4 me-3 btn   float-end"> Change</button>
                  </div>
                </div>
              </div>
            </div>

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
<?php
include('footer_links.php');
?>