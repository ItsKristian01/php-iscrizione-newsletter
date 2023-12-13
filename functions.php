
<?php
session_start();

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = false;
    } else {
        $email = true;
    }
}
