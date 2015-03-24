<?php
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$confirm=0;
if(isset($_POST['username']))
{$confirm=1;
  $username=$_POST['username'];
  $user="SELECT * FROM teacher WHERE username='$username'";
$user2=mysql_query( $user, $conn );
$rownums = mysql_num_rows($user2);
if($rownums==0)
  {$theoryorlab=$_POST['type'];
$password=$_POST['password'];
$md5=md5($password);
$coursename=$_POST['course'];
$name=$_POST['name'];
if(!empty($username)&&!empty($password)&&!empty($name)&&!empty($coursename))
{$confirm=2;
  $sql="INSERT INTO teacher(name,username,password,course,new,theoryorlab) VALUES('$name','$username','$md5','$coursename','1','$theoryorlab')";
  $result=mysql_query( $sql, $conn );




}
}

else $confirm=6;
}



$confirm_to_json=json_encode((array)$confirm);



?>




<!DOCTYPE HTML>
<html>

<head>
  <title>Admin HomePage</title>
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

<body style="overflow-y:scroll">
  <div id="main">
  <div style="position:absolute;right:5%;top:3%;height:5%;color:white;font-size:20px"><a href="logout3.php">Log Out</a></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Admin HomePage</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="adminloggedin.php">Delete Users</a></li>
           <li class="selected"><a href="addprof.php">Add New Professor</a></li>
          
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      <div id="confirm"></div>
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
      <h3>Enter Details</h3>
  <form name="admin_hp_form" method="post" action="addprof.php">
    <div id="name"><div style="width:30%;float:left">Name:</div><input type="text" name="name"></div>
    <br />
    <div id="typeofcourse" style="position:relative;left:30%"><input type="radio" name="type" checked="checked" value="1"> Theory Course <input name="type" type="radio" value="0"> Lab Course </div>
    <br />
    <div id="course"><div style="width:30%;float:left">Course Name:</div><input type="text" name="course"></div>
    <br />
    <div id="uname"><div style="width:30%;float:left">User Name:</div><input type="text" name="username"></div>
    <br />
    <div id="pword"><div style="width:30%;float:left">Password:</div><input type="password" name="password"></div><br/>
    <div id="button"><input type="submit" value="ADD PROFESSOR" id="qwerty"></div><br/>
  </form>
  
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
      
    </div>
  </div>
  <script type="text/javascript">
var confirm=<?php echo $confirm_to_json;?>;
if(confirm==1)
document.getElementById('confirm').innerHTML="Sorry could not enter.Please donot leave any field blank.";
else if(confirm==2)
  document.getElementById('confirm').innerHTML="Professor added successfully.";
else if(confirm==6)
  document.getElementById('confirm').innerHTML="Sorry...Username has been taken....";


  </script>
</body>
</html>
