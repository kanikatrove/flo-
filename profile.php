<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Profile - Period Tracker</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body {
      background-color: #FFDEE9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      flex-direction: column;
    }
    .center-content {
      text-align: center;
    }
    .app-name {
      color: #FF69B4;
      margin-bottom: 20px;
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .btn-custom {
      background-color: #FF69B4;
      color: white;
      margin: 5px;
    }
    .modal-content {
      background-color: #FFF0F5;
      border-radius: 15px;
    }
    .modal-header, .modal-footer {
      border: none;
    }
    .modal-title {
      color: #FF69B4;
      font-family: 'Comic Sans MS', cursive, sans-serif;
    }
    .form-control {
      border-radius: 10px;
    }
    .btn-modal {
      background-color: #FF69B4;
      color: white;
      border-radius: 10px;
      border: none;
    }
    .btn-modal:hover {
      background-color: #FF1493;
    }
    .result-container {
      position: relative;
      background: linear-gradient(135deg, #FFC0CB, #FF1493);
      border-radius: 50%;
      width: 260px;
      height: 260px;
      padding: 20px;
      margin-top: 500px; /* Adjusted margin for better positioning */
      color: white;
      font-family: Arial, sans-serif;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .period-day-container {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background-color: #FFF0F5;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      position: relative;
    }
    .period-day-text {
      color: #FF69B4;
      font-size: 15px;
    }
    .period-info {
      text-align: center;
    }
    .floral-image {
      position: absolute;
      top: -20px;
      right: -60px;
      width: 280px;
      height: 280px;
      border-radius: 60%;
      z-index: -1;
    }
    .flower {
      position: absolute;
      width: 50px;
      height: 50px;
    }
    .welcome-message {
      position: absolute;
      top: 20px;
      left: 70px;
      color: #FF69B4;
      font-size: 18px;
      font-weight: bold;
    }
    .logo-container {
      position: absolute;
      top: 20px;
      left: 10px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    .logo {
      width: 100%;
      height: auto;
    }
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 120px;
      margin-top: 20px;
    }
    .card {
      width: 250px;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    .card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    .card h2 {
      font-size: 1.5rem;
      margin-bottom: 5px;
      color: #333;
    }
    .card p {
      font-size: 1rem;
      color: #666;
      margin-bottom: 15px;
    }
    .card button {
      background-color: #fff;
      color: black;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
    }
    .card:nth-child(3) {
      background-color: #DBCDF0;
    }
    .card:nth-child(2) {
      background-color: #C9E4DE;
    }
    .card:nth-child(1) {
      background-color: #C6DEF1;
    }
    .bottom-section {
      width: 100%;
      background-color: #FDE4CF;
      padding: 40px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 20px;
    }
    .bottom-image {
      width: 300px;
      height: 200px;
      border-radius: 10%;
      object-fit: cover;
      background-color: #FDE4CF;
    }
    .bottom-text {
      flex: 1;
      margin-left: 20px;
    }
    .bottom-heading {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 10px;
    }
    .bottom-subheading {
      font-size: 1rem;
      color: #666;
      margin-bottom: 15px;
    }
    .bottom-button {
      background-color: #FF69B4;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      font-size: 1rem;
      cursor: pointer;
    }
  </style>
</head>
<body>
<?php 
session_start(); 
?>
<div class="logo-container">
    <img src="logo1.jpg" alt="Logo" class="logo">
</div>
<div class="welcome-message">
    Welcome,<br> <?php echo $_SESSION["user_name"]; ?>
</div>        
<div class="center-content">
<?php
$showModal = false; // Variable to control the display of the modal
$resultMessage = "";

if (isset($_SESSION['user_name'])) {
    $username = $_SESSION['user_name'];

    $conn = new mysqli("127.0.0.1", "root", "", "project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_REQUEST['track'])) {
        $periodDate = $_REQUEST['periodDate'];
        $sql = "REPLACE INTO periods (username, period_start_date) VALUES ('$username', '$periodDate')";
        $result = $conn->query($sql);

        if ($result) {
            // Success message after tracking
            $resultMessage = "<p>Period tracked successfully.</p>";
        } else {
            $resultMessage = "Error: " . $conn->error;
        }
    }

    // Fetch the period start date from the database
    $sql = "SELECT period_start_date FROM periods WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $periodDate = $row['period_start_date'];
        $nextPeriodDate = date('Y-m-d', strtotime($periodDate . ' + 28 days'));
        $currentDate = date('Y-m-d');
        $daysSinceStart = (strtotime($currentDate) - strtotime($periodDate)) / (60 * 60 * 24);
        $periodDay = ($daysSinceStart % 28) + 1;

        // Calculate days left for the next period if periodDay is greater than 7
        $daysLeftForNextPeriod = ($periodDay > 7) ? 28 - $periodDay + 1 : 0;

        // Determine what to display
        if ($periodDay <= 7) {
            $displayText = "DAY $periodDay";
        } else {
            $displayText = "$daysLeftForNextPeriod days left for your next period";
        }

        $resultMessage .= "<div class='result-container'>
                            <img src='floral.png' alt='Floral Background' class='floral-image'>
                            <div class='period-day-container'>
                                <span class='period-day-text'><p>$displayText</p></span>
                            </div>
                            <div class='period-info'>
                                <p>Period start date: $periodDate</p>
                                <p>Next expected period date: $nextPeriodDate</p>
                            </div>
                          </div>";

        // Display edit button outside the box
        $resultMessage .= "<div class='edit-button-container'>
                              <button class='btn btn-custom' data-toggle='modal' data-target='#editPeriodModal'>Edit Period</button>
                           </div>";

    } else {
        $showModal = true;
    }
    $conn->close();
} else {
    echo "Please log in to track your period.";
}

echo $resultMessage;
?>
<div class="modal fade" id="periodModal" tabindex="-1" role="dialog" aria-labelledby="periodModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="periodModalLabel">Track Your Period</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="profile.php" method="post">
          <div class="form-group">
            <label for="periodDate">Start Date of Your Last Period</label>
            <input type="date" class="form-control" id="periodDate" name="periodDate" required>
          </div>
          <button type="submit" name="track" class="btn btn-modal">Track</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editPeriodModal" tabindex="-1" role="dialog" aria-labelledby="editPeriodModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editPeriodModalLabel">Edit Period Start Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="profile.php" method="post">
          <div class="form-group">
            <label for="newPeriodDate">New Start Date of Your Period</label>
            <input type="date" class="form-control" id="newPeriodDate" name="periodDate" required>
          </div>
          <button type="submit" name="track" class="btn btn-modal">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div class="card-container">
    <div class="card">
      <img src="y.png" alt="Meditation" class="meditation-image">
      <h2>Stay Calm Reduce Anxiety</h2>
      <p>Meditation Exercises</p>
      <a href="meditation.php"><button>Meditate</button></a>
    </div>
    <div class="card">
      <img src="tips.png" alt="Weight Tracking">
      <h2>Get many tips to ease your day</h2>
      <p>Know different things</p>
      <a href="tips.php"><button>Tips</button></a>
    </div>
    <div class="card">
      <img src="cramps.png" alt="Pill Organizer">
      <h2>Remedies to ease cramps</h2>
      <p>Organize and track your habits with ease</p>
      <a href="remedies.php"><button>Remedies</button></a>
    </div>
</div>

<div class="bottom-section">
    <img src="buy.png" alt="Bottom Image" class="bottom-image">
    <div class="bottom-text">
      <h2 class="bottom-heading">Buy Your Essence</h2>
      <p class="bottom-subheading">Buy your essence that need during menstruation</p>
    </div>
    <a href="buy.php"><button class="bottom-button">Shop Now</button></a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<?php if ($showModal): ?>
<script type="text/javascript">
  $(document).ready(function(){
      $("#periodModal").modal('show');
  });
</script>
<?php endif; ?>

</body>
</html>
