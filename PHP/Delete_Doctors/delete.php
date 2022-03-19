<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    if ($_POST['id']) {

        echo $_POST['id'];
        if (isset($_POST['delete'])) {

            $sql = "UPDATE Doctor SET Deleted='1' WHERE doctorID=$_POST['id']";
    
            if (!mysqli_query($con,$sql))
            {
                die ("an error in the sql query: " . mysqli_error($con) );
            }
    
        }

    }
?>
