<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
  $conn = connectToDB("localhost", "root", "", "eamDatabase");
  mysqli_set_charset($conn, 'utf8');

  $sql = "SELECT user.email, name, surname, amka, afm, retiredInfo.email, suntaksi FROM user, retiredInfo WHERE user.email='".$_SESSION["useremail"]."' AND user.email=retiredInfo.email";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $email = $row["email"];
      $name = $row["name"];
      $surname = $row["surname"];
      $amka = $row["amka"];
      $afm = $row["afm"];
      $suntaksi = $row['suntaksi'];
  }else{
      $email = "";
      $name = "";
      $surname = "";
      $amka = "";
      $afm = "";
      $suntaksi = "";
  }
  mysqli_close($conn);
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
<!DOCTYPE html>
<html lang="el">

    <head>
      <!-- Custom styles for this template -->
      <link rel="stylesheet" href="css/bebaiosh.css">
      <title>Βεβαίωση Συντάξεως - ΙΚΑ</title>
    </head>

    <h1>Ικα</h1>
    <h2> Βεβαίωση Συντάξεως</h2>
    <hr></hr>
    <p> <strong> Όνομα : </strong> <?php echo $name; ?></p>
    <p> <strong> Επώνυμο : </strong> <?php echo $surname; ?></p>
    <p> <strong> Α.Φ.Μ : </strong> <?php echo $afm; ?></p>
    <p> <strong> Α.Μ.Κ.Α : </strong> <?php echo $amka; ?></p>
    <br></br>

    <p> Ο παραπάνω ασφαλισμένος κατά το φορολογικό έτος <?php echo date("Y");?> έχει λάβει συνολικό ποσό συντάξεως <strong><?php echo $suntaksi; ?> €</strong>.</p>
    <hr></hr>
    <footer> www.ika.gr 1996 - <?php echo date("Y");?></footer>
</html>
