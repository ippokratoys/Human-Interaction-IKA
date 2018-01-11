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
        <h3>Εργαζόμενοι</h3>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
        <li class="breadcrumb-item active">Εργαζόμενοι</li>
        </ol>
    </div>
    <div class="row" id="workers-grid">
    	<!-- <div class="col-md-1   col-sm-1">
    	</div> -->
        <div class="" >

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="ensyma.php"><img src="images/enshma.jpg" alt="Card image cap"/></a>
        		  <div class="card-body">
        		    <h4 class="card-title">Υπολογισμός ενσήμων</h4>
        		    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να υπολογίσεται πόσα ένσημα έχεται</p>
        		    <a href="ensyma.php" class="btn btn-primary" >Υπολογισμός  ενσήμων</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="bebaiosh_ergasias.php"> <img src="images/bebaiosh_ergasias.jpg" alt="Card image cap"/> </a>
        		  <div class="card-body">
        		    <h4 class="card-title">Βεβαίωση εργασίας</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να εκτυπώσετε μια βεβαίωση στην οποία να φαίνεται αν εργάζεσται και σε ποιά εταιρία.</p>
        		    <a href="bebaiosh_ergasias.php" class="btn btn-primary" >Βεβαίωση εργασίας</a>
        		  </div>
        		</div>
    		</div>

            <div class="col-md-4  col-sm-4" >
        		<div class="card">
        		  <a href="aitisi_asfalisis_teknou.php"><img src="images/upeuthini_dilosi.png" alt="Card image cap"/></a>
        		  <div class="card-body">
        		    <h4 class="card-title">Αιτηση Ασφάλισης Τέκνου</h4>
                    <p class="card-text">Μέσω της εφαρμογής αυτής μπορείται να κάνεται αίτηση για να ασφαλίσεται κάποιο απο τα τέκνα σας <small>(απαιτεί λογαριασμό)</small>. Μπορείται να παρακουληθήσεται την πορεία της αίτησης σας κάνοντας σύνδεση τον λογαριασμό σας.</p>
        		    <a href="aitisi_asfalisis_teknou.php" class="btn btn-primary" >Αιτηση Ασφάλισης Τέκνου</a>
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
