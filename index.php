<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Flo - Period Tracker</title>

    <style>
      body {
        background-color: #FFDEE9; /* Light pink background */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .center-content {
        text-align: center;
      }
      .app-logo {
        max-width: 150px;
        margin-bottom: 20px;
      }
      .app-name {
        color: #FF69B4; /* Hot pink color */
        margin-bottom: 20px;
      }
      .quote {
        font-style: italic;
        color: #555; /* A slightly darker color for the quote */
      }
      .btn-custom {
        background-color: #FF69B4; /* Hot pink color */
        color: white;
        margin: 5px;
      }
    </style>
  </head>
  <body>
    <div class="center-content">
      <img src="logo.jpg" alt="Flo Logo" class="app-logo">
      <h1 class="app-name">Flo - Period Tracker</h1>
      <p class="quote">"Empowering women to understand their bodies."</p>
      <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#loginModal">Login</button>
      <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#signupModal">Sign Up</button>
    </div>

                                            <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action=index.php>
              <div class="form-group">
                <label for="signupUsername">Username</label>
                <input type="text" class="form-control" id="signupUsername" name="uname" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Password">
              </div>
              <input type="submit" name="y" class="btn btn-custom btn-block">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

                                              <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="index.php">
              <div class="form-group">
                <label for="signupUsername">Username</label>
                <input type="text" class="form-control" id="signupUsername" name="uname" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="signupEmail">Email address</label>
                <input type="email" class="form-control" id="signupEmail" name="email"  placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="signupMobile">Mobile Number</label>
                <input type="tel" class="form-control" id="signupMobile" name="mobno" placeholder="Enter mobile number">
              </div>
              <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="password" placeholder="Password">
              </div>
              
              <input type="submit" name= "x" class="btn btn-custom btn-block">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<?php
if(isset($_REQUEST["x"]))
{
$p1=$_REQUEST["uname"];
$p2=$_REQUEST["email"];
$p3=$_REQUEST["mobno"];
$p4=$_REQUEST["password"];

$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("project",$conn);
mysql_query("insert into signup values('$p1','$p2','$p3','$p4')");
?>
<script>
alert("You are Registered");
</script>
<?php
}
?>
 
 <?php
if(isset($_REQUEST["y"]))
{
$p1 = $_REQUEST["uname"];
$p4 = $_REQUEST["password"];
$conn = mysql_connect("127.0.0.1", "root", "");
mysql_select_db("project", $conn);
$res=mysql_query("select * from signup where username='$p1' and password='$p4'");
if($rows=mysql_fetch_array($res))
{
?>
<script>
alert("Going To Profile Page");
</script>
<?php
session_start();
$_SESSION["user_name"]=$rows[0];
header("location:profile.php");
}
else
{
?>
<script>
 alert("Invalid Login Deatils!!!!");
</script>
<?php
}
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
