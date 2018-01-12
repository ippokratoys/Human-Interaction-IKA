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



    <div id="wrapper" >


        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
          <?php
            include("navbar.html");
          ?>


        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
         <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">ΙΚΑ ΥΠΟΛΟΓΙΣΜΟΣ ΕΝΣΥΜΩΝ</h1>
                        <hr />
                    </div>
                </div>
                <div class="main-login main-center">
                  <form class="form-horizontal" method="post" id="ensyma_calc">

                   <div class="form-group">
                        <label for="num-upal" class="cols-sm-2 control-label">Αριθμός υπαλλήλων παλαιών υπάλληλων (ανω τον 25>=)</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="num-upal" id="num-upal"  placeholder="Εισάγεται αριθμό υπαλλήλων"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="avg-misth" class="cols-sm-2 control-label">Μέσος μηνιαίος μισθός(μικτός)</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" class="form-control" name="avg-misth" id="avg-misth"  placeholder="Εισάγεται μέσο μισθό"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="neoi" class="cols-sm-2 control-label">Πλήθος νέων εργαζόμενων <small>(κάτω τον 25)</small> </label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="text" class="form-control" name="neoi" id="neoi"  placeholder="Εισάγεται αριθμό"/>
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

        <div id="eisforesModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Πλήθος ενσήμων</h4>
              </div>
              <div class="modal-body">
                <p> Οι εκτιμώμενες εισφορές είναι <span id="theNumber-modal"></span> €</p>
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
