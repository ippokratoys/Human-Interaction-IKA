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
          <h3>Υπολογισμός Ενσύμων</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item">Εργαζόμενοι</li>
        <li class="breadcrumb-item active">Υπολογισμός Ενσύμων</li>

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
