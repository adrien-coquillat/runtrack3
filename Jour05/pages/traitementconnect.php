<?php
require_once('../src/config/userclass.php');
session_start();
include('../src/component/header.php');

$newuser = new user();

// $msg = '';

if (isset($_POST['btn_email'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $msg = $newuser->connect($email, $password);

        echo "success";
    } else {
        echo "failed";
    }

    // Header('Location: ../index.php');

}
