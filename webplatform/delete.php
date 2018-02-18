<?php
 $connect = mysqli_connect('servername', 'yourusername', 'yourpassword', 'yourdatabasename');
 $sql = "DELETE FROM ANSWERS WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $sql))
 {
      echo 'Record Deleted';
 }
 ?>
