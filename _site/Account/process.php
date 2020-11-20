<?php

session_start();
include_once('config.php');

if (isset($_POST['register'])) {
    $db = config::connect();

    $username = sanitizeString($_POST['username']);
    $password = sanitizePassword($_POST['password']);
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $emailAddress = sanitizeString($_POST['emailAddress']);
    $monthBday = filter_input(INPUT_POST, 'monthBday');
    $dayBday = filter_input(INPUT_POST, 'dayBday');
    $yearBday = filter_input(INPUT_POST, 'yearBday');

    if ($username == "" || $emailAddress == "" || $password == "") {
        return;
    }

    if (!checkUserNameExists($db, $username)) {
        echo "Username already exists";
        return;
    }

    if (!checkEmailExists($db, $emailAddress)) {
        echo "Email address is already in use";
        return;
    }

    if (insertDetails($db, $username, $password, $firstName, $lastName, $emailAddress, $monthBday, $dayBday, $yearBday)); {
        $_SESSION['username'] = $username;
        header("Location: profile.php");

        //echo "Account created successfully";
    }
}

if (isset($_POST['login'])) {
    $db = config::connect();

    $username = sanitizeString($_POST['username']);
    $password = sanitizePassword($_POST['password']);

    if ($username == "" || $password == "") {
        return;
    }

    if (checkLogin($db, $username, $password)) {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
    } else {
        echo "The username or password is incorrect";
    }
}

if (isset($_POST['update'])) {
    $db = config::connect();

    $username = sanitizeString($_POST['username']);
    $password = sanitizePassword($_POST['password']);
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $emailAddress = sanitizeString($_POST['emailAddress']);
    $monthBday = filter_input(INPUT_POST, 'monthBday');
    $dayBday = filter_input(INPUT_POST, 'dayBday');
    $yearBday = filter_input(INPUT_POST, 'yearBday');

    if ($username == "" || $emailAddress == "" || $password == "") {
        return;
    }

    if (!checkUserNameExists($db, $username)) {
        echo "Username already exists";
        return;
    }

    if (!checkEmailExists($db, $emailAddress)) {
        echo "Email address is already in use";
        return;
    }


    $currentUserName = $_SESSION['username'];

    $query = $db->prepare('SELECT * FROM accounts WHERE username = :username');

    $query->bindParam(':username', $currentUserName);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);


    $id = $result['id'];

    if (updateDetails($db, $id, $username, $password, $firstName, $lastName, $emailAddress, $monthBday, $dayBday, $yearBday)); {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
    }
}

function insertDetails($db, $username, $password, $firstName, $lastName, $emailAddress, $monthBday, $dayBday, $yearBday)
{

    $query = $db->prepare('INSERT INTO accounts (username, password, firstName, lastName, emailAddress, monthBday, dayBday, yearBday) VALUES (:username, :password, :firstName, :lastName, :emailAddress, :monthBday, :dayBday, :yearBday)');

    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':firstName', $firstName);
    $query->bindParam(':lastName', $lastName);
    $query->bindParam(':emailAddress', $emailAddress);
    $query->bindParam(':monthBday', $monthBday);
    $query->bindParam(':dayBday', $dayBday);
    $query->bindParam(':yearBday', $yearBday);

    return $query->execute();
}

function checkLogin($db, $username, $password)
{
    $query = $db->prepare('SELECT * FROM accounts WHERE username = :username AND password = :password');

    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);

    $query->execute();

    if ($query->rowCount() == 1) {
        return true;
    } else {
        return false;
    }
}

function sanitizeString($string)
{

    $string = strip_tags($string);

    $string = str_replace(" ", "", $string);

    return $string;
}

function sanitizePassword($string)
{

    $string = md5($string);

    return $string;
}

function updateDetails($db, $id, $username, $password, $firstName, $lastName, $emailAddress, $monthBday, $dayBday, $yearBday)
{
    $query = $db->prepare('UPDATE accounts SET username = :username, password = :password, firstName = :firstName, lastName = :lastName, emailAddress = :emailAddress, monthBday = :monthBday, dayBday = :dayBday, yearBday = :yearBday WHERE id = :id');

    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->bindParam(':firstName', $firstName);
    $query->bindParam(':lastName', $lastName);
    $query->bindParam(':emailAddress', $emailAddress);
    $query->bindParam(':monthBday', $monthBday);
    $query->bindParam(':dayBday', $dayBday);
    $query->bindParam(':yearBday', $yearBday);
    $query->bindParam(':id', $id);

    return $query->execute();
}


function checkUserNameExists($db, $username)
{
    $query = $db->prepare('SELECT * FROM accounts WHERE username = :username');

    $query->bindParam(':username', $username);

    $query->execute();

    if ($query->rowCount() == 1) {
        return false;
    } else {
        return true;
    }
}

function checkEmailExists($db, $emailAddress)
{
    $query = $db->prepare('SELECT * FROM accounts WHERE emailAddress = :emailAddress');

    $query->bindParam(':emailAddress', $emailAddress);

    $query->execute();

    if ($query->rowCount() == 1) {
        return false;
    } else {
        return true;
    }
}


?>