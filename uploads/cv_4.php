<style>
  * {
    box-sizing: border-box;
    margin: 0%;
    padding: 0%;
    font-family: 'Poppins', sans-serif;


  }

  .border-circ::before {
    content: '';
    position: absolute;
    top: 32px;
    left: -8.2px;
    border: 1px solid orange;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    background-color: white;
  }
</style>

<table style=" border-collapse:collapse; text-align:left; width:21cm; vertical-align:top">
  <tr style="background-color:white; width:21cm ">
    <td style="width: 5cm; ">
      <div>
        <img style="width: 120px; height:120px; object-fit:cover; border:4px solid orange; border-radius:50%; margin:30px 0px 10px 30px;  " src="<?php echo '../uploads/images/' . $row['user_img']; ?>" alt="">
      </div>
    </td>
    <td style="width: 16cm;color:black ">
      <div style="margin-left: 25px; line-height:18px; margin-top:30px; padding-bottom:20px">
        <h1 style="color:black; font-weight:700; font-size:48px;text-transform:uppercase "><?= @$row['fname'] ?> <span style="color:orange"><?= @$row['lname'] ?></span></h1>
        <!-- <h2 style="color:black font-weight:600; margin-top:8px" >Web developer</h2> -->
        <div style="margin-top:10px;">
          <p><span style="position: absolute;">
              <img style="width:18px; border:2px solid orange; background:orange; padding:3px; border-radius:50%; margin-top:2px" src="./cv_icon/email.png"></span>
            <span style="font-size:14px;font-weight:600 ; margin-left:40px"><?= @$row['email'] ?></span>
          </p>
        </div>
        <div style="margin-top:10px;">
          <p><span style="position: absolute;">
              <img style="width:18px; border:2px solid orange; background:orange; padding:3px; border-radius:50%; margin-top:2px" src="./cv_icon/phone.png"></span>
            <span style="font-size:14px;font-weight:600 ; margin-left:40px"><?= @$row['per_no'] ?></span>
          </p>
        </div>
        <div style="margin-top:10px;">
          <p><span style="position: absolute;">
              <img style="width:18px; border:2px solid orange; background:orange; padding:3px; border-radius:50%; margin-top:2px" src="./cv_icon/location.png"></span>
            <span style="font-size:14px;font-weight:600 ; margin-left:40px"> <span style="font-size:14px;font-weight:600; margin-left:5px;"><?= @$row['city'] ?> <?= @$row['country'] ?></span></span>
          </p>
        </div>
      </div>
      </div>
    </td>
  </tr>
</table>

