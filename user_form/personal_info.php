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
 <!-- =============================================withimage-form================================== -->

                            <!-- ============First Name============ -->
                            <div class="row" id="withimag" style="display:none; ">
                              <div class="row">
                                <div class="col-lg-9 col-md-8 col-7">
                                  <div class="input-field mt-5 ">
                                    <input name="fname" class="w-100" type="text" >
                                    <label>First Name</label>
                            <!-- ============Last Name============ -->
                            <div class="input-field mt-5">
                                      <input name="lname" class="w-100" type="text" >
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
 <!-- =============================================withimage-form================================== -->
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
                                <input name="lname" class="ph_inp" type="text" required>
                                <label>Last Name</label>
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
