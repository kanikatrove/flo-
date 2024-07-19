<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            background-color: #f9f9f9;
        }

        .sidebar {
            width: 250px;
            background-color: #ffdee9;
            color: #333;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #333;
            padding: 15px 20px;
            text-decoration: none;
            display: block;
            border-bottom: 1px solid #f1f1f1;
        }

        .sidebar a:hover {
            background-color: #ffc1d6;
        }

        .header {
            background-color: #ff6384;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: calc(100% - 250px);
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            width: calc(100% - 250px);
        }

        .content-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .content-section h2 {
            margin-top: 0;
            font-size: 20px;
            color: #ff6384;
        }

        .content-section p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .footer {
            background-color: #ff6384;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: calc(100% - 250px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: fixed;
                height: 100%;
                z-index: 1000;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .header {
                width: 100%;
            }

            .main-content {
                width: 100%;
                padding-top: 70px;
            }

            .footer {
                width: 100%;
                left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <a class="product" href="#" data-toggle="modal" data-target="#addProductModal">Add product</a>
        <a href="#users">Users</a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Flo Admin Panel</h1>
        </div>
        <div class="content-section">
            <h2>Admin Panel</h2>
            <p>This is your admin dashboard where you can manage users, settings, and view analytics.</p>
        </div>
        <div class="content-section">
            <h2>Recent Activity</h2>
            <p>Here you can view the most recent activities on your website.</p>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 Flo Period Tracker. All rights reserved.
    </div>

   <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="admin.php">
                        <div class="form-group">
                            <label for="productId">Product ID</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter product id" name="pid">
                        </div>

                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" class="form-control" id="productImage" placeholder="upload pic" name="img">
                        </div>

                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="pname">
                        </div>
                        <div class="form-group">
                            <label for="productDescription">Product Description</label>
                            <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description" name="pdesc"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" name="pprice">
                        </div>
                        <div class="form-group">
                            <label for="productCategory">Product Category</label>
                            <input type="text" class="form-control" id="productCategory" placeholder="Enter product category" name="pcat">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add Product" name="x">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_REQUEST["x"])) {
        $p1 = $_REQUEST["pid"];
        $file_name = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_tmp, "products/" . $file_name);
        $p3 = $_REQUEST["pname"];
        $p4 = $_REQUEST["pdesc"];
        $p5 = $_REQUEST["pprice"];
        $p6 = $_REQUEST["pcat"];

       $conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("project",$conn);
mysql_query("insert into product values('$p1','$file_name','$p3','$p4','$p5','$p6')");
?>
<script>
alert("Product Added!!");
</script>
<?php
}
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>