<?php

session_start();

include('config.php');

$db = config::connect();

$username = $_SESSION['username'];

// Get user data
$queryUser = 'SELECT * FROM accounts WHERE username = :username';
$statement = $db->prepare($queryUser);
$statement->bindValue('username', $username);
$statement->execute();
$users = $statement->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="viewProfile.css" />
    <!--favicon-->
    <link rel="shortcut icon" href="favicon.jpg" />
</head>
<?php foreach ($users as $user) : ?>
<h2> <?php echo "Welcome to your profile, " . $user['firstName']?></h2>
<?php endforeach; ?>

<body scroll="no" style="overflow: hidden">

 <!--navigation-------------->
 <nav>
        <!--logo--------------->
        <a href="../index.php" class="logo">
            <img src="../images/favicon.jpg" />
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../movies.php">Movies</a></li>
            <li><a href="../tv_shows.php">TV Shows</a></li>
           
            <li><a href="../cart.php">Cart</a></li>
            <li><a href="../userAccount.php">Account</a></li>
        </ul>
        <!--search------------->
        <div class="search2">
            <input type="text" placeholder="Search" />
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>

    <section>
        <div class="tableIndex">
            <table>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <th>Username: </th>
                        <td><?php echo $user['username']; ?></td>
                    </tr>
                    <tr>
                        <th>First Name:</th>
                        <td><?php echo $user['firstName']; ?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?php echo $user['lastName']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $user['emailAddress']; ?></td>
                    </tr>
                    <tr>
                        <th>Birthday:</th>
                        <td><?php echo $user['monthBday']; ?>
                            <?php echo $user['dayBday']; ?>,
                            <?php echo $user['yearBday']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
</body>

</html>