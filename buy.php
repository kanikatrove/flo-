<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shop - Flo Period Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-yXk3jX2W9HPJczjUv5se9n/cnWq8+odA6Vd2nmyiBqBkPZJQy0RU7ZoNvexH7C8Y7+Y8xVnp0iOZGWqbBx62Og=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #fff;
}

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    color: #ff6384;
}

.navbar-brand .logo {
    display: inline-block;
    margin-right: 10px;
}

.navbar-brand .flo-text {
    color: #ff6384;
}

.navbar-toggler-icon {
    border-color: #ff6384;
}

.navbar-light .navbar-nav .nav-link {
    color: #333;
}

.navbar-light .navbar-nav .nav-link:hover {
    color: #ff6384;
}

.card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

.card img {
    height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 20px;
    color: #ff6384;
    margin-bottom: 10px;
}

.card-subtitle {
    font-size: 16px;
    color: #333;
    margin-bottom: 15px;
}

.card-link,
.btn-primary {
    color: #fff;
    background-color: #ff9ecb;
    border: none;
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s, box-shadow 0.3s;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-link:hover,
.btn-primary:hover {
    background-color: #ff78b5;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.footer {
    background-color: #ff6384;
    color: #fff;
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="floo.png" alt="Logo" class="logo" width="100" height="100">
            <span class="flo-text"></span>Flo Period Tracker
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
           <li class="nav-item">
                    <a class="nav-link" href="cartt.php"> <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #e85eaf;"></i></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <?php
        // Database connection
        $conn = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("project", $conn);

        // Fetching products from database
        $res = mysql_query("SELECT * FROM product");
        while ($rows = mysql_fetch_array($res)) {
            ?>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="products/<?php echo $rows[1]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $rows[2]; ?></h3>
                        <p class="card-text"><?php echo $rows[3]; ?></p>
                        <h5 class="card-subtitle">₹<?php echo $rows[4]; ?></h5>
                                                <a href="cart.php?id=<?php echo $rows[0]; ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<footer class="footer">
    &copy; 2024 Flo Period Tracker. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>
