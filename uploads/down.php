<?php
include('../db.php');
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


$sql_cv = "SELECT * FROM `templetes`";
$result_tem = mysqli_query($conn, $sql_cv);
?>


<?php
include('../db.php');
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


$sql_cv = "SELECT * FROM `templetes`";
$result_tem = mysqli_query($conn, $sql_cv);
?>




<?php
require_once '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;


$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);
ob_start();

?>
<?php

$phpFile = $_GET['phpfile'];

// Include the PHP file
include($phpFile);
// print_r($phpFile);
// include("./pdf.php");
?>

<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);
$options->set('chroot', realpath(''));
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('pdfdownloader.pdf', array('Attachment' => 0));

?>


<!-- use Dompdf\Dompdf;

if (isset($_POST['table'])) {
  $table = $_POST['table'];

  // Create a new Dompdf instance
  $dompdf = new Dompdf();

  // Load the HTML content
  $dompdf->loadHtml($table);

// (Optional) Set the paper size and orientation
// $dompdf->setPaper('A4', 'portrait');
  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF
  $output = $dompdf->output();
  echo $output;
}
 -->