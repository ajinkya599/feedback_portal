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
{  // echo $_SESSION['id'];
	$var1=$_POST['num11'];
	$var2=$_POST['num22'];
	$var3=$_POST['num33'];
	$var4=$_POST['num44'];
	$var5=$_POST['num55'];
	$comment=$_POST['textbox'];
	$teacherid=$_POST['teacherid'];
	//$studentid=$_SESSION['id'];
	$sql="INSERT INTO feedback(studid,teacherid,q1,q2,q3,q4,q5,comment) VALUES('$studentid','$teacherid','$var1','$var2','$var3','$var4','$var5','$comment')";
    $result=mysql_query($sql,$conn);
    if(isset($_POST['check']))
   { 
   $sql8="UPDATE feedback SET anonymous=0 WHERE studid='$studentid' AND comment='$comment'";
  $result4=mysql_query($sql8,$conn);

   } 
     header('Location: ../student_login.php');
}
?>



<!DOCTYPE>
<html lang="en">
<head>

<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="css/index_events.css">
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>

<style>

.panel,#qwerty {
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
.panel:hover,.panel:focus,#qwerty:hover, #qwerty:focus {
color:#edebda;
/*reduce the spread of the shadow to give a pushed effect*/
-webkit-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
-moz-box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
box-shadow: rgba(0, 0, 0, .25) 0 1px 0px;
}

  </style>
<script>
function work()
	{
		//alert('hello');
	 var referrer =  document.referrer;
    if(referrer=="http://localhost/feedback_portal/qdfb.php?teacherid="+<?php echo $_GET['teacherid'];?>)
    { 	location.reload();
		location.reload();
  		location.reload();
  		location.reload();
  		location.reload();
	}

	}
</script>

</head>
<body onload="work()">
<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Short Feedback</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        
      </div>
      <div id="content">
        
        <div style="visibility:hidden">
          <ul>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          <li>gfd</li>
          </ul>
        </div>

