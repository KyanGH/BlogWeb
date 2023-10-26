<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data

    try {
        // Include the database connection script
        require_once "dbh.inc.php";

        // Create the SQL query with placeholders
        $query = "SELECT * FROM users";

        // Prepare the SQL statement
        $stmt = $pdo->prepare($query);

        // Bind parameters
        

        // Execute query
        $stmt->execute();

        // Close the database connection and statement
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    // Redirect to a different page if not a POST request
    header("Location: form.php");
    exit();
}
