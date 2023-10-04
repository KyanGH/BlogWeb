<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["first_name"]);
    $lastname = htmlspecialchars($_POST["last_name"]);
    $phonenum = htmlspecialchars($_POST["phone_number"]);
    $ID = htmlspecialchars($_POST["id"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $carPlateNum = htmlspecialchars($_POST["car_plate_number"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirm_password = htmlspecialchars($_POST["confirm_password"]);

    if (empty($firstname) || empty($lastname) || empty($phonenum) || empty($ID) || empty($age)
        || empty($gender) || empty($carPlateNum) || empty($email) || empty($password) || empty($confirm_password))
    {
        echo "Please fill in all fields.";
    }
    elseif ($password != $confirm_password) {
        echo "Password and Confirm Password do not match.";
    } else {
        echo $firstname . " " . $lastname . " registration information are:";
        echo "<br>";
        echo "Phone number: " . $phonenum;
        echo "<br>";
        echo "ID: " . $ID;
        echo "<br>";
        echo "Age: " . $age;
        echo "<br>";
        echo "Gender: " . $gender;
        echo "<br>";
        echo "Vehicle plate number: " . $carPlateNum;
        echo "<br>";
        echo "Email: " . $email;
        echo "<br>";
        echo "Password: " . $password;
    }

    foreach ($_POST as $key => $value) {
        echo $key . ": " . htmlspecialchars($value) . "<br>";
    }
}
?>