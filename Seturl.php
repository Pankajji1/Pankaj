
<?php
$password = "mypassword";
$hash = password_hash($password, PASSWORD_BCRYPT);
file_put_contents("key", $hash);
$expiryTime = 21600; // 6 घंटे (21600 सेकंड)
$file = "key";
