
<?php 
session_start();
//include 'headstudent_signup.html';



if(isset($_SESSION['id']))

{include 'loggedin.php';

//session_destroy();
}
else
include 'bodystudent_signup.php';
?>

