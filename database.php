<?php
$dsn = 'mysql:host=localhost; dbname=Rent_Me';
$username = 'root';
$password = '';
   try {
       $db = new PDO($dsn, $username, $password);
   } catch ( PDOException $e ) {
       $error = $e->getMessage();
       echo $error;
       exit();
   }
?>
