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
        <h3>Συνταξιούχοι</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item active">Συνταξιούχοι</li>
        </ol>
    </div>

    <div class="row" id="workers-grid">
    	<!-- <div class="col-md-1   col-sm-1">
    	</div> -->
        <!-- <div class="" > -->

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="bebaiosh_suntaksewn.php"><img src="images/bebaiosh_suntaksewn.JPG" alt="Card image cap"></a>
        		  <div class="card-body">
        		    <h4 class="card-title">Βεβαίωση Συντάξεων Για Φορολογική Χρήση</h4>
        		    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να εκτυπώσετε βεβαίωση συντάξεων για φορολογική χρήση συμπληρώνοντας τα κατάληλλα στοιχεία <small>(ή κάνοντας σύνδεση στον λογαρισμό σας)</small>.</p>
        		    <a href="bebaiosh_suntaksewn.php" class="btn btn-primary"> Βεβαίωση Συντάξεων </a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="aitisi_suntaksiodotikou_boithimatos.php" ><img src="images/calculator.jpg" alt="Card image cap"></a>
        		  <div class="card-body">
        		    <h4 class="card-title">Αίτηση Καταβολής Συνταξιοδωτικού Βοηθήματος</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να αιτηθείτε για την καταβολή συνταξιοδοτικού βοηθήματος <small> απαιτεί σύνδεση</small>.Μπορειται να παρακολουθείτε την πορεία της αίτησης σας απο το προφίλ σας</p>
        		    <a href="aitisi_suntaksiodotikou_boithimatos.php" class="btn btn-primary" >Αίτηση Καταβολής Συνταξιοδωτικού Βοηθήματος</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="upologismos_dwrou.php"> <img src="images/insurance-health.png" alt="Card image cap"> </a>
        		  <div class="card-body">
        		    <h4 class="card-title">Υπολογισμός δώρου εορτών</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να υπολογίσεται το δώρο εορτών που δικαιούστε.</p>
        		    <a href="upologismos_dwrou.php" class="btn btn-primary" >Υπολογισμός Δώρου Συντάξεως</a>
        		  </div>
        		</div>
    		</div>

		<!-- </div> -->
	</div>
</div>

<?php
	include("footer.html");
?>


</body>
</html>
