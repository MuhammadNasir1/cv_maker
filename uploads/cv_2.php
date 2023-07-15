<style>
    * {
        box-sizing: border-box;
        margin: 0%;
        padding: 0%;
        font-family: 'Poppins', sans-serif;

    }
</style>
<div>
    <table style=" border-collapse:collapse; text-align:left; width:21cm">
        <tr>
            <td style=" width:21cm; vertical-align:top">
                <div style=" padding-bottom:20px;padding-right:20px">
                    <!-- ==================Name============== -->
                    <div style="line-height: 18px; margin-top:20px;   ">
                        <div style=" padding-left: 20px;">
                            <h1 style="  font-weight:600; text-transform:uppercase"><?= @$row['fname'] ?> <?= @$row['lname'] ?></h1>
                            <h3 style="font-weight: 600; color:#449399;"><?= @$row['profession'] ?></h3>
                        </div>
                        <div style="width:21cm; ">
                            <div style="background-color:#323B4C; width:21cm ">
                                <p style="line-height: 14px; margin-top:14px;color:white; letter-spacing:0.10px; padding:20px 30px 20px 20px; font-weight:600"><?= @$row['about_us'] ?></p>
                            </div>
                            <div style="background:#449399;         border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
                                <!-- =========================phone================= -->
                                <div style="margin-left: 20px; padding-bottom:10px">
                                    <p style="color:white; ">
                                        <span style="position: absolute; margin-top:10px;"> <img style="width:16px" src="./cv_icon/email.png"></span> <span style="font-size:12px;font-weight:600 ; margin-left:22px"><?= @$row['email'] ?></span>
                                        <!-- =========phone======= -->
                                        <span style="margin-left:20px">
                                            <span style="position: absolute; margin-top:10px;"> <img style="width:16px" src="./cv_icon/phone.png"></span> <span style="font-size:12px;font-weight:600 ; margin-left:20px"><?= @$row['per_no'] ?></span>
                                        </span>
                                        <!-- =========City======= -->
                                        <span style="margin-left:20px">
                                            <span style="position: absolute; margin-top:10px;"> <img style="width:16px" src="./cv_icon/location.png"></span> <span style="font-size:12px;font-weight:600 ; margin-left:20px"><?= @$row['city'] ?> <?= @$row['country'] ?></span>
                                        </span>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </td>

        </tr>
        <!-- =====================Work-experience================= -->
        <tr>
            <td>

                <div style="margin-left: 20px;">
                    <!-- =============heading=========== -->
                    <div>
                        <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/work.png"> <span style="font-weight:600;margin-left:55px">Work Experience</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
                    </div>
                </div>
            </td>
        </tr>
        <!-- =====================work-exp-details================ -->
        <?php
        while ($row6 = mysqli_fetch_assoc($result6)) {
        ?>
            <tr>
                <div style="margin-left: 22px;">
                    <!-- =============company name================= -->
                    <div>
                        <h3 style="margin-top: 20px; font-weight:700; letter-spacing:0.5px; text-transform:uppercase"><span style="border-bottom:3px solid #449399 "><?= ucfirst($row6['company_name']) ?></span></h3>
                        <h5 style="font-weight:600; margin-top:4px"><?= ucfirst($row6['role']) ?> </h5>
                        <h5 style="color:#449399; margin-top:3px "><i><?= @$row6['work_st_data'] ?> - <?= @$row6['work_end_date'] ?></i>5</h5>
                    </div>
                    <div style="width: 21cm;">
                        <ul style="margin-left:20px; ">
                            <li style="color:#449399; margin-right:50px"> <span style="color:black;font-weight:500;line-height:14px"><?= @$row6['city_country'] ?></span></li>
                        </ul>
                    </div>
                    <div style="width: 21cm;">

                    </div>
                </div>
            </tr>

        <?php } ?>
        <!-- =====================Work-Experience-END================= -->


        <!-- =====================Education================= -->
        <tr>
            <td>

                <div style="margin-left: 20px; margin-top:30px;">
                    <!-- =============heading=========== -->
                    <div>
                        <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/education.png"> <span style="font-weight:600;margin-left:55px">Education</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
                    </div>
                </div>
            </td>
        </tr>
        <!-- =====================Education-details================ -->
        <?php
        $add = 1;
        while ($row5 = mysqli_fetch_assoc($result5)) {
            $add =  $add++;
        ?>
            <tr>
                <div style="margin-left: 22px;  margin-right:50px">
                    <!-- =============Schooll name================= -->
                    <div>
                        <h3 style="margin-top: 20px; font-weight:700; letter-spacing:0.5px; text-transform:uppercase"><span style="border-bottom:3px solid #449399 "><?= ucfirst(@$row5['instutute_name']) ?></span></h3>
                        <h5 style="font-weight:600; margin-top:4px"><?= ucfirst(@$row5['dagree']) ?> <span style="float:right;  margin-right:50px; color:#449399 "><i><?= @$row5['deg_st_date'] ?> - <?= @$row5['deg_end_date'] ?></i></span></h5>
                        <h5 style="color:#449399; margin-top:3px "><i><?= @$row5['total_marks'] ?> - <?= @$row5['obtain_marks'] ?></i> </h5>
                    </div>
                    <div style="position:relative">
                        <ul style="margin-left:20px; margin-right:20px; list-style:none;">
                            <li style="color:#449399;"> <span><b><?= @$add++ ?></b>.</span> <span style="color:black;font-weight:500;line-height:14px"><?= @$row5['field'] ?></span></li>
                        </ul>
                    </div>

                </div>
            </tr>
        <?php } ?>
        <!-- =====================Education-END================= -->

        <!-- =====================Skill================= -->
        <tr>
            <td>
                <div style="margin-left: 20px; margin-top:30px;">
                    <!-- =============heading=========== -->
                    <div>
                        <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/skill.png"> <span style="font-weight:600;margin-left:55px">Skills</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
                    </div>
                </div>
            </td>
        </tr>
        <!-- ======================skils-details====================== -->
        <?php
        $a = 1;

        while ($row3 = mysqli_fetch_assoc($result3)) {
            $a =  $a++;
        ?>
            <tr>
                <div style="margin-left: 22px;  margin-right:50px; width:21cm">
                    <ul style="margin-left: 30px; margin-top:10px; list-style:none;">
                        <li style="color: #449399; ">
                            <h3> <span style="font-weight:500; color:black; width:10cm"><span style="color: #449399;"><b><?= @$a++ ?></b>. </span> <?= ucfirst(@$row3['skill']) ?> <?= @$row3['skill_per'] . '%' ?></span> <span style="color:#449399; position:absolute; margin-left:200px"> ......................</span></h3>
                        </li>

                    </ul>
                </div>
            </tr>
        <?php } ?>

        <!-- =========================skill End============ -->

        <!-- =====================Hobby================= -->
        <tr>
            <td>
                <div style="margin-left: 20px; margin-top:30px;">
                    <!-- =============heading=========== -->
                    <div>
                        <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/skill.png"> <span style="font-weight:600;margin-left:55px">Hobbies</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
                    </div>
                </div>
            </td>
        </tr>
        <!-- ======================hobby-details====================== -->
        <?php
        $i = 1;
        while ($row7 = mysqli_fetch_assoc($result7)) {
            $i = $i++;
        ?>
            <tr>
                <div style="margin-left: 22px;  margin-right:50px; width:21cm">
                    <ul style="margin-left: 30px; margin-top:10px; list-style:none">
                        <li style="color: #449399; ">
                            <h3> <span style="font-weight:500; color:black; width:10cm"><span style="color: #449399; "><b><?= @$i++; ?></b>.</span> <?= ucfirst(@$row7['hobby']) ?></span> <span style="color:#449399; position:absolute; margin-left:200px"> ......................</span></h3>
                        </li>

                    </ul>
                </div>
            </tr>
        <?php } ?>

        <!-- =========================hobby End============ -->

        <!-- =====================reference================= -->
        <tr>
            <td>
                <div style="margin-left: 20px; margin-top:30px;">
                    <!-- =============heading=========== -->
                    <div>
                        <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/skill.png"> <span style="font-weight:600;margin-left:55px">Language</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
                    </div>
                </div>
            </td>
        </tr>
        <!-- ======================Language-details====================== -->

        <tr>
            <?php
            $i = 1;
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $i = $i++;
            ?>
                <div style="margin-left: 22px;  margin-right:50px; width:21cm">
                    <ul style="margin-left: 30px; margin-top:10px; list-style:none">
                        <li style="color: #449399; ">
                            <h3> <span style="font-weight:500; color:black; width:10cm"><span style="color: #449399; "><b><?= @$i++; ?></b>.</span> <?= ucfirst(@$row2['language']) ?></span> <span style="color:#449399; position:absolute; margin-left:200px"> ......................</span></h3>
                        </li>

                    </ul>
                </div>
        </tr>
    <?php } ?>
    <!-- =========================Language======= -->

    <!-- =====================reference================= -->
    <!-- <tr>
    <td>
        <div style="margin-left: 20px; margin-top:30px;"> -->
    <!-- =============heading=========== -->
    <!-- <div>
                <h2 style="text-transform: uppercase; letter-spacing:0.50px"> <img style="background-color:#323B4C; padding:10px; border-radius:50%; width:24px; position:absolute;margin-top:6px" src="./cv_icon/skill.png"> <span style="font-weight:600;margin-left:55px">Reference</span> <span> <img style=" width:350px; margin-top:26px; margin-left:20px;position:absolute" src="./cv_icon/Line 1.png"></span></h2>
            </div>
        </div>
    </td> -->
    <!-- </tr> -->
    <!-- ======================reference-details====================== -->
    <tr>
        <?php
        while ($row4 = mysqli_fetch_assoc($result4)) {
        ?>
            <!-- <div style="margin-left: 22px;  margin-right:50px; width:21cm">
            <div style="margin-left: 20px;">
                <h3 style="margin-top: 20px; font-weight:700; letter-spacing:0.5px; text-transform:uppercase"><span style="border-bottom:3px solid #449399 "><?= ucfirst(@$row4['user_reference']) ?></span></h3>
                <h5 style="font-weight:600; margin-top:4px">Software Enginerr(SE)</h5>
                <h5 style="font-weight:600; margin-top:2px">muhammadnasir.dev@gmal.com</h5>
                <h5 style="color:#449399; margin-top:3px "><i>+92 123456789</i></h5>
            </div> -->
</div>
<?php } ?>
</tr>
<!-- =========================reference End============ -->
</tbody>
</table>