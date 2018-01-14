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

        $sql = "SELECT * FROM Applications WHERE user='".$_SESSION["useremail"]."'";
        $result = mysqli_query($conn, $sql);

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
                    <a href="ekremeis_aithseis.php">Οι Αιτήσεις μου</a>
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
                <h1>Οι Αιτήσεις Μου</h1>
                <?php
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Αριθμός Πρωτόκολλου</th>
                      <th scope="col">Τύπος</th>
                      <th scope="col">Ημερομηνία</th>
                      <th scope="col">Κατάσταση</th>
                    </tr>
                  </thead>

                  <tbody>
                      <?php
                      while ($row = mysqli_fetch_array($result))
                      {
                          if($row['applicationDone']==0){
                              echo "<tr class='not-done'>";
                          }else{
                              echo "<tr class='done'> ";
                          }
                      ?>
                          <td><?php echo $row['id'] ?></td>
                          <td><?php echo $row['applicationType'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo $row['status'] ?></td>
                      </tr>
                      <?php
                      }
                      mysqli_close($conn);
                      ?>
                  </tbody>
                </table>
                <?php
                }
                ?>

                <!-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
            </div>
        <!-- /#page-content-wrapper -->
        </div>
    <!-- /#wrapper -->



    <!-- Menu Toggle Script -->
    <script src="js/profile.js"></script>


</body>

</html>
