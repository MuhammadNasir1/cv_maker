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
                        <a id="work_btn" onclick="wrk_exp()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a>
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
                        <tbody id="worl_exptable">


                        </tbody>
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
    <td><input type="text" value="' + com_name + '">' + com_name + ' </td>\
  <td><input type="text" value="' + role + '">' + role + '</td>\
  <td><input type="text" value="' + start_date + '">' + start_date + '</td>\
  <td><input type="text" value="' + end_date + '">' + end_date + '</td>\
  <td><input type="text" value="' + city_coun + '">' + city_coun + '</td>\
  <td><a onclick="removework(`#work_table_id_' + work_id + '`)"<i style="color: #C21010;letter-spacing: 0.2rem;cursor: pointer; text-decoration: none;"class="bx bx-trash-alt"></i></a></td>\
  </tr>');
                });


                function wrk_exp() {
                  var work_table_hide = document.getElementById('work_table_hide');
                  work_table_hide.style.display = "block";

                }
              </script>

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
