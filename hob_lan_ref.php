<?php
include('db.php');
if (isset($_POST['submit'])) {
  $hobbies = $_POST['hobby'];
  $languages = $_POST['languge'];
  $references = $_POST['reference'];

  $count = count($hobbies); // Assuming all arrays have the same length

  for ($i = 0; $i < $count; $i++) {
    $hobby = $hobbies[$i];
    $language = $languages[$i];
    $reference = $references[$i];

    $sql1 = "INSERT INTO `languages` (`user_id`,`language`) VALUES ('" . $_SESSION['user_id'] . "','$language')";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "INSERT INTO `user_references` (`user_id`,`user_reference`) VALUES ('" . $_SESSION['user_id'] . "','$reference')";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "INSERT INTO `hobbies` (`user_id`,`hobby`) VALUES ('" . $_SESSION['user_id'] . "','$hobby')";
    $result3 = mysqli_query($conn, $sql3);

    if (!($result1 && $result2 && $result3)) {
      echo "Error: " . mysqli_error($conn);
      // You might want to consider whether to break the loop here on error
    }
  }

  header("location: templete.php");
}

?>



<?php
include("header.php");
include("navbar.php");
?>
<!-- ====================contact-page-progrss-bar-start==================== -->
<div class="container-fluid">
  <div class="progres-bar">
    <div class="progress-sec mt-4">
      <a style="color: black;" href="./personal_info.php">
        <p><span style="color:white; border-color:green;     background:green;">1</span> <bdo class="form_progress_txt">Persanal Information</bdo></p>
      </a>
      <a style="color: black;" href="./edu_skill.php">
        <p><span style="color:white; border-color:green;     background:green;">2</span> <bdo class="form_progress_txt">Education/Skills</bdo></p>
      </a>
      <a style="color: black;" href="./work-exp.php">
        <p><span style="color:white; border-color:green;     background:green;">3</span><bdo class="form_progress_txt">Working Experience</bdo> </p>
      </a>

      <a style="color: black;" href="./hob_lan_ref.php">
        <p><span style="color:white;     background:#C21010;">4</span> <bdo class="form_progress_txt">Languages/Reference</bdo></p>
      </a>



    </div>
  </div>
</div>
<!-- ====================contact-page-progrss-bar-End==================== -->
<form action="#" method="post">
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
                        <input name="" id="hobby" style="width:85%" type="text" >
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
            <td><input name="hobby[]" type="hidden" value="' + hobby + '">' + hobby + ' </td>\
          <td><a onclick="removehobby(`#hobby_table_id_' + hobby_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                  var form = $("form")[0];
                  form.reset();


                });


                function hobby_hide() {
                  var hobby_table_hide = document.getElementById('hobby_table_hide');
                  hobby_table_hide.style.display = "block";

                }
              </script>
              <!-- ================hobby-refernece-End-====================== -->
              <h3 class="mt-5">Languages</h3>
              <div class="form-info">

                <div class="container">
                  <div class="row">
                    <!-- ============Language Name============ -->
                    <!-- ================user-languages-Start-====================== -->

                    <div class="col-md-12">
                      <div class="input-field mt-5">
                        <input name="" id="langugage" style="width:85%" type="text" >
                        <label>Language</label>
                        <a id="addlanguage" onclick="hide_language()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Language" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                      </div>
                    </div>

                    <!-- ================user-languages-End-====================== -->
                  </div>
                </div>

                <!-- ======================details-table================ -->
                <div class="container-fluid" id="language_table_hide" style="display:none;">
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
            <td><input name="languge[]" type="hidden" value="' + langugage + '">' + langugage + ' </td>\
          <td><a onclick="removelanguage(`#hobby_table_id_' + lang_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                    var form = $("form")[0];
                    form.reset();
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
                          <input name="" id="referece" style="width:85%" type="text">
                          <label>Reference</label>
                          <a id="addrefer" onclick="hiderefer()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
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
            <td><input name="reference[]" type="hidden" value="' + referece + '">' + referece + ' </td>\
          <td><a onclick="removerefer(`#refer_table_id_' + refer_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
          </tr>');
                    var form = $("form")[0];
                    form.reset();
                  })

                  function hiderefer() {
                    var refer_table_hide = document.getElementById('refer_table_hide');
                    refer_table_hide.style.display = "block";

                  }
                </script>
                <!-- ==================Skill-section-End============================ -->
                <div class="form-buttons mt-5">
                  <a href="./work-exp.php?del_h=<?= $_SESSION['user_id'] ?>"> <button type="button" class="btn btn-danger btnPrevious">Previous</button></a>
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
        <li>Select Relevant Hobbies: Choose hobbies that align with the skills or qualities valued
          in the job you're applying for. For example, if the position requires teamwork, you can
          mention team sports or collaborative hobbies.</li>
        <li>Variety: Include a diverse range of hobbies to present a well-rounded personality. This can showcase
          your ability to balance work and personal interests effectively.</li>
        <li>Showcase Transferable Skills: Highlight hobbies that demonstrate transferable skills such as
          leadership, creativity, problem-solving, or organization.</li>
        <li>Relevance: Highlight languages that are relevant to the job or industry you're applying for.
          If you're bilingual or multilingual, emphasize your language skills as they can be valuable assets.</li>
        <li>Include Upon Request: Instead of providing specific references on your CV or resume, simply state "References
          available upon request." This keeps your document concise and allows you to provide references when requested by
          the employer.</li>
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
</form>
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
<?php
include('footer_links.php');
?>