<?php

session_start();

?>

<body scroll="no" style="overflow: hidden">

    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <a href="../index.php" class="logo">
            <img src="favicon.jpg" />
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="tv_shows.php">TV Shows</a></li>
            <li><a href="hangman.html">Hangman</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" placeholder="Search" />
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>

</body>



</div>


<style>
    * {
        box-sizing: border-box;
    }

    nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.04);
        background-color: #ffffff;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 100;
    }

    .logo img {
        height: 35px;
    }

    nav .menu {
        display: flex;
    }

    nav .menu li a {
        height: 40px;
        line-height: 43px;
        margin: 0px;
        padding: 0px 22px;
        display: flex;
        font-size: 0.8rem;
        text-transform: uppercase;
        font-weight: 500;
        color: #585858;
        letter-spacing: 1px;
    }

    .signup {
        margin-top: 100px;
    }
</style>