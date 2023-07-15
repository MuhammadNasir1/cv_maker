<?php
include('db.php');
if (isset($_POST['submit'])) {
  $company_names = $_POST['company_name'];
  $work_roles = $_POST['work_role'];
  $work_st_dates = $_POST['work_st_date'];
  $work_end_dates = $_POST['work_end_date'];
  $work_city_countries = $_POST['work_city_coun'];

  for ($i = 0; $i < count($company_names); $i++) {
    $company_name = $company_names[$i];
    $work_role = $work_roles[$i];
    $work_st_date = $work_st_dates[$i];
    $work_end_date = $work_end_dates[$i];
    $work_city_coun = $work_city_countries[$i];

    $sql = "INSERT INTO `work_exp` (`user_id` ,`company_name`, `role`, `work_st_data`, `work_end_date`, `city_country`) VALUES ('" . $_SESSION['user_id'] . "','$company_name', '$work_role', '$work_st_date', '$work_end_date', '$work_city_coun')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "Data inserted successfully";
      header("location: hob_lan_ref.php");
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
}

if (@$_REQUEST['del_h']) {
  $work_exp = "SELECT * FROM `work_exp`  WHERE user_id = '" . $_SESSION['user_id'] . "'";
  $work_res = mysqli_query($conn, $work_exp);
  $table = '<div class="container-fluid" >';
} else {
  $table = '<div class="container-fluid" id="work_table_hide" style="display:none;">';
}


if (@$_REQUEST['del_work']) {
  $del_works = $_REQUEST['del_work'];
  $sql_del_work = "DELETE FROM `work_exp` WHERE work_exp_id = '$del_works'";
  $del_resu =  mysqli_query($conn,   $sql_del_work);
  if ($del_resu) {
    header("location: ./work-exp.php?del_h={$_SESSION['user_id']}");
  }
}
?>
<?php
include("header.php");
include("navbar.php")
?>
<!-- ====================contact-page-progrss-bar-start==================== -->
<div class="container-fluid">
  <div class="progres-bar">
    <div class="progress-sec mt-4">
      <a style="color: black;" href="./personal_info.php">
        <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
      </a>
      <a style="color: black;" href="./edu_skill.php">
        <p><span style="color:white; border-color:green;     background:green;">2</span><bdo class="form_progress_txt">Education/Skills</bdo> </p>
      </a>
      <a style="color: black;" href="./work-exp.php">
        <p><span style="color:white;     background:#C21010;">3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
      </a>
      <a href="./hob_lan_ref.php">
        <p><span>4</span><bdo class="form_progress_txt">Languages/Reference</bdo> </p>
      </a>
    </div>
  </div>
</div>
<!-- ====================contact-page-progrss-bar-End==================== -->

<!-- ============= personal-information-Form-Start============= -->
<form action="#" method="post">
  <div class="container">
    <div class="form-bg mt-5" style="margin-bottom: 10rem;">
      <div class="container">
        <div class="row">

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
                          <input name="" id="com_name" type="text" >
                          <label>Company Name</label>
                        </div>
                      </div>
                      <!-- ============Role============ -->
                      <div class="col-md-6">

                        <div class="input-field mt-5 ">
                          <input name="" id="role" type="text" >
                          <label>Role </label>
                        </div>
                      </div>
                      <!-- ============Start-Date============ -->
                      <div class="col-md-6">
                        <div class="input-field mt-5 ">
                          <input name="" id="start_date" type="date" >
                          <label class="date-lable">Start Date</label>
                        </div>
                      </div>
                      <!-- ============End-Date============ -->
                      <div class="col-md-6 ">
                        <div class="input-field mt-5 ">
                          <input name="" id="end_date" type="date" >
                          <label class="date-lable">End Date</label>
                        </div>
                      </div>
                      <!-- ============City============ -->
                      <div class="col-md-12">

                        <div class="input-field mt-5 ">
                          <!-- <input name="work_city_coun[]" id="city_coun" style="width: 85%;" type="text" required> -->
                          <textarea  id="city_coun" style="width: 85%; border-radius: 5px; height:40px" id=""></textarea>
                          <label>Working Details</label>
                          <!-- <a onclick="addwork()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a> -->
                          <a id="work_btn" onclick="wrk_exp()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                        </div>
                      </div>
                      <!-- ============Country============ -->
                    </div>
                  </div>
                </div>
                <!-- ======================details-table================ -->
                <!-- <div class="container-fluid" id="work_table_hide" style="display:none;"> -->
                <?php
                echo $table
                ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input_info_table">
                      <table class="table text-center table-responsive table-bordered table-sm ">
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
                        <?php
                        if (@$_REQUEST['del_h']) {
                          while ($work_expe = mysqli_fetch_assoc($work_res)) {
                        ?>
                            <tbody id="worl_exptable">
                              <tr>
                                <td><?= $work_expe['company_name'] ?></td>
                                <td><?= $work_expe['role'] ?></td>
                                <td><?= $work_expe['work_st_data'] ?></td>
                                <td><?= $work_expe['work_end_date'] ?></td>
                                <td><?= $work_expe['city_country'] ?></td>
                                <td>
                                  <a href="work-exp.php?del_work=<?= $work_expe['user_id'] ?>"><i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;" class="bx bx-trash-alt"></i></a>
                                </td>
                              </tr>


                            </tbody>

                          <?php
                          }
                        } else {
                          ?>
                          <tbody id="worl_exptable">



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
                function removework(elementId) {
                  $(elementId).remove();
                }
                $("#work_btn").on('click', function(event) {
                  var work_id = Math.floor(Math.random() * 999999) + 1;
                  var com_name = $("#com_name").val();
                  var role = $("#role").val();
                  var start_date = $("#start_date").val();
                  var end_date = $("#end_date").val();
                  var city_coun = $("#city_coun").val();


                  $("#worl_exptable").append('<tr id="work_table_id_' + work_id + '">\
    <td><input name="company_name[]" type="hidden" value="' + com_name + '">' + com_name + ' </td>\
  <td><input name="work_role[]" type="hidden" value="' + role + '">' + role + '</td>\
  <td><input name="work_st_date[]" type="hidden" value="' + start_date + '">' + start_date + '</td>\
  <td><input name="work_end_date[]" type="hidden" value="' + end_date + '">' + end_date + '</td>\
  <td><input name="work_city_coun[]" type="hidden" value="' + city_coun + '">' + city_coun + '</td>\
  <td><a onclick="removework(`#work_table_id_' + work_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
  </tr>');
                  var form = $("form")[0];
                  form.reset();
                });


                function wrk_exp() {
                  var work_table_hide = document.getElementById('work_table_hide');
                  work_table_hide.style.display = "block";

                }
              </script>

              <!-- ================user-work-ex-form-End---====================== -->

              <div class="form-buttons mt-5">
                <!-- <a href="./edu_skill.php"> Previous</a> -->
                <a href="./edu_skill.php?edited=<?= $_SESSION['user_id'] ?>"> <button type="button" class="btn btn-danger  save-btn btnNext"> Previous</button></a>
                <button name="submit" type="submit" class="btn btn-danger float-end save-btn"> Next</button>
</form>
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
        <li>Be Honest: Provide accurate and truthful information about your work experience. Avoid exaggeration or misrepresentation as it can be detrimental to your professional reputation.</li>
        <li>Use Keywords: Incorporate industry-specific keywords and phrases throughout your work experience section to align your resume with the job description and optimize it for applicant tracking systems (ATS).</li>
        <li>Reverse Chronological Order: Start with your most recent or current position and work backward chronologically. This format is the most common and helps employers quickly see your recent experience.</li>
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

<!-- ================ Footer-Start ======================= -->

<footer class="text-center text-lg-start text-white " style="background-color: black; margin-top:8rem">
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
    © 2023 Copyright:The Product By
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