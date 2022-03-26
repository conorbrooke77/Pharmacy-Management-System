
<!---

StudentID: c00260735

Name: Conor Brooke

Date: 15/03/2022

Purpose of Script: This PHP script includes the functionality needed to Update a specific Doctor from the Doctor table.

-->

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
        //Run through each row and fetch the data
        if ($result->num_rows){
            $row = $result->fetch_array();

            //The variables for each entry in the Doctor table;
            $docID = $row['doctorID'];
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
    //If the Update btn is clicked update data in Doctor table
    if (isset($_POST['update'])) {
        
        $_SESSION['message'] = "Record has been updated!";

        $doctorID = $_POST['docID'];
        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $telephoneNumber = $_POST['telephoneNumber'];
        $mobileNumber = $_POST['mobileNumber'];
        $homeTelephone = $_POST['homeTelephone'];
        $surgeryStreet = $_POST['surgeryStreet'];
        $surgeryTown = $_POST['surgeryTown'];
        $surgeryCounty = $_POST['surgeryCounty'];
        $homeStreet = $_POST['homeStreet'];
        $homeTown = $_POST['homeTown'];
        $homeCounty = $_POST['homeCounty'];

        $sql = "UPDATE Doctor SET Surname='$surname', Firstname='$firstname', SurgeryTelephoneNumber='$telephoneNumber', SurgeryMobileNumber='$mobileNumber', HomeTelephoneNumber='$homeTelephone', SurgeryStreet='$surgeryStreet', 
        SurgeryTown='$surgeryTown', SurgeryCounty='$surgeryCounty', HomeStreet='$homeStreet', HomeTown='$homeTown', HomeCounty='$homeCounty' WHERE doctorID=$doctorID";

        if (!mysqli_query($con,$sql))
        {
            die ("an error in the sql query: " . mysqli_error($con) );
        }

        //Load the header to confirm the update was successful and return to amend page
        header("location: ../../File_Maintenance/Amend_Doctor.html.php");
    }
?>
