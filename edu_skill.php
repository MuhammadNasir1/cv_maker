<?php



include('db.php');
if (isset($_POST['submit'])) {
  $institute_names = $_POST['institute_name'];
  $degrees = $_POST['degree'];
  $total_marks = $_POST['total_marks'];
  $ob_marks = $_POST['ob_marks'];
  $edu_st_dates = $_POST['edu_st_date'];
  $edu_end_dates = $_POST['edu_end_date'];
  $edu_fields = $_POST['edu_field'];
  $skills = $_POST['skill'];
  $skill_ranges = $_POST['skill_range'];

  for ($i = 0; $i < count($institute_names); $i++) {
    $institute_name = $institute_names[$i];
    $degree = $degrees[$i];
    $total_mark = $total_marks[$i];
    $ob_mark = $ob_marks[$i];
    $edu_st_date = $edu_st_dates[$i];
    $edu_end_date = $edu_end_dates[$i];
    $edu_field = $edu_fields[$i];
    $skill = $skills[$i];
    $skill_range = $skill_ranges[$i];
    $sql = "INSERT INTO `education`(`user_id`,`instutute_name`, `dagree`, `total_marks`, `obtain_marks`,  `deg_st_date`, `deg_end_date`, `field`) VALUES ('" . $_SESSION['user_id'] . "', '$institute_name','$degree','$total_mark','$ob_mark','$edu_st_date','$edu_end_date','$edu_field')";
    $result = mysqli_query($conn, $sql);

    $sql1 = "INSERT INTO `skills` (`user_id`, `skill`, `skill_per`) VALUES ('" . $_SESSION['user_id'] . "','$skill', '$skill_range')";
    $result1 = mysqli_query($conn, $sql1);

    if ($result && $result1) {
      header('location: work-exp.php');
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}

$id = "SELECT * FROM `users`";

$id_res = mysqli_query($conn, $id);
$userid = mysqli_fetch_assoc($id_res);

if (@$_REQUEST['edited']) {
  $educ = "SELECT * FROM `education`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
  $educ = "SELECT * FROM `education`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
  $edu_res = mysqli_query($conn, $educ);
  // $use_del = mysqli_fetch_assoc($edu_res);

  $skill_da =  "SELECT * FROM `skills`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
  $skill_res = mysqli_query($conn,   $skill_da);

  $tbody = '<div class="container-fluid">';
  $skill_table = '<div class="container-fluid" >';
} else {
  $tbody = '<div id="educ_table_hide" class="container-fluid" style="display:none">';
  $skill_table = '<div class="container-fluid" id="skills_table_hide" style="display:none;">';
}


if (@$_REQUEST['del']) {
  $del_id = $_REQUEST['del'];
  $sql = "DELETE FROM `education` WHERE edu_id = '$del_id'";

  $del_table = mysqli_query($conn, $sql);

  if ($del_table) {
    header("location: ./edu_skill.php?edited={$_SESSION['user_id']}");
  }
}

if (@$_REQUEST['del_skill']) {
  $delte = $_REQUEST['del_skill'];
  $sql_del = "DELETE FROM `skills` WHERE skill_id = '$delte'";
  $del_skill = mysqli_query($conn, $sql_del);
  print_r($delte);

  if ($sql_del) {
    header("location: ./edu_skill.php?edited={$_SESSION['user_id']}");
  }
}
?>

<?php

include("header.php");
include("navbar.php");
?>
<div class="container-fluid">
  <div class="progres-bar">
    <div class="progress-sec mt-4">
      <a style="color: black;" href="./personal_info.php">
        <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
      </a>
      <a style="color: black;" href="./edu_skill.php">
        <p><span style="color:white;     background:#C21010;">2</span> <bdo class="form_progress_txt">Education/Skills</bdo></p>
      </a>

      <a href="./work-exp.php">
        <p><span>3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
      </a>
      <a href="./hob_lan_ref.php">
        <p><span>4</span><bdo class="form_progress_txt">Languages/Reference </bdo></p>
      </a>

    </div>
  </div>
</div>
<form action="#" method="post">
  <input type="hidden" name="del_id" value="<?= @$use_del['user_id'] ?>">
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
                          <input class="rem_value" name="" id="Institute" type="text">
                          <label>Institute Name</label>
                        </div>
                      </div>
                      <!-- ============Dagree Name============ -->
                      <div class="col-md-6">

                        <div class="input-field mt-5">
                          <input name="" id="Dagree" type="text">
                          <label>Degree</label>
                        </div>
                      </div>
                      <!-- ============Total Marks============ -->
                      <div class="col-md-6">

                        <div class="input-field mt-5">
                          <input name="" id="tmarks" type="number">
                          <label>Total Marks</label>
                        </div>
                      </div>
                      <!-- ============Obtains Marks============ -->
                      <div class="col-md-6">

                        <div class="input-field mt-5">
                          <input name="" id="obmarks" type="number">
                          <label>Obtains Marks</label>
                        </div>
                      </div>
                      <!-- ============Start-Date============ -->
                      <div class="col-md-6">
                        <div class="input-field mt-5 ">
                          <input name="" id="sdate" type="date">
                          <label class="date-lable">Start Date</label>
                        </div>
                      </div>
                      <!-- ============End-Date============ -->
                      <div class="col-md-6 ">
                        <div class="input-field mt-5 ">
                          <input id="edate" type="date" required>
                          <label class="date-lable">End Date</label>
                        </div>
                      </div>
                      <!-- ============Feild============ -->
                      <div class="col-md-12">

                        <div class="input-field mt-5 ">
                          <!-- <input name="edu_field[]" id="Feild" style="width:85%" type="text" required> -->
                          <textarea name="" id="Feild" style="width: 85%; border-radius: 5px; height:40px" id=""></textarea>

                          <a id="educationbtn" onclick="educ_table()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                          <label>Education Details</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <script>
                  function removeById(elementId) {
                    $(elementId).remove();
                  }
                  $("#educationbtn").on('click', function(event) {
                    var id = Math.floor(Math.random() * 999999) + 1;
                    var Institute = $("#Institute").val();
                    var Dagree = $("#Dagree").val();
                    var tmarks = $("#tmarks").val();
                    var obmarks = $("#obmarks").val();
                    var sdate = $("#sdate").val();
                    var edate = $("#edate").val();
                    var Feild = $("#Feild").val();

                    $("#education_table").append('<tr id="education_table_id_' + id + '">\
            <td><input  name="institute_name[]"  type="hidden" value="' + Institute + '">' + Institute + ' </td>\
          <td><input  name="degree[]" type="hidden" value="' + Dagree + '">' + Dagree + '</td>\
          <td><input name="total_marks[]"  type="hidden" value="' + tmarks + '">' + tmarks + '</td>\
          <td><input name="ob_marks[]"  type="hidden" value="' + obmarks + '">' + obmarks + '</td>\
          <td><input name="edu_st_date[]"  type="hidden" value="' + sdate + '">' + sdate + '</td>\
          <td><input name="edu_end_date[]"  type="hidden" value="' + edate + '">' + edate + '</td>\
          <td><input name="edu_field[]"  type="hidden" value="' + Feild + '">' + Feild + '</td>\
          <td><a onclick="removeById(`#education_table_id_' + id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                  });

                  function educ_table() {
                    var educ_table_hide = document.getElementById('educ_table_hide');
                    educ_table_hide.style.display = "block";

                  }
                </script>

                <!-- ================user-Education-form-End====================== -->
              </div>
              <!-- ======================details-table================ -->
              <!-- <div id="educ_table_hide" class="container-fluid" style="display:none"> -->
              <?php echo @$tbody ?>

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
                      <?php

                      if (@$_REQUEST['edited']) {
                        while (@$educ_det = mysqli_fetch_assoc($edu_res)) {
                      ?>


                          <tbody id="education_table">
                            <tr>
                              <td><?= @$educ_det['instutute_name'] ?></td>
                              <td><?= @$educ_det['instutute_name'] ?></td>
                              <td><?= @$educ_det['dagree'] ?></td>
                              <td><?= @$educ_det['total_marks'] ?></td>
                              <td><?= @$educ_det['deg_st_date'] ?></td>
                              <td><?= @$educ_det['deg_end_date'] ?></td>
                              <td><?= @$educ_det['field'] ?></td>
                              <td>
                                <a href="edu_skill.php?del=<?= $educ_det['edu_id'] ?>"><i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;" class="bx bx-trash-alt"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        <?php

                        }
                      } else {
                        ?>
                        <tbody id="education_table">


                        </tbody>

                      <?php
                      }


                      ?>

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
                      <input name="" id="skill_" style="width:95%" type="text" required>
                      <label>Skill 1</label>
                      <!-- <a id="skill_btn" class="input-add " onclick="hideskill()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a> -->
                    </div>


                  </div>

                  <!-- ================user-Skills-form-End  ====================== -->
                </div>
                <div class="col-12">
                  <div class="mt-3 p-3">
                    <div class="form-group row">
                      <div>

                        <label style="color:#C21010; font-weight:500; position:relative" for="formControlRange">Skill Progress</label>
                        <input name="" style="width: 88%; position:relative" class="slider range-slider" name="age_slider" id="age_slider" type="range" max="100" min="0" oninput="this.nextElementSibling.value = this.value+'%'">
                        <output style="position: absolute; margin-top: 30px; margin-left: -38px;"><b>50%</b></output>
                        <a id="skill_btn" class="input-add" onclick="hideskill()"><img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ======================details-table================ -->
            <!-- <div class="container-fluid" id="skills_table_hide" style="display:none;"> -->
            <?php
            echo "$skill_table"
            ?>
            <div class="row">
              <div class="col-md-12">
                <div class="input_info_table">
                  <table class="table text-center table-responsive table-bordered table-sm ">
                    <thead>
                      <tr class="pe-1 ps-1">
                        <th scope="col">Skills</th>
                        <th scope="col">Progress</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <?php
                    if (@$_REQUEST['edited']) {
                      while (@$skill_det = mysqli_fetch_assoc($skill_res)) {
                    ?>
                        <tbody id="skillTable">
                          <tr>
                            <td><?= $skill_det['skill'] ?></td>
                            <td><?= $skill_det['skill_per'] ?></td>
                            <td>
                              <a href="edu_skill.php?del_skill=<?= @$skill_det['skill_id'] ?>"><i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;" class="bx bx-trash-alt"></i></a>
                            </td>
                          </tr>
                        </tbody>

                      <?php
                      }
                    } else {

                      ?>
                      <tbody id="skillTable">

                      </tbody>
                    <?php
                    }

                    ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ======================details-table-End================ -->
          <script>
            function removeId(elementId) {
              $(elementId).remove();
            }
            $("#skill_btn").on('click', function(event) {
              var skill_id = Math.floor(Math.random() * 999999) + 1;
              var skill_ = $("#skill_").val();
              var age_slider = $("#age_slider").val();

              $("#skillTable").append('<tr id="product_idN_' + skill_id + '">\
            <td><input name="skill[]" type="hidden" value="' + skill_ + '">' + skill_ + ' </td>\
          <td><input name="skill_range[]" type="hidden" value="' + age_slider + '">' + age_slider + '%' + '</td>\
          <td>\
            <a onclick="removeById(`#product_idN_' + skill_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a>\
            </td>\
          </tr>');
            });



            function hideskill() {
              var skills_table_hide = document.getElementById('skills_table_hide');
              skills_table_hide.style.display = "block";

            }
          </script>
          <div id="skillinputcontainer">

          </div>
          <!-- ==================Skill-section-End============================ -->

          <div class="form-buttons mt-4">
            <a href="./personal_info.php?edit=<?= $_SESSION['user_id'] ?>"> <button type="button" class="btn btn-danger btnPrevious">Previous</button></a>

            <a href="./work-exp.php"> <button type="submit" name="submit" class="btn btn-danger float-end save-btn btnNext">Next</button></a>
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
              <li>Order: Start with your most recent or highest level of education and work backward chronologically.</li>
              <li>Format: Include the name of the institution, degree or qualification earned, field of study, and the dates
                of attendance or graduation.</li>
              <li>Relevant Information: Highlight any honors, awards, or notable achievements during your academic journey.</li>
              <li>Relevant Skills: Tailor your skills section to include those directly related to the job you're applying for. This could include technical skills, software proficiency, languages spoken, or specific industry knowledge.</li>

              <li>Categorize: Organize your skills into categories (e.g., technical skills, interpersonal skills) to provide clarity and ease of reading.</li>
              <li>Highlight Strengths: Place the most critical and relevant skills at the beginning of each category to grab the reader's attention.</li>
              <li>Use Keywords: Incorporate keywords from the job description to align your skills with the employer's requirements and increase the likelihood of your resume being selected by applicant tracking systems (ATS).</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ==============form-tips-sec-End============== -->
    </div>
  </div>
  </div>
  </div>
</form>

<!-- ============= personal-information-Form-End============== -->


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
    <a class="text-white" href="https://thewebconcept.com/">thewebconcept.com</a>
  </div>
</footer>
<!-- ================ Footer-End ======================= -->


<!-- Modal -->
<button style="display:none" id="myButton" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#tipsbuttom">This is</button>
<div class="modal tips_modal fade" id="tipsbuttom" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-body ">
        <h1 style=" cursor: pointer;" class="float-end text-gray" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></h1>
        <h2 class="mt-4">FREE <span style="color:black" ;>TIPS</span></h2>
        <p>Make sure you click on this plus button. If you don't click this button your information cannot be saved</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <div class="input-img">
                <img class="mt-5" src="./image/tips-input.svg" alt="">

              </div>
            </div>
            <div class="col-4">
              <div class="input-img">
                <img src="./image/tips_plus.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  function autoClickButton() {
    var button = document.getElementById('myButton');
    setTimeout(function() {
      button.click();
    }, 4000);
  }

  window.addEventListener('load', autoClickButton);
</script>