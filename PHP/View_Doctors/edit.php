<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    if (isset($_GET['edit'])) {
        $doctorID = $_GET['edit'];

        $result = $con->query("SELECT * FROM Doctor WHERE doctorID=$doctorID") or die($con->error());

        if ($result->num_rows){
            $row = $result->fetch_array();

            //The names in the rows are wrong and need to be changed to the ones in the Doctor table
            $surname = $row['Surname'];
            $firstname = $row['firstname'];
            $telephoneNumber = $row['telephoneNumber'];
            $mobileNumber = $row['mobileNumber'];
            $homeTelephone = $row['homeTelephone'];
            $surgeryStreet = $row['surgeryStreet'];
            $surgeryTown = $row['surgeryTown'];
            $surgeryCounty = $row['surgeryCounty'];
            $homeStreet = $row['homeStreet'];
            $homeTown = $row['homeTown'];
            $homeCounty = $row['homeCounty'];
        }
    }
?>
