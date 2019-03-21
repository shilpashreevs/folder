<?php
$con = new mysqli("localhost","root","","shilpashree123");
// localhost, username, password, database
//print_r($con);

// Check connection
if ($con->connect_errno)
    {
        echo "Failed to connect to MySQL: " . $con->connect_errno;
    }
    else
    {
        echo "success";
    }
    $con->close();
?>