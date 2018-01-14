<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("refs.html");
  ?>
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
          <h3>Υπολογισμός Ενσήμων</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="ergazomenoi.php">Εργαζόμενοι</a></li>
        <li class="breadcrumb-item active">Υπολογισμός Ενσήμων</li>

        </ol>
            <div class="row main">
                <div class="panel-heading">
                   <!-- <div class="panel-title text-center">
                        <h1 class="title">ΙΚΑ ΥΠΟΛΟΓΙΣΜΟΣ ΕΝΣΥΜΩΝ</h1>
                        <hr />
                    </div> -->
                </div>
                <div class="main-login main-center">
                  <form class="form-horizontal" method="post" id="ensyma_calc">

                   <div class="form-group">
                        <label for="amka" class="cols-sm-2 control-label">ΑΜΚΑ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="amka" id="amka" <?php 
                                if (empty($amka)){
                                  echo 'placeholder="Εισάγετε AMKA"';
                                }else{
                                  echo 'value="'.$amka.'"';
                                } ?> />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="afm" class="cols-sm-2 control-label">ΑΦΜ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="ΑΦΜ" id="afm"  <?php 
                                if (empty($afm)){
                                  echo 'placeholder="Εισάγετε AMKA"';
                                }else{
                                  echo 'value="'.$afm.'"';
                                } ?> />
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
                        <label for="etoi" class="cols-sm-2 control-label">Πλήθος των ετών εργασίας </label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="etoi" id="etoi"  placeholder="Εισάγεται τον χρόνια υπηρεσίας σας"/>
                            </div>
                        </div>
                    </div>


                        <div class="form-group ">
                            <!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
                            <input type="submit" value="Υπολογισμός" class="btn btn-primary btn-lg btn-block login-button"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="ensimaModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Πλήθος ενσήμων</h4>
              </div>
              <div class="modal-body">
                <p> Τα ένσημα του εργαζομένου με ΑΦΜ <span id="afm-modal"></span>, είναι <span id="theNumber-modal"></span></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <script src="js/ensima.js"></script>
</body>

</html>
