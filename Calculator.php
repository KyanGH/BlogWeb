<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Styles/calcStyle.css"/>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <input type="number" name="num01" placeholder="First number">
    <select name="operator">
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="multi">*</option>
        <option value="div">/</option>
    </select>
    <input type="number" name="num02" placeholder="Second number">
    <button>Calculate</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST["operator"]);
    $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);}

    //error handler
    $error = false;
    if(empty($num01) || empty($num02) || empty($operator)){
        echo "<p class='calc-error'>Fill in all fields!</p>";
        $error = true;
    }
    elseif(!is_numeric($num01) || !is_numeric($num02)){
        echo "<p class='calc-error'>Only write numbers!</p>";
        $error = true;
    }

    //calculate the result
    if(!$error){
        $value = 0;
        switch($operator){
            case "add":
                $value = $num01 + $num02;
                break;

            case "sub":
                $value = $num01 - $num02;
                break;
            
            case "multi":
                $value = $num01 * $num2;
                break;

            case "div":
                $value = $num01 / $num02;
                break;
            default:
                echo "<p class='calc-error'>Something went wrong!</p>";
        }

        echo "<p class='calc-result'>Result = " . $value . "</p>";
    }
?>
</body>
</html>