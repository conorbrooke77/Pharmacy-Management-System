<!DOCTYPE html>

<?php 


    session_start();

    include 'db.inc.php';

    if (isset($_POST['hiddenId'])) {

        //Alert to the user the Entry has been deleted
        $_SESSION['message'] = "Record has been Deleted!";

        //The posted ID
        $docId = $_POST['hiddenId'];

        //Change the value of the Deleted entry from 0 to 1 in order to flag that entry as Deleted in the Doctor table
        $sql = "UPDATE Doctor SET Deleted='1' WHERE doctorID=$docId";

        if (!mysqli_query($con,$sql))
        {
            die ("an error in the sql query: " . mysqli_error($con) );
        }
        
        //Return to previous page
        header("location: ../../File_Maintenance/Delete_Doctor.html.php");
    }
?>
