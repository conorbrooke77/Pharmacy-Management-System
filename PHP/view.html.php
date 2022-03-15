<!DOCTYPE html>

<?php session_start(); ?>
    <html>
        <body>
            <form action = "displayview.php" method = "post">
                <p><label for = "personid"> enter the personid you want to find </label>
                <input type = "text" name = "personid" id = "personid" placeholder = "person id" autocomplete = off required value = "<?php if (ISSET($_SESSION['personid']) )echo $_SESSION['personid']?>" />
                </p>
                <p><label for = "firstname"> first name </label>
                <input type = "text" name = "firstname" id = "firstname" placeholder = "first name" disabledvalue = "<?php if (ISSET($_SESSION['firstname']) )echo $_SESSION['firstname']?>" />

                </p>
                <p><label for = "surname"> last name </label>
                <input type = "text" name = "surname" id = "surname" placeholder = "surname" disabledvalue = "<?php if (ISSET($_SESSION['surname']) )echo $_SESSION['surname']?>" />

                </p>
                <p><label for = "dob"> date of birth </label>
                <input type = "text" name = "dob" id = "dob" placeholder = "Date of birth" disabledvalue = "<?php if (ISSET($_SESSION['dob']) )echo $_SESSION['dob']?>" />
                </p>
                <br> <br>

                <input type = "submit" value = "submit" />
                <p>
            </form>
<?php

if(!ISSET($_SESSION['firstname']) and ISSET($_SESSION['personid']))
{
	echo '<p style="color: red; text-align:center font-size:20">
	No record found for a person with id..' . $_SESSION['personid'] . '
	<br> please try again!
	</p>';
	
	unset ($_SESSION['personid']);
}
?>
	</body>
    </html>