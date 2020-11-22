<?php
include('database.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rent Me</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/lightslider.css" />
    <!--js-link-->
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <!--favicon-->
    <link rel="shortcut icon" href="images/favicon.jpg" />
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

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
            <li><a href="index.php">Home</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="tv_shows.php">TV Shows</a></li>
            <li><a href="favorites.html">Premium</a></li>
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
    <section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <h1 class="showcase-heading">New Releases</h1>

        <ul id="autoWidth" class="cs-hidden">
            <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"newreleases\"";
                $featuredMovies = $db->query($sql);

                foreach($featuredMovies as $featured):?>
                        <li class="item-a">
                            <div class="showcase-box">
                                <a href="<?php echo $featured['href']?>">
                                <img src="<?php echo $featured['url']?>"/>
                            </a>
                            </div>
                        </li>;
            <?php endforeach?>


    </section>
    <!--Top-10---------------------->
    <section id="latest">
        <h2 class="trending-now">Top 10 in the U.S. Today</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>

            <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"top10\"";
                $topMovies = $db->query($sql);

                foreach($topMovies as $top):?>
                        <li class="item-a">
                            <div class="latest-box">
                            <div class="latest-b-img">
                            <a href="<?php echo $top['href']?>">
                            <img src="<?php echo $top['url']?>">
                        </a>
                        </div>
                    </div>
                    </li>;
            <?php endforeach?>


            <!--slide-box-2------------------>
            <li class="item-b">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="Movies/dwightcode.mp4">
                        <img src="images/meme.jpg">
                    </a>
                    </div>
                </div>
            </li>
        </ul>
           
    </section>

    <!--Trending-Now---------------------->
    <section id="latest">
        <h2 class="trending-now">Trending Shows</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>
            <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"trending\"";
                $trendingMovies = $db->query($sql);

                foreach($trendingMovies as $trend):?>
                        <li class="item-a">
                            <div class="latest-box">
                            <div class="latest-b-img">
                            <a href="<?php echo $trend['href']?>">
                            <img src="<?php echo $trend['url']?>">
                        </a>
                        </div>
                    </div>
                    </li>;
            <?php endforeach?>
        </ul>
    </section>


    <!--movies---------------------------->
    <div class="movies-heading">
        <h2>Must Watch</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/devilwears.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/devilwears.html">
                Director: David Frankel
            </a>
        </div>
        <!--box-2------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/murdermystery.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/mudermystery.html">
                Director: Kyle Newacheck
            </a>
        </div>
        <!--box-3------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/harry.jpeg">
            </div>
            <!--text--------->
            <a href="Home_videos/harrypotterr.html">
                Director: Mike Newell
            </a>
        </div>
        <!--box-4------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/lilo.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/lilo&stitch.html">
                Director: Chris Sanders
            </a>
        </div>
        <!--box-5------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/mile22.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/mile22.html">
                Director: Peter Berg
            </a>
        </div>
        <!--box-6------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/lala.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/lalaland.html">
                Director: Damien Chazelle
            </a>
        </div>
        <!--box-7------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/argo.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/argo.html">
                Director: Ben Affleck
            </a>
        </div>
        <!--box-8------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <img src="images/astar.jpg">
            </div>
            <!--text--------->
            <a href="Home_videos/astarisborn.html">
                Director: Bradley Cooper
            </a>
        </div>
    </section>


    <!--footer------------------>
    <footer>
        <p>You are the CSS to my HTML</p>
    </footer>
    <!--slider-script-->
    <script>
        $(document).ready(function () {
            $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function () {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                }
            });
        });
    </script>
</body>

</html>