<?php session_start();
$_SESSION["username"] = "Dusk";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="Styles/loginStyle.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="includes/loginHandler.php" method="submit">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>

    <?php
    echo $_SESSION["username"];
    ?>
</body>
</html>
