<?php
session_start();
?>
<!DOCTYPE html>
<html lang="el">
    <head>
    	<meta charset=UTF-8>
    	<?php
    		include("refs.html");
    	?>
    	<style>
		.error {color: #FF0000;}
		</style>
      <link rel="stylesheet" href="css/register.css">
      <script src="js/register.js"></script>
    </head>
<!-- Latest compiled and minified CSS -->
<body>
<?php
	include("navbar.html");
?>
<?php
// define variables and set to empty values
$errorMsg = "";
$name = $surname = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $errorMsg = "Κανένα πεδίο δεν πρέπει να είναι κενό.";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["surname"])) {
    $errorMsg = "Κανένα πεδίο δεν πρέπει να είναι κενό.";
  } else {
    $surname = test_input($_POST["surname"]);
  }

  if (empty($_POST["email"])) {
    $errorMsg = "Κανένα πεδίο δεν πρέπει να είναι κενό.";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $errorMsg = "Κανένα πεδίο δεν πρέπει να είναι κενό.";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (!empty($name) and !empty($surname) and !empty($email) and !empty($password) and empty($errorMsg)) {
  	$conn = connectToDB("localhost", "root", "", "eamDatabase");

  	mysqli_set_charset($conn, 'utf8');

  	$sql = "SELECT password FROM user WHERE email='".$email."'";
  	$result = mysqli_query($conn, $sql);

  	if (mysqli_num_rows($result) > 0) {
  		$row = mysqli_fetch_assoc($result);
  		$errorMsg = "Το email αυτό πιθανόν να χρησιμοποιείται ήδη. Δοκιμάστε να "."<a href=\"login.php\">συνδεθείτε.</a>";
  	}else{
  		$sql = "INSERT INTO user (name, surname, email, password) VALUES ('".$name."', '".$surname."', '".$email."', '".$password."')";
	  	$result = mysqli_query($conn, $sql);

	  	if ($result) {
	  		$_SESSION["useremail"] = $email;
	  		echo '<script type="text/javascript">
	  			window.location = "index.php"
	  			</script>';
	  	}else{
	  		$errorMsg = "Η εγγραφή σας ήταν ανεπιτυχής.";
	  	}
  	}

    mysqli_close($conn);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function connectToDB($servername, $username, $password, $dbname)
{
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection to database failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
	return $conn;
}
?>
    <br></br>

		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">ΙΚΑ</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Όνομα <small>(λατινικοί χαρακτήρες)</small></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Εισάγεται το Όνομα σας"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="surname" class="cols-sm-2 control-label">Επώνυμο <small>(λατινικοί χαρακτήρες)</small></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-black-tie fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="surname" id="surname"  placeholder="Εισάγεται το Επώνυμο σας"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Εισάγεται το Email σας"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="amka" class="cols-sm-2 control-label">AMKA</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="amka" id="amka"  placeholder="Εισάγεται το Α.Μ.Κ.Α σας"/>
								</div>
							</div>
						</div>

						<!-- <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Ψευδώνυμο <small>(λατινικοί χαρακτήρες)</small></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Εισάγεται το ψευδώνυμο σας"/>
								</div>
							</div>
						</div> -->

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Κωδικός <small>(τουλάχιστον 7 χαρακτήρες)</small> </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Εισάγεται τον κωδικό σας"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Επιβεβαίωση κωδικού</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Επιβεβαίωση του κωδικού σας"/>
								</div>
							</div>
						</div>

                        <div class="form-group">
                            <div id="small-pass" class="alert alert-warning hidden">
                                Ο κωδικός είναι μικρός! (Πρέπει να είναι τουλάχιστον 7 χαρακτήρες)
                            </div>
                        </div>
                        <div class="form-group">
                            <div id="not-matching" class="alert alert-warning hidden">
                                Ο κωδικός επιβαιβέωσης δεν ταιριάζει με αυτόν που έχεται εισάγει!
                            </div>
                        </div>

                        <div class="form-group">
                            <div id="some-empty" class="alert alert-warning hidden">
                                Συμπληρώστε όλα τα πεδία για να κάνετε εγγραφή.
                            </div>
                        </div>

                        <span class="error"><?php echo $errorMsg;?></span>

						<div class="form-group ">
							<button type="submit" id="reg-button" disabled="true" class=" btn btn-primary btn-lg btn-block login-button ">Εγγραφή</button>
							<!-- <input id="reg-button" type="submit" value="Εγγραφή" class="btn btn-primary btn-lg btn-block login-button disabled"></input> -->
						</div>
						<div class="login-register">
			         <a href="login.php">Έχετε ήδη λογαριασμό? Συνδεθείτε</a>
	         </div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
