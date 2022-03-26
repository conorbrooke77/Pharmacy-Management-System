
<!---

StudentID: c00260735

Name: Conor Brooke

Date: 01/03/2022

Purpose of Script: This PHP script includes the functionality needed to Insert a Doctor entry into the Doctor table.

-->

<!DOCTYPE html>

<!-- The CSS for the Successfully inserted page -->
<link rel="Stylesheet" href="../../CSS/main.css" />
<link rel="Stylesheet" href="../../CSS/insert_doctor.css"/>

<body>
    <section class="confirmation">
        <?php
           include 'db.inc.php'; //Datbase Connection

           //Header for successful update
            echo "<h4 class=\"phpH3\">The data has been successfully recieved.</h4> <br>";

            //Query to grab doctorID
            $data = "SELECT * FROM Doctor ORDER BY doctorID DESC LIMIT 1";

            //Make query
            $result = mysqli_query($con,$data);

            //Fetch data from result

            while ($row = mysqli_fetch_array($result)) {
                $doctorID = $row['doctorID'];
            }

            // Incrementing DoctorID
            $doctorID = $doctorID+1;

            if (!mysqli_query($con,$data))
            {
                die ("an error in the sql query: " . mysqli_error($con) );
            }

            // SQL statement for inserting data into the Doctor table
            $sql = "insert into Doctor (doctorID, Surname, Firstname, SurgeryTelephoneNumber, SurgeryMobileNumber, HomeTelephoneNumber, SurgeryStreet, SurgeryTown, SurgeryCounty, HomeStreet, HomeTown, HomeCounty)
            VALUES ('$doctorID','$_POST[surname]','$_POST[firstname]','$_POST[telephoneNumber]','$_POST[mobileNumber]','$_POST[homeTelephone]','$_POST[surgeryStreet]',
                    '$_POST[surgeryTown]','$_POST[surgeryCounty]','$_POST[homeStreet]','$_POST[homeTown]','$_POST[homeCounty]')";

            if (!mysqli_query($con,$sql))
                {
        	        die ("an error in the sql query: " . mysqli_error($con) );
                }

            // Confirmation that the Doctor has been inserted.
            echo "<br>A record has been added for Doctor " . $_POST['firstname'] . " " . $_POST['surname'] . " with a unique ID of " . $doctorID;
            mysqli_close($con);

        ?>

        <!-- Return form -->
	    <form action = "../../File_Maintenance/Add_Doctor.html" method = "POST">
	        <input type = "submit" value = "Return To System"/>
	    </form>

    </section>
<body>