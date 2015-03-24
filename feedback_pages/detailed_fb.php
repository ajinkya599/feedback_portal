<?php
session_start();
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$studentid=$_SESSION['id'];
  $sql14="SELECT username FROM student WHERE id='$studentid'";
  $result6=mysql_query($sql14,$conn);
  $eat=mysql_fetch_array($result6);
  $rat=$eat['username'];

  $rat_to_json=json_encode((array)$rat);
  
if(isset($_POST['button']))
{   //echo $_SESSION['id'];
  $var1=$_POST['rating1'];
  $var2=$_POST['rating2'];
  $var3=$_POST['rating3'];
  $var4=$_POST['rating4'];
  $var5=$_POST['rating5'];
  $var6=$_POST['rating6'];
  $var7=$_POST['rating7'];
  $var8=$_POST['rating8'];
  $var9=$_POST['rating9'];
  $var10=$_POST['rating10'];
  $var11=$_POST['rating11'];
  $var12=$_POST['rating12'];
  $var13=$_POST['rating13'];
  $var14=$_POST['rating14'];
  $var15=$_POST['rating15'];
  $comment=$_POST['comment'];
  $teacherid=$_POST['teacherid'];
  

  $sql="INSERT INTO feedback(studid,teacherid,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,comment) VALUES('$studentid','$teacherid','$var1','$var2','$var3','$var4','$var5','$var6','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15','$comment')";
    $result=mysql_query($sql,$conn);
    if(isset($_POST['check']))
   { 
   $sql8="UPDATE feedback SET anonymous=0 WHERE studid='$studentid' AND comment='$comment'";
  $result4=mysql_query($sql8,$conn);

   } 
     header('Location: ../student_login.php');
}


?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Detailed Feedback Form</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style1.css" title="style" />
 <style>
#qwerty {
border:2px groove #7c93ba;
cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
padding: 2px 20px;
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
 .head
 {
  font-size:16px;
 }
 </style>
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
          <h1><span class="logo_colour">Detailed Feedback</span></h1>
          
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
        
      </div>
      <div id="content" style="font-size:14px">
        <!-- insert the page content here -->
         <form action="detailed_fb.php" method="post">
