<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Εργοδότες - ΙΚΑ</title>
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
        <h3>Εργοδότες</h3>
 <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item active">Εργοδότες</li>
        </ol>
    </div>
    <div class="row" id="workers-grid">
    	<!-- <div class="col-md-1   col-sm-1">
    	</div> -->
        <div class="" >

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <img src="images/proslipsi.jpeg" alt="Πρόσληψη"/>
        		  <div class="card-body">
        		    <h4 class="card-title">Αιτηση Πρόσληψης Εργαζόμενου</h4>
        		    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται ηλεκτρονικά να υποβάλεται αίτηση πρόσληψης εργαζόμενου.</p>
        		    <a href="#" class="btn btn-primary" >Υπολογισμός  ενσήμων</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="upologismos_eisforon.php"><img src="images/eisfores.jpg" alt="εισφορες"/></a>
        		  <div class="card-body">
        		    <h4 class="card-title">Υπολογισμός oφειλομένων εισφορών</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να υπολογίσεται τις εισφορές που χρωστάετε στον εργοδότη.</p>
        		    <a href="upologismos_eisforon.php" class="btn btn-primary" >Υπολογισμός εισφορών</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <img src="images/asfalistiki_enimerotita.jpg" alt="Βεβαίωση Ασφαλιστικής Ενημερότητας"/>
        		  <div class="card-body">
        		    <h4 class="card-title">Βεβαίωση Ασφαλιστικής Ενημερότητας</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να εκδώσετε ηλεκτρονικά βεβαίωση ασφαλιστικής ενημερότητας και να την εκτυπώσετε.</p>
        		    <a href="#" class="btn btn-primary" >Ασφαλιστικής Ενημερότητας</a>
        		  </div>
        		</div>
    		</div>

		</div>
	</div>
</div>

<?php
	include("footer.html");
?>


</body>
</html>
