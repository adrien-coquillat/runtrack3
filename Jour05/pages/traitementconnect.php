<?php
session_start();
require_once('../src/config/userclass.php');


$newuser = new user();

// $msg = '';


if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $msg = $newuser->connect($email, $password);
    if ($msg == 'okkk')
        echo "success";
    else echo "failed ";
} else {
    echo "failed";
}


    // Header('Location: ../index.php');
