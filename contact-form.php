<?php
include('header.php');
include('navbar.php');
?>



<!-- ====================contact-page-progrss-bar-start==================== -->
<div class="container-fluid">
  <div class="progres-bar">
    <div class="progress-sec mt-4">
      <a style="color: black;" href="#">
        <p class="text-dark"><span style="color:white;     background:#C21010;">1</span> Persanal Information</p>
      </a>
      <a href="#">
        <p><span>2</span> Education/Skill </p>
      </a>
      <a href="#">
        <p><span>3</span> Working Experience </p>
      </a>
      <a href="#">
        <p><span>4</span> Languages/Reference </p>
      </a>
    </div>
  </div>
</div>
<!-- ====================contact-page-progrss-bar-End==================== -->

<!-- ============= personal-information-Form-Start============= -->
<div class="container">
  <div class="form-bg mt-2">
    <div class="container">
      <div class="row">
        <!-- ==============form-start============== -->
        <div class="col-lg-7">
          <div class="personal-info-form pb-4">
            <h3>Personal Information</h3>
            <div class="form-info">
              <form>
                <div class="container">
                  <div class="row">
                    <!-- ============First Name============ -->
                    <div class="col-md-6">
                      <!-- <div class=" mt-4">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control form-input " placeholder="Enter First Name">
                      </div> -->
                      <div class="input-field mt-5 ">
                        <input type="text" required spellcheck="false">
                        <label>First Name</label>
                      </div>
                    </div>
                    <!-- ============Last Name============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5 ">
                        <input type="text" required spellcheck="false">
                        <label>Last Name</label>
                      </div>
                    </div>
                    <!-- ============Father Name============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>Father Name</label>
                      </div>
                    </div>
                    <!-- ============Last Name============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>Profession <span>(skill)</span></label>
                      </div>
                    </div>

                    <!-- ============Contact no============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>Personal #</label>
                      </div>
                    </div>
                    <!-- ============Telephone No============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>Tel #</label>
                      </div>
                    </div>
                    <!-- ============Email============ -->
                    <div class="col-md-12">
                      <div class="input-field mt-5">
                        <input style="width:95% " type=" email" required spellcheck="false">
                        <label>Email</label>
                      </div>
                    </div>
                    <!-- ============Contact no============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>City</label>
                      </div>
                    </div>
                    <!-- ============Telephone No============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5">
                        <input type="text" required spellcheck="false">
                        <label>Country</label>
                      </div>
                    </div>
                    <!-- ============Save and Next============ -->
                  </div>
                </div>
              </form>
              <div class="form-buttons mt-4">
                <!-- <button type="" class="btn btn-danger">Previous</button> -->
                <a href="./education-from.php"> <button class="btn  float-end save-btn">Save & Next</button></a>
              </div>
            </div>
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


<!-- ================ Footer-Start ======================= -->

<footer class="text-center text-lg-start text-white mt-5" style="background-color: black">
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
<!-- ================ Footer-End ======================= -->