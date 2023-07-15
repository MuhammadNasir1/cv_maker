<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500;1,600&display=swap');

    .containe {}

    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;

    }

    table {
      border-collapse: collapse;
      width: 21cm;
    }

    .per_det {
      border-left: 2px solid gray;
      line-height: 17px;
      padding-left: 10px;
      margin-top: 12px;
    }

    .pro_exp {
      line-height: 17px;
      margin-top: 12px;
    }
  </style>
</head>

<body>
  <table>
    <thead>
      <tr style="width: 21cm; ">
        <td style="width: 12cm;   padding-left:25px;">
          <div style="line-height: 16px; margin-top:30px">
            <h1 style="text-transform: uppercase ; font-weight:600;"><?= @$row['fname'] ?> <?= @$row['lname'] ?></h1>
            <h4 style="text-transform: uppercase ; font-weight:700; color: #000000b1;"><?= @$row['profession'] ?></h4>
          </div>
        </td>
        <td style="width: 9cm; padding-right:25px;">
          <div class="per_det">
            <h4 style="font-weight: 600; "><?= @$row['email'] ?></h4>
            <h4 style="font-weight: 600; "><?= @$row['per_no'] ?></h4>
            <h4 style="font-weight: 500; "><?= @$row['city'] ?> <?= @$row['country'] ?></h4>
          </div>
        </td>
      </tr>
    </thead>
  </table>
  <div style="padding-left:25px; padding-right:25px; margin-top:10px">
    <h2>
      ABOUT ME
    </h2>
    <p style=" line-height: 15px; font-weight:500; color: black;"><?= @$row['about_us'] ?></p>
  </div>
  <div style="padding-left:25px; margin-top:10px">
    <h2>EDUCATION</h2>
  </div>
  <table>
    <thead>
      <?php
      $add = 1;
      while ($row5 = mysqli_fetch_assoc($result5)) {
        $add =  $add++;
      ?>
        <tr style="width: 21cm; ">
          <td style="width: 4cm;padding-left:25px;">
            <div style="line-height: 16px; margin-top:30px">
              <h4 style="text-transform: uppercase ; font-weight:700; color: #000000b1;">2012-2015</h4>
            </div>
          </td>
          <td style="width: 17cm; padding-right:25px;margin-top:30px;">
            <div class="pro_exp">
              <h3 style="font-weight: 600; "><?= ucfirst(@$row5['dagree']) ?> </h3>
              <h4><?= ucfirst(@$row5['instutute_name']) ?> <i><?= @$row5['deg_st_date'] ?> - <?= @$row5['deg_end_date'] ?></i> </h4>
              <p><?= @$row5['field'] ?></p>
            </div>
          </td>
        </tr>
      <?php } ?>
    </thead>
  </table>

  <div style="padding-left:20px; margin-top:10px;">
    <h2>
      PROFESSIONAL EXPERIENCE
    </h2>
  </div>
  <table>
    <thead>
      <?php
      while ($row6 = mysqli_fetch_assoc($result6)) {
      ?>
        <tr style="width: 21cm; ">
          <td style="width: 4cm;padding-left:25px;">
          </td>
          <td style="width: 17cm; padding-right:25px;margin-top:30px;">
            <div class="pro_exp">
              <!-- <h2>3 Year of Experience</h2> -->
              <h3 style="font-weight: 600; "><?= ucfirst($row6['company_name']) ?></h3>
              <h6 style="font-weight: 600; "><?= @$row6['work_st_data'] ?> - <?= @$row6['work_end_date'] ?></i> </h3>
                <h4 style="font-weight: 600; "><?= ucfirst($row6['role']) ?> </h4>
                <ul>
                  <li>
                    <?= @$row6['city_country'] ?>
                  </li>
                </ul>

            </div>
          </td>
        </tr>
      <?php } ?>
    </thead>
  </table>

  <table>
    <thead>
      <tr style="width: 21cm; ">
        <td style="width: 10.5cm;padding-left:25px;vertical-align:top;">
          <div>
            <h2>
              SKILL
            </h2>
          </div>
          <div style="line-height: 20px; margin-top:25 px">
            <ul>
              <?php
              $a = 1;

              while ($row3 = mysqli_fetch_assoc($result3)) {
                $a =  $a++;
              ?>
                <li style="margin-left:20px">
                  <h3 style="text-transform: uppercase ; font-weight:500; "><?= ucfirst(@$row3['skill']) ?></h3>
                </li>
              <?php } ?>


          </div>
        </td>
        <td style="width: 10.5cm; padding-left:25px;vertical-align:top;">
          <h2>
            LANGUAGE
          </h2>
          <div style="line-height: 20px;">
            <ul>
              <?php

              while ($row2 = mysqli_fetch_assoc($result2)) {

              ?>

                <li style="margin-left:20px">
                  <h3 style="text-transform: uppercase ; font-weight:500; "><?= ucfirst(@$row2['language']) ?></h3>
                </li>
              <?php } ?>

            </ul>

          </div>
        </td>
      </tr>
    </thead>
  </table>
</body>

</html>