<div id="questions">
  <div id="Question1" class="ques" style="top:10%">
  <div class="head" id="q1h">
  <b>1.  The instructor explains concepts properly.</b>
  </div>
  <br/>
  <div class="tail" id="q1t">
              
            <input type="radio" name="rating1" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating1" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating1" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating1" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating1" value="1">Poor
  </div>
  <br />
  </div>
  <div id="Question2" class="ques" style="top:20%">
  <div class="head" id="q2h">
  <b>2.  The classes are held regularly.</b>
  </div><br/>
  <div class="tail" id="q2t">
   <input type="radio" name="rating2" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating2" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating2" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating2" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating2" value="1">Poor
  </div><br/>
  </div>
  <div id="Question3" class="ques"style="top:30%">
  <div class="head" id="q3h">
  <b>3.  Grading in tests, assignments, projects (if any) is fair.</b>
  </div><br/>
  <div class="tail" id="q3t">
   <input type="radio" name="rating3" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating3" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating3" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating3" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating3" value="1">Poor
  </div><br/>
  </div>
  <div id="Question4" class="ques"style="top:40%">
  <div class="head" id="q4h">
  <b>4.  Overall, the instructor is well prepared.</b> 
  </div><br/>
  <div class="tail" id="q4t">
   <input type="radio" name="rating4" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating4" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating4" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating4" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating4" value="1">Poor
  </div><br/>
  </div>
  <div id="Question5" class="ques"style="top:50%">
  <div class="head" id="q5h">
  <b>5.  Overall, the course seems useful and practically applicable.</b>
  </div><br/>
  <div class="tail" id="q5t">
   <input type="radio" name="rating5" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating5" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating5" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating5" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating5" value="1">Poor
  </div><br/>
  </div>
  <div id="Question6" class="ques"style="top:60%">
  <div class="head" id="q6h">
  <b>6.  The instructor clarifies areas of confusion.</b>  
  </div><br/>
  <div class="tail" id="q6t">
   <input type="radio" name="rating6" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating6" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating6" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating6" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating6" value="1">Poor
  </div><br/>
  </div>
  <div id="Question7" class="ques"style="top:70%">
  <div class="head" id="q7h">
  <b>7.  The instructor is well organized.</b>
  </div><br/>
  <div class="tail" id="q7t">
   <input type="radio" name="rating7" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating7" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating7" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating7" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating7" value="1">Poor
  </div><br/>
  </div>
  <div id="Question8" class="ques"style="top:80%">
  <div class="head" id="q8h">
  <b>8.  Learning of advanced concepts is encouraged.</b>
  </div><br/>
  <div class="tail" id="q8t">
   <input type="radio" name="rating8" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating8" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating8" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating8" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating8" value="1">Poor 
  </div><br/>
  </div>
  <div id="Question9" class="ques"style="top:90%">
  <div class="head" id="q9h">
  <b>9.  The instructor communicates effectively.</b>
  </div><br/>
  <div class="tail" id="q9t">
   <input type="radio" name="rating9" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating9" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating9" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating9" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating9" value="1">Poor
  </div><br/>
  </div>
  <div id="Question10" class="ques"style="top:100%">
  <div class="head" id="q10h">
  <b>10. The instructor conveyed a positive attitude toward students.</b>
  </div><br/>
  <div class="tail" id="q10t">
   <input type="radio" name="rating10" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating10" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating10" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating10" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating10" value="1">Poor  
  </div><br/>
  </div>
  <div id="Question11" class="ques"style="top:110%">
  <div class="head" id="q11h">
  <b>11. Space and facilities were adequate for required activities.</b>
  </div><br/>
  <div class="tail" id="q11t">
   <input type="radio" name="rating11" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating11" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating11" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating11" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating11" value="1">Poor
  </div><br/>
  </div>
  <div id="Question12" class="ques"style="top:120%">
  <div class="head" id="q12h">
  <b>12. The tutor is well prepared before the tutorial.</b>
  </div><br/>
  <div class="tail" id="q12t">
   <input type="radio" name="rating12" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating12" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating12" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating12" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating12" value="1">Poor
  </div><br/>
  </div>
  <div id="Question13" class="ques"style="top:130%">
  <div class="head" id="q13h">
  <b>13. The questions are properly explained in the tutorial.</b>
  </div><br/>
  <div class="tail" id="q13t">
   <input type="radio" name="rating13" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating13" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating13" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating13" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating13" value="1">Poor
  </div><br/>
  </div>
  <div id="Question14" class="ques" style="top:140%">
  <div class="head" id="q14h">
  <b>14. Overall, the tutorial is useful.</b>
  </div><br/>
  <div class="tail" id="q14t">
   <input type="radio" name="rating14" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating14" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating14" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating14" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating14" value="1">Poor
  </div><br/>
  </div>
  <div id="Question15" class="ques" style="top:150%">
  <div class="head" id="q15h">
  <b>15. The prescribed course syllabus is being covered on time.</b>
  </div><br/>
  <div class="tail" id="q15t">
   <input type="radio" name="rating15" value="5">Excellent<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating15" value="4">Very Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating15" value="3"  checked="checked">Good<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating15" value="2">Fair<span style="visibility:hidden">Kushal</span>
            <input type="radio" name="rating15" value="1">Poor
  </div><br/>
  </div>
  <div id="suggestions">
  You have <span id="myCounter" style="position:relative">300</span> characters left.
  <textarea onkeypress="return taLimit(this)" onkeydown="return taCount(this,'myCounter')" id="suggest_box" name="comment" style="font-size:15px" rows="10" cols="50" placeholder="Suggestions/Remarks"></textarea>
  
  </div>
  <input type="text" value="<?php echo $_GET['teacherid'];?>" name="teacherid" style="display:none">
  <input type="submit" value="SUBMIT" name="button" id="qwerty" style="position:absolute;left:52%;top:227%">
  <div class="tail" id="q15t">
  <div id="anon" style="position:absolute;left:61%;top:227.4%;font-size:15px">  As <span id="user">Username</span> <input type="checkbox" name="check" value="3"></div>
  </div>
  </div>

</div>
</form>


      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
     
    </div>

  </div>

  <script language = "Javascript">
/**
 * DHTML textbox character counter script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */
var rat=<?php echo $rat_to_json;?>;

document.getElementById('user').innerHTML=rat;
maxL=300;
var bName = navigator.appName;
function taLimit(taObj) {
  if (taObj.value.length==maxL) return false;
  return true;
}

function taCount(taObj,Cnt) { 
  objCnt=createObject(Cnt);
  objVal=taObj.value;
  if (objVal.length>maxL) objVal=objVal.substring(0,maxL);
  if (objCnt) {
    if(bName == "Netscape"){  
      objCnt.textContent=maxL-objVal.length;}
    else{objCnt.innerText=maxL-objVal.length;}
  }
  return true;
}
function createObject(objId) {
  if (document.getElementById) return document.getElementById(objId);
  else if (document.layers) return eval("document." + objId);
  else if (document.all) return eval("document.all." + objId);
  else return eval("document." + objId);
}
</script>
</body>
</html>
