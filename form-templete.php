<?php
include('db.php');
$sql = "SELECT * FROM `per_info` WHERE user_id = '" . $_SESSION['user_id'] . "'";

$result = mysqli_query($conn, $sql);
$row = (mysqli_fetch_assoc($result));
// =====================Skill-start====================
$sql3 = "SELECT * FROM `skills` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result3 =  mysqli_query($conn, $sql3);
// =====================Skill-ENd=======================


// ============languages-start===========================
$sql2 = "SELECT * FROM `languages` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result2 = mysqli_query($conn, $sql2);
// ============languages-END=============================

// ============	user_references	-start===========================
$sql4 = "SELECT * FROM `user_references` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result4 = mysqli_query($conn, $sql4);
// ============	user_references	-END=============================

// ============	Euacation-start===========================
$sql5 = "SELECT * FROM `education` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result5 = mysqli_query($conn, $sql5);
// ============Eduacation-END=============================
// ============	Work-exp-start===========================
$sql6 = "SELECT * FROM `work_exp` WHERE user_id = '" . $_SESSION['user_id'] . "'";
$result6 = mysqli_query($conn, $sql6);
// ============Work-exp-END=============================



?>

<?php
// require_once 'vendor/autoload.php';

// use Dompdf\Dompdf;

// function downloadPdf()
// {
//     $html = 'html><body><div id="myDiv"><h1>My Div Content</h1><p>This is the content of the div that will be downloaded as a PDF.</p></div></body></html>';

//     $dompdf = new Dompdf();
//     $dompdf->loadHtml($html);
//     $dompdf->setPaper('A4', 'portrait');
//     $dompdf->render();

//     $output = $dompdf->output();
//     file_put_contents('mydiv.pdf', $output);

//     header('Content-Type: application/pdf');
//     header('Content-Disposition: attachment; filename="mydiv.pdf"');
//     readfile('mydiv.pdf');
//     exit();
// }


// if (isset($_POST['download'])) {

//     downloadPdf();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.1/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.4/pdfobject.min.js"></script>
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
        font-family: 'Poppins', sans-serif;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        padding: 10px;
        font-family: 'Poppins', sans-serif;
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
  <div id="iframe-container"></div>
    <button onclick="downloadPDF()">Download PDF</button>
    <div id="selectedImageHtml" style=" font-family: 'Poppins', sans-serif;">
    <div id="myDiv">
        <div class="container" style="margin: auto;">
            <div style="display: grid; grid-template-columns: 30% 70%;">
                <!-- ===============col-1-start=================== -->
                <div style="background-color:#154C73; height: 29.7cm; ">
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
    </div>
    </div>
    <div id="iframe-container"></div>
 
<script>
  // Get the HTML content from the selectedImageHtml div
  var htmlContent = document.getElementById('selectedImageHtml').innerHTML;

  // Create an iframe element
  var iframe = document.createElement('iframe');

  // Set the srcdoc attribute of the iframe to the HTML content
  iframe.srcdoc = htmlContent;

  // Set the attributes for the iframe
  iframe.width = "50%";
  iframe.height = "500px";
//   iframe.frameborder = "0";
  

  // Append the iframe to the iframe-container div
  document.getElementById('iframe-container').appendChild(iframe);
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.1/jspdf.min.js"></script>
<script>
    // Import the jsPDF library

    // Create a new jsPDF object
    var doc = new jsPDF();

    // Get the HTML content of the div
    var divContent = document.getElementById("myDiv").innerHTML;

    // Add the HTML content to the jsPDF object
    doc.fromHTML(divContent, "My PDF Document");

    // Save the PDF document
    doc.save("my- .pdf");
</script>

</html>