<?php
 $connect = mysqli_connect('servername', 'yourusername', 'yourpassword', 'yourdatabasename');
 $question1 = $_POST["question1"];
 $question2 = $_POST["question2"];
 $question3 = $_POST["question3"];
 $question4 = $_POST["question4"];
 $question5 = $_POST["question5"];
 $question6 = $_POST["question6"];
 $button1_1 = $_POST["button1_1"];
 $button1_2 = $_POST["button1_2"];
 $button1_3 = $_POST["button1_3"];
 $button1_4 = $_POST["button1_4"];
 $button2_1 = $_POST["button2_1"];
 $button2_2 = $_POST["button2_2"];
 $button2_3 = $_POST["button2_3"];
 $button2_4 = $_POST["button2_4"];
 $button3_1 = $_POST["button3_1"];
 $button3_2 = $_POST["button3_2"];
 $button3_3 = $_POST["button3_3"];
 $button3_4 = $_POST["button3_4"];


$sql1 = "DELETE FROM Questions";
if ($connect->query($sql1) === TRUE) {

 $sql = "INSERT INTO Questions VALUES('$question1','$question2','$question3','$question4','$question5','$question6','$button1_1','$button1_2','$button1_3','$button1_4','$button2_1','$button2_2','$button2_3','$button2_4','$button3_1','$button3_2','$button3_3','$button3_4')";
 if ($connect->query($sql) === TRUE) {
     echo "Questions Updated!";
 } else {
     echo "Error: " . $sql . "<br>" . $connect->error;
 }
 }else{
   echo "Error: " . $sql . "<br>" . $connect->error;

 }
 ?>
