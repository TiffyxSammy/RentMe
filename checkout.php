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
    <title>Checkout</title>
    <script src=checkout.js> </script>
    <link rel="shortcut icon" href="images/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="checkout.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  </head>
  <body>
        <!--navigation-------------->
        <nav>
          <!--logo--------------->
          <a href="index.php" class="logo">
              <img src="images/favicon.jpg" />
          </a>
          <!--menu-------------->
          <ul class="menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="movies.php">Movies</a></li>
              <li><a href="tv_shows.php">TV Shows</a></li>
              
              <li><a href="cart.php">Cart</a></li>
              <li><a href="userAccount.php">Account</a></li>
          </ul>
          <!--search------------->
          <div class="search2">
              <input style="margin-top:20px;" type="text" placeholder="Search" />
              <!--search-icon----------->
              <i class="fas fa-search"></i>
          </div>
      </nav>
      <h2><a href="index.php"><img src="images/favicon.jpg" class="logo"></a></h2>
      <h2>Secure Checkout</h2>
        <div class="row">
          <div class="firstcol">
            <div class="outline">
              <div class="row">
                <div class="secondcol">
                <form id="form" name="checkout" action="deleteAll.php" method="post">
                  <h3>Address Information</h3>
                  <label>Full Name</label>
                  <input type="text" name="fName" required placeholder="Sammy Tran">
                  <label>Email</label>
                  <input type="email" name ="email" placeholder="sammyt@gmail.com" required>
                  <label>Street Address</label>
                  <input type="text" name="address" placeholder="123 North Main St" required>
                  <label>City</label>
                  <input type="text" name="city" placeholder="Atlanta" required>
                  <div class="row">
                  <div class="secondcol">
                    <label>State</label>
                    <input type="text" name="state" placeholder="GA" required>
                  </div>
                  <div class="secondcol">
                    <label>Zip</label>
                    <input type="text" name="zip" placeholder="30331" required>
                  </div>
                </div>
              </div>
              <div class="secondcol">
                <h3>Payment Information</h3>
                <label>Cardholder Name</label>
                <input type="text" name="cName" placeholder="Sammy Tran" required>
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="1234567890" required>
                <label>Card Number</label>
                <input type="text" name="card" placeholder="5275190010257538" required>
                <label>Expiration Month</label>
                <select>
                  <option value="" disabled selected>Expiration Month</option>
                  <option value="january">January</option>
                  <option value="february">February</option>
                  <option value="March">March</option>
                  <option value="April">April</option>
                  <option value="May">May</option>
                  <option value="june">June</option>
                  <option value="july">July</option>
                  <option value="august">August</option>
                  <option value="September">September</option>
                  <option value="October">October</option>
                  <option value="November">November</option>
                  <option value="December">December</option>
                </select>
                <div class="row">
                  <div class="secondcol">
                    <label>Expiration Year</label>
                    <input type="text" name="expYear" placeholder="2020" required>
                  </div>
                  <div class="secondcol">
                    <label>CVV</label>
                    <input type="text" name="cvv" placeholder="123" required>
                  </div>
              </div>
              </div>
            </div>
            <input type="button" onclick="validateForm()" class="click" value="Checkout Now">
            </form>
            <form name="backToCart" action="cart.php" method="get">
              <input type="submit" class="click" value="Return to cart">
            </form>
          </div>
        </div>
      <div class="thirdcol">
    </div>
    </div>
  </body>
</html>
