<?php
session_start();

if (isset($_SESSION['user_name']) && isset($_POST['update'])) {
    $username = $_SESSION['user_name'];
    $newPeriodDate = $_POST['newPeriodDate'];

    // Validate and sanitize user inputs if necessary
    // Example: $newPeriodDate = mysqli_real_escape_string($conn, $_POST['newPeriodDate']);

    $conn = new mysqli("127.0.0.1", "root", "", "project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE periods SET period_start_date = '$newPeriodDate' WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result) {
        // Redirect back to the profile page after successful update
        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
} 
?>
