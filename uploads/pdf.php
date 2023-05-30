<div id="selectedImageHtml" style=" font-family: 'Poppins', sans-serif;">
  <div id="myDiv">
    <div class="container" style="height:27cm; width:29.7cm">
      <div style="display: grid; grid-template-columns: 30% 70%;   border:2px solid blue">
        <!-- ===============col-1-start=================== -->
        <div style="background-color:#154C73; height: 29.7cm;">
          <!-- =========Contact info======== -->
          <div style="margin-top: 90px;color: white;">
            <h1 style="border:2px;" align="center">
              <span><?= @$row['fname'] ?> <br> <?= @$row['lname'] ?></span>
            </h1>
            <h3 style="background-color: #0E79AC;padding-left: 20px; margin: 10px 0px 10px 0px;text-align: center;">
              <i>
                <?= @$row['profession'] ?>
              </i>
            </h3>
            <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 40%; background-color: #0E79AC  ;margin-top: 30px;padding-left: 20px;">
              <span>CONTACT</span>

            </h3>
            <div style="margin-top: 20px;padding-left: 10px;">
              <p>Phone: <?= @$row['per_no'] ?></p>
              <p>Email: <?= @$row['email'] ?></p>
              <p>Address: <?= @$row['city'] ?> <?= @$row['country'] ?></p>
            </div>
            <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 50%; background-color: #0E79AC;margin-top: 30px;padding-left: 20px;">
              <span>LANGUAGES</span>
            </h3>
            <div style="padding-left: 30px;margin-top: 20px;">
              <ul>
                <?php
                while ($row2 = mysqli_fetch_assoc($result2)) {
                ?>
                  <li>
                    <?= ucfirst(@$row2['language']) ?>
                  </li>
                <?php } ?>
              </ul>
            </div>
            <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 23%; background-color: #0E79AC;margin-top: 30px;padding-left: 20px;">
              <span>SKILL</span>
            </h3>
            <div style="padding-left: 30px;margin-top: 20px;">
              <ul>
                <?php
                while ($row3 = mysqli_fetch_assoc($result3)) {
                ?>
                  <li>
                    <?= ucfirst(@$row3['skill']) ?> <?= @$row3['skill_per'] . '%' ?>
                  </li>

                <?php } ?>
              </ul>
            </div>
            <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 23%; background-color: #0E79AC;margin-top: 30px;padding-left: 20px;">
              <span>Reference</span>
            </h3>
            <div style="padding-left: 30px;margin-top: 20px;">
              <ul>
                <?php
                while ($row4 = mysqli_fetch_assoc($result4)) {
                ?>
                  <li>
                    <?= ucfirst($row4['user_reference']) ?>
                  </li>

                <?php } ?>
              </ul>
            </div>
            <div style="margin-top: 10px;">
            </div>
          </div>
        </div>
        <div>
          <!-- ===========profile===== -->
          <div>
            <div style="display: flex;  align-items: center ; justify-content: flex-end;">
              <div style="font-size: 50px; margin: 30px 20px 0;"><i class='bx bxs-user'></i></div>
              <h1 style="padding: 0px 10px 0px 0px; border-radius: 20px 0px 0px 20px; width: 80%; background-color: #0E79AC  ;margin-top: 30px;color: white; display: flex;padding-left: 9px;font-weight: 500; align-items: center;">
                PROFILE
              </h1>
            </div>
            <div style="padding-left: 30px;margin-top: 30px;">
              <p><?= @$row['about_us'] ?>
              </p>
            </div>
            <!-- =========profile end========== -->
          </div>
          <!-- ===========profile===== -->
          <div>
            <div style="display: flex; align-items: center ; justify-content: flex-end;">
              <div style="font-size: 60px; margin: 40px 20px 0;">
                <i class='bx bxs-graduation'></i>
              </div>
              <h1 style="padding: 0px 10px 0px 0px; border-radius: 20px 0px 0px 20px; width: 80%; background-color: #0E79AC  ;margin-top: 30px;color: white; display: flex;padding-left: 9px;font-weight: 500;">
                EDUCATION
              </h1>
            </div>
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

            <!-- =========EXPERIENCE end========== -->
          </div>
          <div style="display: flex; align-items: center ; justify-content: flex-end;">
            <div style="font-size: 60px; margin: 40px 20px 0;">
              <i class='bx bxs-bar-chart-alt-2'></i>
            </div>
            <h1 style="padding: 0px 10px 0px 0px; border-radius: 20px 0px 0px 20px; width: 80%; background-color: #0E79AC  ;margin-top: 30px;color: white; display: flex;padding-left: 9px;font-weight: 500;">
              WORK EX
            </h1>
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

          <!-- =========EXPERIENCE end========== -->
        </div>
      </div>
    </div>