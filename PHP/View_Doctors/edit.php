<!DOCTYPE html>

<?php 

    session_start();

    include 'db.inc.php';

    if (isset($_GET['edit'])) {
        //Getting the doctorID value from the edit button I clicked on the previous page
        $doctorID = $_GET['edit'];

        //Selecting all Doctors that have the required ID
        $data = "SELECT * FROM Doctor WHERE doctorID=$doctorID";

        $result = mysqli_query($con,$data);

        if (!mysqli_query($con,$data))
        {
            die ("an error in the sql query: " . mysqli_error($con) );
        }

        if ($result->num_rows){
            $row = $result->fetch_array();

            //The variables for each entry in the Doctor table;
            $surname = $row['Surname'];
            $firstname = $row['Firstname'];
            $telephoneNumber = $row['SurgeryTelephoneNumber'];
            $mobileNumber = $row['SurgeryMobileNumber'];
            $homeTelephone = $row['HomeTelephoneNumber'];
            $surgeryStreet = $row['SurgeryStreet'];
            $surgeryTown = $row['SurgeryTown'];
            $surgeryCounty = $row['SurgeryCounty'];
            $homeStreet = $row['HomeStreet'];
            $homeTown = $row['HomeTown'];
            $homeCounty = $row['HomeCounty'];
        }
    }
    
    if (isset($_POST['update'])) {
        $_SESSION['message'] = "Record has been updated!";

        header("location: ../../File_Maintenance/Amend_Doctor.html.php");
    }
?>
