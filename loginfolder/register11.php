<?php

if(isset($_POST['chek']))
{
	session_start();
	if(isset($_SESSION['cr']))
		echo "string";
	$code = $_SESSION['cr'];

	$user = $_POST['cap'];

	if($code === $user)
	{
		echo "valid";
	}

	else
	{
		echo "invalid";
	}
}

?>


<html>
<body>

<form action='register11.php' method='post'>

Name:<input type='text' name='name'>
<br>
Captcha:<input type='text' name='cap'><img src='captcha.php'>

<input type='submit' name='chek' value='Verify'>

</form>

</body>
</html>