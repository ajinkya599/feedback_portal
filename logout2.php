<?php
session_start();
unset($_SESSION['id']);
header('Location: prof_login.php');
echo "string";
?>