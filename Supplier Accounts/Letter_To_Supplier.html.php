
<!---

StudentID: c00260735

Name: Conor Brooke

Date: 21/03/2022

Name of screen: Supplier Accounts Menu

Purpose of Screen: The purpose of this screen is displaying the Supplier Accounts Menu.

-->

<!DOCTYPE html>
<html>
    <head>
        <title>Pharma Technology | Counter Sales</title>
        <link rel="Stylesheet" href="../CSS/main.css" />
        <link rel="Stylesheet" href="../CSS/Letter.css" />

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
                <li class="active"><a class="mainNav" href="Supplier_Accounts_Menu.html">Suppliers Accounts Menu</a></li>
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

                    <h2>Letter To Supplier</h2>
                    <section class="letter">
                        <div id="companyAddress">
                            <p>PharmaTech Pharmacy,</p>
                            <p>Low Street,</p>
                            <p>Laois,</p>
                            <p>03/04/2022</p>
                        </div>
                        <?php include '../PHP/Supplier_Payments/loadInvoice.php' ?>
                    </section>
            </section>
        </main>
        <script src="../js.js"></script>
    </body>
</html>