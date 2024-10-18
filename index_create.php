<?php
    $con = mysqli_connect("localhost","root","");
    $q = "CREATE DATABASE EmployeeDB";
    if(isset($con))
    {
        echo "Connect to Mysql";
    }
    else{
        echo "Couldn't connect ".mysqli_error($con);
    }
    if(mysqli_query($con,$q))
    {
        echo "<br>Database Created!";
    }
    mysqli_close($con);
?>