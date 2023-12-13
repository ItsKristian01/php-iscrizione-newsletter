
<?php
session_start();

$email = '';
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = false;
    } else {
        $email = true;
    }
}

if(empty($_GET['email'])) {
    echo 'Put an email address on the field';
}

