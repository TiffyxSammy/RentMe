
<div class="php">

<?php

//session_start();

include_once('navBar.php');
include_once('config.php');


echo "Welcome to your profile " . $_SESSION['username'];

echo "</p>";

//echo "<a href='logout.php'>Logout</a>";

echo "\t";

echo "<a href='updateProfile.php'>Update</a>";

echo "</p>";

echo "<a href='deleteAccount.php'>Delete</a>";

echo "<a href='logout.php'>Logout</a>";

?>

</div>

<style>

.php {
    margin-top: 100px;
}

</style>