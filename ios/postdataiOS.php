<?php
// Read request parameters

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


$User= $_REQUEST["User"];
$question1 = $_REQUEST["question_1"];
$question2 = $_REQUEST["question_2"];
$question3 = $_REQUEST["question_3"];
$question4 = $_REQUEST["question_4"];
$question5 = $_REQUEST["question_5"];
$question6 = $_REQUEST["question_6"];
$latitude = $_REQUEST["latitude"];
$longitude = $_REQUEST["longitude"];
$target_dir = "./imagesios";
$image = $_REQUEST["image_1"];



$NamImjDtaVar = str_replace(' ', '+', $image);

$target_dir = $target_dir ."/". $User . "_" . rand() . ".jpeg";
if(file_put_contents($target_dir,base64_decode($NamImjDtaVar))){
  $sql = "INSERT INTO ANSWERS VALUES('NULL','$User','$question1','$question2','$question3','$question4','$question5','$question6','$target_dir','$latitude','$longitude','false','false')";
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
