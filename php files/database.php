<?php 

$dsn = 'mysql:host=localhost; dbname=Rent_Me';
$un = 'root';
$pd = '';

    try {
        $db = new PDO($dsn, $un, $pd);
        
    } catch ( PDOException $e ) {
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
?>
