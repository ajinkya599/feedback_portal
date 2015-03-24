
<?php 
session_start();
//include 'headstudent_signup.html';



if(isset($_SESSION['id']))

{include 'adminloggedin.php';

//session_destroy();
}
else
include 'bodyadmin_signup.php';
?>

