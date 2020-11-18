<?php

session_start();

include_once('config.php');

echo "Welcome to your profile " . $_SESSION['username'];

echo "<a href='logout.php'>Logout</a>";

echo "<a href='updateProfile.php'>Update</a>";

echo "<a href='deleteAccount.php'>Delete</a>";




?>