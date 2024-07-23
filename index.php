<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Shop</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>


    <header>
        <div class="logo">MyStore</div>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Welcome to my store</h1>
        <div class="products">
           <?php
           include 'db.php';
           $result=$conn->query("SELECT* FROM product");
           while($row=$result->fetch_assoc()){
            echo'<div class="product">';
            echo '<img src="'.$row['image'].'"alt="'.$row['name'].'">';
            echo '<h2>'.$row['name'].'</h2>';
            echo '<p>Kshs.'.$row['price'].'</p>';
            echo '<a href="product.php?id='.$row['id'].'">View Details</a>';
            echo '</div>';
           }
           ?>
        </div>
    </main>

    <footer>
        <p>&copy;2023 All rights reserved.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>