<!DOCTYPE html>

<?php 
    include 'db.inc.php';

    $sql = "SELECT * FROM Doctor";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>" . $row["doctorID"] . "</td><td>" . $row["Surname"] . "</td><td>" . $row["Firstname"] . "</td><td>" . $row["SurgeryTelephoneNumber"] . "</td><td>" . $row["SurgeryMobileNumber"] . "</td><td>" . $row["HomeTelephoneNumber"] . "</td><td>" 
            . $row["SurgeryStreet"] . "</td><td>" . $row["SurgeryTown"] . "</td><td>" . $row["SurgeryCounty"] . "</td><td>" . $row["HomeStreet"] . "</td><td>" . $row["HomeTown"] . "</td><td>" . $row["HomeCounty"] . 
            "</td><td id=\"deleteData\">
                                        <iframe name=\"votar\" style=\"display:none;\"></iframe>
                                        <form method=\"Post\" action=\"Delete_Doctor.html.php\" target=\"votar\">
                                            <button onclick=\"onDelete()\" type=\"submit\" name=\"docId\" value=\"<?php echo $row[doctorID];?>\"  id=\"deleteBtn\">Delete</button>
                                        </form>
                                    </td>
                                </tr>";
        }
    } else {
        echo "No Result";
    }

    if (!$result = mysqli_query($con,$sql))
        {
	        die('error in querying the database' . mysqli_error($con));
	
        }
?>
