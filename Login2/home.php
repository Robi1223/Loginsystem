<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
        body {
            font: 14px sans-serif;
            text-align: center;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to The Scraper.</h1>
    <h2>Search</h2>
    <form action="" method="post">
        <style>
            form {
                max-width: 400px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }
            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 3px;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
        <label for="topic">Topic:</label>
        <input type="text" name="topic" id="topic" placeholder="Enter your topic"><br><br>

        <label for="start_date">Start Date:</label>
        <input type="text" name="start_date" id="start_date" placeholder="YYYY-MM-DD"><br><br>

        <label for="end_date">End Date:</label>
        <input type="text" name="end_date" id="end_date" placeholder="YYYY-MM-DD"><br><br>

        <input type="submit" name="submit" value="Search">
    </form><br>
    <?php
    $csvFilename = "tweets.csv";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    if (isset($_POST["topic"])) {
        $topic = $_POST["topic"];
        $start_date = $_POST["start_date"];
        $end_date = $_POST["end_date"];

        
        $csvFilename = $topic . "_tweets.csv";

        
        $output = shell_exec("C:/users/HP/Desktop/twitter/scraper.py " . escapeshellarg($topic) . " " . escapeshellarg($start_date) . " " . escapeshellarg($end_date) . " 2>&1");

        // Display success or failure message
        if ($output !== null) {
            echo "<h3>Search completed successfully!</h3>";
        } else {
            echo "<p>Search failed. Please try again.</p>";
        }

        
        echo "<pre>$output</pre>";
    } else {
        echo "<p>Note: Please make sure you enter a valid topic, a start date, and an end date before proceeding.</p>";
    }
}
?>

    
    <center>
        <a href="<?php echo $csvFilename; ?>" download="<?php echo $csvFilename; ?>">
            <input type="submit" class="btn btn-primary" value="Download your File" >
        </a>
    </center>
    <br><br>

    <p>
        <a href="reset.php" class="btn btn-primary">Reset Your Password</a>
        <a href="logout.php" class="btn btn-primary">Sign Out of Your Account</a>
    </p>
</body>
</html>
