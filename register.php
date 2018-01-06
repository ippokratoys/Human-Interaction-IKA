<!DOCTYPE html>
<html lang="el">
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
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">ΙΚΑ</h1>
	               		<hr />
	               	</div>
	            </div>
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">

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
							<label for="username" class="cols-sm-2 control-label">Ψευδώνυμο <small>(λατινικοί χαρακτήρες)</small></label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Εισάγεται το ψευδώνυμο σας"/>
								</div>
							</div>
						</div>

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

						<div class="form-group ">
							<button id="reg-button" type="button" class="btn btn-primary btn-lg btn-block login-button disabled">Εγγραφή</button>
						</div>
						<div class="login-register">
				            <a href="login.html">Έχετε ήδη λογαριασμό? Συνδεθείτε</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
