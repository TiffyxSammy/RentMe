<?php

require_once('database.php');

$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$query = 'DELETE FROM cart WHERE productID = :product_id';
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$statement->execute();
$statement->closeCursor();

include('cart.php');
?>