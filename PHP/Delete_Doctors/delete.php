<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    if (isset($_POST['delete'])) {
        echo $_POST['close'];
    }
    /*
    if (isset($_GET['delete'])) {
        $sql = "UPDATE Doctor SET Deleted='1' WHERE doctorID=$_GET['docId']";

        if (!mysqli_query($con,$sql))
        {
            die ("an error in the sql query: " . mysqli_error($con) );
        }

    }
    */
?>
