<?php

$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);

if(isset($_POST['username'])&&$_POST['username']!="-1")
{$username=$_POST['username'];
$password=$_POST['password'];
$md5=md5($password);
$rownum=2;
$sql="SELECT * FROM teacher WHERE username='$username' AND password='$md5'";
$result = mysql_query($sql, $conn);
$rownum = mysql_num_rows($result);

if($rownum==1)
{$sql2="SELECT id FROM teacher WHERE username='$username' AND password='$md5'";
$result = mysql_query($sql2, $conn);
$row = mysql_fetch_array($result);

$_SESSION['id']=$row['id'];
$_SESSION['username']=$username;
header('Location: student_login.php');
}
else if($rownum==0){

  
  $_POST['username']="-1";
  $_POST['password']="-1";
 // echo'<script></script>';

$rownum_to_json=json_encode((array)$rownum);

//echo "</script>";
 
 //echo "<script>document.getElementById('success').innerHTML=\"<strong>Sorry...Wrong combination of username and password...</strong>\"</script>"; 
 
  //echo'<script>window.location.reload();</script>';
  //echo "<script type='text/javascript'>\n";
//success.innerHTML="<strong>Sorry...Wrong combination of username and password...</strong>"
//echo "</script>";
}




}

?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Professor Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Feedback Management System</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
         <li><a href="index.php">Home</a></li>
          <li><a href="student_login.php">Student Login</a></li>
          <li class="selected"><a href="prof_login.php">Professor Login</a></li>
          <li><a href="loginfolder/register.php">Register</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Professor Login</h1>
        <h3>LOGIN HERE</h3>
  <form name="prof_login_form">
    <div id="uname"><div style="width:20%;float:left">User Name:</div><input type="text" name="username"></div>
    <br />
    <div id="pword"><div style="width:20%;float:left">Password:</div><input type="password" name="pwd"></div><br/>
    <div id="button"><input type="submit" value="LOGIN"></div><br/>
  </form>
  <a id="passf" href="pass_forgot_prof.php">FORGOT PASSWORD?</a>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>

</body>
</html>
