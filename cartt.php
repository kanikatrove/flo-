<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shopping Bag - Flo Period Tracker</title>
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
        .cart-title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
            background-color: #f9f9f9;
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
            margin-top: 10px; /* Margin to separate from title */
            align-self: center; /* Center the price */
        }
        .total {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            border-top: 1px solid #e0e0e0;
            font-size: 20px;
        }
        .proceed-btn {
            background-color: #ff6384;
            color: #fff;
            font-weight: bold;
            padding: 15px;
            text-align: center;
            cursor: pointer;
            margin-top: 20px; /* Added margin to separate from the total section */
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
        .stepper {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .step {
            width: 25%;
            text-align: center;
            position: relative;
        }
        .step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: 0;
            height: 2px;
            width: 100%;
            background-color: #e0e0e0;
            z-index: -1;
        }
        .step:last-child::after {
            display: none;
        }
        .step.active .step-circle {
            background-color: #ff6384;
            color: #fff;
        }
        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }
        .step-text {
            display: block;
            color: #333;
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
    <div class="stepper">
        <div class="step active">
            <div class="step-circle">1</div>
            <div class="step-text">Shopping Bag</div>
        </div>
        <div class="step">
            <div class="step-circle">2</div>
            <div class="step-text">Select Address</div>
        </div>
        <div class="step">
            <div class="step-circle">3</div>
            <div class="step-text">Checkout</div>
        </div>
        <div class="step">
            <div class="step-circle">4</div>
            <div class="step-text">Payment</div>
        </div>
    </div>

    <div class="cart-title">My Bag</div>
    <div class="cart-items">
        <?php
        session_start();
        $p7 = $_SESSION["user_name"];
        error_reporting(0);
        $conn = mysql_connect("127.0.0.1", "root", "");
        mysql_select_db("project", $conn);

        $sum = 0;
        $res = mysql_query("select * from cart where user='$p7'");
        while ($rows = mysql_fetch_array($res)) {
        ?>
            <div class="cart-item">
                <img src="<?php echo $rows[1]; ?>" alt="Product Image">
                <div class="cart-item-details">
                    <div class="cart-item-title"><?php echo $rows[2]; ?></div>
                    <div class="cart-item-price">₹<?php echo $rows[4]; $sum = $sum + $rows[4]; ?></div>
                </div>
                <a href="delete.php?id=<?php echo $rows[5]; ?>" class="btn btn-danger cart-item-remove">Remove</a>
            </div>
        <?php } ?>
    </div>

    <div class="total">
        <div>Grand Total</div>
        <div>₹<?php echo $sum; ?></div>
    </div>
    <div class="proceed-btn">
        <a href="payment.php?grandTotal=<?php echo $sum; ?>">PROCEED TO PAYMENT</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>
