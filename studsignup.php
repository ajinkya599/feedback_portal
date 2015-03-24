

<?php
$confirm=0;
$conn = mysql_connect("localhost","root","") or die(mysql_error("sfsdf"));
mysql_select_db("dkml",$conn);
	


if(isset($_POST["username"]))

{$username=$_POST["username"];
$user="SELECT * FROM student WHERE username='$username'";
$user2=mysql_query( $user, $conn );
$rownums = mysql_num_rows($user2);
echo $rownums;
if($rownums==0)
{
$rollno=$_POST["rollnumber"];
$password=md5($_POST["password1"]);
$question=$_POST["question"];
$answer=$_POST["answer"];
$sql="INSERT INTO student (username,rollno,password,question,answer) VALUES ('$username',
	'$rollno','$password','$question','$answer')";
if(!mysql_query( $sql, $conn ))
	echo "could not enter";
//header('Location: student_login.php');
}
else $confirm=1;
}

$confirm_to_json=json_encode((array)$confirm);
?>






<!<!DOCTYPE html PUBLIC "-//W3C//Ddiv XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Ddiv/xhtml1-transitional.ddiv">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register!!</title>
<style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
<script>
function password()
{
	if (document.getElementById("3").value.length<8) {
	document.getElementById("passremark").innerHTML="Password should be of atleast 8 characters.";
	

}else {document.getElementById("passremark").innerHTML="";


}
if(document.getElementById('1').value.trim()!=""&&document.getElementById('2').value.trim()!=""&&document.getElementById('3').value.trim()!=""&&document.getElementById('4').value.trim()!=""&&document.getElementById('5').value.trim()!=""&&document.getElementById("3").value==document.getElementById("4").value&&(document.getElementById("3").value.length>=8)&&document.getElementById("passremark").innerHTML==""
	)
document.getElementById("register").disabled=false;
else document.getElementById("register").disabled=true;


}
function confirmpassword()
{if(document.getElementById("3").value!=document.getElementById("4").value)
document.getElementById("confirmpass").innerHTML="Passwords do not match";
else document.getElementById("confirmpass").innerHTML="";
password();





}


	


</script>
</head>
 
<body>
<form name="register" action="studsignup.php" method="post" class="elegant-aero">
	<!--<table width="510" border="0">-->
		<div>
			<div colspan="2"><h1>Registration Form</h1></div>
		</div>
		<label>
			<span style="float:left">Username: * </span>
			<input id="1" type="text" name="username" maxlength="20"  placeholder="Type your username" onkeyup 
			="password()"/>

		</label>
		<label>
			<span>Roll Number: * </span>
			<input id="2" type="text" name="rollnumber" maxlength="20" placeholder="Type your roll number"onkeyup ="password()"/>
		</label>
		<label>
			<span style="float:left">Password: * </span>
			<input style="float:left" id="3" class="pass" type="password" name="password1" placeholder="Type your password" onkeyup 
			="password()" /> <span id="passremark">Password should be of atleast 8 characters.</span>
		</label>
		<label>
			<span>Confirm Password: * </span>
			<input id="4" type="password" name="password2" class="pass2" placeholder="Retype your password" onkeyup 
			="confirmpassword()"  /><span id="confirmpass"></span>
		</label>
		<label>
			<span>Choose a question: * </span>
			<span>
				<select name="question">
					  <option value="q1">What is your name?</option>
					  <option value="q2">Who is your favorite professor?</option>
					  <option value="q3">In which city were you born?</option>
					  <option value="q4">What is your favorite dish?</option>
				</select>
			</span>
		</label>
		<label>
			<span>Answer: * </span>
			<input id="5" type="text" name="answer" placeholder="Answer the above question" onkeyup 
			="password()"/>
		</label>
		<label>
			<span>&nbsp;</span>
			<input type="submit" value="Register" disabled id="register" /><div id="remark"></div>
		</label>
	<!--</table>-->
</form>
<script type="text/javascript">
var confirm=<?php echo $confirm_to_json;?>;
	if(confirm==1)
		//document.getElementById('confirm').innerHTML="Sorry..The username has been taken..";
	alert("jainam");
</script>
</body>
</html>