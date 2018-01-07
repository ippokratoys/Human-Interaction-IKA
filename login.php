<html>
    <head>
    	<?php
    		include("refs.html");
    	?>
      <link rel="stylesheet" href="css/register.css">
      <style>
		.error {color: #FF0000;}
		</style>

  </head>
<!-- Latest compiled and minified CSS -->
<body>
<?php
	include("navbar.html");
?>
<?php
// define variables and set to empty values
$errorMsg = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {/*Na allaksei se if not found sti vasi*/
    $errorMsg = "Invalid email - password combination.";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["password"])) {
    $errorMsg = "Invalid email - password combination.";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (!empty($email) and !empty($password) and empty($errorMsg)) {
  	$conn = connectToDB("localhost", "root", "", "eamDatabase");

  	$sql = "SELECT password FROM insuredPeople WHERE email='".$email."'";
  	$result = mysqli_query($conn, $sql);

  	if (mysqli_num_rows($result) > 0) {
  		$row = mysqli_fetch_assoc($result);
  		if ($password == $row["password"]) {
  			echo '<script type="text/javascript">
  			window.location = "index.php"
  			</script>';
  		}else{
  			$errorMsg = "Invalid email - password combination.";
  		}
  	}else{
  		$errorMsg = "Invalid email - password combination.";
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
    <br/><br/>

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
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Εισάγεται το email σας"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Κωδικός </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Εισάγεται τον κωδικό σας"/>
								</div>
							</div>
						</div>

						<span class="error"><?php echo $errorMsg;?></span>

						<div class="form-group ">
							<!-- <button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button> -->
							<input type="submit" value="Σύνδεση" class="btn btn-primary btn-lg btn-block login-button"></input>
						</div>

						<div class="login-register">
				            <a href="register.php">Δεν έχετε λογαριασμό? Δημιουργήστε</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
