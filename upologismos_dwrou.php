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
                                <input required="true" type="number" class="form-control" name="avg-misth" id="avg-misth"  placeholder="Εισάγεται το ποσό"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="anapiria" class="cols-sm-2 control-label">Ποσοστό αναπηρίας %<small>(αν δεν υπάρχει κενό)</small> </label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input required="true" type="number" min="0" max="100" class="form-control" name="anapiria" id="anapiria"  placeholder="0 - 100"/>
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
