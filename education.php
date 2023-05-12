<?php
include('navbar.php');
include('header.php');
?>



<!-- ============================1================== -->

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
                        <input id="Institute" type="text" required>
                        <label>Institute Name</label>
                      </div>
                    </div>
                    <!-- ============Dagree Name============ -->
                    <div class="col-md-6">

                      <div class="input-field mt-5">
                        <input id="Dagree" type="text" required>
                        <label>Dagree</label>
                      </div>
                    </div>
                    <!-- ============Mark Optaoned============ -->
                    <div class="col-md-3 col-6 position-relative">
                      <div style="width:100%" class="input-field mt-5">
                        <input id="tmarks" type="nmber" required>
                        <label>Total Mark</label>
                      </div>

                      <!-- <p style="position:absolute;color:#C21010;z-index:400;margin-left:82%; margin-top:-2rem">To</p> -->
                    </div>
                    <!-- ============Mark Optaoned============ -->
                    <div class="col-md-3 col-6">

                      <div style="width:100%" class="input-field mt-5">
                        <input id="obmarks" type="number" required>
                        <label>Obtains Mark</label>
                      </div>
                    </div>
                    <!-- ============CGPA============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5 ">
                        <input id="cgpa" type="number" required>
                        <label class="date-lable">CGPA</label>
                      </div>
                    </div>
                    <!-- ============Start-Date============ -->
                    <div class="col-md-6">
                      <div class="input-field mt-5 ">
                        <input id="sdate" type="date" required>
                        <label class="date-lable">Start Date</label>
                      </div>
                    </div>
                    <!-- ============End-Date============ -->
                    <div class="col-md-6 ">
                      <div class="input-field mt-5 ">
                        <input id="edate" type="date" required>
                        <label class="date-lable">End Date</label>
                      </div>
                    </div>
                    <!-- ============Feild============ -->
                    <div class="col-md-12">

                      <div class="input-field mt-5 ">
                        <input id="Feild" style="width:85%" type="text" required>
                        <a id="submitBtn"> <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Education" class="float-end" src="./image/plus-icon.svg" alt=""></a>
                        <label>Feild</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- ================user-Education-form-End====================== -->
            </div>
            <script>
              function doFunction() {
                var Institute = document.getElementById("Institute").value;
                var Dagree = document.getElementById("Dagree").value;
                var tmarks = document.getElementById("tmarks").value;
                var obmarks = document.getElementById("obmarks").value;
                var cgpa = document.getElementById("cgpa").value;
                var sdate = document.getElementById("sdate").value;
                var edate = document.getElementById("edate").value;
                var Feild = document.getElementById("Feild").value;
                var table = document.querySelector("#myTable tbody");
                var row = table.insertRow(0);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);
                var cell6 = row.insertCell(5);
                var cell7 = row.insertCell(6);
                var cell8 = row.insertCell(7);
                var cell9 = row.insertCell(8);
                cell1.innerHTML = Institute;
                cell2.innerHTML = Dagree;
                cell3.innerHTML = tmarks;
                cell4.innerHTML = obmarks;
                cell5.innerHTML = cgpa;
                cell6.innerHTML = sdate;
                cell7.innerHTML = edate;
                cell8.innerHTML = Feild;
                cell9.innerHTML = "<a onclick='myFunction()'><i  class='bx bx-trash-alt'></i></a>";
              }

              const submit = document.querySelector('#submitBtn');
              submit.addEventListener('click', event => {
                event.preventDefault();
                doFunction();
              });

              function myFunction() {
                document.getElementById("mTable").deleteRow(0);
              }
            </script>
            <!-- ======================details-table================ -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="input_info_table">
                    <table class="table text-center table-responsive table-bordered table-sm " id="myTable">
                      <thead>
                        <tr class="pe-1 ps-1">
                          <!-- <th scope="col">#</th> -->
                          <th scope="col" >Institute Name</th>
                          <th >Dagree</th>
                          <th >Total Marks</th>
                          <th >Obtains Marks</th>
                          <th >CGPA</th>
                          <th >Start-date</th>
                          <th >End-date</th>
                          <th >Feild</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="mTable">
                        <tr>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- ======================details-table-End================ -->

            <div class="form-buttons mt-4">
              <button type="" class="btn btn-danger btnPrevious">Previous</button>

              <button class="btn btn-danger float-end save-btn btnNext">Next</button>
            </div>
          </div>
        </div>
        <!-- ==============form-End================ -->
        <!-- ==============form-tips-sec-start============== -->

        <!-- ==============form-tips-sec-End============== -->
      </div>
    </div>
  </div>
</div>

<!-- ============= personal-information-Form-End============== -->
</div>


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