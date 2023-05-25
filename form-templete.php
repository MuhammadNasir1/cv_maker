<?php
include('db.php');
$sql = "SELECT * FROM `per_info` WHERE user_id = '" . $_SESSION['user_id'] . "'";
print_r($sql);

$result = mysqli_query($conn, $sql);
$row = (mysqli_fetch_assoc($result));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;1,400;1,500;1,600&display=swap');

    * {
        padding: 0%;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        border: 2px solid red;
        width: 21cm;
        min-height: 29.7cm;

    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        padding: 10px;
    }

    .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 2px;
        font-size: 20px;
        /* text-align: center; */
        font-weight: 500;

        padding-left: 10px;
    }

    .grid-con {
        display: grid;
        grid-template-columns: auto auto;
        padding: 10px;
        font-weight: 800;
    }

    .grid-cerificate {
        display: grid;
        grid-template-columns: auto;
        padding: 10px;
        font-weight: 800;
    }

    .working {
        display: grid;
        grid-template-columns: auto auto;
        padding: 10px;
        font-weight: 800;
    }

    .LANGUAGES {
        display: grid;
        grid-template-columns: auto;
        padding: 10px;
        font-weight: 800;
    }

    .cv_bg {
        background-color: #0086DE;

    }

    .cv_cont {
        background-color: white;
        margin: 25px;
        height: 950px;
        /* width:80%;
 height: 80%; */

    }
</style>

<body>
    <div class="container" style="margin: auto;">
        <div style="display: grid; grid-template-columns: 30% 70%;">
            <!-- ===============col-1-start=================== -->
            <div style="background-color:#154C73; height: 29.7cm; ">
                <!-- =========Contact info======== -->
                <div style="margin-top: 90px;color: white;">
                    <h1 style="border:2px;" align="center">
                        <span><?= @$row['fname'] ?><?= @$row['lname'] ?></span>
                    </h1>
                    <h3 style="background-color: #0E79AC;padding-left: 20px; margin: 10px 0px 10px 0px;text-align: center;">
                        <i>
                            KITCHEHHAND
                        </i>
                    </h3>
                    <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 40%; background-color: #0E79AC  ;margin-top: 30px;padding-left: 20px;">
                        <span>CONTACT</span>

                    </h3>
                    <div style="margin-top: 20px;padding-left: 10px;">
                        <p>Phone: <?= @$row['per_no'] ?></p>
                        <p>Email: <?= @$row['email'] ?></p>
                        <p>Address: Bahria Town Lahore</p>
                    </div>
                    <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 60%; background-color: #0E79AC ;margin-top: 35px;padding-left: 20px;">
                        <span>CERTIFICATE</span>
                    </h3>
                    <div style="margin-top: 20px;padding-left: 30px;">
                        <p>
                        <ul>
                            <li>
                                First Aid Kit Certificate
                            </li>
                            <li>
                                Software Engineer certificate
                            </li>
                            <li>
                                RSA and RCG Certificate
                            </li>
                        </ul>
                    </div>
                    <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 50%; background-color: #0E79AC;margin-top: 30px;padding-left: 20px;">
                        <span>LANGUAGES</span>
                    </h3>
                    <div style="padding-left: 30px;margin-top: 20px;">
                        <ul>
                            <li>
                                ENGLISH
                            </li>
                            <li>
                                CHINES
                            </li>
                            <li>
                                SPANISH
                            </li>
                        </ul>
                    </div>
                    <h3 style="padding: 0px 10px 0px 0px; border-radius: 0px 10px 10px 0px; width: 23%; background-color: #0E79AC;margin-top: 30px;padding-left: 20px;">
                        <span>SKILL</span>
                    </h3>
                    <div style="padding-left: 30px;margin-top: 20px;">
                        <ul>
                            <li>
                                GRAPHIC DESIGNER
                            </li>
                            <li>
                                SEO EXPERT
                            </li>
                            <li>
                                APP DEVELOPER
                            </li>
                            <li>
                                WEB DEVELOPER
                            </li>
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
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo eos dolores quibusdam quidem
                            provident
                            architecto explicabo a porro. Suscipit dolores et illum possimus magnam hic dolor dolorum
                            explicabo!
                            Voluptatem, eligendi! explicabo a porro. Suscipit dolores et illum possimus magnam hic dolor
                            dolorum.
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
                    <div style="padding-left: 30px;margin-top: 10px;">
                        <h2>CHESTER HILL HIGHSCHOOL</h2>
                        <p>Complete hsc </p>
                        <p>(2016)</p>
                    </div>
                    <div style="padding-left: 30px;margin-top: 10px;">
                        <h2>TAFICHAL HIGH FIELD</h2>
                        <p>Complete certificate ||| </p>
                        <p>(2019)</p>
                    </div>
                    <div style="padding-left: 30px;margin-top: 10px;">
                        <h2>WESTERN STUDYPOOL HIGHSCHOOL</h2>
                        <p>Diploma Of Science</p>
                        <p>(Ongoing)</p>
                    </div>
                    <!-- =========EXPERIENCE end========== -->
                </div>
                <div style="display: flex; align-items: center ; justify-content: flex-end;">
                    <div style="font-size: 60px; margin: 40px 20px 0;">
                        <i class='bx bxs-bar-chart-alt-2'></i>
                    </div>
                    <h1 style="padding: 0px 10px 0px 0px; border-radius: 20px 0px 0px 20px; width: 80%; background-color: #0E79AC  ;margin-top: 30px;color: white; display: flex;padding-left: 9px;font-weight: 500;">
                        LANGUAGE
                    </h1>
                </div>
                <div style="padding-left: 30px;margin-top: 10px;">
                    <h2>CHESTER HILL HIGHSCHOOL</h2>
                    <p>Complete hsc </p>
                    <p>(2016)</p>
                </div>
                <div style="padding-left: 30px;margin-top: 10px;">
                    <h2>TAFICHAL HIGH FIELD</h2>
                    <p>Complete certificate ||| </p>
                    <p>(2019)</p>
                </div>
                <div style="padding-left: 30px;margin-top: 10px;">
                    <h2>WESTERN STUDYPOOL HIGHSCHOOL</h2>
                    <p>Diploma Of Science</p>
                    <p>(Ongoing)</p>
                </div>
                <!-- =========EXPERIENCE end========== -->
            </div>
        </div>
    </div>
</body>

</html>