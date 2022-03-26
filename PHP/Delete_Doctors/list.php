<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    //Select all Doctors that have not been flagged as Deleted
    $sql = "SELECT * FROM Doctor WHERE Deleted = 0";

    //Run the query
    $result = $con->query($sql);

    //Add each result to the data table with an associated delete button
    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>" . $row["doctorID"] . "</td><td>" . $row["Surname"] . "</td><td>" . $row["Firstname"] . "</td><td>" . $row["SurgeryTelephoneNumber"] . "</td><td>" . $row["SurgeryMobileNumber"] . "</td><td>" . $row["HomeTelephoneNumber"] . "</td><td>" 
            . $row["SurgeryStreet"] . "</td><td>" . $row["SurgeryTown"] . "</td><td>" . $row["SurgeryCounty"] . "</td><td>" . $row["HomeStreet"] . "</td><td>" . $row["HomeTown"] . "</td><td>" . $row["HomeCounty"] . 
            "</td><td id=\"deleteData\"> <iframe name=\"votar\" style=\"display:none;\"></iframe><form method=\"Post\" action=\"Delete_Doctor.html.php\" target=\"votar\">
            <button onclick=\"onDelete(this.value)\" type=\"submit\" name=\"docId\" value=\"$row[doctorID]\"  id=\"deleteBtn\">Delete</button></form></td></tr>";
        }
    } else {
        echo "No Result";
    }

    if (!$result = mysqli_query($con,$sql))
        {
	        die('error in querying the database' . mysqli_error($con));
	
        }
?>
