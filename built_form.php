<?php
include('db.php');
if (isset($_POST['submit'])) {
  // Personal Information
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $father_name = $_POST['father_name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $profession = $_POST['profession'];
  $website = $_POST['website'];
  $personal_no = $_POST['personal_no'];
  $tel_no = $_POST['tel_no'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $about_us = $_POST['about_us'];
  // Personal Information end
  // Eduaction
  $institute_name = $_POST['institute_name'];
  $degree = $_POST['degree'];
  $total_marks = $_POST['total_marks'];
  $ob_marks = $_POST['ob_marks'];
  $edu_st_date = $_POST['edu_st_date'];
  $edu_end_date = $_POST['edu_end_date'];
  $edu_field = $_POST['edu_field'];
  // Eduaction end
  // Skill
  $skill  = $_POST['skill'];
  $skill_range  = $_POST['skill_range'];
  // Skill end
  // Work Experience
  $company_name  = $_POST['company_name'];
  $work_role  = $_POST['work_role'];
  $work_st_date  = $_POST['work_st_date'];
  $work_end_date  = $_POST['work_end_date'];
  $work_city_coun  = $_POST['work_city_coun'];
  // Work Experience
  // ============================
  $hobby  = $_POST['hobby'];
  // ============================
  $languge  = $_POST['languge'];
  // ============================
  $reference  = $_POST['reference'];

  $sql = "

        INSERT INTO `per_info`(`fname`, `lname`, `father_name`, `gender`, `profession`, `dob`, `website`, `per_no`, `tel_no`, `email`, `country`, `city`, `about_us`) VALUES ('$fname','$lname','$father_name','$gender','$dob','$profession','$website','$personal_no','$tel_no','$email','$country','$city','$about_us');


        INSERT INTO `education`(`instutute_name`, `dagree`, `total_marks`, `obtain_marks`,  `deg_st_date`, `deg_end_date`, `field`) VALUES ('$institute_name','$degree','$total_marks','$ob_marks','$edu_st_date','$edu_end_date','$edu_field');


 
        INSERT INTO `skills`( `skill`, `skill_per`) VALUES ('$skill','$skill_range');


        INSERT INTO `work_exp`( `company_name`, `role`, `work_st_data`, `work_end_date`, `city_country`) VALUES ('$company_name ','$work_role','$work_st_date','$work_end_date','$work_city_coun');



        INSERT INTO `hobbies`( `hobby`) VALUES ('$hobby');

        

        INSERT INTO `languages`(`language`) VALUES ('$languge');


        INSERT INTO `user_references`( `user_reference`) VALUES ('$reference');
        
        ";

  $result = mysqli_multi_query($conn, $sql);

  if ($result) {
?>
    <script>
      alert('Data Inserted Successfully');
      swal({
        title: "Good job!",
        text: "Data Inseted!",
        icon: "success",
        button: "Aww yiss!",
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      alert('Oh Fuck');
      swal({
        title: "Oh Fuck!",
        text: "An Error Occured!",
        icon: "danger",
        button: "Aww Shit!",
      });
    </script>
<?php
  }
}
?>


<?php
include('navbar.php');
?>


<div style="height: 100%;">
  <div class="main-heigt">

    <ul class="nav nav-tabs" style="display: none;">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu1">Menu 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Menu 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#menu3">Menu 3</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <!-- ============================1================== -->
      <div class="tab-pane  active" id="home">
        <!-- ====================contact-page-progrss-bar-start==================== -->
        <div class="container-fluid">
          <div class="progres-bar">
            <div class="progress-sec mt-4">
              <a style="color: black;" href="#">
                <p class="text-dark"><span style="color:white;     background:#C21010;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
              </a>
              <a href="#">
                <p><span>2</span> <bdo class="form_progress_txt">Education/Skill</bdo> </p>
              </a>
              <a href="#">
                <p><span>3</span> <bdo class="form_progress_txt">Working Experience</bdo></p>
              </a>
              <a href="#">
                <p><span>4</span> <bdo class="form_progress_txt">Languages/Reference </bdo></p>
              </a>
            </div>
          </div>
        </div>
        <!-- ====================contact-page-progrss-bar-End==================== -->
        <!-- =====================================================================================
        =====================================================================================
        =====================================================================================
        ===================================================================================== -->

        <!-- ============= personal-information-Form-Start============= -->

        <!-- ==========================
    ========================
    ====================== -->
        <form action="#" method="post">

          <div class="container">
            <div class="form-bg mt-2">
              <div class="container">
                <div class="row">
                  <!-- ============ ==form-start============== -->
                  <div class="col-lg-7">
                    <div class="personal-info-form pb-4">
                      <div style="display:flex;  align-items: center; justify-content: space-between;">
                        <h3>Personal Information</h3>

                        <button class="toggle-image-form mt-2" onclick="toggleDivs()">Cv with image</button>
                      </div>
                      <!-- ================user-info-form-Start================== -->

                      <div class="form-info">

                        <div class="container">
                          <div class="row">
                            <!-- ============First Name============ -->
                            <div class="row" id="withimag" style="display:none; ">
                              <div class="row">
                                <div class="col-lg-9 col-md-8 col-7">
                                  <div class="input-field mt-5 ">
                                    <input name="fname" class="w-100" type="text" required>
                                    <label>First Name</label>
                                    <!-- ============Last Name============ -->
                                    <div class="input-field mt-5">
                                      <input name="lname" class="w-100" type="text" required>
                                      <label>Last Name</label>
                                    </div>
                                  </div>
                                </div>
                                <!-- ============image============ -->
                                <div class="col-lg-3 col-md-4 col-5">
                                  <div class="input-field mt-5 ">
                                    <div class="image_input">
                                      <label name="img" class="" for="files"><i class='bx bxs-user'></i> <img style="height:100%; width:100%; position:absolute; " src=""></label>
                                      <input id="files" style="visibility:hidden;" type="file">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- <div class="row" id="withoutimg" style="display:"> -->

                            <!-- ============First Name============ -->
                            <div class="col-md-6" id="withoutimg">
                              <div class="input-field mt-5 ">
                                <input name="fname" class="ph_inp" type="text" required>
                                <label>First Name</label>
                              </div>
                            </div>

                            <!-- ============Last Name============ -->
                            <div class="col-md-6" id="withoutimg">
                              <div class="input-field mt-5 ">
                                <input name="fname" class="ph_inp" type="text" required>
                                <label>First Name</label>
                              </div>
                            </div>
                            <!-- </div> -->
                            <!-- ============Father Name============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="father_name" type="text" required>
                                <label>Father Name</label>
                              </div>
                            </div>
                            <!-- ===============Gender=================== -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <select name="gender" class="form-select gender-option" aria-label="Default select example">
                                  <option selected>Male</option>
                                  <option value="Female">Female</option>
                                  <option value="Other">Other</option>
                                </select>
                                <label>Gender</label>
                              </div>
                            </div>

                            <!-- ============DOB============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="dob" type="date" required>
                                <label>DOB <span>(date of birth)</span></label>
                              </div>
                            </div>
                            <!-- ============Professional============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="profession" type="text" required>
                                <label>Profession <span>(skill)</span></label>
                              </div>
                            </div>
                            <!-- ============Website============ -->
                            <div class="col-md-12">
                              <div class="input-field mt-5">
                                <input name="website" class="email_width" type=" email" required>
                                <label>Website</label>
                              </div>
                            </div>
                            <!-- ============Contact no============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="personal_no" type="text" required>
                                <label>Personal #</label>
                              </div>
                            </div>
                            <!-- ============Telephone No============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="tel_no" type="text" required>
                                <label>Tel #</label>
                              </div>
                            </div>
                            <!-- ============Email============ -->
                            <div class="col-md-12">
                              <div class="input-field mt-5">
                                <input name="email" class="email_width" type=" email" required>
                                <label>Email</label>
                              </div>
                            </div>
                            <!-- ============Country============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <label>Country</label>
                                <?php include("country_dropdown.php") ?>
                              </div>
                            </div>
                            <!-- ============Contact no============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5">
                                <input name="city" type="text" required>
                                <label>City</label>
                              </div>
                            </div>
                            <!-- ============about us ============ -->
                            <div class="col-md-12">
                              <div class="input-field mt-5">
                                <textarea name="about_us" class="email_width form-control" id="" rows="4"> </textarea>
                                <label>About Us</label>
                                <div class="form-text about-us-txt">Enter yourself in less than <b>50</b> words</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- ============Save and Next============ -->
                        <div class="form-buttons mt-4">
                          <button name="submit" type="submit" class="btn btnNext  float-end save-btn"> Next</button>
                        </div>
                      </div>
                      <!-- ================user-info-form-End==================== -->
                    </div>
                  </div>
                  <!-- ==============form-End================ -->

                  <!-- ==============form-tips-sec-start============== -->
                  <div class="col-lg-5" style="  background-color: whitesmoke;">
                    <div class="Form-tip-sec">
                      <h3>TIPS</h3>
                      <div class="text mt-2">
                        <ul>
                          <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                          <li>Lorem ipsum dolor sit amet consectetur, elit. Architecto, dolor.</li>
                          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                          <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                          <li>Lorem ipsum dolor sit amet , adipisicing elit. Architecto, dolor.</li>
                          <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- ==============form-tips-sec-End============== -->
                </div>
              </div>

            </div>
          </div>
          <!-- ============= personal-information-Form-End============== -->
      </div>

      <div class="tab-pane  fade" id="menu1">
        <!-- ====================contact-page-progrss-bar-start==================== -->
        <div class="container-fluid">
          <div class="progres-bar">
            <div class="progress-sec mt-4">
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
              </a>
              <a style="color: black;" href="#">
                <p><span style="color:white;     background:#C21010;">2</span> <bdo class="form_progress_txt">Education/Skills</bdo></p>
              </a>

              <a href="#">
                <p><span>3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
              </a>
              <a href="#">
                <p><span>4</span><bdo class="form_progress_txt">Languages/Reference </bdo></p>
              </a>

            </div>
          </div>
        </div>
        <!-- ====================contact-page-progrss-bar-End==================== -->
        <!-- =====================================================================================
        =====================================================================================
        =====================================================================================
        ===================================================================================== -->
        <div class="container">
          <div class="form-bg mt-4">
            <div class="container">
              <div class="row">
                <!-- ==============form-start============== -->
                <div class="col-lg-7">

                  <div class="personal-info-form pb-4">
                    <h3>Education</h3>
                    <div class="form-info">

                      <!-- ================user-Education-form-Start==================== -->

                      <div id="addeduction">
                        <div class="container">
                          <div class="row">
                            <!-- ============institue Name============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input name="institute_name" id="Institute" type="text" required>
                                <label>Institute Name</label>
                              </div>
                            </div>
                            <!-- ============Dagree Name============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5">
                                <input name="degree" id="Dagree" type="text" required>
                                <label>Degree</label>
                              </div>
                            </div>
                            <!-- ============Total Marks============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5">
                                <input name="total_marks" id="tmarks" type="number" required>
                                <label>Total Marks</label>
                              </div>
                            </div>
                            <!-- ============Obtains Marks============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5">
                                <input name="ob_marks" id="obmarks" type="number" required>
                                <label>Obtains Marks</label>
                              </div>
                            </div>
                            <!-- ============Start-Date============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input name="edu_st_date" id="sdate" type="date" required>
                                <label class="date-lable">Start Date</label>
                              </div>
                            </div>
                            <!-- ============End-Date============ -->
                            <div class="col-md-6 ">
                              <div class="input-field mt-5 ">
                                <input name="edu_end_date" id="edate" type="date" required>
                                <label class="date-lable">End Date</label>
                              </div>
                            </div>
                            <!-- ============Feild============ -->
                            <div class="col-md-12">

                              <div class="input-field mt-5 ">
                                <input name="edu_field" id="Feild" style="width:85%" type="text" required>
                                <a id="submitBtn" onclick="educ_table()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                                <label>Field</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <script>
                        function doFunction() {
                          var Institute = document.getElementById("Institute").value;
                          var Dagree = document.getElementById("Dagree").value;
                          var tmarks = document.getElementById("tmarks").value;
                          var obmarks = document.getElementById("obmarks").value;
                          var sdate = document.getElementById("sdate").value;
                          var edate = document.getElementById("edate").value;
                          var Feild = document.getElementById("Feild").value;
                          var table = document.querySelector("#myTable tbody");
                          var row = table.insertRow(0);
                          var cell1 = row.insertCell(0);
                          var cell2 = row.insertCell(1);
                          var cell3 = row.insertCell(2);
                          var cell4 = row.insertCell(3);
                          var cell5 = row.insertCell(4);
                          var cell6 = row.insertCell(5);
                          var cell7 = row.insertCell(6);
                          var cell8 = row.insertCell(7);
                          cell1.innerHTML = Institute;
                          cell2.innerHTML = Dagree;
                          cell3.innerHTML = tmarks;
                          cell4.innerHTML = obmarks;
                          cell5.innerHTML = sdate;
                          cell6.innerHTML = edate;
                          cell7.innerHTML = Feild;
                          cell8.innerHTML = "<a onclick='deleteedu(this)'><i  class='bx bx-trash-alt'></i></a>";

                          var educinputcontainer = document.getElementById("educinputcontainer");
                          // =====================================
                          var educinpu = document.createElement("input");
                          educinpu.setAttribute("type", "text");
                          educinpu.setAttribute("class", "educinpu");
                          educinpu.setAttribute("name", "institute_name[]");
                          educinpu.value = Institute;
                          educinputcontainer.appendChild(educinpu);
                          // =====================================
                          // =====================================
                          var educinpu2 = document.createElement("input");
                          educinpu2.setAttribute("type", "text");
                          educinpu2.setAttribute("class", "degree");
                          educinpu2.setAttribute("name", "degree[]");
                          educinpu2.value = Dagree;
                          educinputcontainer.appendChild(educinpu2);
                          // =====================================
                          // =====================================
                          var educinpu3 = document.createElement("input");
                          educinpu3.setAttribute("type", "text");
                          educinpu3.setAttribute("class", "total_marks");
                          educinpu3.setAttribute("name", "total_marks[]");
                          educinpu3.value = tmarks;
                          educinputcontainer.appendChild(educinpu3);
                          // =====================================
                          // =====================================
                          var educinpu4 = document.createElement("input");
                          educinpu4.setAttribute("type", "text");
                          educinpu4.setAttribute("class", "ob_marks");
                          educinpu4.setAttribute("name", "ob_marks[]");
                          educinpu4.value = obmarks;
                          educinputcontainer.appendChild(educinpu4);
                          // =====================================
                          // =====================================
                          var educinpu5 = document.createElement("input");
                          educinpu5.setAttribute("type", "text");
                          educinpu5.setAttribute("class", "sdate");
                          educinpu5.setAttribute("name", "edu_st_date[]");
                          educinpu5.value = sdate;
                          educinputcontainer.appendChild(educinpu5);
                          // =====================================
                          // =====================================
                          var educinpu6 = document.createElement("input");
                          educinpu6.setAttribute("type", "text");
                          educinpu6.setAttribute("class", "edate");
                          educinpu6.setAttribute("name", "edu_end_date[]");
                          educinpu6.value = edate;
                          educinputcontainer.appendChild(educinpu6);
                          // =====================================
                          // =====================================
                          var educinpu7 = document.createElement("input");
                          educinpu7.setAttribute("type", "text");
                          educinpu7.setAttribute("class", "Feild");
                          educinpu7.setAttribute("name", "edu_field[]");
                          educinpu7.value = Feild;
                          educinputcontainer.appendChild(educinpu7);
                          // =====================================
                        }

                        const submit = document.querySelector('#submitBtn');
                        submit.addEventListener('click', event => {
                          event.preventDefault();
                          doFunction();
                        });

                        function deleteedu(btn) {
                          var row = btn.parentNode.parentNode;
                          row.parentNode.removeChild(row);
                        }

                        function educ_table() {
                          var educ_table_hide = document.getElementById('educ_table_hide');
                          educ_table_hide.style.display = "block";

                        }
                      </script>
                      <div id="educinputcontainer">

                      </div>
                      <!-- ================user-Education-form-End====================== -->
                    </div>
                    <!-- ======================details-table================ -->
                    <div id="educ_table_hide" class="container-fluid" style="display:none;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input_info_table">
                            <table class="table text-center table-bordered table-sm table-responsive" id="myTable">
                              <thead>
                                <tr>
                                  <!-- <th scope="col">#</th> -->
                                  <th scope="col">Institute Name</th>
                                  <th scope="col">Dagree</th>
                                  <th scope="col">Total Marks</th>
                                  <th scope="col">Obtains Marks</th>
                                  <th scope="col">Start-date</th>
                                  <th scope="col">End-date</th>
                                  <th scope="col">Feild</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody id="mTable">
                                <tr>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table-End================ -->

                    <!-- =====================================================================================
      =====================================================================================
      =====================================================================================
      ===================================================================================== -->


                    <div class="personal-info-form mt-5">
                      <h3>Skills</h3>
                    </div>
                    <!-- ==================Skill-section-Start========================== -->
                    <!-- ============Skill 1============ -->
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- ================user-Skills-form-Start====================== -->

                          <div id="add_iteee" class="mt-5">
                            <div class="input-field" id="myList1">
                              <input name="skill" id="skill_" style="width:85%" type="text" required>
                              <label>Skill 1</label>
                              <a id="addskill" class="input-add " onclick="hideskill()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a>
                            </div>


                          </div>

                          <!-- ================user-Skills-form-End  ====================== -->
                        </div>
                        <div class="col-12">
                          <div class="mt-3 p-3">
                            <div class="form-group row">
                              <label style="color:#C21010; font-weight:500;" for="formControlRange">Skill Progress</label>
                              <input name="skill_range" class="slider range-slider" name="age_slider" id="age_slider" type="range" max="100" min="0" oninput="this.nextElementSibling.value = this.value+'%'">
                              <output>50%</output>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table================ -->
                    <div class="container-fluid" id="skills_table_hide" style="display:none;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input_info_table">
                            <table class="table text-center table-responsive table-bordered table-sm " id="skillTable">
                              <thead>
                                <tr class="pe-1 ps-1">
                                  <th scope="col">Skills</th>
                                  <th scope="col">Progress</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table-End================ -->
                    <script>
                      function skillsFunction() {
                        var skill_ = document.getElementById("skill_").value;
                        var age_slider = document.getElementById("age_slider").value;
                        var table = document.querySelector("#skillTable tbody");
                        var row = table.insertRow(0);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        cell1.innerHTML = skill_;
                        cell2.innerHTML = age_slider + "%";
                        cell3.innerHTML = "<a onclick='deleteskills(this)'><i  class='bx bx-trash-alt'></i></a>";

                        var skillinputcontainer = document.getElementById("skillinputcontainer");
                        var skillinput = document.createElement("input");
                        skillinput.setAttribute("type", "text");
                        skillinput.setAttribute("class", "skillinput");
                        skillinput.setAttribute("name", "skill[]");
                        skillinput.value = skill_;
                        skillinputcontainer.appendChild(skillinput);
                        var skillinput2 = document.createElement("input");
                        skillinput2.setAttribute("type", "text");
                        skillinput2.setAttribute("class", "age_slider");
                        skillinput2.setAttribute("name", "skill_range[]");
                        skillinput2.value = age_slider;
                        skillinputcontainer.appendChild(skillinput2);
                      }

                      const addskill = document.querySelector('#addskill');
                      addskill.addEventListener('click', event => {
                        event.preventDefault();
                        skillsFunction();
                      });

                      function deleteskills(bn) {
                        var row = bn.parentNode.parentNode;
                        row.parentNode.removeChild(row);
                      }


                      function hideskill() {
                        var skills_table_hide = document.getElementById('skills_table_hide');
                        skills_table_hide.style.display = "block";

                      }
                    </script>
                    <div id="skillinputcontainer">

                    </div>
                    <!-- ==================Skill-section-End============================ -->

                    <div class="form-buttons mt-4">
                      <button type="" class="btn btn-danger btnPrevious">Previous</button>

                      <button class="btn btn-danger float-end save-btn btnNext">Next</button>
                    </div>
                  </div>
                </div>
                <!-- ==============form-End================ -->
                <!-- ==============form-tips-sec-start============== -->
                <div class="col-lg-5" style=" background-color: whitesmoke;">
                  <div class="Form-tip-sec">
                    <h3>TIPS</h3>
                    <div class="text mt-2">
                      <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet , adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ==============form-tips-sec-End============== -->
              </div>
            </div>
          </div>
        </div>

        <!-- ============= personal-information-Form-End============== -->
      </div>
      <!-- ========================3333333333333 -->
      <div class="tab-pane  fade" id="menu2">

        <!-- ====================contact-page-progrss-bar-start==================== -->
        <div class="container-fluid">
          <div class="progres-bar">
            <div class="progress-sec mt-4">
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
              </a>
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">2</span><bdo class="form_progress_txt">Education/Skills</bdo> </p>
              </a>
              <a style="color: black;" href="#">
                <p><span style="color:white;     background:#C21010;">3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
              </a>
              <a href="#">
                <p><span>4</span><bdo class="form_progress_txt">Languages/Reference</bdo> </p>
              </a>
            </div>
          </div>
        </div>
        <!-- ====================contact-page-progrss-bar-End==================== -->

        <!-- ============= personal-information-Form-Start============= -->
        <div class="container">
          <div class="form-bg mt-5" style="margin-bottom: 10rem;">
            <div class="container">
              <div class="row">
                <!-- =====================================================================================
      =====================================================================================
      =====================================================================================
      ===================================================================================== -->
                <!-- ==============form-start============== -->
                <div class="col-lg-7">
                  <div class="personal-info-form pb-4">
                    <h3>Working Experience</h3>
                    <div class="form-info">

                      <!-- ================user-work-ex-form-Start ====================== -->

                      <div id="add_work">
                        <div class="container">
                          <div class="row">
                            <!-- ============Company Name============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input name="company_name" id="com_name" type="text" required>
                                <label>Company Name</label>
                              </div>
                            </div>
                            <!-- ============Role============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5 ">
                                <input name="work_role" id="role" type="text" required>
                                <label>Role </label>
                              </div>
                            </div>
                            <!-- ============Start-Date============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input name="work_st_date" id="start_date" type="date" required>
                                <label class="date-lable">Start Date</label>
                              </div>
                            </div>
                            <!-- ============End-Date============ -->
                            <div class="col-md-6 ">
                              <div class="input-field mt-5 ">
                                <input name="work_end_date" id="end_date" type="date" required>
                                <label class="date-lable">End Date</label>
                              </div>
                            </div>
                            <!-- ============City============ -->
                            <div class="col-md-12">

                              <div class="input-field mt-5 ">
                                <input name="work_city_coun" id="city_coun" style="width: 85%;" type="text" required>
                                <label>City & Country</label>
                                <!-- <a onclick="addwork()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a> -->
                                <a id="smitBtn" onclick="wrk_exp()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                              </div>
                            </div>
                            <!-- ============Country============ -->
                          </div>
                        </div>
                      </div>
                      <!-- ======================details-table================ -->
                      <div class="container-fluid" id="work_table_hide" style="display:none;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input_info_table">
                              <table class="table text-center table-responsive table-bordered table-sm " id="mTable">
                                <thead>
                                  <tr class="pe-1 ps-1">
                                    <th scope="col">Company Name</th>
                                    <th>Role</th>
                                    <th>Start-date</th>
                                    <th>End-date</th>
                                    <th>City & Country</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody id="able">
                                  <tr>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ======================details-table-End================ -->
                      <script>
                        function addFunction() {
                          var com_name = document.getElementById("com_name").value;
                          var role = document.getElementById("role").value;
                          var start_date = document.getElementById("start_date").value;
                          var end_date = document.getElementById("end_date").value;
                          var city_coun = document.getElementById("city_coun").value;
                          var table = document.querySelector("#mTable tbody");
                          var row = table.insertRow(0);
                          var cell1 = row.insertCell(0);
                          var cell2 = row.insertCell(1);
                          var cell3 = row.insertCell(2);
                          var cell4 = row.insertCell(3);
                          var cell5 = row.insertCell(4);
                          var cell6 = row.insertCell(5);
                          cell1.innerHTML = com_name;
                          cell2.innerHTML = role;
                          cell3.innerHTML = start_date;
                          cell4.innerHTML = end_date;
                          cell5.innerHTML = city_coun;
                          cell6.innerHTML = "<a onclick='deleteRow(this)'><i  class='bx bx-trash-alt'></i></a>";

                          var workexinputcontainer = document.getElementById("workexinputcontainer");
                          var workexinput = document.createElement("input");
                          workexinput.setAttribute("type", "text");
                          workexinput.setAttribute("class", "workexinput");
                          workexinput.setAttribute("name", "company_name[]");
                          workexinput.value = com_name;
                          workexinputcontainer.appendChild(workexinput);
                          // ===============================
                          var workexinput2 = document.createElement("input");
                          workexinput2.setAttribute("type", "text");
                          workexinput2.setAttribute("class", "workexinput");
                          workexinput.setAttribute("name", "work_role[]");
                          workexinput2.value = role;
                          workexinputcontainer.appendChild(workexinput2);
                          // ===============================================
                          // ===============================
                          var workexinput3 = document.createElement("input");
                          workexinput3.setAttribute("type", "text");
                          workexinput3.setAttribute("class", "workexinput");
                          workexinput.setAttribute("name", "work_st_date[]");
                          workexinput3.value = start_date;
                          workexinputcontainer.appendChild(workexinput3);
                          // ===============================================
                          // ===============================
                          var workexinput4 = document.createElement("input");
                          workexinput4.setAttribute("type", "text");
                          workexinput4.setAttribute("class", "workexinput");
                          workexinput.setAttribute("name", "work_end_date[]");
                          workexinput4.value = end_date;
                          workexinputcontainer.appendChild(workexinput4);
                          // ===============================================
                          // ===============================
                          var workexinput5 = document.createElement("input");
                          workexinput5.setAttribute("type", "text");
                          workexinput5.setAttribute("class", "workexinput");
                          workexinput.setAttribute("name", "work_city_coun[]");
                          workexinput5.value = city_coun;
                          workexinputcontainer.appendChild(workexinput5);
                          // ===============================================
                        }


                        const sumit = document.querySelector('#smitBtn');
                        sumit.addEventListener('click', event => {
                          event.preventDefault();
                          addFunction();
                        });

                        function deleteRow(bn) {
                          var row = bn.parentNode.parentNode;
                          row.parentNode.removeChild(row);
                        }


                        function wrk_exp() {
                          var work_table_hide = document.getElementById('work_table_hide');
                          work_table_hide.style.display = "block";

                        }
                      </script>
                      <div id="workexinputcontainer">
                        <!-- Input fields will be inserted here dynamically -->
                      </div>

                      <!-- ================user-work-ex-form-End---====================== -->

                      <div class="form-buttons mt-5">
                        <button type="" class="btn btn-danger  btnPrevious">Previous</button>

                        <button class="btn btn-danger float-end save-btn btnNext"> Next</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- ==============form-End================ -->
                <!-- ==============form-tips-sec-start============== -->
                <div class="col-lg-5" style=" background-color: whitesmoke;">
                  <div class="Form-tip-sec">
                    <h3>TIPS</h3>
                    <div class="text mt-2">
                      <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet , adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ==============form-tips-sec-End============== -->
              </div>
            </div>
          </div>
        </div>

        <!-- ============= personal-information-Form-End============== -->

      </div>
      <div class="tab-pane  fade" id="menu3">

        <!-- ====================contact-page-progrss-bar-start==================== -->
        <div class="container-fluid">
          <div class="progres-bar">
            <div class="progress-sec mt-4">
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
              </a>
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">2</span> <bdo class="form_progress_txt">Education/Skills</bdo></p>
              </a>
              <a style="color: black;" href="#">
                <p><span style="color:white; border-color:green;     background:green;">3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
              </a>

              <a style="color: black;" href="#">
                <p><span style="color:white;     background:#C21010;">4</span> <bdo class="form_progress_txt">Languages/Reference</bdo></p>
              </a>



            </div>
          </div>
        </div>
        <!-- ====================contact-page-progrss-bar-End==================== -->

        <!-- ============= personal-information-Form-Start============= -->
        <div class="container">
          <div class="form-bg mt-5" style="margin-bottom: 10rem;">
            <div class="container">
              <div class="row">
                <!-- ==============form-start============== -->
                <div class="col-lg-7">
                  <div class="personal-info-form pb-4">
                    <!-- =====================================================================================
      =====================================================================================
      =====================================================================================
      ===================================================================================== -->
                    <!-- ==================hobby-section-Start========================== -->

                    <div class="personal-info-form mt-5">
                      <h3>Hobbies</h3>
                    </div>
                    <div class="container-fluid">
                      <div class="row">

                        <div class="col-md-12">
                          <div id="referad">
                            <div class="input-field mt-5 ">
                              <input name="hobby" id="hobby" style="width:85%" type="text" required>
                              <label>Hobby</label>
                              <a id="addhobby" onclick="hobby_hide()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- ======================details-table================ -->
                    <div class="container-fluid" id="hobby_table_hide" style="display:none;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="input_info_table">
                            <table class="table text-center table-responsive table-bordered table-sm " id="hobbyTable">
                              <thead>
                                <tr class="pe-1 ps-1">
                                  <th scope="col">Hobbies</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table-End================ -->
                    <script>
                      function hobbyFunction() {
                        var hobby = document.getElementById("hobby").value;
                        var table = document.querySelector("#hobbyTable tbody");
                        var row = table.insertRow(0);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        cell1.innerHTML = hobby;
                        cell2.innerHTML = "<a onclick='deletehobby(this)'><i  class='bx bx-trash-alt'></i></a>";
                        var inputFieldsContainer = document.getElementById("inputFieldsContainer");
                        var inputField = document.createElement("input");
                        inputField.setAttribute("type", "text");
                        inputField.setAttribute("class", "hobbyInput");
                        workexinput.setAttribute("name", "hobby[]");
                        inputField.value = hobby;
                        inputFieldsContainer.appendChild(inputField);
                      }

                      const addhobby = document.querySelector('#addhobby');
                      addhobby.addEventListener('click', event => {
                        event.preventDefault();
                        hobbyFunction();
                      });

                      function hobby_hide() {
                        var hobby_table_hide = document.getElementById('hobby_table_hide');
                        hobby_table_hide.style.display = "block";

                      }

                      function deletehobby(btn) {
                        var row = btn.parentNode.parentNode;
                        var hobby = row.cells[0].innerHTML;
                        var inputFields = document.getElementsByClassName("hobbyInput");
                        for (var i = 0; i < inputFields.length; i++) {
                          if (inputFields[i].value === hobby) {
                            inputFields[i].remove();
                            break;
                          }
                        }
                        row.parentNode.removeChild(row);
                      }
                    </script>
                    <div id="inputFieldsContainer">
                      <!-- Input fields will be inserted here dynamically -->
                    </div>
                    <!-- =====================================================================================
      =====================================================================================
      =====================================================================================
      ===================================================================================== -->
                    <!-- ================hobby-refernece-End-====================== -->
                    <h3>Languages</h3>
                    <div class="form-info">

                      <div class="container">
                        <div class="row">
                          <!-- ============Language Name============ -->
                          <!-- ================user-languages-Start-====================== -->

                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <input name="languge" id="langugage" style="width:85%" type="text" required>
                              <label>Language</label>
                              <a id="addlanguage" onclick="hide_language()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Language" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                            </div>
                          </div>

                          <!-- ================user-languages-End-====================== -->
                        </div>
                      </div>

                      <!-- ======================details-table================ -->
                      <div class="container-fluid" id="language_table_hide" style="display:none;">
                        <!-- <div class="container-fluid" id="work_table_hide" style="display:none;"> -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input_info_table">
                              <table class="table text-center table-responsive table-bordered table-sm " id="languageTable">
                                <thead>
                                  <tr class="pe-1 ps-1">
                                    <th scope="col">Languages</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ======================details-table-End================ -->
                      <script>
                        function languageFunction() {
                          var langugage = document.getElementById("langugage").value;
                          var table = document.querySelector("#languageTable tbody");
                          var row = table.insertRow(0);
                          var cell1 = row.insertCell(0);
                          var cell2 = row.insertCell(1);
                          cell1.innerHTML = langugage;
                          cell2.innerHTML = "<a onclick='deletelanguage(this)'><i  class='bx bx-trash-alt'></i></a>";


                          var languageinputcontainer = document.getElementById("languageinputcontainer");
                          var languageinput = document.createElement("input");
                          languageinput.setAttribute("type", "text");
                          languageinput.setAttribute("class", "langugageinput");
                          workexinput.setAttribute("name", "languge[]");
                          languageinput.value = langugage;
                          languageinputcontainer.appendChild(languageinput);
                        }

                        const addlanguage = document.querySelector('#addlanguage');
                        addlanguage.addEventListener('click', event => {
                          event.preventDefault();
                          languageFunction();
                        });

                        function deletelanguage(bn) {
                          var row = bn.parentNode.parentNode;
                          var language = row.cells[0].innerHTML;
                          var inputFields = document.getElementsByClassName("langugageinput");
                          for (var i = 0; i < inputFields.length; i++) {
                            if (inputFields[i].value === language) {
                              inputFields[i].remove();
                              break;
                            }
                          }
                          row.parentNode.removeChild(row);
                        }



                        function hide_language() {
                          var language_table_hide = document.getElementById('language_table_hide');
                          language_table_hide.style.display = "block";

                        }
                      </script>

                      <div id="languageinputcontainer">
                        <!-- Input fields will be inserted here dynamically -->
                      </div>
                      <!-- =====================================================================================
      =====================================================================================
      =====================================================================================
      ===================================================================================== -->
                      <div class="personal-info-form mt-5">
                        <h3>Reference</h3>
                      </div>

                      <!-- ==================Refer-section-Start========================== -->
                      <!-- ============Refer 1============ -->
                      <div class="container-fluid">
                        <div class="row">
                          <!-- ================user-refernece-Start-====================== -->

                          <div class="col-md-12">
                            <div id="referadd">
                              <div class="input-field mt-5 ">
                                <input name="reference" id="referece" style="width:85%" type="text" required>
                                <label>Reference</label>
                                <a id="addrefer" onclick="hiderefer()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
                              </div>
                            </div>
                          </div>

                          <!-- ================user-refernece-End-====================== -->
                        </div>
                      </div>
                      <!-- ======================details-table================ -->
                      <div class="container-fluid" id="refer_table_hide" style="display:none;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="input_info_table">
                              <table class="table text-center table-responsive table-bordered table-sm " id="referTable">
                                <thead>
                                  <tr class="pe-1 ps-1">
                                    <th scope="col">References</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ======================details-table-End================ -->
                      <script>
                        function referFunction() {
                          var referece = document.getElementById("referece").value;
                          var table = document.querySelector("#referTable tbody");
                          var row = table.insertRow(0);
                          var cell1 = row.insertCell(0);
                          var cell2 = row.insertCell(1);
                          cell1.innerHTML = referece;
                          cell2.innerHTML = "<a onclick='deleterefer(this)'><i  class='bx bx-trash-alt'></i></a>";


                          var refereceinputContainer = document.getElementById("refereceinputContainer");
                          var refereceinput = document.createElement("input");
                          refereceinput.setAttribute("type", "text");
                          refereceinput.setAttribute("class", "refereceinput");
                          workexinput.setAttribute("name", "reference[]");
                          refereceinput.value = referece;
                          refereceinputContainer.appendChild(refereceinput);
                        }

                        const addrefer = document.querySelector('#addrefer');
                        addrefer.addEventListener('click', event => {
                          event.preventDefault();
                          referFunction();
                        });

                        function deleterefer(bn) {
                          var row = bn.parentNode.parentNode;
                          var referece = row.cells[0].innerHTML;
                          var inputFields = document.getElementsByClassName("refereceinput");
                          for (var i = 0; i < inputFields.length; i++) {
                            if (inputFields[i].value === referece) {
                              inputFields[i].remove();
                              break;
                            }
                          }
                          row.parentNode.removeChild(row);
                        }


                        function hiderefer() {
                          var refer_table_hide = document.getElementById('refer_table_hide');
                          refer_table_hide.style.display = "block";

                        }
                      </script>
                      <div id="refereceinputContainer">
                        <!-- Input fields will be inserted here dynamically -->
                      </div>
                      <!-- ==================Skill-section-End============================ -->
                      <div class="form-buttons mt-5">
                        <button class="btn btn-danger btnPrevious">Previous</button>
                        <button name="submit" type="submit" class="btn btn-danger float-end save-btn">Save </button>
                      </div>

                    </div>
                  </div>
                </div>
                </form>
                <!-- ==============form-End================ -->
                <!-- ==============form-tips-sec-start============== -->
                <div class="col-lg-5" style=" background-color: whitesmoke;">
                  <div class="Form-tip-sec">
                    <h3>TIPS</h3>
                    <div class="text mt-2">
                      <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet , adipisicing elit. Architecto, dolor.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, dolor.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- ==============form-tips-sec-End============== -->
              </div>
            </div>
          </div>
        </div>

        <!-- ============= personal-information-Form-End============== -->


      </div>
    </div>
  </div>

  <script>
    $('.btnNext').click(function() {
      const nextTabLinkEl = $('.nav-tabs .active').closest('li').next('li').find('a')[0];
      const nextTab = new bootstrap.Tab(nextTabLinkEl);
      nextTab.show();
    });

    $('.btnPrevious').click(function() {
      const prevTabLinkEl = $('.nav-tabs .active').closest('li').prev('li').find('a')[0];
      const prevTab = new bootstrap.Tab(prevTabLinkEl);
      prevTab.show();
    });
  </script>


  <!-- ================ Footer-Start ======================= -->

  <footer class="text-center text-lg-start text-white " style="background-color: black; margin-top:4rem">
    <section style="background-color: #C21010">
      <div class=" d-flex justify-content-between pe-3  ps-3">
        <div class="social-icon-heading">
          <p>Get connected with us on social networks:</p>
        </div>
        <div class="icons pt-1">
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
          <a href="#"><i class='bx bxl-google'></i></a>
        </div>
      </div>
    </section>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-white" href="https://google.com/">Google.com</a>
    </div>
  </footer>
</div>
<!-- ================ Footer-End ======================= -->