<?php

session_start();

include('config.php');

?>

<html>

<head>
    <title>Account Sign In</title>
    <link rel="stylesheet" type="text/css" href="aR.css">

</head>

<style>
    body {
        background-image: url('blurredrg.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        background-repeat: no-repeat;
    }

    * {
        box-sizing: border-box;
    }

    form {
        width: 500px;
        height: 350px;
        border: 2px solid #ccc;
        padding: 30px;
        background: #E0E0E0;
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
        color: black;
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

<body scroll="no" style="overflow: hidden">
<div class="signup">
<h1 style="text-align:center;"> Log In </h1>
    <form action="process.php" method="post">
        <label> Username: </label>
        <input type="text" name="username"><br>

        <label> Password: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="Login" name="login"></input>
        
        <a style="margin-left: 140px;" href="register.php">Don't Have an Account?</a>

    </form>
    </div>

</body>

</html>