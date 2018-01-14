<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Προφίλ - ΙΚΑ</title>
  <?php
    include("refs.html");
  ?>
  <!-- Custom styles for this template -->
  <link href="css/profile.css" rel="stylesheet">

</head>

<body>
    <?php
        $conn = connectToDB("localhost", "root", "", "eamDatabase");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT email, name, surname, amka, afm FROM user WHERE email='".$_SESSION["useremail"]."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $email = $row["email"];
            $name = $row["name"];
            $surname = $row["surname"];
            $amka = $row["amka"];
            $afm = $row["afm"];
        }else{
            $email = "";
            $name = "";
            $surname = "";
            $amka = "";
            $afm = "";
        }
        mysqli_close($conn);

        function connectToDB($servername, $username, $password, $dbname)
        {
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) {
                die("Connection to database failed: " . mysqli_connect_error());
            }
            //echo "Connected successfully";
            return $conn;
        }
    ?>



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
                    <a href="profile.php">Τα στοιχεία μου</a>
                </li>
                <li>
                    <a href="#">Οι εφαρμογές μου</a>
                </li>
                <li>
                    <a href="ekremeis_aithseis.php">Εκρεμείς αιτήσεις</a>
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
                <h1>Εκρεμείς Αιτήσεις</h1>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Αριθμός Πρωτόκολλο</th>
                      <th scope="col">Τύπος</th>
                      <th scope="col">Ημερομηνία</th>
                      <th scope="col">Κατάσταση</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>                <!-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
            </div>
        <!-- /#page-content-wrapper -->
        </div>
    <!-- /#wrapper -->



    <!-- Menu Toggle Script -->
    <script src="js/profile.js"></script>
    

</body>

</html>
