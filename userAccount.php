<?php
        session_start();
        include_once('Account/config.php');
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
        <<div class="search2">
            <form name = "fromSearch" method = "post" action="">
            <input type="text" name="searched" placeholder="Search" />
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
    </nav>
    <section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <h1 class="showcase-heading">Account</h1>

    </section>
    <!--Documentaries---------------------->
    <section id="latest">
        <a style="color: black;" href="Account/viewProfile.php">
            <h2 class="trending-now">View Profile</h2>
        </a>
    </section>

    <section id="latest">
        <a style="color: black;" href="Account/updateProfile.php">
            <h2 class="trending-now">Update</h2>
        </a>
    </section>


    <section id="latest">
        <a style="color: black;" href="Account/deleteAccount.php">
            <h2 class="trending-now">Delete</h2>
        </a>
    </section>

    <section id="latest">
        <a style="color: black;" href="Account/logout.php">
            <h2 class="trending-now">Logout</h2>
        </a>
    </section>

    <section id="latest">
        <iframe style="margin-left:200px;" src="https://giphy.com/embed/3FqNDjbZCNs37HnRC7" width="350" height="350" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
        <p></p>
    </section>

    <!--footer------------------>
    <footer style="margin-top:10px;">
        <p>Questions?</p>
        <p>Well you can't contact us. Good luck.</p>
    </footer>
    <!--slider-script-->
    <script>
        $(document).ready(function() {
            $('#autoWidth,#autoWidth2').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
                }
            });
        });
    </script>
</body>

</html>
