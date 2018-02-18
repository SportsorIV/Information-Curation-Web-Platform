<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];

  // $ses_sql = mysqli_query($db,"select Username from USERS where Username = '$user_check' AND Privilege = 'ADMIN' ");

   $ses_sql = "SELECT Username, Privilege FROM USERS WHERE Username = '$user_check' AND  Privilege = 'ADMIN' " ;
   $result = $db->query($ses_sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);




   if ($result->num_rows > 0) {

   $login_session = $row['Username'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
 }else{
    session_destroy();
    header("location:login.php");
 }
?>
