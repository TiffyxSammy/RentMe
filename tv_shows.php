<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TV Shows</title>
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
        <h1 class="showcase-heading">Trending Now</h1>

        <ul id="autoWidth" class="cs-hidden">

        <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"trendingTV\"";
                $trendingTV = $db->query($sql);

                foreach($trendingTV as $trending):?>
                        <li class="item-a">
                            <div class="showcase-box">   
                            <a href="<?php echo $trending['href']?>">
                            <img src="<?php echo $trending['url']?>">
                            </a>   
                            </div>
                         </li>;
                 <?php endforeach?>
        </ul>

    </section>
    <!--Documentaries---------------------->
    <section id="latest">
        <h2 class="trending-now">TV War & Politics</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>

            <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"war\"";
                $warMovies = $db->query($sql);

                foreach($warMovies as $war):?>
                        <li class="item-a">
                            <div class="latest-box">
                                <div class="latest-b-img">   
                            <a href="<?php echo $war['href']?>">
                            <img src="<?php echo $war['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
                 <?php endforeach?>

        </ul>
    </section>

    <!--Children & Family Movies---------------------->
    <section id="latest">
        <h2 class="trending-now">TV Dramas</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">


        <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"war\"";
                $TVdramas = $db->query($sql);

                foreach($TVdramas as $drama):?>
                        <li class="item-a">
                            <div class="latest-box">
                                <div class="latest-b-img">   
                            <a href="<?php echo $drama['href']?>">
                            <img src="<?php echo $drama['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
                 <?php endforeach?>
            
        </ul>
    </section>


<!--Holiday-->
 <section id="latest">
    <h2 class="trending-now">TV Sci-Fi & Fantasy</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">


    <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"war\"";
                $fantasyM = $db->query($sql);

                foreach($fantasyM as $fantasy):?>
                        <li class="item-a">
                            <div class="latest-box">
                                <div class="latest-b-img">   
                            <a href="<?php echo $fantasy['href']?>">
                            <img src="<?php echo $fantasy['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
                 <?php endforeach?>
        
    </ul>
</section>

<!--Children & Family TV-->
<section id="latest">
    <h2 class="trending-now">Children & Family TV</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">


    <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"children\"";
                $childrenTV = $db->query($sql);

                foreach($childrenTV as $kidtv):?>
                        <li class="item-a">
                            <div class="latest-box">
                                <div class="latest-b-img">   
                            <a href="<?php echo $kidtv['href']?>">
                            <img src="<?php echo $kidtv['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
                 <?php endforeach?>
    
        
    </ul>
</section>

<!--Casual Viewing-->
<section id="latest">
    <h2 class="trending-now">Casual Viewing</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">


    <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"children\"";
                $casualTV = $db->query($sql);

                foreach($casualTV as $casual):?>
                        <li class="item-a">
                            <div class="latest-box">
                                <div class="latest-b-img">   
                            <a href="<?php echo $casual['href']?>">
                            <img src="<?php echo $casual['url']?>">
                            </a>   
                            </div>
                            </div>
                         </li>;
                 <?php endforeach?>
    
        
      
    </ul>
</section>

    <!--footer------------------>
    <footer>
        <p>What's the object oriented way to become wealthy?</p>
        <p>Inheritance :P</p>
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
