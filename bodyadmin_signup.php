<?php 
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$confirm=0;

if(isset($_POST['username']))
{$username=$_POST['username'];
$password=$_POST['password'];
$md5=md5($password);
$confirm=1;
  $sql="SELECT * FROM admin WHERE username='$username' AND password='$md5'";
  $result = mysql_query($sql, $conn);
$rownum = mysql_num_rows($result);
if($rownum==1)
{$row = mysql_fetch_array($result);
  if(isset($_SESSION['id']))
  unset($_SESSION['id']);
if(isset($_SESSION['username']))
  unset($_SESSION['username']);
$_SESSION['id']=$row['id'];
header('Location: admin_login.php');
$confirm=2;
}
$confirm_to_json=json_encode((array)$confirm);


}
?>






<!DOCTYPE HTML>
<html>

<head>
  <title>Admin Login</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
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
</head>

<body style="overflow-y:scroll">
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Admin Login</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.php">Login to Continue</a></li>
          
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <div id="confirm"></div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
      <h3>LOGIN HERE</h3>
  <form name="admin_login_form" method="post" action="admin_login.php">
    <div id="uname"><div style="width:20%;float:left">User Name:</div><input type="text" name="username"></div>
    <br />
    <div id="pword"><div style="width:20%;float:left">Password:</div><input type="password" name="password"></div><br/>
    <div id="button"><input type="submit" value="LOGIN" id="qwerty"></div><br/>
  </form>
  
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
      
    </div>
  </div>
  <script type="text/javascript">
  var confirm=<?php echo $confirm_to_json ?>;
  if(confirm==1)
  {document.getElementById('confirm').innerHTML="Sorry...Wrong Username Password Combination";}
</script>
</body>
</html>
