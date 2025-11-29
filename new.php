<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Control Statement</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h2>Our Items</h2>
<p>Welcome to our Candy Store.</p>

<?php
$candyList = [
    "Marshmallows",
    "Jelly Beans",
    "Chocolate Coins",
    "Fruit Drops"
];
?>

<table class="candy-table">
    <tr>
        <th>Product</th>
        <th>Price ($)</th>
        <th>Stock</th>
        <th>Price Label</th>
        <th>Status</th>
        <th>Category</th>
    </tr>

    <?php
    foreach ($candyList as $candy) {

        $price  = 10;
        $stock  = 15;
        $label  = "Standard Item";
        $status = "In Stock";
        $cat    = "Candy";

        echo "<tr>";
        echo "<td>$candy</td>";
        echo "<td>$price</td>";
        echo "<td>$stock</td>";
        echo "<td>$label</td>";
        echo "<td>$status</td>";
        echo "<td>$cat</td>";
        echo "</tr>";
    }
    ?>
</table>

<p class="offer">There are 4 candies available for this week only(limited time offer only!).</p>

</body>
</html>
<?php include "footer.php"; ?>
