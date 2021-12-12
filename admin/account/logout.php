<?php


// Init session
session_start();

// unset all session Values
$_SESSION = array();

// Destroy session
session_destroy();
// redirdect to login
header('location: ../../public/index.php');