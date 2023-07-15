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
      /* margin-top: 20px; */
      margin-bottom: 10px;
    }



    .per_det {
      border-left: 2px solid gray;
      line-height: 17px;
      padding-left: 10px;
      margin-top: 25px;
    }
  </style>
</head>

<body>
  <table>
    <thead>
      <tr style="width: 21cm;">
        <td style="width: 21cm;background-color: #212121;color:white; height: 70px;">
          <div>
            <h5 style="text-align:center; font-weight:600;"><?= @$row['city'] ?> <?= @$row['country'] ?> <span style="border-left:2px solid gold;margin-left:5px; padding-left:5px;">
                <?= @$row['per_no'] ?></span>
              <span style="border-left:2px solid gold;margin-left:5px; padding-left:5px;"><?= @$row['email'] ?></span>
            </h5>
          </div>
        </td>
      </tr>
    </thead>
  </table>
  <div>
    <h1 style="text-transform: uppercase;letter-spacing:2px;font-weight:600;text-align:center;font-size:40px"><?= @$row['fname'] ?> <?= @$row['lname'] ?></h1>
  </div>
  <hr>
  <table>
    <thead>
      <tr style="width: 21cm;">
        <td style="width: 4cm;padding-left: 20px;vertical-align:top;">
          <h4>ABOUT ME</h4>
        </td>
        <td style="width: 17cm;margin-top: 20px;line-height: 14px">
          <p style="padding-right: 40px;"><?= @$row['about_us'] ?></p>
        </td>
      </tr>
    </thead>
  </table>
  <hr>
  <table>
    <thead>
      <tr style="width: 21cm;">
        <td style="width: 5cm;padding-left: 20px;vertical-align:top;">
          <h4>WORK EXPERIENCE</h4>
        </td>
        <td>
          <?php
          while ($row6 = mysqli_fetch_assoc($result6)) {
          ?>
            <div>
              <h3><?= ucfirst($row6['company_name']) ?></h3>
              <h6><?= @$row6['work_st_data'] ?> - <?= @$row6['work_end_date'] ?></h6>
              <p style="line-height: 14px; padding-right: 40px;"><?= @$row6['city_country'] ?></p>

            </div>

          <?php } ?>
        </td>
      </tr>
    </thead>
  </table>
  <table>
    <thead>
      <tr style="width: 21cm;">
        <td style="width: 5cm;padding-left: 20px;vertical-align:top;">
          <h4> EDUCATION</h4>
          <h6></h6>
        </td>
        <td style="vertical-align:top;">
          <?php
          $add = 1;
          while ($row5 = mysqli_fetch_assoc($result5)) {
            $add =  $add++;
          ?>
            <div>
              <h4> <?= ucfirst(@$row5['instutute_name']) ?></h4>
              <h6><?= @$row5['deg_st_date'] ?> - <?= @$row5['deg_end_date'] ?></h6>
              <h5><?= @$row5['total_marks'] ?> - <?= @$row5['obtain_marks'] ?></h5>
              <p><?= @$row5['field'] ?></p>
            <?php } ?>
            </div>
        </td>
      </tr>
    </thead>
  </table>
  <hr>
  <table>
    <thead>
      <tr style="width: 21cm; ">
        <td style="width: 7cm;padding-left:25px;vertical-align:top;">
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
                  <h4 style="text-transform: uppercase ; font-weight:500; "><?= ucfirst(@$row3['skill']) ?></h4>
                </li>
              <?php } ?>
            </ul>

          </div>
        </td>
        <td style="width: 7cm; padding-left:25px;vertical-align:top;">
          <h2>
            LANGUAGE
          </h2>
          <div style="line-height: 20px;">
            <ul>
              <?php
              $i = 1;
              while ($row2 = mysqli_fetch_assoc($result2)) {
                $i = $i++;
              ?>
                <li style="margin-left:20px">
                  <h4 style="text-transform: uppercase ; font-weight:500; "><?= ucfirst(@$row2['language']) ?></h4>
                </li>
              <?php } ?>
            </ul>
            </ul>

          </div>
        </td>
        <td style="width: 7cm; padding-left:25px;vertical-align:top;">
          <h2>
            HOBBIES
          </h2>
          <div style="line-height: 20px;">
            <ul>
              <?php
              $i = 1;
              while ($row7 = mysqli_fetch_assoc($result7)) {
                $i = $i++;
              ?>
                <li style="margin-left:20px">
                  <h4 style="text-transform: uppercase ; font-weight:500; "><?= ucfirst(@$row7['hobby']) ?></h4>
                </li>
              <?php } ?>
            </ul>

          </div>
        </td>
      </tr>
    </thead>
  </table>
  <hr>

</body>

</html>