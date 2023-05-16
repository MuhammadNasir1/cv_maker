<div class="tab-pane  fade" id="menu1">
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
                                <a id="educationbtn" onclick="educ_table()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                                <label>Field</label>
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
            <td><input type="text" value="' + Institute + '">' + Institute + ' </td>\
          <td><input type="text" value="' + Dagree + '">' + Dagree + '</td>\
          <td><input type="text" value="' + tmarks + '">' + tmarks + '</td>\
          <td><input type="text" value="' + obmarks + '">' + obmarks + '</td>\
          <td><input type="text" value="' + sdate + '">' + sdate + '</td>\
          <td><input type="text" value="' + edate + '">' + edate + '</td>\
          <td><input type="text" value="' + Feild + '">' + Feild + '</td>\
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
                    <div id="educ_table_hide" class="container-fluid" style="display:none">
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
                              <tbody id="education_table">


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
                              <a id="skill_btn" class="input-add " onclick="hideskill()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a>
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
                            <table class="table text-center table-responsive table-bordered table-sm ">
                              <thead>
                                <tr class="pe-1 ps-1">
                                  <th scope="col">Skills</th>
                                  <th scope="col">Progress</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody id="skillTable">


                              </tbody>
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
            <td><input type="text" value="' + skill_ + '">' + skill_ + ' </td>\
          <td><input type="text" value="' + age_slider + '">' + age_slider + '%' +  '</td>\
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