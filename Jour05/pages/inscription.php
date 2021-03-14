<?php
session_start();
require_once('../src/component/header.php');
$_SESSION['isCreate'] = true;
include("../forms/loginform.php");
