<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("refs.html");
  ?>
  <!-- Custom styles for this template -->
  <link href="css/profile.css" rel="stylesheet">

</head>

<body>



    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <!-- Start Bootstrap -->
                    </a>
                </li>
                <li>
                    <a href="#">Τα στοιχεία μου</a>
                </li>
                <li>
                    <a href="#">Οι εφαρμογές μου</a>
                </li>
                <li>
                    <a href="#">Εκρεμείς αιτήσεις</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <?php
            include("navbar.html");
          ?>

            <div id="main-cont" class="container-fluid">
                <h1>Τα στοιχεία μου</h1>
                <form id="my-infos">
                    <label for="f-name" >Όνομα</label>
                    <input type="text" id="f-name" name="name" value="Onoma"/>
                    <p id="name-txt" class="hidden"></p>
                    <br>

                    <label for="f-surname" >Επίθετο</label>
                    <input type="text" id="f-surname" name="surname" value="epitheto"/>
                    <p id="surname-txt" class="hidden"></p>
                    <br>

                    <input type="submit" class="btn btn-primary" value="Υποβολή" id="submit-edit-infos"/>

                </form>
                <button class="btn btn-primary" id="edit-infos"> Επεξεργασία</button>
                <!-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
            </div>
        <!-- /#page-content-wrapper -->
        </div>
    <!-- /#wrapper -->



    <!-- Menu Toggle Script -->
    <script src="js/profile.js"></script>

</body>

</html>
