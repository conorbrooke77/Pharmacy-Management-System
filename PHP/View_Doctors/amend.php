

<!---

StudentID: c00260735

Name: Conor Brooke

Date: 14/03/2022

Purpose of Script: This PHP script includes the functionality needed to Display all Doctor entrys from the Doctor table.

-->

<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    // Selects all data from the Doctor table
    $sql = "SELECT * FROM Doctor";

    $result = $con->query($sql);

    //If the number of rows is greater than zero
    if ($result->num_rows > 0) {
        //Run through each row and fetch the data
        while ($row = $result-> fetch_assoc()) {
            //Add the data to the table and included an edit btn with a link the update page.
            //Post the doctorID to the update page.
            echo "<tr><td>" . $row["doctorID"] . "</td><td>" . $row["Surname"] . "</td><td>" . $row["Firstname"] . "</td><td>" . $row["SurgeryTelephoneNumber"] . "</td><td>" . $row["SurgeryMobileNumber"] . "</td><td>" . $row["HomeTelephoneNumber"] . "</td><td>" 
            . $row["SurgeryStreet"] . "</td><td>" . $row["SurgeryTown"] . "</td><td>" . $row["SurgeryCounty"] . "</td><td>" . $row["HomeStreet"] . "</td><td>" . $row["HomeTown"] . "</td><td>" . $row["HomeCounty"] . 
            "</td><td id=\"editData\"><a id=\"editBtn\" href=\"Update.html.php?edit= $row[doctorID];\">Edit</a></td></tr>";
        }
    } else {
        echo "No Result";
    }

    if (!$result = mysqli_query($con,$sql))
        {
	        die('error in querying the database' . mysqli_error($con));
	
        }
?>
