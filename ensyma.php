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
        <div id="page-content-wrapper">
          <?php
            include("navbar.html");
          ?>

            
        <!-- /#page-content-wrapper -->
        </div>
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
                  <form class="form-horizontal" method="post">
                   <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Όνομα</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="Όνομα" id="years"  placeholder="Εισάγεται όνομα"/>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Επίθετο</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="Όνομα" id="years"  placeholder="Εισάγεται έπίθετο"/>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Αριθμός Ταυτότητας</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="Όνομα" id="years"  placeholder="Αριθμός Ταυτότητας"/>
                                </div>
                            </div>
                        </div>
                   <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">ΑΦΜ</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="ΑΦΜ" id="years"  placeholder="Εισάγεται ΑΦΜ"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Πλήθος ενσύμων</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="Πλήθος ενσύμων" id="years"  placeholder="Εισάγεται πλήθος ενσύμων"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Πλήθος των ετών εργασίας</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                 
                                    <input type="text" class="form-control" name="Πλήθος των ετών εργασίας" id="years"  placeholder="Εισάγεται τον χρόνια υπηρεσίας σας"/>
                                </div>
                            </div>
                        </div>


                        <div class="form-group ">
                            <!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
                            <input type="submit" value="Υπολογισμός" class="btn btn-primary btn-lg btn-block login-button"></input>
                        </div>

                        <div class="login-register">
                            <a href="login.php">Δεν έχετε συνδεθεί? Συνδεθείτε</a>
                         </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
