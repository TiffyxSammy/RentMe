<?php
include('database.php');

$account_id = filter_input(INPUT_GET, 'account_id', FILTER_VALIDATE_INT);

// Get products for selected categories 
$queryProducts = 'SELECT * FROM accounts ORDER BY accountID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':account_id', $account_id);
$statement3->execute();
$accounts = $statement3->fetchAll();
$statement3->closeCursor();

?>


<title>Account Settings</title>

<table>
    <tr>
        <th>Account #</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email Address</th>
        <th></th>
    </tr>

    <?php foreach ($accounts as $account) : ?>
        <tr>
            <td><?php echo $account['accountID']; ?></td>
            <td><?php echo $account['firstName']; ?></td>
            <td><?php echo $account['lastName']; ?></td>
            <td><?php echo $account['username']; ?></td>
            <td><?php echo $account['password']; ?></td>
            <td><?php echo $account['emailAddress']; ?></td>
            <td>
            </td>
        </tr>
    <?php endforeach; ?>
</table>