<?php
include('database.php');

?>

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
            
            <li><a href="cart.php">Cart</a></li>
            <li><a href="userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <<div class="search">
            <form name = "fromSearch" method = "post" action="">
            <input type="text" name="searched" placeholder="Search" />
            <!--search-icon----------->
            </form>

        </div>
    </nav>

    <?php       
                
                if(empty($_POST['searched'])) {
                }
                else {
                $searched = $_POST['searched'];

                $sql = "SELECT * FROM products WHERE productName LIKE \"%$searched%\"";
                $search = $db->query($sql);

                if($search->rowCount() == 0){
                    echo "<section id=\"main\">";
                    echo "<h1 class=\"showcase-heading\">Uh oh!</h1>";
                    echo "<p>Whoops! We cannot find the droids you're looking for... This is awkward.</p>";
                }
                else {
                    echo "<section id=\"main\">";
                    echo "<h1 class=\"showcase-heading\">Here you go!</h1>";
                    echo "<ul id=\"autoWidth\" class=\"cs-hidden\">";
                  }
                 
                  foreach($search as $srch):?>
                    <li class="item-a">
                    <div class="latest-box">   
                        <div class="latest-b-img">
                            <a href="<?php echo $srch['href']?>">
                            <img src="<?php echo $srch['url']?>"/>
                        </a>
                        </div>
                        </div>
                        <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $srch['productName']?>" />
                                <button type="submit"> $<?php echo $srch['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                    </li>
            
            <?php endforeach?>
                <?php }?>
                <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                //echo "<p> $added </p>"; 

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>
        </section>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $trending['productName']?>" />
                                <button type="submit"> $<?php echo $trending['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                  <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $war['productName']?>" />
                                <button type="submit"> $<?php echo $war['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                 <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>

        </ul>
    </section>

    <!--Children & Family Movies---------------------->
    <section id="latest">
        <h2 class="trending-now">TV Dramas</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">


        <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"drama\"";
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $drama['productName']?>" />
                                <button type="submit"> $<?php echo $drama['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                 <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>
            
        </ul>
    </section>


<!--Holiday-->
 <section id="latest">
    <h2 class="trending-now">TV Sci-Fi & Fantasy</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">


    <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"fantasy\"";
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $fantasy['productName']?>" />
                                <button type="submit"> $<?php echo $fantasy['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                  <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>
        
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $kidtv['productName']?>" />
                                <button type="submit"> $<?php echo $kidtv['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                  <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>
                 
    
        
    </ul>
</section>

<!--Casual Viewing-->
<section id="latest">
    <h2 class="trending-now">Casual Viewing</h2>
    <!--slider------------------->
    <ul id="autoWidth2" class="cs-hidden">


    <?php 
                $sql = "SELECT * FROM products WHERE movieCategory = \"casual\"";
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $casual['productName']?>" />
                                <button type="submit"> $<?php echo $casual['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
                 <?php

                if(!empty($_POST['addCart'])){
                $added = $_POST['addCart'];

                $sql = "SELECT * FROM products WHERE productName = \"$added\"";
                $add = $db->prepare($sql);
                $add->execute();

                while($cartAdd = $add->fetch(PDO::FETCH_BOTH)){
                $pID = $cartAdd['productID'];
                $cID = $cartAdd['categoryID'];
                $pName = $added;
                $price = $cartAdd['productPrice'];
                $url = $cartAdd['url'];
                $href = $cartAdd['href'];

                $sql = "INSERT INTO cart (productID, categoryID, productName, productPrice, url, href) VALUES(\"$pID\", \"$cID\", \"$pName\", \"$price\", \"$url\", \"$href\")";
                $search = $db->query($sql);
                }
            }
        ?>    
      
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
