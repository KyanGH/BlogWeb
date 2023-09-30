<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = htmlspecialchars($_POST["firstName"]);
    $lastname =  htmlspecialchars($_POST["lastName"]);
    $animal =  htmlspecialchars($_POST["favoriteAnimal"]);

    if(empty($firstname) || empty($lastname) || empty($animal)){
        header("Location: ../form.php");
    }

    echo "These are the data that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $animal;

    header("Location: ../form.php");
}
else{
    header("Location: ../index.html");
}