<!DOCTYPE HTML>
<html>
<?php
$conn = mysql_connect("localhost","root","") or die(mysql_error("sdrrrrrrrdddddfsdf"));
mysql_select_db("dkml",$conn);


$id=$_SESSION['id'];
$logintimed="SELECT logintime FROM student WHERE id='$id'";
$logintimes=mysql_query($logintimed);
$logintime=mysql_fetch_array($logintimes);
$s_split=explode(" ",$logintime['logintime']);

// echo $split[0];
 $s_date=$s_split[0];
 $s_time=$s_split[1];
 $s_split1=explode(":",$s_date);
 $s_split2=explode(":",$s_time);
 $s_year=$s_split1[0];
 $s_month=$s_split1[1];
 $s_day=$s_split1[2];

 $s_hours=$s_split2[0];
 $s_min=$s_split2[1];
$s_sec=$s_split2[2];
//echo $s_year."//".$s_month."//".$s_day."//".$s_hours."//".$s_min."//".$s_sec;
//$result=explode(":",$logintime['logintime']);
$jai="SELECT * FROM broadcast";
$tang1=mysql_query($jai);
$oldname="";
$newname="";
$oldbroad="";
$newbroad="";
while($broad = mysql_fetch_array($tang1))
{

 $split=explode(" ",$broad['time']);
 $date=$split[0];
 $time=$split[1];
 $split1=explode(":",$date);
 $split2=explode(":",$time);
 $year=$split1[0];
 $month=$split1[1];
 $day=$split1[2];

 $hours=$split2[0];
 $min=$split2[1];
 $sec=$split2[2];
//echo $year."//".$month."//".$day."//".$hours."//".$min."//".$sec;
if(($s_year<$year) || ($s_year==$year && $s_month<$month) || ($s_year==$year && $s_month==$month && $s_day<$day) || ($s_year==$year && $s_month==$month && $s_day==$day && $s_hours<$hours) || ($s_year==$year && $s_month==$month && $s_day==$day && $s_hours==$hours && $s_min<$min) || ($s_year==$year && $s_month==$month && $s_day==$day && $s_hours==$hours && $s_min==$min && $s_sec<$sec))
{
//new broadcast
$idea1=$broad['id'];
$jinam21="SELECT name FROM teacher WHERE teacherid='$idea1'";
$ajinkya1=mysql_query($jinam21);
$kushal1=mysql_fetch_array($ajinkya1);
//array_push($newname,$kushal1['username']);
$newname=$newname.",".$kushal1['name'];
//array_push($newbroad,$broad['text']);
$newbroad=$newbroad.",".$broad['text'];
//echo $newbroad[0];
} 
else
{
//old broadcast
  $idea=$broad['id'];
$jinam2="SELECT name FROM teacher WHERE teacherid='$idea'";
$ajinkya=mysql_query($jinam2);
$kushal=mysql_fetch_array($ajinkya);
//array_push($oldname,$kushal['username']);
//array_push($oldbroad,$broad['text']);
$oldname=$oldname.",".$kushal['name'];
//array_push($newbroad,$broad['text']);
$oldbroad=$oldbroad.",".$broad['text'];
//echo $oldname[0];
}   
//echo $oldname[0];
//echo $oldbroad[0];
}

$tims=date("Y:m:d H:i:s");
$vir="UPDATE student SET logintime='$tims' WHERE id='$id'";
$tang=mysql_query($vir);




$sql2="SELECT *  FROM feedback WHERE studid='$id'";

$result = mysql_query($sql2, $conn);



$rows = mysql_num_rows($result);


$teacherid=array();
$studid=array();
$date=array();
$reply=array();
 

   while ($row = mysql_fetch_array($result)) {
    $teacherids=$row['teacherid'];
    $sql5="SELECT * FROM teacher WHERE teacherid='$teacherids'";
$result2 = mysql_query($sql5, $conn);
$row2 = mysql_fetch_array($result2);


   array_push($teacherid,$row2['name']);
   
   
   $finaldate=explode(" ", $row['date']);
   $f2=explode("-", $finaldate[0]);

   $totaldate=$f2[2]."-".$f2[1]."-".$f2[0];
   array_push($date,$totaldate);
   array_push($reply,$row['reply']);
   
 }
 $teacher_to_json=json_encode((array)$teacherid);
  $stud_to_json=json_encode((array)$studid);
   $date_to_json=json_encode((array)$date);
   $rows_to_json=json_encode((array)$rows);
   $reply_to_json=json_encode((array)$reply);

   $newbroad_to_json=json_encode((array)$newbroad);
   $oldbroad_to_json=json_encode((array)$oldbroad);
   $newname_to_json=json_encode((array)$newname);
   $oldname_to_json=json_encode((array)$oldname);

?>
<head>

  <title>Home Page</title>
  <script>
 /*function funcplease()
 {
  alert("muh me le le ");
 }*/
 // alert("hello");
  /*window.onload = function()
  {
    var hello=document.getElementById("content");
    hello.innerHTML="Yippi";
  }*/
