<?php
session_start();
if(empty($_SESSION["useremail"])){
  echo '<script type="text/javascript">
        window.location = "login.php"
        </script>';
}else{
  $conn = connectToDB("localhost", "root", "", "eamDatabase");
  mysqli_set_charset($conn, 'utf8');

  $sql = "SELECT user.email, name, surname, amka, afm, WorkerInfo.email, companyName, companyAFM FROM user, WorkerInfo WHERE user.email='".$_SESSION["useremail"]."' AND user.email=WorkerInfo.email";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $email = $row["email"];
      $name = $row["name"];
      $surname = $row["surname"];
      $amka = $row["amka"];
      $afm = $row["afm"];
      $companyName = $row['companyName'];
      $companyAFM = $row['companyAFM'];
  }else{
      $email = "";
      $name = "";
      $surname = "";
      $amka = "";
      $afm = "";
      $companyName = "";
      $companyAFM = "";
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
      <title>Βεβαίωση Εγασίας - ΙΚΑ</title>
    </head>

    <h1>Ικα</h1>
    <h2> Βεβαίωση Εργασίας</h2>
    <hr></hr>
    <p> <strong> Όνομα : </strong> <?php echo $name; ?></p>
    <p> <strong> Επώνυμο : </strong> <?php echo $surname; ?></p>
    <p> <strong> Α.Φ.Μ : </strong> <?php echo $afm; ?></p>
    <p> <strong> Α.Μ.Κ.Α : </strong> <?php echo $amka; ?></p>
    <br></br>
    <p> <strong> Όνομα Εταιρείας : </strong> <?php echo $companyName; ?></p>
    <p> <strong> Α.Φ.Μ Εταιρείας : </strong> <?php echo $companyAFM; ?></p>
    <hr></hr>
    <footer> www.ika.gr 1996 - 2018</footer>
</html>
