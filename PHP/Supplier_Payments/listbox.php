<?php

    include "db.inc.php"; //Connection

    $sql = "SELECT * FROM Supplier";

    if (!$result = mysqli_query($con, $sql)) {

        die('Error in querying the database' . mysqli_error($con));
    }

    echo "<br><select name='listbox' id='listbox' onclick='populate()'>";

    while ($row = mysqli_fetch_array($result)) {
        $supplierID = $row['supplier_id'];
        $supplier_name = $row['supplier_name'];
        $street = $row['street'];
        $town = $row['town'];
        $county = $row['county'];
        $email_address = $row['email_address'];
        $website_address = $row['website_address'];
        $telephone_number = $row['telephone_number'];

        $allText = "$supplierID, $supplier_name, $street, $town, $county, $email_address, $website_address, $telephone_number";

        echo "<option value='$allText'> $supplier_name </option>";
    }

    echo "</select>";
?>