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

<br></br>

<div class="container">
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Αρχική</a></li>
</ol>
<div class="row" id="main-first-row">

<!-- 	<div class="col-md-offset-2  col-sm-offset-2"  >
 -->

	<div class="col-lg-4 col-md-4  col-sm-4" >

		<div class="card" >
		  <a href="ergazomenoi.php"><img class="card-img-top" src="images/Happy-construction-workers.jpg" alt="Card image cap" style="width: 100%; height:100%;"></a>
		  <div class="card-body">

		    <a href="ergazomenoi.php" class="btn btn-primary" style="width: 100%;"><h4>Εργαζόμενοι</h4></a>
		  </div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4  col-sm-4" >

		<div class="card">
		  <a href="ergodoths.php"><img class="card-img-top" src="images/businessman.jpeg" alt="Card image cap" style="width: 100%;"></a>
		  <div class="card-body">

		    <a href="ergodoths.php" class="btn btn-primary " style="width: 100%;"><h4>Εργοδότες</h4></a>
		  </div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4  col-sm-4" >
			<div class="card" >
			  <a href="syntaksiouxoi.php"><img class="card-img-top" src="images/syntaksiouxoi.jpg" alt="Card image cap" style="width: 100%; heigit:100% ;"></a>
			  <div class="card-body">

			    <a href="syntaksiouxoi.php" class="btn btn-primary" style="width: 100%;"><h4>Συνταξιούχοι</h4></a>
			  </div>
			</div>
	</div>
</div>


<br></br>

<br></br>
<div class="row" id="second-row">
	<div class="col-lg-6 col-md-6  col-sm-6" >
    	<div class="card" >
    	  <a href="syntaksiouxoi.php"><img class="card-img-top" src="images/disable.jpg" alt="Card image cap" style="width: 100%; heigit:100%;       object-fit: cover;max-height: 300px;"></a>
    	  <div class="card-body">

    	    <a href="syntaksiouxoi.php" class="btn btn-primary" style="width: 100%;"><h4>Άτομα με ειδικές ανάγκες</h4></a>
    	  </div>
    	</div>
	</div>

	<div class="col-lg-6 col-md-6  col-sm-6" >
		<div class="card" >
		  <a href="genikes_plhrofories.php"><img class="card-img-top" src="images/genika.jpg" alt="Card image cap" style="width: 100%; height:100% ;      object-fit: cover;max-height: 300px;"></a>
		  <div class="card-body">

		    <a href="genikes_plhrofories.php" class="btn btn-primary" style="width: 100%;"><h4>Γενικές Πληροφορίες</h4></a>

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

<!--
<form class="form-inline" action="yolo.php" method="POST">
  <div class="form-group">
    <label for="exampleInputName2">Name</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="user">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default">Send invitation</button>
</form> -->
</body>
</html>
