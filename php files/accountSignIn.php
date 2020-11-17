<?php

 require('database.php');

$query = 'SELECT * FROM accounts ORDER BY accountID';
$statement = $db->prepare($query);
$statement->execute();
$accounts = $statement->fetchAll();
$statement->closeCursor();

    if (isset($_POST['login'])) {

        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "All fields required";
        } else {

            $query = 'SELECT * FROM accounts WHERE username = :username AND password = :password';
            $statement = $db->prepare($query);
            $statement->execute(
                array(
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                )
            );

            $count = $statement->rowCount();
            if ($count > 0) {
                $_SESSION['username'] = $_POST['username'];
                header("location:signInForm.php");
            }
        }
    }
?>

<title>Account Sign In</title>
<link rel="stylesheet" type="text/css" href="aR.css">

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
    height: 300px;
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

<body scroll="no" style="overflow: hidden">

    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <a href="index.html" class="logo">
            <img src="images/favicon.jpg" />
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="movies.html">Movies</a></li>
            <li><a href="tv_shows.html">TV Shows</a></li>
            <li><a href="favorites.html">Premium</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="accountSettings.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" placeholder="Search" />
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>

</body>

<main>
    <div class="signin">
        <h2> Log In </h2>

        <form method="post" id="signin_form">

            <label> Username: </label>
            <input type="text" name="username"><br>
            <label> Password: </label>
            <input type="text" name="password"><br>

            <!-- <button id ="submit" name = "login" type="submit" value="login">Sign In</button> -->
            <input type="submit" name="login" value="Login"/>

            <div class="signupBtn">
            <p> Don't have an account?<p>
                    <p><a href="accountRegistration.php">SIGN UP</a></p>
</div>
        </form>
    </div>

</main>