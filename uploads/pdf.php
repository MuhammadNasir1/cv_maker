<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500;1,600&display=swap');

  .containe {
    border: 2px solid red;
    width: 21cm;
    height: 29.7cm;
    /* width: 21rem;
    height: 29.7rem; */
  }
</style>
<div class="containe " style="        font-family: 'Poppins', sans-serif;">
  <table class="" style="margin: 0; padding:0%;     border-collapse:separate">
    <thead>
      <td>
        <img src="img/sad-emoji-file-download-free-png.webp" alt="" width="20%">
        <h2> <?= @$row['fname'] ?> <?= @$row['lname'] ?> </h2>
        <div style="font-weight: 800;">
          <i class='bx bxs-home'><?= @$row['city'] ?> <?= @$row['country'] ?></i>
          <i class='bx bx-phone-call' style="width: 250%;margin-top: 20px;"><?= @$row['per_no'] ?></i>
          <i class='bx bx-envelope' style="width: 250%;margin-top: 20px;"><?= @$row['email'] ?></i>
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
              <p><?= ucfirst($row6['city_country']) ?> </p>
            </div>

          <?php } ?>
      </td>
    </thead>
  </table>
</div>