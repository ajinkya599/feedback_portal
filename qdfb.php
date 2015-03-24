<?php 
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$_SESSION['teacherid']=$_GET['teacherid'];
$teacherid=$_SESSION['teacherid'];
$teacher_to_json=json_encode((array)$_SESSION['teacherid']);
$sql2="SELECT * FROM teacher WHERE teacherid='$teacherid'";
$result = mysql_query($sql2, $conn);
$row = mysql_fetch_array($result);
$name=$row['name'];
$id=$row['teacherid'];
$coursename=$row['course'];
$name_to_json=json_encode((array)$name);
$coursename_to_json=json_encode((array)$coursename);
$id_to_json=json_encode((array)$id);;

?>

<!DOCTYPE HTML>
<html>

<head>
<script type="text/javascript">
 var name=<?php echo $name_to_json;?>;
 var id=<?php echo $id_to_json;?>;
 
 var coursename=<?php echo $coursename_to_json;?>;

  function func1()
  { window.location.href = 'feedback_pages/detailed_fb.php?teacherid='+String(id);}
  function func2()
  {window.location.href = 'feedback_pages/quick_fbC.php?teacherid='+String(id);}



</script>

  <title>Feedback</title>
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
  <div style="position:absolute;right:5%;top:3%;height:5%;color:white;font-size:20px"><a href="logout.php">Log Out</a></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Feedback</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a onclick="func2()">Give Quick Feedback</a></li>
          <li><a onclick="func1()">Give Detailed Feedback</a></li>
                  </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      
      </div>
      <div id="content">
          <h1 id="name"></h1>
          <h2 id="coursename"></h2>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
  <script type="text/javascript">document.getElementById('name').innerHTML=name;
  document.getElementById('coursename').innerHTML=coursename;
  </script>
</body>
</html>
