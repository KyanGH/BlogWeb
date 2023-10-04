<?php declare(strict_types = 1);
$x = 25;
$y = 100;
function _main(){
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }  

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $GLOBALS['z'];

    echo "<br>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
}

function _loginUser($name, $password){
    if($name == "Elliot" && $password == "123"){
        echo "User $name authintication was completed successfully.";
    }
}

_main();