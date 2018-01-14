<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
      $errorMsg = "";
      $conn = connectToDB("localhost", "root", "", "eamDatabase");
      mysqli_set_charset($conn, 'utf8');

      $sql = "SELECT user.email, name, surname, amka, afm, retiredInfo.suntaksi FROM user, retiredInfo WHERE user.email='".$_SESSION["useremail"]."' AND retiredInfo.email=user.email";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          $row = mysqli_fetch_assoc($result);
          $avgmisth = $row["suntaksi"];
      }else{
        $suntaksi = "";
      }
      $sql = "SELECT email FROM retiredInfo WHERE email='".$_SESSION["useremail"]."'";
      $result = mysqli_query($conn, $sql);
      if (!(mysqli_num_rows($result) > 0)) {
          $errorMsg = "Πρέπει να είστε δηλωμένος ως συνταξιούχος προκειμένου να μπορεί να υπολογιστεί το δώρο σας σωστά.";
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
    <title>Υπολογισμός Δώρου - ΙΚΑ</title>
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



    <div id="wrapper" >


        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
          <?php
            include("navbar.html");
          ?>


        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
         <div class="container">
          <h3>Υπολογισμός Δώρου Συντάξεως</h3>
           <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item"><a href="syntaksiouxoi.php">Συνταξιούχοι</a></li>
        <li class="breadcrumb-item active">Υπολογισμός Δώρου Συντάξεως</li>

        </ol>
            <div class="row main">

                <div class="main-login main-center">
                  <form class="form-horizontal" method="post" id="upologismos_dwrou">

                      <div class="form-group">
                          <label for="year-retire" class="cols-sm-2 control-label">Έτος Συνταξιοδότησης</label>
                          <div class="cols-sm-10">
                              <div class="input-group">
                                  <input required="true" type="number" min="1950" max="2018" class="form-control" name="year-retire" id="year-retire"  placeholder="Εισάγεται το έτος"/>
                              </div>
                          </div>
                      </div>

                    <div class="form-group">
                        <label for="avg-misth" class="cols-sm-2 control-label">Ποσό μηνιαίας σύνταξης</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="avg-misth" id="avg-misth"  <?php 
                                if (empty($avgmisth)){
                                  echo 'placeholder="Εισάγεται το ποσό"';
                                }else{
                                  echo 'value="'.$avgmisth.'"';
                                } ?>/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="anapiria" class="cols-sm-2 control-label">Ποσοστό αναπηρίας %<small>(αν δεν υπάρχει βάλτε 0)</small> </label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" min="0" max="100" class="form-control" name="anapiria" id="anapiria"  placeholder="0 - 100"/>
                            </div>
                        </div>
                    </div>

                    <span class="error"><?php echo $errorMsg;?></span>


                        <div class="form-group ">
                            <!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
                            <input type="submit" value="Υπολογισμός" class="btn btn-primary btn-lg btn-block login-button"></input>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div id="eisforesModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ποσό βοηθήματος</h4>
              </div>
              <div class="modal-body">
                <p> Το ποσό που προκύπτει από αυτα τα στοιχεία είναι <span id="theNumber-modal"></span> €</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <script src="js/eisfores.js"></script>
</body>

</html>
