

<?php
include('db.php');

if (isset($_REQUEST['submit'])) {
  $fname = $_POST['fname'];
  $skill = $_POST['skill'];

  // $image = $_FILES['fileupload']['name'];
  // $tmp_image = $_FILES['fileupload']['tmp_name'];
  // $target_dir = "uploads/";
  // $target_file = $target_dir . basename($image);
  // if (move_uploaded_file($tmp_image, $target_file)) {
  //   echo "abcd";
  // } 
  $sql = "INSERT INTO `user` (`user_img`, `fname`, `skill`) VALUES ('$image',  '$fname', '$skill');";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "data inserted";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php include('navbar.php')?>
  <!-- <div class="container mt-5">
      <form action="#" id="formData" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter Your name</label>
        <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Skils</label>
        <input name="skill" type="text" class="form-control" id="exampleInputPassword1">
      </div>
     
      <input  style="margin-top:2.2rem" type="file" name="fileupload" id="image">

      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div> -->
   <div class="container">
     <div class="form">
     </div>
   </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>