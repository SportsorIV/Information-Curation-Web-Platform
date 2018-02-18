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
$Username = $_POST["USERNAME"];
$Password = $_POST["PASSWORD"];
$Device = 'Android';
$Privilege = 'User';


$sql = "SELECT Username, Password, Device, Privilege FROM USERS WHERE Username = '$Username' AND Password = PASSWORD('$Password') AND Device = '$Device' AND Privilege = '$Privilege'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "Logged In";
} else {
    echo "Wrong Username or Password";
}

$conn->close();
?>
