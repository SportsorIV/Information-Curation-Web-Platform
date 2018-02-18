<?php
// Read request parameters
$servername = '';
$username = '';
$password = '';
$dbname = '';

$conn = new mysqli($servername, $username, $password, $dbname);
//http://example.com/thisScript.php?jsonGiven=
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$Username= $_REQUEST["Username"];
$Password = $_REQUEST["Password"];
$Device = 'iOS';
$Privilege = 'User';


$sql = "INSERT INTO USERS VALUES('$Username',PASSWORD('$Password'),'$Device','$Privilege')";
if ($conn->query($sql) === TRUE) {
    echo "User Created";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
