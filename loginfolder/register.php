<?php



$confirm=0;
$conn = mysql_connect("localhost","root","") or die(mysql_error("sfsdf"));
mysql_select_db("dkml",$conn);



if(isset($_POST["username"]))

{session_start();
 
  
  $code = $_SESSION['cap_code'];
    if(isset($_POST['captcha']))
  $user = $_POST['captcha'];
else $user=-1;
 session_destroy();
  if($code === $user)
  {
  
 
$username=$_POST["username"];
$user="SELECT * FROM student WHERE username='$username'";
$user2=mysql_query( $user, $conn );
$rownums = mysql_num_rows($user2);
if($rownums==0)
{$rollno=$_POST["rollnumber"];
$password=md5($_POST["password1"]);
$question=$_POST["question"];
$answer=$_POST["answer"];
$sql="INSERT INTO student (username,rollno,password,question,answer) VALUES ('$username',
  '$rollno','$password','$question','$answer')";
if(!mysql_query( $sql, $conn ))
  echo "could not enter";
header('Location: ../student_login.php');
}else $confirm=1;
}
}
$confirm_to_json=json_encode((array)$confirm);
?>
<!DOCTYPE HTML>
<html>

<head>
<style>
#register {
border:2px groove #7c93ba;
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding: 5px 25px;
/*give the background a gradient - see cssdemos.tupence.co.uk/gradients.htm for more info*/
/*style to the text inside the button*/
font-family:Andika, Arial, sans-serif; /*Andkia is available at http://www.google.com/webfonts/specimen/Andika*/
color:#fff;
font-size:1.1em;
letter-spacing:.1em;
font-variant:small-caps;
/*give the corners a small curve*/
-webkit-border-radius: 0 15px 15px 0;
-moz-border-radius: 0 15px 15px 0;
border-radius: 0 15px 15px 0;
/*add a drop shadow to the button*/
-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;
-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;
box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;
}
/***NOW STYLE THE BUTTON'S HOVER AND FOCUS STATES***/
#register:hover, #register:focus {
/*reduce the spread of the shadow to give a pushed effect*/
-webkit-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
-moz-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
}

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
{
document.getElementById("register").disabled=false;
document.getElementById("register").style.backgroundColor="RoyalBlue";
}
else {document.getElementById("register").disabled=true;
document.getElementById("register").style.backgroundColor="lightblue";
}

}
function confirmpassword()
{if(document.getElementById("3").value!=document.getElementById("4").value)
document.getElementById("confirmpass").innerHTML="Passwords do not match";
else document.getElementById("confirmpass").innerHTML="";
password();





}


  



</script>
  <title>Student Register</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="../mystyle.css">
  <style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
</head>

<body style="overflow-y:scroll">
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
          <li><a href="../index.php">Home</a></li>
          <li><a href="../student_login.php">Student Login</a></li>
          <li><a href="../prof_login.php">Professor Login</a></li>
          <li  class="selected"><a href="register.php">Student Register</a></li>
          <li><a href="../contact.php">Contact Us</a></li>
                  </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      <div id="confirm"></div>
      
      </div>
      <div id="content">
           <form name="register" action="register.php" method="post" class="elegant-aero">
  <!--<table width="510" border="0">-->
    <div>
      <div colspan="2"><h1>Registration Form</h1></div>
    </div>
    <label>
      <span style="float:left">Username: * </span>
      <input id="1" type="text" name="username" maxlength="20"  placeholder="Type your username" onkeyup 
      ="password()"/>

    </label>
    <br />
    <label>
      <span>Roll Number: * </span>
      <input id="2" type="text" name="rollnumber" maxlength="20" placeholder="Type your roll number"onkeyup ="password()"/>
       <span id="passremark">Password should be of atleast 8 characters.</span>
    </label>
    <br />
    <label>
      <span style="float:left">Password: * </span>
      <input style="float:left" id="3" class="pass" type="password" name="password1" placeholder="Type your password" onkeyup 
      ="password()" />
    </label>
    <br />
    <label>
      <span>Confirm Password: * </span>
      <input id="4" type="password" name="password2" class="pass2" placeholder="Retype your password" onkeyup 
      ="confirmpassword()"  /><strong><div id="confirmpass" style="left:31.5%;position:absolute"> </div></strong>
    </label>
    
    <label>
      <span>Choose a question: * </span>
      <span>
        <select name="question" id="selection">
            <option value="q1">What is your name?</option>
            <option value="q2">Who is your favorite professor?</option>
            <option value="q3">In which city were you born?</option>
            <option value="q4">What is your favorite dish?</option>
        </select>
      </span>
    </label>
    <br /><br /><br /><br />
    <label id="answer">
      <span>Answer:*</span>
      <input style="position:relative;left:2%;width:65%" id="5" type="text" name="answer" placeholder="Answer the above question" onkeyup 
      ="password()"/>
    </label>
    <br />
    
    <label>
    <div style="background-image:url('img.jpg');position:absolute;left:21.7%;top:107%;height:7.9%;width:9.4%"><img src='captcha.php' style="opacity:0.5"></div>
    <div style="position:relative;top:30%;left:23%;width:55%"><input name="captcha" type="text" placeholder="Enter what you see in the image"></div>

    </label>
    <label>
      <span>&nbsp;</span>
      <input type="submit" value="Register" disabled="true" id="register" style="background-color:lightblue"/><div id="remark"></div>
    </label>


  <!--</table>-->
</form>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
      <span id="admin" style="left:30%;position:relative"><a href="../admin_login.php">Admin Login</a></span>
    </div>
  </div>
  <script type="text/javascript">
var confirm=<?php echo $confirm_to_json;?>;
  if(confirm==1)
    document.getElementById('confirm').innerHTML="Sorry..The username has been taken..";
 
</script>
</body>
</html>
