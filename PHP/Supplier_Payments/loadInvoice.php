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
  
        $join = "SELECT * FROM Supplier_Invoice WHERE Supplier_Invoice_Ref=$supplierId";
  
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
            global $totalAmount;
            echo "<p>Enclosed please find the cheque for " . $totalAmount. " in payment of the following invoices: </p>";
            echo "<br>";
  
            echo "<h4>Your Invoice References </h4>";
            
            echo "<div id=\"invoices\">";
            while ($row = mysqli_fetch_array($joins)) {
  
              if ($id == $row['Supplier_Invoice_Ref']) {
                  
                  $Supplier_Invoice_Id= $row['Supplier_Invoice_Id'];
  
                  echo "<p>" . $Supplier_Invoice_Id . "</p>";
              }
            }
            echo "</div>";

            echo "<h4>Your Invoice Amount </h4>";
            
            mysqli_data_seek($joins, 0);

            echo "<div id=\"amount\">";
            while ($row = mysqli_fetch_array($joins)) {
  
              if ($id == $row['Supplier_Invoice_Ref']) {
                  
                    global $totalAmount;

                    $Amount= $row['Amount'];

                    $totalAmount += $row['Amount'];
  
                  echo "<p>" . $Amount . "</p>";
              }
            }
            echo "</div>";
            
            echo "Total Amount " . $totalAmount;

            echo "Yours sincerely";
            echo $name;
            echo "Pharmacist";
        }
  
      }

	  mysqli_close($con);
?>
	  
	  