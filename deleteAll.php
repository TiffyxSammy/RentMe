<?php

require_once('database.php');

$query = 'DELETE FROM cart';
$statement = $db->prepare($query);
$statement->execute();
$statement->closeCursor();

include('checkout.php');
?>