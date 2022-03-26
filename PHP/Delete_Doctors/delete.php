<!DOCTYPE html>

<?php 

    session_start();

    include 'db.inc.php';

    if (isset($_POST['hiddenId'])) {

        $_SESSION['message'] = "Record has been Deleted!";

        $docId = $_POST['hiddenId'];

        $sql = "UPDATE Doctor SET Deleted='1' WHERE doctorID=$docId";

        if (!mysqli_query($con,$sql))
        {
            die ("an error in the sql query: " . mysqli_error($con) );
        }
        
        header("location: ../../File_Maintenance/Delete_Doctor.html.php");
    }
?>
