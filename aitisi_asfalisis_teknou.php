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
            <li class="breadcrumb-item">Εργαζόμενοι</li>
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
                  <form class="form-horizontal" target="aitisi_asf_done.php" method="post" id="aitisi_teknou">

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
