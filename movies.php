<?php
include('database.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Movies</title>
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
        <a href="index.php" class="logo">
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
        <h1 class="showcase-heading">Critically Acclaimed Films</h1>

        <ul id="autoWidth" class="cs-hidden">

        <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"acclaimed\"";
                $acclaimedMovies = $db->query($sql);

                foreach($acclaimedMovies as $acclaimed):?>
                        <li class="item-a">
                            <div class="showcase-box">   
                            <a href="<?php echo $acclaimed['href']?>">
                            <img src="<?php echo $acclaimed['url']?>">
                            </a>   
                            </div>
                         </li>;
                 <?php endforeach?>
        </ul>

    </section>
    <!--Documentaries---------------------->
    <section id="latest">
        <h2 class="trending-now">Documentaries</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">

            <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"documentary\"";
                $documentaries = $db->query($sql);

                foreach($documentaries as $documentary):?>
                        <li class="item-a">
                            <div class="latest-box">   
                            <div class="latest-b-img">
                            <a href="<?php echo $documentary['href']?>">
                            <img src="<?php echo $documentary['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
             <?php endforeach?>

        </ul>
    </section>

    <!--Children & Family Movies---------------------->
    <section id="latest">
        <h2 class="trending-now">Children & Family Movies</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">


        <?php 
            $sql = "SELECT * FROM products WHERE movieCategory = \"childrenmovies\"";
            $kidMovies = $db->query($sql);

            foreach($kidMovies as $kidMovie):?>
                    <li class="item-a">
                        <div class="latest-box">   
                        <div class="latest-b-img">
                            <a href="<?php echo $kidMovie['href']?>">
                            <img src="<?php echo $kidMovie['url']?>">
                            </a>   
                            </div>
                            </div>
                        </li>;
            <?php endforeach?>

        </ul>
    </section>


<!--Holiday-->
 <section id="latest">
    <h2 class="trending-now">Holiday</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">

    
    <?php 
            $sql = "SELECT * FROM products WHERE movieCategory = \"holiday\"";
            $holidayMovies = $db->query($sql);

            foreach($holidayMovies as $holidayMovie):?>
                    <li class="item-a">
                    <div class="latest-box">   
                    <div class="latest-b-img">
                            <a href="<?php echo $holidayMovie['href']?>">
                            <img src="<?php echo $holidayMovie['url']?>">
                            </a>   
                            </div>
                            </div>
                        </li>;
        <?php endforeach?>

    </ul>
</section>

<!--Romantic Comedies-->
<section id="latest">
    <h2 class="trending-now">Romantic Comedies</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">
        <!--slide-box-1------------------>

        <?php 
            $sql = "SELECT * FROM products WHERE movieCategory = \"romcom\"";
            $romMovies = $db->query($sql);

            foreach($romMovies as $roms):?>
                    <li class="item-a">
                    <div class="latest-box">   
                    <div class="latest-b-img">
                            <a href="<?php echo $roms['href']?>">
                            <img src="<?php echo $roms['url']?>">
                            </a>   
                            </div>
                            </div>
                        </li>;
        <?php endforeach?>
    </ul>
</section>

<!--Action & Adventure-->
<section id="latest">
    <h2 class="trending-now">Action & Adventure</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">
        <!--slide-box-1------------------>

        <?php 
            $sql = "SELECT * FROM products WHERE movieCategory = \"action\"";
            $actionMovies = $db->query($sql);

            foreach($actionMovies as $actions):?>
                    <li class="item-a">
                    <div class="latest-box">   
                    <div class="latest-b-img">
                            <a href="<?php echo $actions['href']?>">
                            <img src="<?php echo $actions['url']?>">
                            </a>   
                            </div>
                            </div>
                        </li>;
        <?php endforeach?>

    </ul>
</section>

    <!--footer------------------>
    <footer>
        <p>What did the HTML coding dog say?</p>
        <p>Href Href!</p>
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
