<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amka = test_input($_POST["amka"]);
      $afm = test_input($_POST["afm"]);

      $conn = connectToDB("localhost", "root", "", "eamDatabase");
      mysqli_set_charset($conn, 'utf8');

      $sql = "UPDATE user SET amka='".$amka."', afm='".$afm."' WHERE email='".$_SESSION["useremail"]."'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        mysqli_close($conn);
        echo '<script type="text/javascript">
            window.location = "bebaiosh_ergasias_page.php"
            </script>';
        }
        mysqli_close($conn);
    }
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
  $sql = "SELECT email FROM WorkerInfo WHERE email='".$_SESSION["useremail"]."'";
  $result = mysqli_query($conn, $sql);

  if (!(mysqli_num_rows($result) > 0)) {
      $errorMsg = "Πρέπει να είστε δηλωμένος ως εργαζόμενος κάποιας εταιρείας πρώτα.";
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
   <style>
        .error {color: #FF0000;}
        </style>
  <!-- Custom styles for this template -->
</head>
      <link rel="stylesheet" href="css/register.css">

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
          <h3>Βεβαίωση Εργασίας</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="ergazomenoi.php">Εργαζόμενοι</a></li>
        <li class="breadcrumb-item active">Βεβαίωση Εργασίας</li>

        </ol>
            <div class="row main">
                <div class="panel-heading">
                   <!-- <div class="panel-title text-center">
                        <h1 class="title">ΙΚΑ ΥΠΟΛΟΓΙΣΜΟΣ ΕΝΣΥΜΩΝ</h1>
                        <hr />
                    </div> -->
                </div>
                <div class="main-login main-center">
                  <form target="_blank" class="form-horizontal" method="post" id="bebaiosh_ergasias"
                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
                        <label for="etoi" class="cols-sm-2 control-label">Επώνυμο</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="surname" id="surname"  placeholder="Εισάγεται το επώνυμο σας"/>
                            </div>
                        </div>
                    </div>

                    <span class="error"><?php echo $errorMsg;?></span>


                        <div class="form-group ">
                            <!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
                            <input type="submit" value="Εκτύπωση" class="btn btn-primary btn-lg btn-block login-button"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <script src="js/ensima.js"></script>
        <script src="js/bebaiosh_ergasias.js"></script>
</body>

</html>
