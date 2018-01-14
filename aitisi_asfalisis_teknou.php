<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
    $errorMsg = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amka = test_input($_POST["amka"]);
      $afm = test_input($_POST["afm"]);

      $conn = connectToDB("localhost", "root", "", "eamDatabase");
      mysqli_set_charset($conn, 'utf8');

      $sql = "UPDATE user SET amka='".$amka."', afm='".$afm."' WHERE email='".$_SESSION["useremail"]."'";
      $result1 = mysqli_query($conn, $sql);
      $currDate = date("Y-m-d");
      $sql = "INSERT INTO Applications (status, date, user, applicationType, applicationDone) VALUES ('pending', '".$currDate."', '".$_SESSION["useremail"]."', 'child insurance', 'No')";
      $result2 = mysqli_query($conn, $sql);
      if ($result1 and $result2) {
        mysqli_close($conn);
        $errorMsg = "Η αίτηση κατατέθηκε επιτυχώς.";
        }else{
            $errorMsg = "Η αίτηση δεν κατατέθηκε επιτυχώς.";
        }
        mysqli_close($conn);
    }
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
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("refs.html");
  ?>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/register.css">
</head>
<body>



    <div id="wrapper">


        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
          <?php
            include("navbar.html");
          ?>


        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
        <div class="container">
          <h3>Αίτηση Ασφάλισης Τέκνου</h3>
          <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="ergazomenoi.php">Εργαζόμενοι</a></li>
        <li class="breadcrumb-item active">Αίτηση Ασφάλισης Τέκνου</li>

        </ol>
            <div class="row main">
                <div class="panel-heading">
                   <!-- <div class="panel-title text-center">
                        <h1 class="title">ΙΚΑ ΥΠΟΛΟΓΙΣΜΟΣ ΕΝΣΥΜΩΝ</h1>
                        <hr />
                    </div> -->
                </div>
                <div class="main-login main-center">
                  <form class="form-horizontal" target="aitisi_asf_done.php" method="post" id="aitisi_teknou" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                   <div class="form-group">
                        <label for="amka" class="cols-sm-2 control-label">ΑΜΚΑ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="amka" id="amka"  <?php 
                                if (empty($amka)){
                                  echo 'placeholder="Εισάγετε ΑMKA"';
                                }else{
                                  echo 'value="'.$amka.'"';
                                } ?>/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="afm" class="cols-sm-2 control-label">ΑΦΜ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="afm" id="afm"  <?php 
                                if (empty($afm)){
                                  echo 'placeholder="Εισάγετε ΑΦΜ"';
                                }else{
                                  echo 'value="'.$afm.'"';
                                } ?>/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tautotita" class="cols-sm-2 control-label">Αριθμός Ταυτότητας</label>
                        <div class="cols-sm-10">
                            <div class="input-group">

                                <input required="true" type="text" class="form-control" name="tautotita" id="tautotita"  placeholder="Αριθμός Ταυτότητας"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kid-name" class="cols-sm-2 control-label">Όνομα Παιδού</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="kid-name" id="kid-name"  placeholder="Εισάγεται το ονομα"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kid-surname" class="cols-sm-2 control-label">Επώνυμο Παιδού</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="kid-surname" id="kid-surname"  placeholder="Εισάγεται το ονομα"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kid-birth-year" class="cols-sm-2 control-label">Έτος γέννησης</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" min="1950" max="2018" class="form-control" name="kid-birth-year" id="kid-birth-year"  placeholder="Εισάγεται το έτος"/>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="kid-name" class="cols-sm-2 control-label">Όνομα Παιδού</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="kid-name" id="kid-name"  placeholder="Εισάγεται το επώνυμο σας"/>
                            </div>
                        </div>
                    </div> -->


                        <div class="form-group ">
                            <!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
                            <!-- <input type="submit" value="Υποβολή αίτησης" class="btn btn-primary btn-lg btn-block login-button"></input> -->
                            <input id="fake-btn" type="submit" value="Υποβολή αίτησης" class="btn btn-primary btn-lg btn-block login-button"></input>
                            <!-- <button class="btn btn-primary btn-lg btn-block login-button" data-toggle="modal" data-target="#myModal" value="" >Υποβολή αίτησης </button> -->
                        </div>

                        <?php echo $errorMsg; ?>

                    </form>
                </div>
            </div>
        </div>
        <div id="aitisiDone" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Επιβαιβέωση στοιχείων</h4>
              </div>
              <div class="modal-body">
                <p>Ειστέ σίγουροι ότι τα στοιχεία είναι σωστά?</p>
                <span id="stoixeia">
                </span>
              </div>
              <div class="modal-footer">
                <button type="button" class="left btn btn-danger" data-dismiss="modal">Ακύρωση</button>
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Επιβαιβέωση</button> -->
                <input id="modal-conf" type="submit" value="Επιβαιβέωση" class="btn btn-primary form" form="aitisi_teknou"></input>
              </div>
            </div>

          </div>
        </div>

        <script src="js/aitisi.js"></script>
</body>

</html>
