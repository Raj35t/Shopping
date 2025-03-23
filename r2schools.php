<?php
session_start();

// Define product list


    $products = [
   
        1 => ["name" => "Jeans", "price" => 1200],
   
    ];


// Initialize shopping cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Page</title>
</head>
<body>
    <h1>Welcome to Our Store</h1>
    <h2>Products:</h2>
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <ul>
        <?php foreach ($products as $id => $product): ?>
    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZxIzX9DaOfYaElwZsJlsLaYGiNKa26GijPg&salt="product" id=raz>
    <!-- link for product -->
            <?php echo $product["name"]; ?> - ₹<?php echo $product["price"]; ?>
            <form method="post" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </li>
        <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
</body>
</html>
