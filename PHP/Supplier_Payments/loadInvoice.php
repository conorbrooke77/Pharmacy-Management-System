
<link rel="Stylesheet" href="../CSS/Letter.css" />
<?php 
	  include 'db.inc.php';
	  
      if(isset($_POST['id'])) {

        $totalAmount;
        $supplierId = $_POST['id'];
        
        $sql = "SELECT * FROM Supplier WHERE supplier_id=$supplierId";

        if(!$result = mysqli_query($con,$sql))
        {
            die('Error in querying the database'.mysqli_error($con));
        }
  
        $join = "SELECT * FROM Supplier_Invoice WHERE (Supplier_Invoice_Ref=$supplierId AND Deleted=0)";
  
        if(!$joins = mysqli_query($con,$join))
        {
            die('Error in querying the database'.mysqli_error($con));
        }
        
        
        while ($row = mysqli_fetch_array($result))
        {
  
            $id = $row['supplier_id'];
            $name = $row['supplier_name'];
            $street = $row['street'];
            $town= $row['town'];
            $county = $row['county'];

            echo "<div id=\"supplierAdd\">";
            echo "<p>" . $name . "</p>";
            echo "<p>" . $street . "</p>";
            echo "<p>" . $town . "</p>";
            echo "<p>" . $county . "</p>";
            echo "</div>";

            echo "<br>";
            echo "<p>Enclosed please find the cheque for the payment of the following invoices: </p>";
            echo "<br>";
            
            echo "<div class=\"innerSection\">";

            echo "<div class=\"invoices\">";
            echo "<h4>Your Invoice References </h4>";
            echo "<br>";
            while ($row = mysqli_fetch_array($joins)) {
  
              if ($id == $row['Supplier_Invoice_Ref']) {
                  
                  $Supplier_Invoice_Id= $row['Supplier_Invoice_Id'];
  
                  echo "<p>" . $Supplier_Invoice_Id . "</p>";
              }
            }
            echo "</div>";
            
            mysqli_data_seek($joins, 0);

            echo "<div class=\"invoices\">";
            echo "<h4>Your Invoice Amount </h4>";
            echo "<br>";
            while ($row = mysqli_fetch_array($joins)) {
  
              if ($id == $row['Supplier_Invoice_Ref']) {
                  
                    global $totalAmount;

                    $Amount= $row['Amount'];

                    $totalAmount += $row['Amount'];
  
                  echo "<p>" . $Amount . "</p>";
              }
            }
            echo "</div>";
            
            echo "</div>";
            
            echo "<h4 id=\"amount\">Total Amount " . $totalAmount . "</h4>";
            echo "<div class=\"bottomSection\">";

            echo "<p>Yours sincerely, </p>";
            echo "<p>" . $name . "</p>";
            echo "<p> Pharmacist</p>";
            echo "</div>";

            $join = "UPDATE Supplier_Invoice SET Deleted=1 WHERE Supplier_Invoice_Ref=$supplierId";
  
            if(!$joins = mysqli_query($con,$join))
              {
                die('Error in querying the database'.mysqli_error($con));
              }

              if ($totalAmount > 0) {
                $total = "INSERT INTO Payment (Amount) VALUES ('$totalAmount')";
  
                if(!$totals = mysqli_query($con,$total))
                  {
                    die('Error in querying the database'.mysqli_error($con));
                  }
              }

        }
  
      }

	  mysqli_close($con);
?>
	  
	  