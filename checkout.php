<?php
session_start();
$p7 = $_SESSION["user_name"];  
error_reporting(0);
$conn = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("project", $conn);

$sum = 0;
$res = mysql_query("SELECT * FROM cart WHERE user='$p7'"); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Checkout - Flo Period Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">
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
        .checkout-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .checkout-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .order-summary, .payment-summary {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #e0e0e0;
            width: 48%;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 10px;
        }
        .cart-item img {
            height: 100px;
            object-fit: cover;
        }
        .cart-item-details {
            flex-grow: 1;
            margin-left: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .cart-item-title {
            font-size: 18px;
            color: #333;
        }
        .cart-item-price {
            font-size: 18px;
            color: #ff6384;
            margin-top: 10px;
            align-self: center;
        }
        .total, .additional-details {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            border-top: 1px solid #e0e0e0;
        }
        .additional-details {
            flex-direction: column;
        }
        .additional-details div {
            margin-bottom: 10px;
        }
        .proceed-btn {
            background-color: #ff6384;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            margin-top: 20px;
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

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="floo.png" alt="Logo" class="logo" width="100" height="100">
            Flo Period Tracker
        </a>
    </div>
</nav>

<div class="container">
    <div class="checkout-title">Checkout</div>
    <div class="checkout-container">
        <div class="order-summary">
            <h5>Order Summary</h5>
            <?php
            while ($rows = mysql_fetch_array($res)) {
            ?>
                <div class="cart-item">
                    <img src="<?php echo $rows[1]; ?>" alt="Product Image">
                    <div class="cart-item-details">
                        <div class="cart-item-title"><?php echo $rows[2]; ?></div>
                        <div class="cart-item-price">₹<?php echo $rows[4]; $sum += $rows[4]; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="payment-summary">
            <h5>Payment Summary</h5>
            <div class="additional-details">
                <div class="total">
                    <div>Actual Amount</div>
                    <div>₹<?php echo $sum; ?></div>
                </div>
                <div class="total">
                    <div>Shipping Charges</div>
                    <div>FREE</div>
                </div>
                <div class="total">
                    <div>Amount to Pay</div>
                    <div>₹<?php echo $sum; ?></div>
                </div>
                <div>Note: Inclusive of all taxes</div>
            </div>
            <div class="proceed-btn">
                <a href="payment.php">PROCEED TO PAYMENT</a>
            </div>
        </div>
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
