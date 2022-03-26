
<!---

StudentID: c00260735

Name: Conor Brooke

Date: 17/03/2022

Name of screen: Delete Doctor

Purpose of Screen: The purpose of this screen is displaying all Doctors from the Doctor DB that can be deleted.

-->

<!DOCTYPE html>
<html>
    <head>
        <title>Pharma Technology | Delete Doctor</title>

        <!-- This Screen uses multiple CSS files to create it's style -->
        <link rel="Stylesheet" href="../CSS/main.css" />
        <link rel="Stylesheet" href="../CSS/fileMaintenance.css" />
        <link rel="Stylesheet" href="../CSS/Amend_Doctor.css" />
        <link rel="Stylesheet" href="../CSS/Delete_Doctor.css" />
        <link rel="Stylesheet" href="../CSS/Confirmation.css" />

        <!-- Fonts added to the page -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include '../PHP/Delete_Doctors/delete.php'; ?>

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
                <li><a class="mainNav" href="../Supplier Accounts/Supplier_Accounts_Menu.html">Suppliers Accounts Menu</a></li>
                <li class="active"><a class="mainNav" href="Add_Doctor.html">File Maintenance Menu</a></li>
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
                <nav class="innerMenu">
                    <ul class="outerUl">
                        <li class="outerLi"><a href="">Customer</a>
                            <ul>
                                <li><a href="">Add Customer</a></li>
                                <li><a href="">Amend Customer</a></li>
                                <li><a href="">Delete Customer</a></li>
                            </ul>
                        </li>
                        <li class="outerLi, selected"  ><a href="Add_Doctor.html">Doctor</a>
                            <ul>
                                <li><a href="Add_Doctor.html">Add Doctor</a></li>
                                <li><a href="Amend_Doctor.html.php">Amend Doctor</a></li>
                                <li><a href="Delete_Doctor.html.php">Delete Doctor</a></li>
                            </ul>
                        </li>
                        <li class="outerLi" ><a href="">Drug</a>
                            <ul>
                                <li><a href="">Add Drug</a></li>
                                <li><a href="">Amend Drug</a></li>
                                <li><a href="">Delete Drug</a></li>
                            </ul>
                        </li>
                        <li class="outerLi" ><a href="">Supplier</a>
                            <ul>
                                <li><a href="">Add Supplier</a></li>
                                <li><a href="">Amend Supplier</a></li>
                                <li><a href="">Delete Supplier</a></li>
                            </ul>
                        </li>
                        <li class="outerLi" ><a href="">Stock Item</a>
                            <ul>
                                <li><a href="">Add Stock Item</a></li>
                                <li><a href="">Amend Stock Item</a></li>
                                <li><a href="">Delete Stock Item</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- Header Message for confirmation of successful Deletion-->
                
                <?php

                    if(isset($_SESSION['message'])):
                ?>

                <!--Creates a alert div at the top of the amend page-->
                <div class="deleteAlert">
                    <?php 
                        //Loads message from edit file
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    ?>
                </div>
                    
                <?php endif ?>

                <!-- Section for all the deletable Content -->
                <section class="view">
                    <header>
                        <h2>Delete Doctors</h2>
                        <p>To Delete any Doctor's in the list below click on the delete button.</p>
                    </header>
                    <!-- Table to display all entrys in the Doctor table that haven't been flagged -->
                    <section class="table">
                        <table>
                            <!-- Table Headers -->
                            <tr>
                                <th>Doctor ID</th>
                                <th>Surname</th>
                                <th>Firstname</th>
                                <th>Surgery's Telephone</th>
                                <th>Mobile Number</th>
                                <th>Home Telephone</th>
                                <th>Surgery's Street</th>
                                <th>Surgery's Town</th>
                                <th>Surgery's County</th>
                                <th>Home Street</th>
                                <th>Home Town</th>
                                <th>Home County</th>
                                <th>Amend</th>
                            </tr>
                            <!-- Table Content -->
                            <!-- This PHP file loads all the <td> into the table -->
                            <?php include '../PHP/Delete_Doctors/list.php' ?>
                        </table>
                    </section>
                </section>
            </section>
            
            <!-- The Confirmation Dialog Box -->
            <div id="confirmation" class="container">
                        <div class="dialogBox">
                            <section>
                                <header class="dialogHeader">
                                    <h2>Are you sure you want to delete this Doctor</h2>
                                </header>
                                <section class="dialogContent">
                                    <p>This action will be permanent</p>
                                </section>
                                <!-- Form for the buttons to able to be posted. Loads the delete php file -->
                                <form class="dialogBottom" action="../PHP/Delete_Doctors/delete.php" method="Post">
                                    
                                    <!-- Cancel BTN that returns to page -->
                                    <input type="button" onclick="onCancel()" name="close" value="Close">
                                    <!-- Submit BTN that flags entry as deleted -->
                                    
                                    <input type="hidden" id="hiddenId" name="hiddenId">
                                    <input type="submit" id="delBtn" name="delete" value="Delete">
                                </form>
                            </section>
                        </div>
            </section>
        </main>
        <script>
            // If you click the first delete bnt in the table, this method will add the class open to the dialog box making it display.
            function onDelete(clicked_value) {

                //Change the value of the hidden input to the Doctor Id before postint the value
                document.getElementById("hiddenId").value = clicked_value;

                console.log("doctorID");
                let confirmation = document.getElementById("confirmation");

                if (!confirmation.classList.contains("open")) {
                    confirmation.classList.add("open");
                }
            } 

            // This box removes the open class return the user back to the origanal page.
            function onCancel() {
                let confirmation = document.getElementById("confirmation");

                confirmation.classList.remove("open")
            }
        </script>
        <script src="../Exit.js"></script>
    </body>
</html>