<style>
  * {
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
    font-family: 'Poppins', sans-serif;


  }
</style>

<table style=" border-collapse:collapse; text-align:left; width:21cm; vertical-align:top">
  <tr style="background-color:#183042; width:21cm ">
    <td style="width: 15cm; ">
      <div style="margin-left: 25px; line-height:18px; margin-top:22px; padding-bottom:20px">
        <h1 style="color:white; font-weight:600; "><?= @$row['fname'] ?> <?= @$row['lname'] ?></h1>
        <h3 style="color:whitesmoke; font-weight:500;"><?= @$row['profession'] ?></h3>
        <p style="color:white; font-weight:500; line-height:14px; margin-top:10px"><?= @$row['about_us'] ?></p>
      </div>
      </div>
    </td>
    <td style="width: 6cm; ">
      <div>
        <img style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #2F5D80; border-radius: 20px; margin: 10px 0px 10px 30px;" src="<?php echo '../uploads/images/' . $row['user_img']; ?>">
        <!-- <img style="width: 150px; height:150px; object-fit:cover; border:4px solid #2F5D80; border-radius:20px; margin:10px 0px 10px 30px " src="https://media.istockphoto.com/id/1270067126/photo/smiling-indian-man-looking-at-camera.jpg?s=170667a&w=0&k=20&c=XwgSl6ktDnX13WbmqSR_vYMllIMLqUX0ak6mn5sGuPI=" alt=""> -->
      </div>
    </td>
  </tr>
</table>

<table style="border-collapse:collapse; text-align:left; width:21cm;  ">
  <tr style="background-color:#0C1829; width:21cm;  ">
    <td style="width: 10cm;  ">
      <div style="margin-left: 20px; margin-top:8px; margin-bottom:10px ">
        <!-- ===============email=================== -->
        <div>
          <p style="color:white; "><span style="position: absolute; margin-top:10px;"> <img style="width:18px" src="./cv_icon/email.png"></span> <span style="font-size:14px;font-weight:600 ; margin-left:25px"><?= @$row['email'] ?></span>
          </p>
        </div>
        <!-- ===============Address=================== -->
        <div style="margin-top: 10px;">
          <p style="color:white; "><span style="position: absolute; margin-top:8px;"> <img style="width:18px" src="./cv_icon/location.png"></span>
            <span style="font-size:14px;font-weight:600 ; margin-left:25px"><?= @$row['city'] ?> <?= @$row['country'] ?></span>
          </p>
        </div>
      </div>
    </td>

    <td style="vertical-align:top; width:20px">
      <div style="margin-top:8px; margin-bottom:10px">
        <p style="color:white; "><span style="position: absolute; margin-top:10px;"> <img style="width:18px" src="./cv_icon/phone.png"></span> <span style="font-size:14px;font-weight:600 ; margin-left:25px"><?= @$row['per_no'] ?></span>
        </p>
      </div>
    </td>
  </tr>
</table>

<!-- ====================== -->

