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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $acclaimed['productName']?>" />
                                <button type="submit"> $<?php echo $acclaimed['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
                 <?php endforeach?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $documentary['productName']?>" />
                                <button type="submit"> $<?php echo $documentary['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                         </li>
             <?php endforeach?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $kidMovie['productName']?>" />
                                <button type="submit"> $<?php echo $kidMovie['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
            <?php endforeach?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $holidayMovie['productName']?>" />
                                <button type="submit"> $<?php echo $holidayMovie['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
        <?php endforeach?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $roms['productName']?>" />
                                <button type="submit"> $<?php echo $roms['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
        <?php endforeach?>
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
                            <form name = "add" method = "post" action="">
                                <input type="hidden" name="addCart" value="<?php echo $roms['productName']?>" />
                                <button type="submit"> $<?php echo $roms['productPrice']?> <i class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
        <?php endforeach?>
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
