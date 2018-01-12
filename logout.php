<?php
session_start();
if(!empty($_SESSION["useremail"])){
	session_unset();
    session_destroy();
    echo '<script type="text/javascript">
  			window.location = "index.php"
  			</script>';
}
?>