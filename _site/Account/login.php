<?php

include('navBar.php');
include('config.php');

?>

<html>

<head>
    <title>Account Sign In</title>
    <link rel="stylesheet" type="text/css" href="aR.css">

</head>

<style>
    body {
        background: #1690A7;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    * {
        box-sizing: border-box;
    }

    form {
        width: 500px;
        height: 400px;
        border: 2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius: 15px;
    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    input {
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px;
    }

    label {
        color: #888;
        font-size: 18px;
        padding: 10px;
    }

    button {
        float: left;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;

    }

    button:hover {
        opacity: 0.7;
    }

    .signupBtn {
        float: right;
        padding: 10px 15px;
        color: black;
        border-radius: 5px;
        margin-right: 10px;
        margin-top: -30px;
        border: none;

    }



</style>

<body>
    <form action="process.php" method="post">
        <label> Username: </label>
        <input type="text" name="username"><br>

        <label> Password: </label>
        <input type="text" name="password"><br>

        <input type="submit" value="Login" name="login"></input>

        <a href="register.php">Register</a>
    </form>

</body>

</html>