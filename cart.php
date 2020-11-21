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
  $query="SELECT * FROM cart WHERE categoryID='$category'";
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
            <li><a href="userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" />
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>
    <main>
  <table>
  <tr>
      <th>Product Code</th>
      <th>Movie Title</th>
      <th>Price ($)</th>
      <th></th>
  <?php foreach($products as $product):?>
  <tr>
 
      <td><?php echo $product['productID']?></td>
      <td><?php echo $product['productName']?></td>
      <td><?php echo $product['productPrice']?></td>
      <td id="lasttd"><form action="delete.php" method="post">
      <input type="hidden" name="product_id" value=<?php echo $product['productID']?>>
      <input id="delete" type="submit" value="Delete">
      </form></td>
 
      </tr>
  <?php endforeach;?>
  <tr>
                <td>Total</td>
                <td></td>
                <td>$----</td>
            </tr>
  </table>
  <form name="checkout" action="checkout.html" method="get">
            <input type="submit" class="click" value="Checkout Now">
          </form>
</main>
    </body>
