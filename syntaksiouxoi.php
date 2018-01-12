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
        <div class="" >

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <img src="images/bebaiosh_suntaksewn.JPG" alt="Card image cap">
        		  <div class="card-body">
        		    <h4 class="card-title">Βεβαίωση Συντάξεων Για Φορολογική Χρήση</h4>
        		    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να εκτυπώσετε βεβαίωση συντάξεων για φορολογική χρήση συμπληρώνοντας τα κατάληλλα στοιχεία <small>(ή κάνοντας σύνδεση στον λογαρισμό σας)</small>.</p>
        		    <a href="#" class="btn btn-primary" >Βεβαίωση Συντάξεων</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <img src="images/calculator.jpg" alt="Card image cap">
        		  <div class="card-body">
        		    <h4 class="card-title">Ενημερωτικό Σημείωμα Συντάξεων</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να εκτυπωσετε ενημερωτικό σημείωμα συντάξεων για το διάστημα που σας ενδιαφέρει</p>
        		    <a href="#" class="btn btn-primary" >Σημείωμα Συντάξεων</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <img src="images/insurance-health.png" alt="Card image cap">
        		  <div class="card-body">
        		    <h4 class="card-title">Ασφαλιστική Ικανότητα</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να ενημερωθείται για το αν έχετε ενεργή ασφαλιστική ικανότητα</p>
        		    <a href="#" class="btn btn-primary" >Υπολογισμός χρόνων για σύνταξη</a>
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
