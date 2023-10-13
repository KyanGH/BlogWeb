<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT pwd FROM users WHERE user_name = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);

        $result = $stmt->fetch();

        if ($result) {
            $storedPassword = $result["pwd"];

            // You should use password_verify to compare hashed passwords
            if (password_verify($password, $storedPassword)) {
                // Password is correct
                session_start();
                $_SESSION['user_name'] = $username;
                header("Location: ./index.html");
                exit();
            } else {
                // Password is incorrect
                header("Location: ../login.php?error=invalidpassword");
                exit();
            }
        } else {
            // User does not exist
            header("Location: ../login.php?error=usernotfound");
            exit();
        }
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
}
