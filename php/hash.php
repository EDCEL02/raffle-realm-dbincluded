<?php
function hashPassword($password) {
    // Use a strong hashing algorithm like bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    return $hashedPassword;
}
?>