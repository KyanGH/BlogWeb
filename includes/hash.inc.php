<?php
$pwdSignup = "dusk";
$options = [
    'cost' =>12 
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_DEFAULT, $options);

$pwdLogin = "dusk";
if(password_verify($pwdLogin, $hashedPwd)){
    echo "They are the same";
}
else {
    echo "They are not the same";
}