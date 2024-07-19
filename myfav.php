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
            background-color: #f9f9f9;
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
        }
        .cart-item img {
            height: 100px;
            object-fit: cover;
        }
        .cart-item-details {
            flex-grow: 1;
            margin-left: 20px;
        }
        .cart-item-title {
            font-size: 18px;
            color: #333;
        }
        .cart-item-price {
            font-size: 18px;
            color: #ff6384;
        }
        .cart-item-quantity {
            width: 60px;
        }
        .cart-item-remove {
            color: #ff6384;
            cursor: pointer;
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="path/to/your/logo.png" alt="Logo" class="logo" width="30" height="30">
            Flo Period Tracker
        </a>
    </div>
</nav>

<?php
  session_start();
  $p5=$_SESSION["user_name"];  
error_reporting(0);
$conn=mysql_connect("127.0.0.1", "root", "");
mysql_select_db("project",$conn);
$str=$_REQUEST["id"];
$res=mysql_query("select * from product where pid='$str'");
if(($rows=mysql_fetch_array($res)))
    {  
  $p1=$rows[1];
  $p2=$rows[2];
  $p3=$rows[3];
  $p4=$rows[4];
  $p6=$rows[0];
    
  mysql_query("insert into myfav values('$p1','$p2','$p3','$p4','$p5','$p6')");
  ?>
  <script>
  alert("course added to my fav")</script>
  
    <?php
    }
    $sum=0;
    $res=mysql_query("select * from myfav where email='$p5'"); 
while(($rows=mysql_fetch_array($res)))
{  
?>

            <div class="cart-item">
                <img src="<?php echo $rows['image_url']; ?>" alt="Product Image">
                <div class="cart-item-details">
                    <div class="cart-item-title"><?php echo $rows['product_name']; ?></div>
                    <div class="cart-item-price">₹<?php echo $rows['price']; ?></div>
                </div>
                <input type="number" class="cart-item-quantity" value="<?php echo $rows['quantity']; ?>" min="1">
                <div class="cart-item-remove" onclick="removeItem(<?php echo $rows['id']; ?>)">×</div>
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
<script>
    function removeItem(id) {
        // Implement AJAX call to remove item from cart
    }
</script>
</body>
</html>
