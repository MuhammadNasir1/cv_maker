<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "cv_maker";
 
 $conn = mysqli_connect($servername , $username , $password , $database);
// session_start();
if(!$conn){
 echo "database Error";
}
?>