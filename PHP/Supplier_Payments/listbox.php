<?php 
	  include 'db.inc.php';
	  
	  $sql = "SELECT * FROM Supplier";

	  if(!$result = mysqli_query($con,$sql))
	  {
		  die('Error in querying the database'.mysqli_error($con));
	  }

	  $join = "SELECT * FROM Supplier_Invoice WHERE Deleted=0";

	  if(!$joins = mysqli_query($con,$join))
	  {
		  die('Error in querying the database'.mysqli_error($con));
	  }
	  
	  echo "<br><select name ='listbox' id ='listbox' onclick='loadDetails()' >";
	  
	  while ($row = mysqli_fetch_array($result))
	  {

		  $id = $row['supplier_id'];
		  $name = $row['supplier_name'];
		  $street = $row['street'];
		  $town= $row['town'];
		  $county = $row['county'];

		  $allText = "$id,$name,$street,$town,$county,";
		  while ($row = mysqli_fetch_array($joins)) {

			if ($id == $row['Supplier_Invoice_Ref']) {
				
				$Supplier_Invoice_Id= $row['Supplier_Invoice_Id'];
				$Amount = $row['Amount'];

				global $allText;
				$allText .= "$Supplier_Invoice_Id,$Amount,";
			}
		  }
		  mysqli_data_seek($joins, 0);
		  echo"<option value = '$allText'>$name</option>";
		  
	  }

	  echo "</select>";


	  mysqli_close($con);
?>
	  
	  