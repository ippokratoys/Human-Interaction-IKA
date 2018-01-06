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
					<form class="form-horizontal" method="post" action="/login.html">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Ψευδώνυμο</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Εισάγεται το ψευδώνυμο σας"/>
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

						<div class="form-group ">
							<button id="login-button" type="button" class="btn btn-primary btn-lg btn-block login-button">Σύνδεση</button>
						</div>

						<div class="login-register">
				            <a href="register.html">Δεν έχετε λογαριασμό? Δημιουργήστε</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

	</body>
</html>
