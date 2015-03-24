<?php
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$sqlw="SELECT username FROM student WHERE abuse=1";
$result5=mysql_query($sqlw,$conn);
$abuse=array();
while($row=mysql_fetch_array($result5))
{array_push($abuse, $row['username']);



}











  $confirm=0;
if(isset($_POST['username']))
{$username=$_POST['username'];
$password=$_POST['password'];
$confirm=1;
$md5=md5($password);
  $sql="SELECT * FROM admin WHERE password='$md5'";
  $result = mysql_query($sql, $conn);
$rownum = mysql_num_rows($result);

if($rownum==1)
{$sq3="SELECT id FROM student WHERE username='$username'";
  $result3 = mysql_query($sq3, $conn);
  $row2 = mysql_num_rows($result3);
  $id=mysql_fetch_array($result3);
$studid=$id['id'];

  $sql2="DELETE FROM student WHERE username='$username'";
$result2 = mysql_query($sql2, $conn);

$sql6="DELETE FROM feedback WHERE studid='$studid'";
$result6 = mysql_query($sql6, $conn);
 //$row2 = mysql_num_rows($result6);
if($row2==1)
  $confirm=2;

}


}
$confirm_to_json=json_encode((array)$confirm);
$abuse_to_json=json_encode((array)$abuse);


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
          <li class="selected"><a href="adminloggedin.php">Delete Users</a></li>
           <li><a href="addprof.php">Add New Professor</a></li>
          
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      <div id="confirm"></div>
      <br/>
      <div id="abuse" style="border:1px solid;padding:5px"></div>
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
      <h3>Enter Details</h3>
  <form name="admin_hp_form" method="post" action="admin_login.php">
    <div id="uname"><div style="width:30%;float:left">Student's User Name:</div><input type="text" name="username"></div>
    <br />
    <div id="pword"><div style="width:30%;float:left">Re-Enter Your Password:</div><input type="password" name="password"></div><br/>
    <div id="button"><input type="submit" value="DELETE USER" id="qwerty"></div><br/>
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
var abuse=<?php echo $abuse_to_json?>;
var iDiv2 = document.createElement('div');
iDiv2.innerHTML="<h4><u>STUDENTS ACCUSED OF ABUSING</u></h4><br/>";

//var iDiv3 = document.createElement('button');

document.getElementById("abuse").appendChild(iDiv2);

for(var g=0;g<abuse.length;g++)
{var iDiv3 = document.createElement('div');
iDiv3.innerHTML=""+abuse[g]+"<br/>";

//var iDiv3 = document.createElement('button');

document.getElementById("abuse").appendChild(iDiv3);




}




if(confirm==1)
document.getElementById('confirm').innerHTML="Sorry...Could not delete..";
else if(confirm==2)
document.getElementById('confirm').innerHTML="User deleted";
  </script>
</body>
</html>
