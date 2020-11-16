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
        <h1> Login </h1>

        <form action="signInForm.php" method="post" id="signin_form">

            <label> Username: </label>
            <input type="text" name="username"><br>
            <label> Password: </label>
            <input type="text" name="password"><br>

            <button id ="submit" type="submit" value="Sign In">Sign In</button>

            <p> Don't have an account?<p>
                    <p><a href="accountRegistration.php">SIGN UP</a></p>

        </form>
    </div>

</main>