<!DOCTYPE html>
<html>
    <head>
        <title>Pharma Technology | Add Doctor</title>
        <link rel="Stylesheet" href="../CSS/main.css" />
        <link rel="Stylesheet" href="../CSS/fileMaintenance.css" />
        <link rel="Stylesheet" href="../CSS/Add_Doctor.css" />

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
                <li><a class="mainNav" href="../Supplier Accounts/Payment_To_Suppliers.html">Suppliers Accounts Menu</a></li>
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
                                <li><a href="Delete_Doctor.html">Delete Doctor</a></li>
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
                <?php include '../PHP/View_Doctors/edit.php'?>
                <!-- Insert Form -->
                <form class="Insert-Doctor" action="../PHP/Insert_Doctor/insert.php" method="Post">
                    <!-- Header Information-->
                    <div class="Form-Header">
                        <h2>Amend Doctor</h2>
                        <p>Change information in the form below to update the Doctor.</p>
                    </div>

                    <!-- All the input content of the form-->
                    <section class="Input-Content">
                        <div class="inputbox">
                            <label for="surname">Doctor's Surname </label>
                            <input type="text" name="surname" id="surname" value="<?php echo $surname ?>"autofocus/>
                        </div>
        
                        <div class="inputbox">
                            <label for="firstname">Doctor's Firstname </label>
                            <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname" required/>
                        </div>

                        <!-- When entering a phone number it must match the set pattern-->
                        <div class="inputbox">
                            <label for="telephoneNumber">Surgery's Telephone Number </label>
                            <input type="text" name="telephoneNumber" id="telephoneNumber" placeholder="Enter Telephone Number" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>
        
                        <div class="inputbox">   
                            <label for="mobileNumber">Surgery's Mobile Number </label>
                            <input type="text" name="mobileNumber" id="mobileNumber" placeholder="Enter Mobile Number" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>
                        
                        <div class="inputbox">
                            <label for="homeTelephone">Home Telephone Number </label>
                            <input type="text" name="homeTelephone" id="homeTelephone" placeholder="Enter Home Telephone" title="A phone number can have the pattern 083 111 1111, (083) 111 1111 or 1111111111" pattern="\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{4}" required/>
                        </div>

                        <!-- Surgery Adress Section-->
                        <section class="Address-Sections">

                            <!-- Surgery Address Header-->
                            <h3>Sugery Address Information</h3>

                            <div class="inputbox" id="boxPadding">
                                <label for="surgeryStreet">Surgery's Street </label>
                                <input type="text" name="surgeryStreet" id="surgeryStreet" placeholder="Enter Surgery's Street" required/>
                            </div>
            
                            <div class="inputbox" id="boxPadding">   
                                <label for="surgeryTown">Surgery's Town </label>
                                <input type="text" name="surgeryTown" id="surgeryTown" placeholder="Enter Surgery's Town" required/>
                            </div>

                            <div class="inputbox" id="boxPadding">   
                                <label for="surgeryCounty">Surgery's County </label>
                                <input type="text" name="surgeryCounty" id="surgeryCounty" placeholder="Enter Surgery's County" required/>
                            </div>

                        </section>

                        <!-- Home Adress Section-->
                        <section class="Address-Sections">

                            <!-- Home Address Header-->
                            <h3>Home Address Information</h3>
                            <div class="inputbox" id="boxPadding">
                                <label for="homeStreet">Home Street </label>
                                <input type="text" name="homeStreet" id="homeStreet" placeholder="Enter Home Street" required/>
                            </div>
            
                            <div class="inputbox" id="boxPadding">   
                                <label for="homeTown">Home Town </label>
                                <input type="text" name="homeTown" id="homeTown" placeholder="Enter Home Town" required/>
                            </div>

                            <div class="inputbox" id="boxPadding">   
                                <label for="homeCounty">Home County </label>
                                <input type="text" name="homeCounty" id="homeCounty" placeholder="Enter Home County" required/>
                            </div>

                        </section>
                    </section>

                    <!-- Action Buttons for the form-->
                    <div class="button">
                        <input type="submit" name="submit" value="Update">
                        <input id="right" type="reset" name="reset" value="Clear Form">
                    </div>

                </form>
            </section>
        </main>
        <script src="../js.js"></script>
    </body>
</html>