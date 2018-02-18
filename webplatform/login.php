<?php
   include("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT Username, Password, Privilege FROM USERS WHERE Username = '$myusername' AND Password = PASSWORD('$mypassword') AND Privilege = 'ADMIN' " ;
      $result = $db->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];


      if ($result->num_rows > 0) {

        $_SESSION['login_user'] = $myusername;

        header("location: answersadmin.php");
          // output data of each row
      //    echo "Logged In";
      } else {
        $sql2 = "SELECT Username, Password, Privilege FROM USERS WHERE Username = '$myusername' AND Password = PASSWORD('$mypassword') AND Privilege = 'CURATOR' " ;
        $result2 = $db->query($sql2);
        $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
        $active2 = $row2['active'];
        if ($result2->num_rows > 0) {

          $_SESSION['login_user'] = $myusername;

          header("location: answerscurator.php");
        }else{
           $error = "Your Login Name or Password is invalid";
        }

        //  echo "Wrong Username or Password";
      }

      // If result matched $myusername and $mypassword, table row must be 1 row

  }
?>
<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
      @charset "utf-8";
@import url(http://weloveiconfonts.com/api/?family=fontawesome);

[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}

body {
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}

input {
  border: none;
  font-family: 'Open Sans', Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5em;
  padding: 0;
  -webkit-appearance: none;
}

p {
  line-height: 1.5em;
}

after { clear: both; }

#login {
  margin: 50px auto;
  width: 320px;
}

#login form {
  margin: auto;
  padding: 22px 22px 22px 22px;
  width: 100%;
  border-radius: 5px;
  background: #282e33;
  border-top: 3px solid #434a52;
  border-bottom: 3px solid #434a52;
}

#login form span {
  background-color: #363b41;
  border-radius: 3px 0px 0px 3px;
  border-right: 3px solid #434a52;
  color: #606468;
  display: block;
  float: left;
  line-height: 50px;
  text-align: center;
  width: 50px;
  height: 50px;
}

#login form input[type="text"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="password"] {
  background-color: #3b4148;
  border-radius: 0px 3px 3px 0px;
  color: #a9a9a9;
  margin-bottom: 1em;
  padding: 0 16px;
  width: 235px;
  height: 50px;
}

#login form input[type="submit"] {
  background: #b5cd60;
  border: 0;
  width: 100%;
  height: 40px;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
#login form input[type="submit"]:hover {
  background: #16aa56;
}

         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body>
     <div id="login">
          <form name='form-login' action= "" method = "post">
            <span class="fontawesome-user"></span>
              <input type="text" id="user" placeholder="Username" name = "username">

            <span class="fontawesome-lock"></span>
              <input type="password" id="pass" placeholder="Password" name = "password">
              <p><?php echo $error; ?> </p>
            <input type="submit" value= "Login">
          </form>
    </div>

   </body>
</html>
