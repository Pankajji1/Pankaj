
<?php
$password = "mypassword";
$hash = password_hash($password, PASSWORD_BCRYPT);
file_put_contents("key", $hash);
