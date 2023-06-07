<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $length = $_POST['length'];
    $password = generatePassword($length);
    header("Location: index.php?password=$password");
}

function generatePassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    $charCount = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, $charCount)];
        $password .= $randomChar;
    }

    return $password;
}
?>
