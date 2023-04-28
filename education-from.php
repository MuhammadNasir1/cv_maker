<?php
include('header.php');
include('navbar.php');
?>


<!-- ====================contact-page-progrss-bar-start==================== -->
<div class="container-fluid">
  <div class="progres-bar">
    <div class="progress-sec mt-4">
      <a style="color: black;" href="#">
        <p><span style="color:white; border-color:green;     background:green;">1</span> Persanal Information</p>
      </a>
      <a style="color: black;" href="#">
        <p><span style="color:white;     background:#C21010;">2</span> Education/Skills</p>
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
  <div class="form-bg mt-4">
    <div class="container">
      <div class="row">
        <!-- ==============form-start============== -->
        <div class="col-lg-7">

          <div class="personal-info-form pb-4">
            <h3>Education</h3>
            <div class="form-info">
            
                <div id="addeduction">
                  <div class="container">
                    <div class="row">
                      <!-- ============First Name============ -->
                      <div class="col-md-6">
                        <div class="input-field mt-5 ">
                          <input type="text" required spellcheck="false">
                          <label>Institute Name</label>
                        </div>
                      </div>
                      <!-- ============Last Name============ -->
                      <div class="col-md-6">

                        <div class="input-field mt-5">
                          <input type="text" required spellcheck="false">
                          <label>Dagree</label>
                        </div>
                      </div>

                      <!-- ============Start-Date============ -->
                      <div class="col-md-6">
                        <div class="input-field mt-5 ">
                          <input type="date" required spellcheck="false">
                          <label class="date-lable">Start Date</label>
                        </div>
                      </div>
                      <!-- ============End-Date============ -->
                      <div class="col-md-6 ">
                        <div class="input-field mt-5 ">
                          <input type="date" required spellcheck="false">
                          <label class="date-lable">End Date</label>
                        </div>
                      </div>
                      <!-- ============Feild============ -->
                      <div class="col-md-12">

                        <div class="input-field mt-5 ">
                          <input type="text" required spellcheck="false">
                          <a onclick="clickeduction()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                          <label>Feild</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- =============== -->
                </div>
            </div>
            <!-- <hr class="mt-5"> -->
            <div class="personal-info-form mt-5">
              <h3>Skills</h3>
            </div>
            <!-- ==================Skill-section-Start========================== -->
            <!-- ============Skill 1============ -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
               
                  <div id="add_iteee" class="mt-5">
                    <div class="input-field" id="myList1">
                      <input id="skillinput" style="width:90%" type="text" required spellcheck="false">
                      <label>Skill 1</label>
                      <a class="input-add " onclick="addindd()"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Skill" src="./image/plus-icon.svg" alt=""></a>
                    </div>
                  </div>
                  <!-- <p onclick="addindd()" class="btn btn-danger">Add</p> -->
                </div>
                <!-- ============Skill 2============ -->


              </div>
            </div>
            <!-- ==================Skill-section-End============================ -->
       
            <div class="form-buttons mt-4">
              <a href="./contact-form.php"><button type="" class="btn btn-danger">Previous</button></a>

              <a href="./work-exp-form.php"> <button class="btn btn-danger float-end save-btn">Save & Next</button></a>
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


<!-- ================ Footer-Start ======================= -->
<footer class="text-center text-lg-start text-white " style="background-color: black; margin-top:3rem ">
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

<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>