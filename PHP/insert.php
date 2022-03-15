<!DOCTYPE html>

<?php
    include 'db.inc.php';
    date_default_timezone_set("UTC");
    echo "the details send down are: <br>";

    echo "first name is: " . $_POST['firstname'] . "<br>";
    echo "surname is: " . $_POST['surname'] . "<br>";

    $date=date_create($_POST['dob']);

    echo "date of birth is: " . date_format($date,"d/m/y") . "<br>";

    $sql = "insert into Persons (firstName, lastName,DOB)
    VALUES ('$_POST[firstname]','$_POST[surname]','$_POST[dob]')";

    if (!mysqli_query($con,$sql))
        {
	        die ("an error in the sql query: " . mysqli_error($con) );
        }
    echo "<br>A record has been added for " . $_POST['firstname'] . " " . $_POST['surname'] . ".";

    mysqli_close($con);
?>
	<form action = "insert.html" method = "POST">
	    <br>
	    <input type = "submit" value = "return to insert page"/>
	</form>