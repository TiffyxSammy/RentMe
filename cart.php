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
            <input style="margin-top:20px;" type="text" placeholder="Search"/>
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
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
