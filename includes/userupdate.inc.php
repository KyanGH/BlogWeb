<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $username = $_POST["user_name"];
    $phonenum = $_POST["phone_number"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        // Include the database connection script
        require_once "dbh.inc.php";

        // Create the SQL query with placeholders
        $query = "UPDATE users SET user_name = :username, first_name = :firstname, last_name = :lastname,
        pwd = :pwd, email = :email, phone = :phonenumber WHERE user_name = :submitted_username;";

        // Prepare the SQL statement
        $stmt = $pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":lastname", $lastname);
        $stmt->bindParam(":pwd", $password);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phonenumber", $phonenum);
        $stmt->bindParam(":submitted_username", $username);

        // Execute the update
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
    header("Location: form.php");
    exit();
}
