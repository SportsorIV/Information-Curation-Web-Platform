<?php
    //open connection to mysql db


    $servername = '';
    $username = '';
    $password = '';
    $dbname = '';

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    //fetch table rows from mysql db
    $sql = "select * from Questions";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

$output = json_encode($emparray);
   //$output = json_encode(array('results' => $emparray));
    echo $output;

    //close the db connection
    mysqli_close($connection);
?>
