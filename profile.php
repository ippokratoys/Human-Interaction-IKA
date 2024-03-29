<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Προφίλ - ΙΚΑ</title>
  <?php
    include("refs.html");
  ?>
        <style>
        .error {color: #FF0000;}
        </style>
  <!-- Custom styles for this template -->
  <link href="css/profile.css" rel="stylesheet">

</head>

<body>
    <?php
        $conn = connectToDB("localhost", "root", "", "eamDatabase");
        mysqli_set_charset($conn, 'utf8');

        $errorMsg = "";

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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($errorMsg)){
                $name = test_input($_POST["name"]);
                $surname = test_input($_POST["surname"]);
                $amka = test_input($_POST["amka"]);
                $afm = test_input($_POST["afm"]);

              $conn = connectToDB("localhost", "root", "", "eamDatabase");
              mysqli_set_charset($conn, 'utf8');
              $sql = "UPDATE user SET amka='".$amka."', afm='".$afm."', name='".$name."', surname='".$surname."' WHERE email='".$_SESSION["useremail"]."'";
              $result = mysqli_query($conn, $sql);
              if ($result) {
                $errorMsg = "Τα στοιχεία σας αλλάξαν επιτυχώς.";
                }else{
                    $errorMsg = "Τα στοιχεία σας δεν αλλάξαν επιτυχώς.";
                }
                mysqli_close($conn);
            }
        }

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
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
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
                <h1>Τα στοιχεία μου</h1>
                <div class="hidden" id="change-info">
                    <p>Επεξεργαστείτε τα στοιχεία που σας ενδιαφέρου και πατήστε υποβολή.</p>
                    <small> Δεν μπορείται να αλλάξετε το email σας.</small>
                </div>
                <form id="my-infos" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="well col-sm-3">
                            <label for="f-name" >Όνομα</label>
                            <input type="text" id="f-name" name="name" value="<?php echo $name;?>">
                            <p id="name-txt" class="hidden"></p>
                        <!-- </div> -->

                        <!-- <div class="well"> -->
                            <label for="f-surname" >Επίθετο</label>
                            <input type="text" id="f-surname" name="surname" value="<?php echo $surname;?>">
                            <p id="surname-txt" class="hidden"></p>

                            <label for="f-email" >Email</label>
                            <input readonly="true" type="text" id="f-email" name="email" value="<?php echo $email;?>">
                            <p id="email-txt" class="hidden"></p>
                        </div>

                        <div class="well col-sm-3">
                            <label for="f-amka" >ΑΜΚΑ</label>
                            <input type="text" id="f-amka" name="amka" value="<?php echo $amka;?>">
                            <p id="amka-txt" class="hidden"></p>
                        <!-- </div> -->

                        <!-- <div class="well"> -->
                            <label for="f-afm" >ΑΦΜ</label>
                            <input type="text" id="f-afm" name="afm" value="<?php echo $afm;?>">
                            <p id="afm-txt" class="hidden"></p>
                        </div>
                        <br>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Υποβολή" id="submit-edit-infos"/>
                </form>
                <button class="btn btn-primary" id="edit-infos"> Επεξεργασία</button>
                 <?php if ($errorMsg == "Τα στοιχεία σας αλλάξαν επιτυχώς.") {
                    echo $errorMsg;
                }else if($errorMsg == "Τα στοιχεία σας δεν αλλάξαν επιτυχώς."){
                    echo '<span class="error"><?php echo $errorMsg;?></span>';
                }else{
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
