<!DOCTYPE html>
<html>
    <head>
        <title>Pharma Technology | Supplier Account Menu</title>
        <link rel="Stylesheet" href="../CSS/main.css" />
        <link rel="Stylesheet" href="../CSS/Pay_Supplier.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Nav Bar template-->
        <nav class="sideBar">
            <header>
                <div class="logoContainer">
                    <img src="../Resources/logoV2.png" width="250" height="150"/>
                </div>
                <h2 class="systemText">PHARMACY MANAGMENT <BR> SYSTEM</h2>
            </header>
            <ul>
                <li><a class="mainNav" href="">Counter Sales</a></li>
                <li><a class="mainNav" href="">Dispense Drugs</a></li>
                <li><a class="mainNav" href="">Stock Control Menu</a></li>
                <li class="active" ><a class="mainNav" href="../Supplier Accounts/Supplier_Accounts_Menu.html">Suppliers Accounts Menu</a></li>
                <li><a class="mainNav" href="../File_Maintenance/Add_Doctor.html">File Maintenance Menu</a></li>
                <li><a class="mainNav" href="">Reports Menu</a></li>
                <li id="closeWindow" ><a class="mainNav" href="">Exit</a></li>
            </ul>
        </nav>
        <nav class="navBar">
            <div class="profileContainer">
                <img src="../Resources/profile-icon.png" width="50" height="50"/>
                <h3>Welcome Admin</h3>
            </div>
        </nav>

        <!-- Main functionality and content -->
        <main>
            <section class="content">
                <section class="paymentsPage">
                    
                    <header id="paymentHeader">
                        <h2>Payments To Suppliers</h2>
                        <p>Choose a Supplier from the List below to view all invoices.</p>
                    </header>

                    <div id="listboxContainer">
                        <!-- PHP Script to load the listbox with all the Supplier data-->
                        <?php include '../PHP/Supplier_Payments/listbox.php' ?>
        
                        <p id="addressText"></p>
                    </div>

                    <section class="supplierContent">
                        
                        <h3>List of all Suppliers invoices</h3>

                        <!-- All the suppliers invoices-->
                        <div id="supplierList">
                            
                        </div>

                        <!-- Post of invoices to Letter-->
                        <form action="Letter_To_Supplier.html.php" method="Post">
                            <div class="button">
                                <input type="hidden" id="supplierID" name="id" >
                                <input type="submit" onclick="sendDetails()" name="submit" value="Process Payment">
                            </div>
                        </form>
                    </section>
                </section>
            </section>
        </main>
        <script>

            function loadDetails() {

                //Clears previous invoices
                var box = document.getElementById("supplierList");
                box.innerHTML = '';

                var sel = document.getElementById("listbox");
                var result = sel.options[sel.selectedIndex].value;
                var SupplierDetails = result.split(',');

                var id = document.getElementById("supplierID");

                //Gets the Supplier ID
                id.value = SupplierDetails[0]

                //Prints the Suppliers Address
                document.getElementById("addressText").innerText = "The Suppliers Address is " + SupplierDetails[2] + ", " + SupplierDetails[3] + ", " + SupplierDetails[4];

                var count = 5;

                //Loads all the invoices associated to the Supplier Id
                while ( count < SupplierDetails.length-1) {

					if ((count+1) % 2 === 0) {
						
                        var lineBreak = document.createElement("br");
                        var invoice = document.createElement("p");
                        var amount = document.createElement("p");

                        invoice.innerText = "Supplier Invoice Reference: " + SupplierDetails[count];
                        amount.innerText = "Supplier Invoice Amount: " + SupplierDetails[count+1];

                        document.getElementById("supplierList").appendChild(lineBreak);
                        document.getElementById("supplierList").appendChild(invoice);
                        document.getElementById("supplierList").appendChild(amount);
                        document.getElementById("supplierList").appendChild(lineBreak);

					}
                    count++;
                    
                    console.log(count);
                }
            }

        </script>
        <script src="../Exit.js"></script>
    </body>
</html>