<table style="border-collapse:collapse; text-align:left; width:21cm;  ">
  <!-- ========================Education-start==================== -->
  <tr>
    <td>
      <div style="margin-left: 20px; margin-top:30px;">
        <!-- =============heading=========== -->
        <div>
          <h1 style="text-transform: uppercase; letter-spacing:0.50px; color:#656771"><span style="font-weight:600; border-bottom:4px solid #868A97">Education</span>
          </h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ========================Education-Details==================== -->
  <?php

  while ($row5 = mysqli_fetch_assoc($result5)) {
  ?>
    <tr>
      <div style="margin-left: 22px;  margin-right:50px">
        <!-- =============Schooll name================= -->
        <div>
          <h2 style="margin-top: 20px; font-weight:700; letter-spacing:0.5px; text-transform:uppercase"><span style="border-bottom:3px solid #183042 "><?= ucfirst(@$row5['instutute_name']) ?></span></h2>
          <h4 style="font-weight:600; margin-top:4px"><?= ucfirst(@$row5['dagree']) ?> <span style="float:right;  margin-right:50px; color:#183042 "><i><?= @$row5['deg_st_date'] ?> - <?= @$row5['deg_end_date'] ?></i></span></h4>
          <h4 style="color:#183042; margin-top:3px "><i><?= @$row5['total_marks'] ?> - <?= @$row5['obtain_marks'] ?></i> </h4>
        </div>
        <div style="position:relative">
          <ul style="margin-left:20px; margin-right:20px">
            <li style="color:#183042;"> <span style="color:black;font-weight:500;line-height:14px">
            <li style="color:#449399;"> <span><b><?= @$add++ ?></b>.</span> <span style="color:black;font-weight:500;line-height:14px"><?= @$row5['field'] ?></span></li>
            </span></li>
          </ul>
        </div>

      </div>
    </tr>
  <?php } ?>

  <!-- =============================Eudcation-End========================== -->
  <!-- =============================work--End========================== -->
  <tr>
    <td>
      <div style="margin-left: 20px; margin-top:30px;">
        <!-- =============heading=========== -->
        <div>
          <h1 style="text-transform: uppercase; letter-spacing:0.50px; color:#656771"><span style="font-weight:600; border-bottom:4px solid #868A97">Work Experience</span>
          </h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ===================== -->

  <?php

  while ($row6 = mysqli_fetch_assoc($result6)) {
  ?>
    <tr>
      <div style="margin-left: 22px;">
        <!-- =============company name================= -->
        <div>
          <h2 style="margin-top: 20px; font-weight:700; letter-spacing:0.5px; text-transform:uppercase"><span style="border-bottom:3px solid #183042 "><?= ucfirst($row6['company_name']) ?></span></h2>
          <h4 style="font-weight:600; margin-top:4px"><?= ucfirst($row6['role']) ?> </h4>
          <h4 style="color:#183042; margin-top:3px "><i><?= @$row6['work_st_data'] ?> - <?= @$row6['work_end_date'] ?></i>5</h4>
        </div>
        <div style="width: 21cm;">
          <ul style="margin-left:20px; ">
            <li style="color:#183042; margin-right:50px"> <span style="color:black;font-weight:500;line-height:14px"><?= @$row6['city_country'] ?></span></li>
          </ul>
        </div>
        <div style="width: 21cm;">

        </div>
      </div>
    </tr>

  <?php } ?>

  <!-- ========================Skill-start==================== -->
  <tr>
    <td>
      <div style="margin-left: 20px; margin-top:30px;">
        <!-- =============heading=========== -->
        <div>
          <h1 style="text-transform: uppercase; letter-spacing:0.50px; color:#656771"><span style="font-weight:600; border-bottom:4px solid #868A97">Skills</span>
          </h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- =====================work-exp-details================ -->
  <!-- ======================skils-details====================== -->
  <?php
  $a = 1;
  while ($row3 = mysqli_fetch_assoc($result3)) {
    @$a = $i + 1;
  ?>
    <tr>
      <div style="margin-left: 22px;  margin-right:50px; width:21cm">
        <ul style="margin-left: 30px; margin-top:10px; list-style:none">
          <li style="color: #183042; ">
            <h3><span style="color:#2F5D80; font-weight:600"><i> <?= $a ?></i>-</span> <span style="font-weight:600; color:black; width:10cm"> <?= ucfirst(@$row3['skill']) ?> <?= @$row3['skill_per'] . '%' ?></span> <span style="color:#183042; position:absolute; margin-left:150px"> >>>>>>>>>>>>>>>>>>>>>>>></span></h3>
          </li>

        </ul>
      </div>
    </tr>
  <?php } ?>

  <!-- =========================skill End============ -->


  <!-- ========================hobby-start==================== -->
  <tr>
    <td>
      <div style="margin-left: 20px; margin-top:30px;">
        <!-- =============heading=========== -->
        <div>
          <h1 style="text-transform: uppercase; letter-spacing:0.50px; color:#656771"><span style="font-weight:600; border-bottom:4px solid #868A97">Hobbies</span>
          </h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- =====================hobby-details================ -->
  <!-- ======================hobby-details====================== -->
  <?php
  $i = 0;
  while ($row7 = mysqli_fetch_assoc($result7)) {
    $i = $i + 1;
  ?>
    <tr>
      <div style="margin-left: 22px;  margin-right:50px; width:21cm">
        <ul style="margin-left: 30px; margin-top:10px; list-style:none">
          <li style="color: #183042; ">
            <h3><span style="color:#2F5D80; font-weight:600"><i> <?= $i ?></i>-</span> <span style="font-weight:600; color:black; width:10cm"> <?= ucfirst(@$row7['hobby']) ?></span> <span style="color:#183042; position:absolute; margin-left:150px"> >>>>>>>>>>>>>>>>>>>>>>>></span></h3>
          </li>

        </ul>
      </div>
    </tr>
  <?php } ?>

  <!-- =========================hobby End============ -->


  <!-- ========================REFERCENCE-start==================== -->
  <tr>
    <td>
      <div style="margin-left: 20px; margin-top:30px;">
        <!-- =============heading=========== -->
        <div>
          <h1 style="text-transform: uppercase; letter-spacing:0.50px; color:#656771"><span style="font-weight:600; border-bottom:4px solid #868A97">Language</span>
          </h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- =====================Reference-details================ -->
  <!-- ======================Hobby-details====================== -->
  <?php
  $i = 1;
  while ($row2 = mysqli_fetch_assoc($result2)) {
    $i = $i++;
  ?>
    <tr>
      <div style="margin-left: 22px;  margin-right:50px; width:21cm">
        <ul style="margin-left: 30px; margin-top:10px; list-style:none">
          <li style="color: #183042; ">
            <h3><span style="color:#2F5D80; font-weight:600"><i> <?= $i ?></i>-</span> <span style="font-weight:600; color:black; width:10cm"> <?= ucfirst(@$row2['language']) ?></span> <span style="color:#183042; position:absolute; margin-left:150px"> >>>>>>>>>>>>>>>>>>>>>>>></span></h3>
          </li>

        </ul>
      </div>
    </tr>
  <?php } ?>

  <!-- =========================Hobby End============ -->
</table>