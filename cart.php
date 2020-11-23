<?php
  include('database.php');
  if (!isset($category)) {
      $category = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
      if ($category == NULL || $category == FALSE) {
          $category = 1;
      }
  }
  $query='SELECT * FROM categories';
  $items=$db->query($query);
  $query="SELECT * FROM cart";
  $products=$db->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rent Me</title>
        <link rel="stylesheet" href="cart.css">
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
            <li><a href="hangman.html">Hangman</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <form name = "fromSearch" method = "post" action="">
            <input style="margin-top:20px;" type="text" name="searched" placeholder="Search" />
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
    </nav>
    <main>
  <table>
  <tr>
      <th>Movie Image</th>
      <th>Movie Title</th>
      <th>Price ($)</th>
      <th class="first"></th>
  <?php 
  $productTotal = 0;
  foreach($products as $product):?>
  <tr>
 
    <td><a href="<?php echo $product['href']?>"><img class="pic" src="<?php echo $product['url']?>"></a>
    <td><?php echo $product['productName']?></td>
    <td>$<?php echo $product['productPrice']?></td>
    <?php $productTotal += $product['productPrice']?>
    <td id="lasttd"><form action="delete.php" method="post">
    <input type="hidden" name="product_id" value=<?php echo $product['productID']?>>
    <input id="delete" type="submit" class="dltbtn" value="Remove Item">
    </form></td>
 
    </tr>
  <?php endforeach;?>
  <tr>
                <td class="last">Total</td>
                <td class="last"></td>
                <td class="last">$<?php echo $productTotal ?></td>


            </tr>
  </table>
  <form name="checkout" action="checkout.php" method="get">
            <input type="submit" class="click" value="Checkout Now">
          </form>
</main>
</body>
</html>
