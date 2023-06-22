<?php
  
session_start();

 
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
     
    header("Location: dashboard.php");
    exit();
}
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     
    $username = "student";
    $password = "password";

    
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

  
    if ($submittedUsername === $username && $submittedPassword === $password) {
       
        $_SESSION['authenticated'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Authentication</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Authentication</h1>

        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
