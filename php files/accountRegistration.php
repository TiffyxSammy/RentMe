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

            <label> Birthday: </label>
            <select id="monthBday" name="monthBday">
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <select id="dayBday" name="dayBday">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select id="yearBday" name="yearBday">
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select><br>

            <button id="submit" type="submit" value="Sign Up">Sign Up</button>
        </form>
    </div>
</main>
</body>

</html>