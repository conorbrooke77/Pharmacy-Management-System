<!DOCTYPE html>

<?php

    $hostname = "localhost:3306";
    $username = "pharmacy";
    $password = "chess123";

    $dbname = "PharmacyDB";

    $con = mysqli_connect($hostname,$username,$password, $dbname);
    if (!$con)
    {
	    die ("Failed to connect to mySQL: " . mysqli_connect_error());
    }

?>