//document.getElementById("history").innerHTML="sdfgdfgdfgsdsdfdsgfdg";

  
 // document.getElementById("history").innerHTML="sdfgdfgfdsg";


 // for (i = 0; i < 4; i++) { 
    //$sql2="SELECT *  FROM feedback WHERE studid='$id'";
//$rowss=mysql_query($sql2, $conn);
//$rows = mysql_num_rows($rowss);
//echo $rows;
//$sql3="SELECT teacherid FROM student WHERE studid='$id' ";
//$result = mysql_query($sql3, $conn);
//$row = mysql_fetch_array($rowss);
//$teacherid=$row['teacherid'];
//var teacherid=<?php echo $teacherid;?>
//$date=$row['date'];
   // var iDiv = document.createElement('div');
//iDiv.id = 'block';
//iDiv.innerHTML="teacherid";
//<?php echo "sdf";?>
//document.getElementById("history").innerHTML="sdgasaseeefdg";


</script>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="dialog.css" title="style" />
  <style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
<script src="dialog.js"></script>
</head>

<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
  <div id="main" >
  <div style="position:absolute;right:5%;top:3%;height:5%;color:white;font-size:20px"><a href="logout.php">Log Out</a></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Hello <?php echo $_SESSION['username']; ?> ! </span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li  class="selected"><a>History</a></li>
                  </ul>
      </div>
    </div>
    <div id="site_content" style="font-size:13px">
      <div class="sidebar">
      <ul>
        <li><a href="loginfolder/new_fb.php" style="font-size:18px;width:100%">Give New Feedback</a></li>
      </ul>
      <div id="newbroadcast" style="position:relative;width:100%;height:40%;border:2px solid"></div><br/>
      <div id="oldbroadcast" style="position:relative;width:100%;height:40%;border:2px solid"></div>
      </div>
      <div id="content">
   <div id="history"></div>
  
   </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
<script>
  //alert("ghjdfhbgd"); 
  var newname=<?php echo $newname_to_json;?>;
  var oldname=<?php echo $oldname_to_json;?>;
  var oldbroad=<?php echo $oldbroad_to_json;?>;
  var newbroad=<?php echo $newbroad_to_json;?>;
  newname=""+newname+"";
  newbroad=""+newbroad+"";
  oldname=""+oldname+"";
  oldbroad=""+oldbroad+"";
  var split_newname=newname.split(",");
  var split_newbroad=newbroad.split(",");
  //alert("hello");
  var ele=document.getElementById('newbroadcast');
  var header=document.createElement('div');
  header.innerHTML="<strong><u>NEW BROADCAST</u></strong>";
  ele.appendChild(header);

  for(var j=split_newname.length-1;j>=1;j--)
  {
    var div=document.createElement('div');
    div.innerHTML=""+split_newname[j]+" - "+split_newbroad[j];
    ele.appendChild(div);
  }
  var split_oldname=oldname.split(",");
  var split_oldbroad=oldbroad.split(",");

  var ele1=document.getElementById('oldbroadcast');
  var header1=document.createElement('div');
  header1.innerHTML="<strong><u>OLD BROADCAST</u></strong>";
  ele1.appendChild(header1);
  for(var i=split_oldname.length-1;i>=1;i--)
  {
    var div=document.createElement('div');
    div.innerHTML=""+split_oldname[i]+" - "+split_oldbroad[i];
    ele1.appendChild(div);
  }

//alert(oldbroad);
</script>

<script>
  function reply_alert(obj)
  {
    var id=obj.id;
    var save=document.getElementById("input"+id+"").value;
    if(save!="")
    {
      Alert.render(save);  
    }
    else
    {
      Alert.render("The Professor has not replied yet."); 
    }
    
  }
  var teacher=<?php echo $teacher_to_json;?>;
  var date=<?php echo $date_to_json;?>;
 var rows=<?php echo $rows_to_json;?>;
  var reply=<?php echo $reply_to_json;?>;

 if(rows==0)
  {document.getElementById("history").innerHTML="It seems you haven't given any feedback :/"; }
else{


  document.getElementById("history").innerHTML="";
  for ( i =<?php echo $rows;?>-1; i>=0; i--) {
  var iDiv = document.createElement('div');
iDiv.id = 'children';
iDiv.innerHTML="<span style='font-size:20px'>"+date[i]+"<span style='visibility:hidden'>Kushal</span>"+teacher[i]+"<span style='visibility:hidden'>Kushal</span>"+"</span>  <input style='display:none' id="+"\"input"+i+"\""+" value="+"\""+reply[i]+"\">"+"<button id="+"\""+i+"\" onclick='reply_alert(this)' style='border:2px groove #7c93ba;cursor:pointer;padding: 2px 20px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;'>View Reply</button><br/><br />";
document.getElementById("history").appendChild(iDiv); 

}


  }
  //alert("hello");
  
</script>
</body>

</html>
