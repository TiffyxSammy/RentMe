<?php

require('database.php');

$query = 'SELECT * FROM accounts ORDER BY accountID';
$statement = $db->prepare($query);
$statement->execute();
$accounts = $statement->fetchAll();
$statement->closeCursor();

?>

<title>Create an Account</title>
<link rel="stylesheet" type="text/css" href="aR.css">

<body>


    <nav>
        <!--logo--------------->
        <a href="index.html" class="logo">
            <img src="favicon.jpg"/>
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
            <li><a href="favorites.html">Favorites</a></li>
            <li><a href="#">Cart</a></li>
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
<div class="signup">
    <h1> Sign up for an account today! </h1>

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


        <button id ="submit" type="submit" value="Sign Up">Sign Up</button>

    </form>
</div>

</main>