<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $username = $_POST["user_name"];
    $phonenum = $_POST["phone_number"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users(user_name, first_name, last_name, pwd, email, phone)
         VALUES (?, ?, ?, ?, ?, ?);";

         $stmt = $pdo->prepare($query);
         $stmt->execute([$username, $firstname, $lastname, $password, $email, $phonenum]);

         $pdo = null;
         $stmt = null;

         header("Location: ../regForm.php");

         die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else{
    header("Location: ../regForm.php");
}
