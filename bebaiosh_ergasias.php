<?php
session_start();
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
                  <form target="_blank" class="form-horizontal" action="bebaiosh_ergasias_page.php" method="post" id="bebaiosh_ergasias">

                   <div class="form-group">
                        <label for="amka" class="cols-sm-2 control-label">ΑΜΚΑ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="amka" id="amka"  placeholder="Εισάγεται AMKA"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="afm" class="cols-sm-2 control-label">ΑΦΜ</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="ΑΦΜ" id="afm"  placeholder="Εισάγεται ΑΦΜ"/>
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
