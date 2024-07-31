<?php
include('db.php');
// Destroy the session
session_destroy();

// Redirect the user to the homepage
header("location: login.php");

?>