<form method="post" action="quick_fbC.php">
<div id="wrapper">
	<div id="mask">
        
			<input type="number1" id="num1" style="display:none" name="num11" value="3">
			<input type="number2" id="num2" style="display:none" name="num22" value="3">
			<input type="number3" id="num3" style="display:none" name="num33" value="3">
			<input type="number4" id="num4" style="display:none" name="num44" value="3">
			<input type="number5" id="num5" style="display:none" name="num55" value="3">
			
		<br/><br/><br/>
			

        
		<div id="item1" class="item">
			<div id="basic">
			<div class="ques" style="left:40%">QUESTION 1/5</div>
			<div class="what" style="left:20%;text-align:center">The instructor explains concepts properly.</div>
				<div class="rate" style="left:37.5%">
				<span class="star-rating1">
				  <input class="aa" type="radio" name="rating1" value="1" onclick="do1(this)" ><i></i>
				  <input class="aa" type="radio" name="rating1" value="2" onclick="do1(this)" ><i></i>
				  <input class="aa" type="radio" name="rating1" value="3" onclick="do1(this)" checked="checked"><i></i>
				  <input class="aa" type="radio" name="rating1" value="4" onclick="do1(this)"><i></i>
				  <input class="aa" type="radio" name="rating1" value="5" onclick="do1(this)"><i></i>
				</span>
				</div>
				
				<a href="#item2" class="panel" style="left:45%" onclick="check1()">NEXT</a>

			</div>
		</div>
		<script>
		function do1(obj)
		{
			document.getElementById("num1").value=obj.value;
		}
		function check1()
		{
			document.getElementById('sec').checked="checked";
		}
		</script>
		<div id="item2" class="item">
			<div id="basic">
				<div class="ques" style="left:140%">QUESTION 2/5</div>
				<div class="what" style="left:120%;text-align:center">The classes are held regularly.</div>
				<div class="rate" style="left:137.5%">
				<span class="star-rating1">
				  <input class="bb" type="radio" name="rating" value="1" onclick="do2(this)"><i></i>
				  <input class="bb" type="radio" name="rating" value="2" onclick="do2(this)"><i></i>
				  <input class="bb" type="radio" name="rating" value="3" id="sec" checked="checked" onclick="do2(this)"><i></i>
				  <input class="bb" type="radio" name="rating" value="4" onclick="do2(this)"><i></i>
				  <input class="bb" type="radio" name="rating" value="5" onclick="do2(this)"><i></i>
				</span>
				</div>

				<a href="#item3" class="panel" style="left:145%" onclick="check2()">NEXT</a>
			</div>
		</div>
		<script>
		function do2(obj)
		{
			document.getElementById("num2").value=obj.value;
		}
		function check2()
		{
			document.getElementById('third').checked="checked";
		}
		</script>
		<div id="item3" class="item">
			<div id="basic">
				<div class="ques" style="left:240%">QUESTION 3/5</div>
				<div class="what" style="left:220%;text-align:center">Grading in tests, assignments, projects (if any) is fair.</div>
				<div class="rate" style="left:237.5%">
				<span class="star-rating1">
				  <input class="cc" type="radio" name="rating" value="1" checked="checked" onclick="do3(this)"><i></i>
				  <input class="cc" type="radio" name="rating" value="2" checked="checked" onclick="do3(this)"><i></i>
				  <input class="cc" type="radio" name="rating" value="3" checked="checked" id="third" onclick="do3(this)"><i></i>
				  <input class="cc" type="radio" name="rating" value="4" onclick="do3(this)"><i></i>
				  <input class="cc" type="radio" name="rating" value="5" onclick="do3(this)"><i></i>
				</span>
				</div>
				<a href="#item4" class="panel" style="left:245%" onclick="check3()">NEXT</a>
			</div>
		</div>
		<script>
		function do3(obj)
		{
			document.getElementById("num3").value=obj.value;
		}
		function check3()
		{
			document.getElementById('fourth').checked="checked";
		}
		</script>
		<div id="item4" class="item">
			<div id="basic">
				<div class="ques" style="left:340%">QUESTION 4/5</div>
				<div class="what" style="left:320%;text-align:center">Overall, the instructor is well prepared.</div>
				<div class="rate" style="left:337.5%">
				<span class="star-rating1">
				  <input class="dd" type="radio" name="rating" value="1" checked="checked" onclick="do4(this)"><i></i>
				  <input class="dd" type="radio" name="rating" value="2" checked="checked" onclick="do4(this)"><i></i>
				  <input class="dd" type="radio" name="rating" value="3" id="fourth" checked="checked" onclick="do4(this)"><i></i>
				  <input class="dd" type="radio" name="rating" value="4" onclick="do4(this)"><i></i>
				  <input class="dd" type="radio" name="rating" value="5" onclick="do4(this)"><i></i>
				</span>
				</div>
				<a href="#item5" class="panel" style="left:345%" onclick="check4()">NEXT</a>
			</div>
		</div>
		<script>
		function do4(obj)
		{
			document.getElementById("num4").value=obj.value;
		}
		function check4()
		{
			document.getElementById('fifth').checked="checked";
		}
		</script>
		<div id="item5" class="item">
			<div id="basic">
				<div class="ques" style="left:440%">QUESTION 5/5</div>
				<div class="what" style="left:420%;text-align:center">Overall, the course seems useful and practically applicable.</div>
				<div class="rate" style="left:437.5%">
				<span class="star-rating1">
				  <input class="ee" type="radio" name="rating" value="1" checked="checked" onclick="do5(this)"><i></i>
				  <input class="ee" type="radio" name="rating" value="2" checked="checked" onclick="do5(this)"><i></i>
				  <input class="ee" type="radio" name="rating" value="3" id="fifth" checked="checked" onclick="do5(this)"><i></i>
				  <input class="ee" type="radio" name="rating" value="4" onclick="do5(this)"><i></i>
				  <input class="ee" type="radio" name="rating" value="5" onclick="do5(this)"><i></i>
				</span>
				</div>
				<a href="#item6" class="panel" style="left:445%">NEXT</a>
				
			</div>
		</div>
		<script>
		function do5(obj)
		{
			document.getElementById("num5").value=obj.value;
		}
		</script>
		<div id="item6" class="item">
			<div id="basic">
				<div class="ques" style="left:533%;">SUGGESTIONS/REMARKS</div>
				<div id="suggestions">
				<div style="position:absolute;left:525%;top:80%;width:50%;font-size:15px">You have <span id="myCounter" style="position:relative">300</span> characters left.</div>
				<textarea onkeypress="return taLimit(this)" onkeydown="return taCount(this,'myCounter')" name="textbox" id="suggest_box" style="left:523%"></textarea>
				</div>
				<input type="text" value="<?php echo $_GET['teacherid'];?>" name="teacherid" style="display:none">
				<input id="qwerty" type="submit" value="SUBMIT" name="button" style="position:absolute;float:left;left:545%;top:80%"><div style="position:absolute;float:left;left:554%;top:80%">As</div><div id="user" style="position:absolute;float:left;left:556%;top:80%">Username</div><div style="position:absolute;left:560%;top:80%"><input type="checkbox" name="check" value="1"></div>
			</div>
		</div>

		
		
	</div>
</div>
</form>
</div><!--Content-->
</div><!--Site content-->
      
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
   <script language = "Javascript">
/**
 * DHTML textbox character counter script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */
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
  <script>
  var rat=<?php echo $rat_to_json?>;
  document.getElementById('user').innerHTML=rat;
	
	function reloading()
	{
  location.reload();
  location.reload();
  location.reload();
  location.reload();
  location.reload();
	}	

		$(document).ready(function() {
			window.location.href = "#item1";
		

			$('a.panel').click(function () {

				$('a.panel').removeClass('selected');
				$(this).addClass('selected');
				
				current = $(this);
				
				$('#wrapper').scrollTo($(this).attr('href'), 800);		
				
				return false;
			});

			$(window).resize(function () {
				resizePanel();
			});
			
		});

		function resizePanel() {

			width = $(window).width();
			height = $(window).height();

			mask_width = width * $('.item').length;
				
			$('#debug').html(width  + ' ' + height + ' ' + mask_width);
				
			$('#wrapper, .item').css({width: width, height: height});
			$('#mask').css({width: mask_width, height: height});
			$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
				
		}
		
		function pop(div) {
				document.getElementById(div).style.display = 'block';
			}
			function hide(div) {
				document.getElementById(div).style.display = 'none';
			}
			//To detect escape button
			document.onkeydown = function(evt) {
				evt = evt || window.event;
				if (evt.keyCode == 27) {
					hide('popDiv');
				}
	};
</script>
</body>
</html>
