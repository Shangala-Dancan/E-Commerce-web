<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-Shop</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <header class="logo">Admin Panel Add Products
    </header>

    <main>
        <h1>Add new products</h1>
        <form action="add_product.php" method="post" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Descrption:</label>
            <textarea name="description" id="description" required></textarea>

            <label for="price" >Price:</label>
            <input type="number" step="0.01" name="price" id="price" required>

            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/*" required>

            <button type="submit">Add Product</button>
        </form>
    </main>
</body>
</html>