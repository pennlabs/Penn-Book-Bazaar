<?php
session_start();

unset($_SESSION['admin']);
session_destroy();

header("Location: login.php");//redirect to the login
?>
