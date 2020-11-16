<?php

require('database.php');

$query = 'SELECT * FROM accounts ORDER BY accountID';
$statement = $db->prepare($query);
$statement->execute();
$accounts = $statement->fetchAll();
$statement->closeCursor();

?>

<title>Account Sign In</title>
<link rel="stylesheet" type="text/css" href="aR.css">

<body>

    <h1> Account Login </h1>

</body>

<main>

    <h1> Sign in </h1>

    <form action="addAccount.php" method="post" id="add_account_form">

        <label> Username: </label>
        <input type="text" name="username"><br>
        <label> Password: </label>
        <input type="text" name="password"><br>

        <label> First Name: </label>
        <input type="text" name="firstName"><br>
        <label> Last Name: </label>
        <input type="text" name="lastName"><br>

        <label> Email Address: </label>
        <input type="text" name="emailAddress"><br>
        <label> Credit Card: </label>
        <input type="text" name="creditCard"><br>

        <input id="submit" type="submit" value="Sign In">

    </form>

    <p><a href="accountRegistration.php">SIGN UP</a></p>



</main>
