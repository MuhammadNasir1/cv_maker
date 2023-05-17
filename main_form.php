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
      alert("form sumbit")
      swal({
        title: "Good job!",
        text: "Data Inseted!",
        icon: "success",
        button: "oh yes!",
      });
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("ih no")
      swal({
        title: "Oh No!",
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

    <?php
    include('user_form/personal_info.php');
    ?>

    <?php
    include('user_form/edu_skill.php');
    ?>
    <?php
    include('user_form/work_exp.php');
    ?>


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
                  <!-- ==================hobby-section-Start========================== -->

                  <div class="personal-info-form mt-5">
                    <h3>Hobbies</h3>
                  </div>
                  <div class="container-fluid">
                    <div class="row">

                      <div class="col-md-12">
                        <div id="referad">
                          <div class="input-field mt-5 ">
                            <input name="hobby[]" id="hobby" style="width:85%" type="text" required>
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
                          <table class="table text-center table-responsive table-bordered table-sm ">
                            <thead>
                              <tr class="pe-1 ps-1">
                                <th scope="col">Hobbies</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody id="hobbytable">

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ======================details-table-End================ -->
                  <script>
                    function removehobby(elementId) {
                      $(elementId).remove();
                    }
                    $("#addhobby").on('click', function(event) {
                      var hobby_id = Math.floor(Math.random() * 999999) + 1;
                      var hobby = $("#hobby").val();


                      $("#hobbytable").append('<tr id="hobby_table_id_' + hobby_id + '">\
            <td><input name="hobby[]" type="text" value="' + hobby + '">' + hobby + ' </td>\
          <td><a onclick="removehobby(`#hobby_table_id_' + hobby_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                    });


                    function hobby_hide() {
                      var hobby_table_hide = document.getElementById('hobby_table_hide');
                      hobby_table_hide.style.display = "block";

                    }
                  </script>
                  <!-- ================hobby-refernece-End-====================== -->
                  <h3>Languages</h3>
                  <div class="form-info">

                    <div class="container">
                      <div class="row">
                        <!-- ============Language Name============ -->
                        <!-- ================user-languages-Start-====================== -->

                        <div class="col-md-12">
                          <div class="input-field mt-5">
                            <input name="languge[]" id="langugage" style="width:85%" type="text" required>
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
                              <tbody id="languagetable">

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table-End================ -->
                    <script>
                      function removelanguage(elementId) {
                        $(elementId).remove();
                      }
                      $("#addlanguage").on('click', function(event) {
                        var lang_id = Math.floor(Math.random() * 999999) + 1;
                        var langugage = $("#langugage").val();


                        $("#languagetable").append('<tr id="hobby_table_id_' + lang_id + '">\
            <td><input name="languge[]" type="text" value="' + langugage + '">' + langugage + ' </td>\
          <td><a onclick="removelanguage(`#hobby_table_id_' + lang_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                      })



                      function hide_language() {
                        var language_table_hide = document.getElementById('language_table_hide');
                        language_table_hide.style.display = "block";

                      }
                    </script>

                    <div class="personal-info-form mt-5">
                      <h3>Reference</h3>
                    </div>

                    <!-- ==================Refer-section-Start========================== -->
                    <div class="container-fluid">
                      <div class="row">
                        <!-- ================user-refernece-Start-====================== -->

                        <div class="col-md-12">
                          <div id="referadd">
                            <div class="input-field mt-5 ">
                              <input name="reference[]" id="referece" style="width:85%" type="text" required>
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
                              <tbody id="refertable">


                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ======================details-table-End================ -->
                    <script>
                      function removerefer(elementId) {
                        $(elementId).remove();
                      }
                      $("#addrefer").on('click', function(event) {
                        var refer_id = Math.floor(Math.random() * 999999) + 1;
                        var referece = $("#referece").val();

                        $("#refertable").append('<tr id="refer_table_id_' + refer_id + '">\
            <td><input name="reference[]" type="text" value="' + referece + '">' + referece + ' </td>\
          <td><a onclick="removerefer(`#refer_table_id_' + refer_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                      })

                      function hiderefer() {
                        var refer_table_hide = document.getElementById('refer_table_hide');
                        refer_table_hide.style.display = "block";

                      }
                    </script>
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