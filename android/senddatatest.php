<?php
//mysql_connect("localhost","root","");
//mysql_select_db("ptixiaki");
$servername = 'localhost';
$username = 'p13stav';
$password = 'FTWW45#$FC#tfgw345VW#$';
$dbname = 'p13stav';

$conn = new mysqli($servername, $username, $password, $dbname);
//http://example.com/thisScript.php?jsonGiven=
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$target_dir = "./imagesandroid";
$image = $_POST["image"];
$username = $_POST["USERNAME"];
$answer1 = $_POST["ANSWER1"];
$answer2 = $_POST["ANSWER2"];
$answer3 = $_POST["ANSWER3"];
$answer4 = $_POST["ANSWER4"];
$answer5 = $_POST["ANSWER5"];
$answer6 = $_POST["ANSWER6"];
$latitude = $_POST["LATITUDE"];
$longitude = $_POST["LONGITUDE"];


$target_dir = $target_dir ."/". $username . "_" . rand() . ".jpeg";
if(file_put_contents($target_dir,base64_decode($image))){
  $sql = "INSERT INTO ANSWERS VALUES('NULL','$username','$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$target_dir','$latitude','$longitude','false','false')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }



}else{

  echo "Image Failed to Upload";
}




$conn->close();
?>