<table style=" border-collapse:collapse; text-align:left; width:21cm; vertical-align:top">
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">
        <div></div>
        <div class="border-circ" style="border-left:3px solid orange;position:relative;">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase;color:orange">Skills</h1>
          <div style="width: 20cm; margin-left:20px; margin-top:10px ">
            <?php
            $a = 1;
            while ($row3 = mysqli_fetch_assoc($result3)) {
              @$a = $i + 1;
            ?>
              <button style=" margin-left:10px; padding:0 32px 5px 32px; border:3px solid orange; color:black; font-weight:700; background:transparent;font-size:20px; border-radius:5px "> <?= ucfirst(@$row3['skill']) ?></button>
            <?php } ?>
          </div>
        </div>
      </div>
    </td>
  </tr>
  <!-- =========ablut us============ -->
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">

        <div class="border-circ" style="border-left:3px solid orange;position:relative; ">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase;color:orange">About Us</h1>
          <p style="margin-left:25px; font-weight:500; line-height:14px; margin-right:40px">
          <p style="color:black; font-weight:500; line-height:14px; margin-left:25px"><?= @$row['about_us'] ?></p>
        </div>
      </div>
    </td>
  </tr>
  <!-- ====================education============= -->
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">
        <div class="border-circ" style="border-left:3px solid orange;position:relative; ">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase; color:orange">Education</h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ====================education-details============= -->
  <tr>
    <div style="margin-left: 33px;">
      <div style="border-left:3px solid orange;position:relative;  ">
        <?php

        while ($row5 = mysqli_fetch_assoc($result5)) {
        ?>
          <div style="margin-left:25px">
            <h2 style="font-weight:600"><?= ucfirst(@$row5['instutute_name']) ?> <span style="font-size:14px; padding-left:30px; position:absolute; margin-top:12px"><i><?= @$row5['deg_st_date'] ?></i> // <i><?= @$row5['deg_end_date'] ?></i></span></h2>
            <h4 style="font-weight:600"><?= ucfirst(@$row5['dagree']) ?></h4>
            <h5 style="font-weight:600"><?= @$row5['total_marks'] ?> / <?= @$row5['obtain_marks'] ?></h5>
          </div>
        <?php } ?>
      </div>
    </div>
  </tr>
  <!-- ====================education-end============= -->

  <!-- ====================Work============= -->
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">
        <div class="border-circ" style="border-left:3px solid orange;position:relative; ">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase; color:orange">Work Experience</h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ====================Work-details============= -->
  <tr style="width: 21cm;">
    <div style="margin-left: 33px;">
      <div style="border-left:3px solid orange;position:relative;  ">

        <?php

        while ($row6 = mysqli_fetch_assoc($result6)) {
        ?>
          <div style="margin-left:25px">
            <h2 style="font-weight:600"><?= ucfirst($row6['company_name']) ?> <span style="font-size:14px; padding-left:30px; position:absolute; margin-top:12px"><i><?= @$row6['work_st_data'] ?></i> // <i>0<?= @$row6['work_end_data'] ?></i></span></h2>
            <h4 style="font-weight:600"><?= ucfirst($row6['role']) ?></h4>
            <h5 style="font-weight:600; padding-right:30px"></h5>
            <div style="margin-top: 10px; margin-left:10px">
              <ul style="line-height: 15px;">
                <li style="color:orange">
                  <h4 style="color:black; font-weight:500; margin-right:40px"><?= @$row6['city_country'] ?></h4>
                </li>
              </ul>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </tr>
  <!-- ====================Work-end============= -->

  <!-- ====================hobbies============= -->
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">
        <div class="border-circ" style="border-left:3px solid orange;position:relative; ">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase; color:orange">Hobbies</h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ==================hobbies-details===================== -->

  <tr style="width: 21cm;">
    <div style="margin-left: 33px;">
      <div style="border-left:3px solid orange;position:relative; padding-bottom: 20px; ">
        <div style=" margin-left:25px; padding-top:15px ">
          <?php
          $i = 0;
          while ($row7 = mysqli_fetch_assoc($result7)) {
            $i = $i + 1;
          ?>
            <button style=" margin-left:10px; padding:0 32px 5px 32px; border:3px solid orange; color:black; font-weight:700; background:transparent;font-size:20px; border-radius:5px "> <?= ucfirst(@$row7['hobby']) ?> </button>
          <?php } ?>
        </div>
      </div>
    </div>
  </tr>
  <!-- =================hobby-end============================ -->


  <!-- ====================Language============= -->
  <tr style=" width:21cm ">
    <td style="vertical-align:top; padding-right:30px;">
      <div style="margin-left: 33px;">
        <div class="border-circ" style="border-left:3px solid orange;position:relative; ">
          <h1 style="margin-left: 15px; font-weight:600; text-transform:uppercase; color:orange">Language</h1>
        </div>
      </div>
    </td>
  </tr>
  <!-- ==================Language===================== -->

  <tr style="width: 21cm;">
    <div style="margin-left: 33px;">
      <div style="border-left:3px solid orange;position:relative; padding-bottom: 20px; ">
        <div style=" margin-left:25px; padding-top:25px ">
          <?php
          $i = 1;
          while ($row2 = mysqli_fetch_assoc($result2)) {
            $i = $i++;
          ?>
            <button style=" margin-left:10px; padding:0 32px 5px 32px; border:3px solid orange; color:black; font-weight:700; background:transparent;font-size:20px; border-radius:5px "><?= ucfirst(@$row2['language']) ?> </button>
          <?php } ?>
        </div>
      </div>
    </div>
  </tr>
  <!-- =================Language-end============================ -->


</table>