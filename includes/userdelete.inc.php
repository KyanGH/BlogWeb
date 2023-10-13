<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user_name"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE user_name = :username AND pwd = :password;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

        // Execute the delete query
        $stmt->execute();

        // Close the database connection and statement
        $pdo = null;
        $stmt = null;

        // Redirect to a success page or another location
        header("Location: ../admin-panel.php");
        exit();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    // Redirect to a different page if not a POST request
    header("Location: ../index.html");
    exit();
}
