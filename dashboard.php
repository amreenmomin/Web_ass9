<?php
 
session_start();
 
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
     
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        .logout-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Student Dashboard!</h1>

        <p>You are logged in as a student.</p>

        <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html>
