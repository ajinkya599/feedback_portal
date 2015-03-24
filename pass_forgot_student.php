<?php

$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$rownum=0;$flag=2;
if(isset($_POST['submit']))
{if(!empty($_POST['username']) and !empty($_POST['password'])and !empty($_POST['question'])and !empty($_POST['answer']))
{$username=$_POST['username'];
$question=$_POST['question'];
$answer=$_POST['answer'];
$password=$_POST['password'];

$md5=md5($password);
$sql="SELECT * FROM student WHERE username='$username' AND question='$question'AND answer='$answer' ";
$result = mysql_query($sql, $conn);
$rownum = mysql_num_rows($result);


if($rownum==1 or $rownum==2)
{
  $sql2="UPDATE student SET password ='$md5' WHERE username='$username'";;
$result = mysql_query($sql2, $conn);
header('Location: student_login.php');
}
else{if( $rownum==0)
  {$rownum_to_json=json_encode((array)$rownum);



  }

}




/*else if($rownum==0){

  echo $rownum;
  
 // echo'<script></script>';s

$rownum_to_json=json_encode((array)$rownum);
}
}else if(empty($_POST['username']) or empty($_POST['password']))
{
  $flag=1;

$flag_to_json=json_encode((array)$flag);*/
}
//echo "</script>";
 
 //echo "<script>document.getElementById('success').innerHTML=\"<strong>Sorry...Wrong combination of username and password...</strong>\"</script>"; 
 
  //echo'<script>window.location.reload();</script>';
  //echo "<script type='text/javascript'>\n";
//success.innerHTML="<strong>Sorry...Wrong combination of username and password...</strong>"
//echo "</script>";

else{
  $flag=1;
  $flag_to_json=json_encode((array)$flag);

}



}

?>
<!DOCTYPE html>
<html>
<head>
 <title>Forgot Password</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
 <style>
#qwerty {
border:2px groove #7c93ba;
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding: 5px 25px;
/*give the background a gradient - see cssdemos.tupence.co.uk/gradients.htm for more info*/
background-color:#0066cc; /*required for browsers that don't support gradients*/
background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));
background: -webkit-linear-gradient(top, #3399cc, #0066cc);
background: -moz-linear-gradient(top, #3399cc, #0066cc);
background: -o-linear-gradient(top, #3399cc, #0066cc);
background: linear-gradient(top, #3399cc, #0066cc);
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
#qwerty:hover, #qwerty:focus {
color:#edebda;
/*reduce the spread of the shadow to give a pushed effect*/
-webkit-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
-moz-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
}

  </style>
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
          <h1><span class="logo_colour">Change Password</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
         
                  </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      <div id="success"></div>
      </div>
      <div id="content">
      <form name="prof_login_form" method="post" action="pass_forgot_student.php">
    <div id="uname"><div style="width:20%;float:left">User Name:</div><input type="text" name="username"></div>
    <br />
    <div style="float:left">Choose a question:</div>
      
        <select name="question" id="selection" style="position:relative;left:1.5%;float:left">
            <option value="q1">What is your name?</option>
            <option value="q2">Who is your favorite professor?</option>
            <option value="q3">In which city were you born?</option>
            <option value="q4">What is your favorite dish?</option>
        </select>
        <div style="position:absolute;left:44%">As entered by you while registeration</div>
        <br/><br/>
      <span>Answer:</span>
      <input style="position:relative;left:11.5%;width:30%" id="5" type="text" name="answer" placeholder="Answer the above question" />
      <br/><br/>
    <div id="pword"><div style="width:20%;float:left">New Password:</div><input type="password" name="password"></div><br/>
    <div id="button"><input name="submit" type="submit" value="UPDATE" id="qwerty"></div><br/>
  </form>
          <h1 id=""></h1>
          <h2 id=""></h2>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
  <script type="text/javascript">
var row=<?php echo $rownum_to_json;?>;
/*var flag=<?php echo $flag_to_json;?>;*/
if(row==0)
  document.getElementById('success').innerHTML="<strong>Sorry...The information is incorrect...</strong>";

  </script>
</body>
</html>
