


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
        <!-- ============= personal-information-Form-Start============= -->
        <div class="container" id="withimag" style="display: none;">
          <div class="form-bg mt-2">
            <div class="container">
              <div class="row">
                <!-- ==============form-start============== -->
                <div class="col-lg-7">
                  <div class="personal-info-form pb-4">
                    <div style="display:flex;  align-items: center; justify-content: space-between;">
                      <h3>Personal Information</h3>

                      <button class="toggle-image-form mt-2" onclick="toggleDivs()">Cv without image</button>
                    </div>
                    <!-- ================user-info-form-start================ -->
                      <form action="#" method="post">
                    <div class="form-info">
                      <div class="container">
                        <div class="row">
                          <!-- ============First Name============ -->
                          <div class="col-lg-9 col-md-8 col-7">
                            <div class="input-field mt-5 ">
                              <input class="w-100" type="text" required>
                              <label>First Name</label>
                              <!-- ============Last Name============ -->
                              <div class="input-field mt-5">
                                <input class="w-100" type="text" required>
                                <label>Last Name</label>
                              </div>
                            </div>
                          </div>
                          <!-- ============image============ -->
                          <div class="col-lg-3 col-md-4 col-5">
                            <div class="input-field mt-5 ">
                              <div class="image_input">
                                <label class="" for="files"><i class='bx bxs-user'></i> <img style="height:100%; width:100%; position:absolute;" src=""></label>
                                <input id="files" style="visibility:hidden;" type="file">
                              </div>
                            </div>
                          </div>
                          <!-- ============Father Name============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input class="w-100" type="text" required>
                              <label>Father Name</label>
                            </div>
                          </div>
                          <!-- ===============Gender=================== -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <select class="form-select gender-option" aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                              </select>
                              <label>Gender</label>
                            </div>
                          </div>

                          <!-- ============DOB============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="date" required>
                              <label>DOB <span>(date of birth)</span></label>
                            </div>
                          </div>
                          <!-- ============Professional============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>Profession <span>(skill)</span></label>
                            </div>
                          </div>
                          <!-- ============Website============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <input class="email_width" type=" email" required>
                              <label>Website</label>
                            </div>
                          </div>
                          <!-- ============Contact no============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input class="w-100" type="text" required>
                              <label>Personal #</label>
                            </div>
                          </div>
                          <!-- ============Telephone No============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input class="w-100" type="text" required>
                              <label>Tel #</label>
                            </div>
                          </div>
                          <!-- ============Email============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <input class="w-100" type=" email " required>
                              <label>Email</label>
                            </div>
                          </div>
                          <!-- ============Contact no============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text w-100" required>
                              <label>City</label>
                            </div>
                          </div>
                          <!-- ============Telephone No============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input class="w-100" type="text" required>
                              <label>Country</label>
                            </div>
                          </div>
                          <!-- ============about us ============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <textarea class="email_width form-control w-100" name="" id="" rows="4"> </textarea>
                              <label>About Us</label>
                              <div class="form-text about-us-txt">Enter yourself in less than <b>50</b> words</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ============Save and Next============ -->
                      <div class="form-buttons mt-4">
                        <button class="btn btnNext  float-end save-btn"> Next</button>
                      </div>
                    </div>

                    <!-- ================user-info-form-End================== -->
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
        <!-- ==========================
    ========================
    ====================== -->
        <div class="container" id="withoutimg">
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
                          <div class="col-md-6">
                            <div class="input-field mt-5 ">
                              <input class="ph_inp" type="text" required>
                              <label>First Name</label>
                            </div>
                          </div>
                          <!-- ============Last Name============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5 ">
                              <input type="text" required>
                              <label>Last Name</label>
                            </div>
                          </div>
                          <!-- ============Father Name============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>Father Name</label>
                            </div>
                          </div>
                          <!-- ===============Gender=================== -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <select class="form-select gender-option" aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                              </select>
                              <label>Gender</label>
                            </div>
                          </div>

                          <!-- ============DOB============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="date" required>
                              <label>DOB <span>(date of birth)</span></label>
                            </div>
                          </div>
                          <!-- ============Professional============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>Profession <span>(skill)</span></label>
                            </div>
                          </div>
                          <!-- ============Website============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <input class="email_width" type=" email" required>
                              <label>Website</label>
                            </div>
                          </div>
                          <!-- ============Contact no============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>Personal #</label>
                            </div>
                          </div>
                          <!-- ============Telephone No============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>Tel #</label>
                            </div>
                          </div>
                          <!-- ============Email============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <input class="email_width" type=" email" required>
                              <label>Email</label>
                            </div>
                          </div>
                          <!-- ============Telephone No============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <!-- <input type="text" required> -->
                              <label>Country</label>
                              <?php include("country_dropdown.php") ?>
                            </div>
                          </div>
                          <!-- ============Contact no============ -->
                          <div class="col-md-6">
                            <div class="input-field mt-5">
                              <input type="text" required>
                              <label>City</label>
                            </div>
                          </div>
                          <!-- ============about us ============ -->
                          <div class="col-md-12">
                            <div class="input-field mt-5">
                              <textarea class="email_width form-control" name="" id="" rows="4"> </textarea>
                              <label>About Us</label>
                              <div class="form-text about-us-txt">Enter yourself in less than <b>50</b> words</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ============Save and Next============ -->
                      <div class="form-buttons mt-4">
                        <button name="per_submit" type="submit"  class="btn btnNext  float-end save-btn"> Next</button>
                      </div>
                    </div>
                    <!-- ================user-info-form-End==================== -->
                  </div>
                </div>
                <!-- ==============form-End================ -->
                </form>
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
                                <input type="text" required>
                                <label>Institute Name</label>
                              </div>
                            </div>
                            <!-- ============Dagree Name============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5">
                                <input type="text" required>
                                <label>Dagree</label>
                              </div>
                            </div>
                            <!-- ============Mark Optaoned============ -->
                            <div class="col-md-3 col-6 position-relative">
                              <div style="width:100%" class="input-field mt-5">
                                <input type="nmber" required>
                                <label>Total Mark</label>
                              </div>

                              <!-- <p style="position:absolute;color:#C21010;z-index:400;margin-left:82%; margin-top:-2rem">To</p> -->
                            </div>
                            <!-- ============Mark Optaoned============ -->
                            <div class="col-md-3 col-6">

                              <div style="width:100%" class="input-field mt-5">
                                <input type="number" required>
                                <label>Obtains Mark</label>
                              </div>
                            </div>
                            <!-- ============CGPA============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input type="number" required>
                                <label class="date-lable">CGPA</label>
                              </div>
                            </div>
                            <!-- ============Start-Date============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input type="date" required>
                                <label class="date-lable">Start Date</label>
                              </div>
                            </div>
                            <!-- ============End-Date============ -->
                            <div class="col-md-6 ">
                              <div class="input-field mt-5 ">
                                <input type="date" required>
                                <label class="date-lable">End Date</label>
                              </div>
                            </div>
                            <!-- ============Feild============ -->
                            <div class="col-md-12">

                              <div class="input-field mt-5 ">
                                <input style="width:85%" type="text" required>
                                <a onclick="clickeduction()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                                <label>Feild</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- ================user-Education-form-End====================== -->
                    </div>
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
                              <input id="skillinput" style="width:85%" type="text" required>
                              <label>Skill 1</label>
                              <a class="input-add " onclick="addindd()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a>
                            </div>


                          </div>

                          <!-- ================user-Skills-form-End  ====================== -->
                        </div>
                        <div class="col-12">
                          <div class="mt-3 p-3">
                            <div class="form-group row">
                              <label style="color:#C21010; font-weight:500;" for="formControlRange">Skill Progress</label>
                              <input type="range" min="1" max="100" value="50" class="form-control-range range-slider" id="myRange">
                            </div>
                            <div class="col-md-3">
                              <span id="demo">0%</span>
                            </div>
                          </div>
                        </div>
                        <!-- ============Skill 2============ -->


                      </div>
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
                                <input type="text" required>
                                <label>Company Name</label>
                              </div>
                            </div>
                            <!-- ============Role============ -->
                            <div class="col-md-6">

                              <div class="input-field mt-5 ">
                                <input type="text" required>
                                <label>Role </label>
                              </div>
                            </div>
                            <!-- ============Start-Date============ -->
                            <div class="col-md-6">
                              <div class="input-field mt-5 ">
                                <input type="date" required>
                                <label class="date-lable">Start Date</label>
                              </div>
                            </div>
                            <!-- ============End-Date============ -->
                            <div class="col-md-6 ">
                              <div class="input-field mt-5 ">
                                <input type="date" required>
                                <label class="date-lable">End Date</label>
                              </div>
                            </div>
                            <!-- ============City============ -->
                            <div class="col-md-12">

                              <div class="input-field mt-5 ">
                                <input style="width: 85%;" type="text" required>
                                <label>City & Country</label>
                                <a onclick="addwork()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                              </div>
                            </div>
                            <!-- ============Country============ -->
                          </div>
                        </div>
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
      <!-- ==============4444444444444444444 -->
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
                              <input style="width:85%" type="text" required>
                              <label>Hobby</label>
                              <a onclick="clicker()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
                            </div>
                          </div>
                        </div>

                      </div>
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
                            <div id="addlanguage">
                              <div class="input-field mt-5">
                                <input style="width:85%" type="text" required>
                                <label>Language</label>
                                <a onclick="clicklanguage()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Language" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                              </div>
                            </div>
                          </div>

                          <!-- ================user-languages-End-====================== -->
                        </div>
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
                                <input style="width:85%" type="text" required>
                                <label>Reference</label>
                                <a onclick="clickrefer()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
                              </div>
                            </div>
                          </div>

                          <!-- ================user-refernece-End-====================== -->
                        </div>
                      </div>
                      <!-- ==================Skill-section-End============================ -->
                      <div class="form-buttons mt-5">
                        <button type="submit" class="btn btn-danger btnPrevious">Previous</button> <button name="submit" type="submit" class="btn btn-danger float-end save-btn">Save </button>
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
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    slider.oninput = function() {
      output.innerHTML = this.value + "%";
    }

    // ==============country-code============
    image.pngmobiscroll.setOptions({
      theme: 'ios',
      themeVariant: 'light'
    });

    var inst = mobiscroll.select('#demo-country-picker', {
      display: 'anchored',
      filter: true,
      itemHeight: 40,
      renderItem: function(item) {
        return '<div class="md-country-picker-item">' +
          '<img class="md-country-picker-flag" src="https://img.mobiscroll.com/demos/flags/' + item.data.value + '.png" />' +
          item.display + '</div>';
      }
    });

    mobiscroll.util.http.getJson('https://trial.mobiscroll.com/content/countries.json', function(resp) {
      var countries = [];
      for (var i = 0; i < resp.length; ++i) {
        var country = resp[i];
        countries.push({
          text: country.text,
          value: country.value
        });
      }
      inst.setOptions({
        data: countries
      });
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