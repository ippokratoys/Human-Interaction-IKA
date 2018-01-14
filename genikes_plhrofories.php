<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
    	<?php
    		include("refs.html")
    	?>

    </head>
<!-- Latest compiled and minified CSS -->
<body>
<?php
	include("navbar.html");
?>

<!-- <br></br> -->

<div class="container">
    <div class="row">
        <h3>Γενικές Πληροφορίες</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item active">Γενικές Πληροφορίες</li>
        </ol>
    </div>
    <div class="row">
    <div class="  col-lg-6 col-md-6   col-sm-6">

        <div class="card" >
          <div class="card-block">
              <p class="text-welcome">
                  Καλωσήρθατε στον ιστοχώρο του ΙΚΑ μέσω της πλατφόρμας αυτής μπορείται να χρησημοποιείσεται της ψηφιακές υπηρεσίες του ΙΚΑ.
                  Ανάλογα με το τι υπηρεσία σας ενδιφέρει, πατήστε την ανάλογη ομάδα χρηστών στην οποία ανήκει και πλοηγηθείται στις διαθέσημες υπηρεσίες.
              </p>
              <a href=#> <img class="card-img-top" src="images/faq.png" alt="Card image cap" style="min-width:100% ; height:100% ; max-height:300px"></a>
              <a href="#" class="btn btn-primary" style="width: 100%;"><h4>Συχνές Ερωτήσεις</h4></a>

          </div>
        </div>
    </div>

    <div class="  col-lg-6 col-md-6   col-sm-6">
        <div class="card" >
          <div class="card-block">
              <p class="text-welcome">
                  Αν δεν βρείτε αυτό που ψάχνεται μπορείται να χρησημοποιείσεται την αναζήτηση καθώς και να εποικινωνισετε μαζί μας με του διαθεσημου τρόπους (μεσο της αντιστοιχης σελίδας).
                  Βρείτε την ακριβή τοποθεσία των καταστημάτων ΙΚΑ που σας ενδιαφέρουν, καθώς και τα τηλεφωνα επικοινωνίας και τα ωράρια λειτουργίας.
              </p>
              <a href=#> <img class="card-img-top" src="images/map.jpg" alt="Card image cap" style="min-width:100% ; height:100% ; max-height:300px"></a>
              <a href="#" class="btn btn-primary" style="width: 100%;"><h4>Επικοινωνία & Δίκτυο Καταστήματων</h4></a>
          </div>
        </div>
    </div>


</div>

<br></br>

      <br></br>
</div>

<?php
	include("footer.html");
?>


</body>
</html>
