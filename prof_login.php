
<?php 
session_start();




if(isset($_SESSION['id']))

{include 'profloggedin.php';

//session_destroy();
}
else
include 'prof_loginmain.php';
?>

