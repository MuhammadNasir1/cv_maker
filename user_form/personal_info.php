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
                                <input name="fname" class="w-100" type="text">
                                <label>First Name</label>
                                <!-- ============Last Name============ -->
                                <div class="input-field mt-5">
                                  <input name="lname" class="w-100" type="text">
                                  <label>Last Name</label>
                                </div>
                              </div>
                            </div>
                            <!-- ============image============ -->
                            <div class="col-lg-3 col-md-4 col-5">
                              <div class="input-field mt-5 ">
                                <div class="image_input">
                                  <label class="" for="files"><i class='bx bxs-user'></i><span id="imagePreview"></span></label>
                                  <input id="files" accept="image/*" style="visibility:hidden;" type="file">
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
                      <li>Make sure your form has no spelling or any type of mistakes.</li>
                      <li>Full Name: Include your full legal name at the top of the document in a larger font size than the rest of the content.</li>
                      <li>Contact Information: Provide essential contact details such as your phone number, email address, and location (city and state or country).
                        Avoid sharing unnecessary personal information like your marital status or social security number.</li>
                      <li>Professional Email Address: Use a simple and professional email address that incorporates your name,
                        such as firstname.lastname@email.com</li>
                      <li>Mailing Address: Unless specifically requested, it's generally not necessary to include your full mailing address. Providing your city
                        and state is usually sufficient.Lorem ipsum dolor sit amet consectetur, adipisicing Architecto, dolor.</li>
                      <li>Personal Website or Portfolio (optional): If you have a personal website or online portfolio showcasing your work, skills, or achievements, include a link to it.</li>
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
  <script>
    // Get the input element and image preview container
    const imageUpload = document.getElementById('files');
    const imagePreview = document.getElementById('imagePreview');

    // Add an event listener to the file input element
    imageUpload.addEventListener('change', function(event) {
      // Get the selected file
      const file = event.target.files[0];

      // Check if a file is selected
      if (file) {
        // Create a FileReader object
        const reader = new FileReader();

        // Set the onload event handler
        reader.onload = function(e) {
          // Create an image element
          const image = document.createElement('img');
          image.src = e.target.result;

          // Clear the image preview container
          imagePreview.innerHTML = '';

          // Append the image to the preview container
          imagePreview.appendChild(image);
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(file);
      }
    });
  </script>