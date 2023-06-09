<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>

</head>

<body>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500;1,600&display=swap');

    .containe {
      width: 21cm;
      height: 29.7cm;
    }
  </style>
  <div class="containe " style="        font-family: 'Poppins', sans-serif;">
    <table class="" style="margin: 0; padding:0%;     border-collapse:separate">
      <thead>
        <td>
          <img src='https://yt3.ggpht.com/XEx-UEFwcGELY5UBO-GzFuwpSQ27yM19GgRb9m1Ib6v77XqitWZx5BA4f2x2K2FtR3YU1bkeNA=s88-c-k-c0x00ffffff-no-rj-mo' alt="f" width="20%">
          <h2> <?= @$row['fname'] ?> <?= @$row['lname'] ?> </h2>
          <div style="font-weight: 800;">
            <i class='bx bxs-home'></i><?= @$row['city'] ?> <?= @$row['country'] ?>
            <i class='bx bx-phone-call' style="width: 250%;margin-top: 20px;"></i><?= @$row['per_no'] ?>
            <i class='bx bx-envelope' style="width: 250%;margin-top: 20px;"></i><?= @$row['email'] ?>
            <h1> <?= @$row['profession'] ?></h1>
          </div>
          <div style="background-color: black;width: 100px;color: white;padding-left: 5px;height: 40px;">
            <h1>SKILL</h1>
          </div>
          <?php
          while ($row3 = mysqli_fetch_assoc($result3)) {
          ?>
            <h5>
              <?= ucfirst(@$row3['skill']) ?> <?= @$row3['skill_per'] . '%' ?>
            </h5>

          <?php } ?>

          <div style="background-color: black;width: 230px;color: white;padding-left: 5px;height: 40px">
            <h1>LANGUAGES</h1>
          </div>
          <?php
          while ($row2 = mysqli_fetch_assoc($result2)) {
          ?>
            <h3>
              <?= ucfirst(@$row2['language']) ?>
            </h3>
          <?php } ?>
          <div style="background-color: black;width: 230px;color: white;padding-left: 5px;height: 40px;;">
            <h1>Reference</h1>
          </div>
          <?php
          while ($row4 = mysqli_fetch_assoc($result4)) {
          ?>
            <h3>
              <?= ucfirst($row4['user_reference']) ?>
            </h3>

          <?php } ?>

        </td>
        <td style="display: block;">
          <div style="background-color: black;width: 200px;color: white;padding-left: 5px;height: 40px;margin-top: 50px;">
            <h1>ABOUT ME</h1>
          </div>
          <p><?= @$row['about_us'] ?></p>
          <div style="background-color: black;width: 200px;color: white;padding-left: 5px;height: 40px;margin-top: 50px;">
            <h1>EDUCATION</h1>
          </div>
          <ul>
            <?php
            while ($row5 = mysqli_fetch_assoc($result5)) {
            ?>
              <div style="padding-left: 30px;margin-top: 10px;">
                <h2><?= ucfirst(@$row5['instutute_name']) ?></h2>
                <p><?= ucfirst(@$row5['dagree']) ?> </p>
                <p><?= @$row5['deg_st_date'] ?> <b>TO</b> <?= @$row5['deg_end_date'] ?></p>
                <p><?= @$row5['total_marks'] ?> <b>TO</b> <?= @$row5['obtain_marks'] ?></p>
              </div>

            <?php } ?>
            <div style="background-color: black;width: 300px;color: white;padding-left: 5px;height: 40px;margin-top: 50px;">
              <h1>WORK EXPERIENCE</h1>
            </div>
            <?php
            while ($row6 = mysqli_fetch_assoc($result6)) {
            ?>
              <div style="padding-left: 30px;margin-top: 10px;">
                <h2><?= ucfirst($row6['company_name']) ?></h2>
                <p><?= ucfirst($row6['role']) ?> </p>
                <p><?= @$row6['work_st_data'] ?> <b>TO</b> <?= @$row6['work_end_date'] ?></p>
                <p style="float:right"><?= ucfirst($row6['city_country']) ?> </p>
              </div>

            <?php } ?>

      </thead>
    </table>
  </div>

</body>

</html>
<style>