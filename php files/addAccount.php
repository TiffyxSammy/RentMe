<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$emailAddress = filter_input(INPUT_POST, 'emailAddress');
$monthBday = filter_input(INPUT_POST, 'monthBday');
$dayBday = filter_input(INPUT_POST, 'dayBday');
$yearBday = filter_input(INPUT_POST, 'yearBday');
/* $creditCard = filter_input(INPUT_POST, 'creditCard'); */

// Validate inputs
require_once('database.php');

            $query = 'INSERT INTO accounts (username, password, firstName, lastName, emailAddress, monthBday, dayBday, yearBday) VALUES (:username, :password, :firstName, :lastName, :emailAddress, :monthBday, :dayBday, :yearBday)';

            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':firstName', $firstName);
            $statement->bindValue(':lastName', $lastName);
            $statement->bindValue(':emailAddress', $emailAddress);
            $statement->bindValue(':monthBday', $monthBday);
            $statement->bindValue(':dayBday', $dayBday);
            $statement->bindValue(':yearBday', $yearBday);
/*             $statement->bindValue(':creditCard', $creditCard); */
            $statement->execute();
            $statement->closeCursor();

            // Display the login page
            include('accountSuccess.php');

            if ($query) {
                echo '<b>Congrats, You are now Registered.</b>';
            } else {
                echo '<b>Error Registeration.</b>';
            }