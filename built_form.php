<?php
include('header.php');
include('navbar.php');
?>

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
                    <div class="form-buttons mt-4">
                      <!-- <button type="" class="btn btn-danger">Previous</button> -->
                      <!-- <a href="./education-from.php"> <button class="btn btnNext  float-end save-btn"> Next</button></a> -->
                      <button class="btn btnNext  float-end save-btn"> Next</button>
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
    <!-- <a class="btn btn-primary btnNext">Next</a> -->

  </div>
  <!-- ======================22222============= -->
  <div class="tab-pane  fade" id="menu1">
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
                            <a onclick="clickeduction()" > <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
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
            <p><span style="color:white; border-color:green;     background:green;">1</span> Persanal Information</p>
          </a>
          <a style="color: black;" href="#">
            <p><span style="color:white; border-color:green;     background:green;">2</span> Education/Skills</p>
          </a>
          <a style="color: black;" href="#">
            <p><span style="color:white;     background:#C21010;">3</span> Working Experience</p>
          </a>
          <a href="#">
            <p><span>4</span> Languages/Referenc e </p>
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
                <h3>Working Experience</h3>
                <div class="form-info">

                  <div id="addwork">
                    <div class="container">
                      <div class="row">
                        <!-- ============Company Name============ -->
                        <div class="col-md-6">
                          <div class="input-field mt-5 ">
                            <input type="text" required spellcheck="false">
                            <label>Company Name</label>
                          </div>
                        </div>
                        <!-- ============Role============ -->
                        <div class="col-md-6">

                          <div class="input-field mt-5 ">
                            <input type="text" required spellcheck="false">
                            <label>Role </label>
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
                        <!-- ============City============ -->
                        <div class="col-md-12">

                          <div class="input-field mt-5 ">
                            <input type="text" required spellcheck="false">
                            <label>City & Country</label>
                            <a onclick="addwork()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Work" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                          </div>
                        </div>
                        <!-- ============Country============ -->
                      </div>
                    </div>
                  </div>

                  <div class="form-buttons mt-5">
                    <button type="" class="btn btn-danger  btnPrevious">Previous</button>

                    <button class="btn btn-danger float-end save-btn btnNext">Save & Next</button>
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
            <p><span style="color:white; border-color:green;     background:green;">1</span> Persanal Information</p>
          </a>
          <a style="color: black;" href="#">
            <p><span style="color:white; border-color:green;     background:green;">2</span> Education/Skills</p>
          </a>
          <a style="color: black;" href="#">
            <p><span style="color:white; border-color:green;     background:green;">3</span> Working Experience</p>
          </a>

          <a style="color: black;" href="#">
            <p><span style="color:white;     background:#C21010;">4</span> Languages/Reference</p>
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
                <h3>Languages</h3>
                <div class="form-info">

                  <div class="container">
                    <div class="row">
                      <!-- ============Language Name============ -->
                      <div class="col-md-12">
                        <div id="addlanguage">
                          <div class="input-field mt-5">
                            <input type="text" required spellcheck="false">
                            <label>Language</label>
                            <a onclick="clicklanguage()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Language" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="personal-info-form mt-5">
                    <h3>Reference</h3>
                  </div>

                  <!-- ==================Refer-section-Start========================== -->
                  <!-- ============Refer 1============ -->
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">

                        <div id="referadd">
                          <div class="input-field mt-5 ">
                            <input style="width:90%" type="text" required spellcheck="false">
                            <label>Reference</label>
                            <a onclick="clickrefer()" href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer" src="./image/plus-icon.svg" alt=""></a>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="col-12">
                      <div class=" add-education mt-5 ">
                        <a href="#"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Refer"  src="./image/plus-icon.svg" alt=""></a>

                      </div>

                    </div> -->
                    </div>
                  </div>
                  <!-- ==================Skill-section-End============================ -->


                  <div class="form-buttons mt-5">
                    <button type="" class="btn btn-danger btnPrevious">Previous</button>

                    <button type="submit" class="btn btn-danger float-end save-btn">Save </button>
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