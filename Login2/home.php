<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif;
              text-align: center;
              background-color: #f2f2f2;  }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to The Scraper.</h1><br>
    <center>
  <button type="submit" id="searchbutton" onclick="window.location.href='download.php'" download>Download your file</button>
  <div id="responseContainer"></div>
  <style>
  

button[type="submit"] {
  width: 25%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  outline: none;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}
</style>
</div>

</center><br><br>
    <p>
        <a href="reset.php" class="btn btn-primary">Reset Your Password</a>
        <a href="logout.php" class="btn btn-primary">Sign Out of Your Account</a>
    </p>
</body>
</html>