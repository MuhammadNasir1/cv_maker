<?php
include('db.php');
?>
<?php
$sql = "SELECT * FROM `user` ORDER BY user_id desc";
$result = mysqli_query($conn, $sql);
$row = (mysqli_fetch_assoc($result));

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cv Maker</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="./css/Cv_template.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <!-- =============== Firt-Templete-Start =============== -->
  <div class="templete-container">
    <div class="templete-1">

      <!-- ============ cv-heading-start ============ -->
      <div class="cv-heading">
        <div class="image">
          <div class="user-image">
            <!-- <img src="./image/onwner.png" alt="" > -->
            <img src="uploads/<?php echo $row["user_img"]; ?>">
          </div>
          <P>Your image <br> Here</P>
        </div>
        <!-- ============ Name-section ============ -->
        <div class="name">
          <h1><?= @$row['fname'] ?></h1>
          <p></p>

          <!-- <p> Write Your Skill</p> -->
          <p><?= @$row['skill'] ?></p>
        </div>
        <!-- ============ Contact-section ============ -->
        <div class="contact-section">
          <div class="contact">
            <i class='bx bxs-contact'></i>
            <h3>Contacts</h3>
          </div>
          <div class="detail">
            <div class="details">
              <i class='bx bxs-phone'></i>
              <p>+01 123456789</p>
            </div>
            <div class="mail">
              <i class='bx bx-envelope'></i>
              <p>loremipsum@gmail.com</p>
            </div>
            <div class="mail">
            <i class='bx bx-current-location'></i>
              <p>Street 123 your address your city</p>
            </div>

          </div>
        </div>
        <!-- ============ Language-section ============ -->
        <div class="contact-section">
          <div class="contact">
            <i class='bx bx-message-dots'></i>
            <h3>Languages</h3>
          </div>
          <div class="language">
             <p>Language: <span>English</span></p>
             <p>Language: <span>Spanish</span></p>
          </div>
        </div>
        <!-- ============ Skills-section ============ -->
        <div class="contact-section">
          <div class="contact">
            <i class='bx bxs-briefcase-alt-2'></i>
            <h3>Skills</h3>
          </div>
          <div class="language">
             <p>1. <span>Web</span></p>
             <p>2. <span>Graphics</span></p>
          </div>
        </div>
      </div>
      <?php  ?>
      <!-- ============ cv-heading-End ============== -->

      <!-- ============ cv-Content-start ============ -->
      <div class="cv-content">

      </div>
      <!-- ============ cv-Content-End ============== -->
    </div>
  </div>
  <!-- =============== Firt-Templete-End ================= -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>