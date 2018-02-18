<?php
    //open connection to mysql db


    $connection = mysqli_connect('','','','') or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT * FROM ANSWERS WHERE is_public = 'true' AND is_spam = 'false'";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

//$output = json_encode($emparray);
  $output = json_encode(array('results' => $emparray));
    echo $output;

    //close the db connection
    mysqli_close($connection);
?>
