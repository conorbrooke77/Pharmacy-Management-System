
<!---

StudentID: c00260735

Name: Conor Brooke

Date: 15/03/2022

Name of screen: Update Doctor

Purpose of Screen: This screen is an extension page of the Amend screen and allows users to update the Doctors entry data.

-->

<!DOCTYPE html>
<html>
    <head>
        <title>Pharma Technology | Update Doctor</title>

        <!-- This Screen uses multiple CSS files to create it's style -->
        <link rel="Stylesheet" href="../CSS/main.css" />
        <link rel="Stylesheet" href="../CSS/fileMaintenance.css" />
        <link rel="Stylesheet" href="../CSS/Add_Doctor.css" />
        <link rel="Stylesheet" href="../CSS/Confirmation.css" />

        <!-- Fonts added to the page -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Load the php script session at top of body-->
        <?php require_once '../PHP/View_Doctors/edit.php'?>

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
                        <!-- Inner Drop Down Menu-->
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

                <!-- Insert Form -->
                <form class="Insert-Doctor" action="../PHP/View_Doctors/edit.php" method="Post">
                    <!-- Header Information-->
                    <div class="Form-Header">
                        <h2>Amend Doctor</h2>
                        <p>Change information in the form below to update the Doctor.</p>
                    </div>

                    <!-- All the input content of the form-->
                    <section class="Input-Content">

                        <!--Hidden input field-->
                        <input type="hidden" name="docID" value="<?php echo $docID ?>">
                        <div class="inputbox">
                            <label for="surname">Doctor's Surname </label>
                            <input type="text" name="surname" id="surname" value="<?php echo $surname ?>" autofocus/>
                        </div>
        
                        <div class="inputbox">
                            <label for="firstname">Doctor's Firstname </label>
                            <input type="text" name="firstname" id="firstname" value="<?php echo $firstname ?>" required/>
                        </div>

                        <!-- When entering a phone number it must match the set pattern-->
                        <div class="inputbox">
                            <label for="telephoneNumber">Surgery's Telephone Number </label>
                            <input type="text" name="telephoneNumber" id="telephoneNumber" value="<?php echo $telephoneNumber ?>" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>
        
                        <div class="inputbox">   
                            <label for="mobileNumber">Surgery's Mobile Number </label>
                            <input type="text" name="mobileNumber" id="mobileNumber" value="<?php echo $mobileNumber ?>" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>
                        
                        <div class="inputbox">
                            <label for="homeTelephone">Home Telephone Number </label>
                            <input type="text" name="homeTelephone" id="homeTelephone" value="<?php echo $homeTelephone ?>" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>

                        <!-- Surgery Adress Section-->
                        <section class="Address-Sections">

                            <!-- Surgery Address Header-->
                            <h3>Sugery Address Information</h3>

                            <div class="inputbox" id="boxPadding">
                                <label for="surgeryStreet">Surgery's Street </label>
                                <input type="text" name="surgeryStreet" id="surgeryStreet" value="<?php echo $surgeryStreet ?>" required/>
                            </div>
            
                            <div class="inputbox" id="boxPadding">   
                                <label for="surgeryTown">Surgery's Town </label>
                                <input type="text" name="surgeryTown" id="surgeryTown" value="<?php echo $surgeryTown ?>" required/>
                            </div>

                            <div class="inputbox" id="boxPadding">   
                                <label for="surgeryCounty">Surgery's County </label>
                                <input type="text" name="surgeryCounty" id="surgeryCounty" value="<?php echo $surgeryCounty ?>" required/>
                            </div>

                        </section>

                        <!-- Home Adress Section-->
                        <section class="Address-Sections">

                            <!-- Home Address Header-->
                            <h3>Home Address Information</h3>
                            <div class="inputbox" id="boxPadding">
                                <label for="homeStreet">Home Street </label>
                                <input type="text" name="homeStreet" id="homeStreet" value="<?php echo $homeStreet ?>" required/>
                            </div>
            
                            <div class="inputbox" id="boxPadding">   
                                <label for="homeTown">Home Town </label>
                                <input type="text" name="homeTown" id="homeTown" value="<?php echo $homeTown ?>" required/>
                            </div>

                            <div class="inputbox" id="boxPadding">   
                                <label for="homeCounty">Home County </label>
                                <input type="text" name="homeCounty" id="homeCounty" value="<?php echo $homeCounty ?>" required/>
                            </div>

                        </section>
                    </section>

                    <!-- Action Buttons for the form-->
                    <div class="button">
                        <input type="button" onclick="onUpdate()" name="btn" value="Update">
                        <input type="button" onclick="location.href='Amend_Doctor.html.php'" value="Return">
                    </div>
                    <div id="confirmation" class="container">
                        <div class="dialogBox">
                            <section>
                                <header class="dialogHeader">
                                    <h2>Are you sure you want to update the Doctor table?</h2>
                                </header>
                                <section class="dialogContent">
                                    <p>This action will be permanent</p>
                                </section>
                                <section class="dialogBottom">
                                    <input type="button" onclick="onCancel()" name="close" value="Close">
                                    <input type="submit" id="updateBtn" name="update" value="Update">
                                </section>
                            </section>
                        </div>
                    </div>
                </form>
            </section>
        </main>
        <script>
            // If you click the Update Btn, this method will add the class open to the dialog box making it display.
            function onUpdate() {
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
        <script src="../js.js"></script>
    </body>
</html>