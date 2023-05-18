
<?php
include("navbar.php");
?>
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
                    <a href="./work-exp.php">  <button class="btn btn-danger btnPrevious">Previous</button></a>
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