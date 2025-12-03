<?php 
declare(strict_types=1);

$candyStock = [
    "Marshmallows" => [6.50, 8],
    "Jelly Beans" => [12.00, 22],
    "Chocolate Coins" => [18.75, 12],
    "Fruit Drops" => [9.25, 5],
    "Gummy Bears" => [14.50, 15],
    "Lollipops" => [4.75, 30],
    "Caramel Pops" => [11.25, 7]
];

$taxRate = 12;

function get_reorder_message(int $stock): string {
    return $stock < 10 ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $taxRate = 0): float {
    $totalValue = $price * $quantity;
    return $totalValue * ($taxRate / 100);
}
?>

<?php include "header.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Control Statement</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background-color: #fef9e7;
            font-family: Arial, sans-serif;
        }
        .candy-table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #d4a574; }
    </style>
</head>
<body>
<h2>Our Items</h2>
<p>Welcome to our Candy Store.</p>

<table class="candy-table">
    <tr>
        <th>Product</th>
        <th>Price (₱)</th>
        <th>Stock</th>
        <th>Reorder?</th>
        <th>Total Value (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

    <?php
    foreach ($candyStock as $productName => $data) {
        $price = $data[0];
        $stock = $data[1];
        
        echo "<tr>";
        echo "<td>$productName</td>";
        echo "<td>₱" . number_format($price, 2) . "</td>";
        echo "<td>$stock</td>";
        echo "<td>" . get_reorder_message($stock) . "</td>";
        echo "<td>₱" . number_format(get_total_value($price, $stock), 2) . "</td>";
        echo "<td>₱" . number_format(get_tax_due($price, $stock, $taxRate), 2) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<p class="offer">7 candies available for this week only (limited time offer!).</p>

</body>
</html>
<?php include "footer.php"; ?>