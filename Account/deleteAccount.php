<?php

session_start();

include_once('config.php');

$db = config::connect();

$username = $_SESSION['username'];

$query = $db->prepare('DELETE FROM accounts WHERE username = :username');

$query->bindParam('username', $username);

$query->execute();

header("Location: login.php");


?>