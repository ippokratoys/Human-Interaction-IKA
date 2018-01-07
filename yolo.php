<?php
include('home.html');
echo "<p>yolelei</p>";
 
 echo "<p>Welcome user : <b>$_POST[user]</b> </p>";

echo $_SERVER['QUERY_STRING']."<br>";
echo $_SERVER['SERVER_NAME'];
 // if($_POST['user'] == true){
 //  include 'page1.html';
 // }
?>

