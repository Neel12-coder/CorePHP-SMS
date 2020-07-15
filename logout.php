<?php
session_start(); //to  use any functionality of session you need to first call this function
session_destroy();
header('location:login.php');
?>