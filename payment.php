<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <title>Payment</title>
  <style>
    body {
      background-color: #FFDEE9;
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #FFF0F5;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      width: 80%;
      max-width: 600px;
    }

    h1 {
      color: #FF69B4;
      text-align: center;
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      color: #FF69B4;
      font-weight: bold;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #FF69B4;
      border-radius: 5px;
      font-size: 16px;
    }

    .btn {
      background-color: #FF69B4;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #FF1493;
    }

    .payment-result {
      margin-top: 20px;
      padding: 10px;
      background-color: #FF0000;
      border: 1px solid #E80000;
      border-radius: 5px;
      color: #000000;
      text-align: center;
    }

    .payment-successful {
      margin-top: 20px;
      padding: 10px;
      background-color: #00FF7F;
      border: 1px solid #00E600;
      border-radius: 5px;
      color: #000000;
      text-align: center;
    }

    /* Modal styles */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1000; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(0, 0, 0, 0.4); /* Black with opacity */
    }

    .modal-content {
      background-color: #DFF0D8; /* Light green background */
      margin: 10% auto; /* Center modal vertically and horizontally */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      width: 80%; /* Responsive width */
      max-width: 600px; /* Maximum width */
    }

    .close {
      color: #888; /* Light gray close icon */
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #555; /* Darker gray on hover/focus */
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding-bottom: 10px;
      border-bottom: 1px solid #EEE; /* Lighter border */
    }

    .modal-title {
      color: #3C763D; /* Green title color */
      font-family: 'Comic Sans MS', cursive, sans-serif; /* Fun font */
      text-align: center;
      margin-top: 0;
    }

    .modal-body {
      padding: 20px 0;
      text-align: center;
      font-size: 16px;
    }

    .modal-footer {
      padding-top: 10px;
      text-align: center; /* Center align footer content */
    }

    .btn-modal {
      background-color: #4CAF50; /* Green button background */
      color: white; /* White button text */
      border: none; /* No border */
      padding: 12px 24px; /* Padding for button */
      border-radius: 25px; /* Rounded corners */
      cursor: pointer; /* Pointer cursor */
      font-size: 16px; /* Font size */
      font-family: 'Arial', sans-serif; /* Font family */
      text-decoration: none; /* No underline */
      transition: background-color 0.3s ease; /* Smooth transition */
      display: inline-block; /* Inline block */
    }

    .btn-modal:hover {
      background-color: #45A049; /* Darker green on hover */
    }

    .success-icon {
      font-size: 50px;
      color: #4CAF50; /* Green color */
      margin-bottom: 20px;
    }
  </style>
  <!-- FontAwesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <h1>Payment Details</h1>
    <?php
    $grandTotal = isset($_GET['grandTotal']) ? $_GET['grandTotal'] : '';
    
    if (isset($_POST['submitPayment'])) {
        $accountHolderName = $_POST['accountHolderName'];
        $accountNumber = $_POST['accountNumber'];
        $bankName = $_POST['bankName'];
        $productPrice = $_POST['grandTotal'];
        
        // Connect to MySQL database (old MySQL extension)
        $conn = mysql_connect("127.0.0.1", "root", "");
        if (!$conn) {
            die("Connection failed: " . mysql_error());
        }
        
        mysql_select_db("project", $conn);
        
        // Query to fetch account details from the bank table
        $query = "SELECT * FROM bank WHERE cname = '$accountHolderName' AND accno = '$accountNumber' AND bname = '$bankName'";
        $result = mysql_query($query);
        
        if (mysql_num_rows($result) > 0) {
            // Account details matched, check balance
            $row = mysql_fetch_assoc($result);
            $currentBalance = $row['balance'];
            
            if ($currentBalance >= $productPrice) {
                // Sufficient balance, proceed with transaction
                $remainingBalance = $currentBalance - $productPrice;
                
                // Update balance in the bank table
                $updateQuery = "UPDATE bank SET balance = $remainingBalance WHERE accno = '$accountNumber'";
                $updateResult = mysql_query($updateQuery);
                
                if ($updateResult) {
                    // Transaction successful
                    echo "<div class='payment-successful'>Transaction successful. Remaining balance: $remainingBalance</div>";
                    echo "<script>document.addEventListener('DOMContentLoaded', function() {
                            document.getElementById('successModal').style.display = 'block';
                          });
                          </script>";
                } else {
                    // Error updating balance
                    echo "<div class='payment-result'>Error updating balance.</div>";
                }
            } else {
                // Insufficient balance
                echo "<div class='payment-result'>Insufficient balance.</div>";
            }
        } else {
            // Account details not found
            echo "<div class='payment-result'>Account details not found.</div>";
        }
        
        // Close MySQL connection
        mysql_close($conn);
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label for="accountHolderName">Account Holder Name</label>
        <input type="text" id="accountHolderName" name="accountHolderName" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="accountNumber">Account Number</label>
        <input type="text" id="accountNumber" name="accountNumber" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="bankName">Bank Name</label>
        <input type="text" id="bankName" name="bankName" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="productPrice">Grand Total</label>
        <input type="text" id="grandTotal" name="grandTotal" class="form-control" value="<?php echo $grandTotal; ?>" readonly required>
      </div>
      <button type="submit" class="btn btn-primary" name="submitPayment">Submit Payment</button>
      <button type="reset" class="btn btn-danger">Reset</button>
    </form>
  </div>

  <!-- Success Modal -->
  <div id="successModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" onclick="document.getElementById('successModal').style.display = 'none';">&times;</span>
        <h2 class="modal-title">Order Done Successfully!</h2>
      </div>
      <div class="modal-body">
        <div class="success-icon">
          <i class="fa-regular fa-circle-check fa-beat"></i>

        </div>
        <p>Your payment transaction was successful.</p>
        <p>Thank you for your purchase!</p>
      </div>
      <div class="modal-footer">
        <a href="buy.php" class="btn-modal">Back to Shopping</a>
      </div>
    </div>
  </div>

  <!-- JavaScript to close modal on outside click -->
  <script>
    // Close the modal when clicked outside of it
    window.onclick = function(event) {
      var modal = document.getElementById('successModal');
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>
