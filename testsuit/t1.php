<?php

// See the password_hash() example to see where this came from.
$hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
$hash = "supahot";

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>
