<?php
$conn = mysql_connect("localhost","root","") or die(mysql_error("sdrrrrrrrdddddfsdf"));
mysql_select_db("dkml",$conn);
if(isset($_POST['submitmessage'])){
  //echo "string";
$idf=$_SESSION['id'];
$text=$_POST['submitit2'];
$timed=date("Y:m:d H:i:s");
  $sqli="INSERT INTO broadcast(time,id,text) VALUES('$timed','$idf','$text') ";
  $resulty=mysql_query($sqli);


}
if(isset($_POST['submitit']))
{for ($i=0; $i <$_POST['rows'] ; $i++) {
  $x="input".$i;
  $y="comment".$i;
  $z="rinput".$i;
  $reply=$_POST[$x];
  $com=$_POST[$y];
  $abuse=$_POST[$z];
  $me="SELECT studid FROM feedback WHERE comment='$com'";
  $resulti = mysql_query($me, $conn);
  $ids=mysql_fetch_array($resulti);
  $idfinal=$ids['studid'];

  //echo $com." ";
  $sql4="UPDATE feedback SET reply='$reply' WHERE comment='$com' AND reply!=''";
  $resultq = mysql_query($sql4, $conn);
  $sql7="UPDATE student SET abuse='$abuse' WHERE id='$idfinal' AND abuse=0";
  $resultg = mysql_query($sql7, $conn);


  
}





}

$id=$_SESSION['id'];
$sql2="SELECT *  FROM feedback WHERE teacherid='$id'";

$result = mysql_query($sql2, $conn);



$rows = mysql_num_rows($result);


$q1=array();
$q2=array();
$q3=array();
$q4=array();
$q5=array();
$q5=array();
$q6=array();
$q6=array();
$q7=array();
$q8=array();
$q9=array();
$q10=array();
$q11=array();
$q12=array();
$q13=array();
$q14=array();
$q15=array();
$comment=array();
$anonymous=array();
$name="";

   while ($row = mysql_fetch_array($result)) {
    

   array_push($q1,$row['q1']);
   array_push($q2,$row['q2']);
   array_push($q3,$row['q3']);
   array_push($q4,$row['q4']);
   array_push($q5,$row['q5']);
   array_push($q6,$row['q6']);
    array_push($q7,$row['q7']);
   array_push($q8,$row['q8']);
   array_push($q9,$row['q9']);
   array_push($q10,$row['q10']);
   array_push($q11,$row['q11']);
    array_push($q12,$row['q12']);
   array_push($q13,$row['q13']);
   array_push($q14,$row['q14']);
   array_push($q15,$row['q15']);
   if($row['comment']=="")
    array_push($comment,"NO COMMENTS");
  else
  array_push($comment,$row['comment']);
     array_push($anonymous,$row['anonymous']);
     $studid=$row['studid'];
     $sql3="SELECT username FROM student WHERE id='$studid'";

$result2 = mysql_query($sql3, $conn);



$row2 = mysql_fetch_array($result2);
$name=$name.$row2['username']." ";


    
   
  
  
   
   
   
 }
 $q1_to_json=json_encode((array)$q1);
  $q2_to_json=json_encode((array)$q2);
   $q3_to_json=json_encode((array)$q3);
   $q4_to_json=json_encode((array)$q4);
   $q5_to_json=json_encode((array)$q5);
  $q6_to_json=json_encode((array)$q6);
   $q7_to_json=json_encode((array)$q7);
   $q8_to_json=json_encode((array)$q8);
   $q9_to_json=json_encode((array)$q9);
  $q10_to_json=json_encode((array)$q10);
   $q11_to_json=json_encode((array)$q11);
   $q12_to_json=json_encode((array)$q12);
   $q13_to_json=json_encode((array)$q13);
  $q14_to_json=json_encode((array)$q14);
   $q15_to_json=json_encode((array)$q15);
  $rows_to_json=json_encode((array)$rows);
  $comment_to_json=json_encode((array)$comment);
  $anonymous_to_json=json_encode((array)$anonymous);
  $name_to_json=json_encode((array)$name);
  
 








 



?>
<!DOCTYPE html>
<html>
<head>
 <title>Prof Home Page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <link rel="stylesheet" type="text/css" href="dialog.css" title="style" />
  <style>
  .qaws:hover
  {
    cursor:pointer;
    font-color:blue;
  }
  </style>
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
  <div id="main">
  <div style="position:absolute;right:5%;top:3%;height:5%;color:white;font-size:20px"><a href="logout2.php">Log Out</a></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">Hello! <?php echo $_SESSION['username']; ?></span></h1>
          
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="profloggedin.php">History</a></li>
          <!--<li><a href="broadcast.php">Broadcast a message</a></li>-->
                  </ul>
      </div>
    </div>
    <div id="site_content">
    
      
     <b> <div class="sidebar">
      <div> Q1 - Explanation of concepts</div><br/>
      <div> Q2 - Regular Classes</div><br/>
      <div> Q3 - Fair Grading</div><br/>
      <div> Q4 - Overall preparation</div><br/>
      <div> Q5 - Practical Application</div><br/>
      <div> Q6 - Clarification of doubts</div><br/>
      <div> Q7 - Organized way of teaching</div><br/>
      <div> Q8 - Encouraging advanced concepts</div><br/>
      <div> Q9 - Effective communication</div><br/>
      <div>Q10 - Positive attitude</div><br/>
      <div>Q11 - Logistics</div><br/>
      <div>Q12 - Preparedness of tutor</div><br/>
      <div>Q13 - Proper explanation by tutor</div><br/>
      <div>Q14 - Usefullness of tutorial</div><br/>
      <div>Q15 - On time course completion</div>

      </div></b>
      <div id="content">
      <b><div id="number" style="font-size:15px;position:absolute;left:33%"></div></b>
      <br/><br/>
          <div id="history">
            <!--graph or no feedback-->
          </div>
          <br/>
          
          <div id="button"></div>
          <form method="post" action="prof_login.php" name="reply_form1">
          
          <div id="comments" style="font-size:15px"></div>
           <input  style='visibility:hidden' type='text' name="rows" id="jainam">
         </form>
         <div id="button2"></div>
         <form method="post" action="prof_login.php" name="reply_form2">
          
          <div id="comments2"></div>
           
         </form>
         
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
 <script>
  
  
 var rows=<?php echo $rows_to_json;?>;
 /*document.getElementById('side').innerHTML="dfgfds";*/
 var q1=<?php echo $q1_to_json;?>;
 var q2=<?php echo $q2_to_json;?>;
 var q3=<?php echo $q3_to_json;?>;
 var q4=<?php echo $q4_to_json;?>;
 var q5=<?php echo $q5_to_json;?>;
 var q6=<?php echo $q6_to_json;?>;
 var q7=<?php echo $q7_to_json;?>;
 var q8=<?php echo $q8_to_json;?>;
 var q9=<?php echo $q9_to_json;?>;
 var q10=<?php echo $q10_to_json;?>;
 var q11=<?php echo $q11_to_json;?>;
 var q12=<?php echo $q12_to_json;?>;
 var q13=<?php echo $q13_to_json;?>;
 var q14=<?php echo $q14_to_json;?>;
 var q15=<?php echo $q15_to_json;?>;
 var comment=<?php echo $comment_to_json;?>;
 var anonymous=<?php echo $anonymous_to_json;?>;
 var name=<?php echo $name_to_json;?>;
 
 var ans1=0;
 var ans2=0;
 var ans3=0;
 var ans4=0;
 var ans5=0;
 var ans6=0;
 
 var ans7=0;
 var ans8=0;
 var ans9=0;
 
 var ans10=0;
 var ans11=0;
 var ans12=0;
  var ans13=0;
 var ans14=0;
 var ans15=0;
 

 

 if(rows==0)
  {document.getElementById("history").innerHTML="No Feedbacks to view as of now :)"; }
else{
    document.getElementById('number').innerHTML="Number of feedbacks : "+q1.length;
  
  for ( i =0; i<q1.length; i++) {
  ans1=parseFloat(ans1) + parseFloat(q1[i]);

}

for ( i =0; i<q2.length; i++) {
  ans2=parseFloat(ans2)+parseFloat(q2[i]);

}
for ( i =0; i<q3.length; i++) {
  ans3=parseFloat(ans3)+parseFloat(q3[i]);

}
for ( i =0; i<q4.length; i++) {
  ans4=parseFloat(ans4)+parseFloat(q4[i]);

}
for ( i =0; i<q5.length; i++) {
  ans5=parseFloat(ans5)+parseFloat(q5[i]);

}
for ( i =0; i<q6.length; i++) {
  ans6=parseFloat(ans6)+parseFloat(q6[i]);

}
for ( i =0; i<q7.length; i++) {
  ans7=parseFloat(ans7)+parseFloat(q7[i]);

}
for ( i =0; i<q8.length; i++) {
  ans8=parseFloat(ans8)+parseFloat(q8[i]);

}
for ( i =0; i<q9.length; i++) {
  ans9=parseFloat(ans9)+parseFloat(q9[i]);

}
for ( i =0; i<q10.length; i++) {
  ans10=parseFloat(ans10)+parseFloat(q10[i]);

}
for ( i =0; i<q11.length; i++) {
  ans11=parseFloat(ans11)+parseFloat(q11[i]);

}
for ( i =0; i<q12.length; i++) {
  ans12=parseFloat(ans12)+parseFloat(q12[i]);

}
for ( i =0; i<q13.length; i++) {
  ans13=parseFloat(ans13)+parseFloat(q13[i]);

}
for ( i =0; i<q14.length; i++) {
  ans14=parseFloat(ans14)+parseFloat(q14[i]);

}
for ( i =0; i<q15.length; i++) {
  ans15=parseFloat(ans15)+parseFloat(q15[i]);

}
var avg1=parseFloat(ans1)/parseFloat(q1.length);
var avg2=parseFloat(ans2)/parseFloat(q2.length);
var avg3=parseFloat(ans3)/parseFloat(q3.length);
var avg4=parseFloat(ans4)/parseFloat(q4.length);
var avg5=parseFloat(ans5)/parseFloat(q5.length);
var avg6=parseFloat(ans6)/parseFloat(q6.length);
var avg7=parseFloat(ans7)/parseFloat(q7.length);
var avg8=parseFloat(ans8)/parseFloat(q8.length);
var avg9=parseFloat(ans9)/parseFloat(q9.length);
var avg10=parseFloat(ans10)/parseFloat(q10.length);
var avg11=parseFloat(ans11)/parseFloat(q11.length);
var avg12=parseFloat(ans12)/parseFloat(q12.length);
var avg13=parseFloat(ans13)/parseFloat(q13.length);
var avg14=parseFloat(ans14)/parseFloat(q14.length);
var avg15=parseFloat(ans15)/parseFloat(q15.length);

document.getElementById("history").innerHTML='<canvas id="graph" width="615" height="350" style="border:1px solid">';
//document.getElementById("history").innerHTML=avg1;
  var canvas = document.getElementById('graph');
  var ctx = canvas.getContext('2d');
  var width=25;
  var currX=50;
 var grd = ctx.createLinearGradient(0,300,0,0);
  grd.addColorStop(0, "RoyalBlue");
  grd.addColorStop(1, "white");

ctx.fillStyle = grd;
  var h;
    h=avg1*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg2*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg3*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg4*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg5*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg6*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg7*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg8*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg9*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg10*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg11*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg12*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg13*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg14*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    h=avg15*50;
    ctx.fillRect(currX,canvas.height-h-50,width,h);
    currX+=width+10;

    ctx.fillStyle ="RoyalBlue";
    ctx.moveTo(40,25);
  ctx.lineTo(40,300);
  ctx.moveTo(40,300);
  ctx.lineTo(590,300);
  
  ctx.moveTo(40,25);
  ctx.lineTo(45,30);
  ctx.moveTo(40,25);
  ctx.lineTo(35,30);

  ctx.moveTo(590,300);
  ctx.lineTo(585,295);
  ctx.moveTo(590,300);
  ctx.lineTo(585,305);

  ctx.font = "25px Arial";
  ctx.fillText("X",595,307);
  ctx.fillText("Y",32,22);
  ctx.font = "15px Arial";

   ctx.fillText("O",30,315);
  ctx.fillText("1",30,255);
  ctx.fillText("2",30,205);
  ctx.fillText("3",30,155);
  ctx.fillText("4",30,105);
  ctx.fillText("5",30,55);


  ctx.fillText("Q1",53,315);
  ctx.fillText("Q2",88,315);
  ctx.fillText("Q3",123,315);
  ctx.fillText("Q4",158,315);
  ctx.fillText("Q5",193,315);
  ctx.fillText("Q6",228,315);
  ctx.fillText("Q7",263,315);
  ctx.fillText("Q8",298,315);
  ctx.fillText("Q9",333,315);
  ctx.fillText("Q10",362,315);
  ctx.fillText("Q11",397,315);
  ctx.fillText("Q12",432,315);
  ctx.fillText("Q13",467,315);
  ctx.fillText("Q14",502,315);
  ctx.fillText("Q15",537,315);
  ctx.stroke();

  ctx.font = "15px Arial";
  ctx.fillStyle='#2F4F4F';
  ctx.fillText("Questions",260,330);

   ctx.save();
  ctx.translate(0,0);
  ctx.rotate(-1.57);
  ctx.fillText("Average Rating",-200,20);
  ctx.restore();

//for prompt
var inputid,rid;
function abuse_button(obj)
{
  rid=obj.id;
  Prompt.render('Do you really want to report abuse? (y/n)','final_report');
}
function call_prompt(obj)
{
  inputid="input"+obj.id+"";
  Prompt.render('Type some text:','save_prompt');

  //document.getElementById(inputid).value=fin;
  //document.getElementById('replies').value="";
  //document.getElementById("input"+obj.id+"").value="clicked";
  //
  //document.getElementById("input"+obj.id+"").value=
  //
}

function final_report(val)
{
  var id=rid.split("-");
  if(val=='y' || val=='Y')
  {
    document.getElementById("rinput"+id[1]).value=1;
  }
  else if(val=='n' || val=='N')
  {
    document.getElementById("rinput"+id[1]).value=0; 
  }

}

function save_prompt(val)
{
  document.getElementById(inputid).value=val;
}

function func234()
{document.forms["reply_form"].submit();

}




document.getElementById('button').innerHTML='<button id="togglebutton" onclick="function1()" value="View Comments" style="border:2px groove #7c93ba;cursor:pointer;padding: 5px 25px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;">View Comments</button><br/><br/>';
function function1()
{
  if(document.getElementById('togglebutton').value=="View Comments")

{
document.getElementById('jainam').value=rows;
  var kush=name.split(" ");

  for ( j=rows-1; j>=0; j--) {


var iDiv2 = document.createElement('div');
iDiv2.id = 'children'+j;

if(anonymous[j]==1)
{var name2="Anonymous";

}
else {var name2=""+kush[j]+"";}
var index=parseFloat(rows-j-1)+1;

iDiv2.innerHTML="<div style='width:130%'><div style=''>"+index+". "+comment[j]+"  -"+name2+"<span style='visibility:hidden'>Kush</span> "+"</div><div id="+"\""+j+"\""+" style='float:left;text-decoration:underline' class='qaws' onclick="+"\"call_prompt(this)\""+">Reply</div>"+"<span style='float:left;visibility:hidden'>Kush</span><input style='display:none' name="+"\""+"input"+j+"\""+" id="+"\"input"+j+"\""+" type='text'>"+"<input type='text' style='display:none' name="+"\""+"comment"+j+"\""+"value="+"\""+comment[j]+"\""+">  <div id=\""+"abuse"+"-"+j+"\""+" style='text-decoration:underline' class='qaws' onclick='abuse_button(this)'>Report Abuse</div><input type='text' style='display:none' value='0' id=\"rinput"+j+"\" name=\"rinput"+j+"\"></div><br/>";
document.getElementById("comments").appendChild(iDiv2); 
}
var iDiv3 = document.createElement('input');
iDiv3.name="submitit";
iDiv3.value="SUBMIT";
iDiv3.type="submit";
//iDiv3.style="border:2px groove #7c93ba;cursor:pointer;padding: 2px 20px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;";
iDiv3.style.border="2px groove #7c93ba";
iDiv3.style.padding="2px 20px";
iDiv3.style.borderRadius="25px";
//var iDiv3 = document.createElement('button');

document.getElementById("comments").appendChild(iDiv3);

document.getElementById('togglebutton').value="Hide Comments";
document.getElementById('togglebutton').innerHTML="Hide Comments";

}
else{
document.getElementById('comments').innerHTML="";
document.getElementById('togglebutton').value="View Comments";
document.getElementById('togglebutton').innerHTML="View Comments";


}

}


document.getElementById('button2').innerHTML='<button id="togglebutton2" onclick="function2()" value="Broadcast Message" style="border:2px groove #7c93ba;cursor:pointer;padding: 5px 25px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;">Broadcast Message</button><br/><br/>';
function function2()
{
  if(document.getElementById('togglebutton2').value=="Broadcast Message")

{


var iDiv4 = document.createElement('textarea');
iDiv4.name="submitit2";
iDiv4.rows="10";
iDiv4.cols="50";
iDiv4.placeholder="Type your message here";
//iDiv3.style="border:2px groove #7c93ba;cursor:pointer;padding: 2px 20px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;";
var iDiv5 = document.createElement('input');
iDiv5.name="submitmessage";
iDiv5.type="submit";
iDiv5.value="BROADCAST";
//iDiv5.style="border:2px groove #7c93ba;cursor:pointer;padding: 2px 20px;background-color:#0066cc;background: -webkit-gradient(linear, left top, left bottom, from(#3399cc), to(#0066cc));background: -webkit-linear-gradient(top, #3399cc, #0066cc);background: -moz-linear-gradient(top, #3399cc, #0066cc);background: -o-linear-gradient(top, #3399cc, #0066cc);background: linear-gradient(top, #3399cc, #0066cc);font-family:Andika, Arial, sans-serif;color:#fff;font-size:1.1em;letter-spacing:.1em;font-variant:small-caps;-webkit-border-radius: 0 15px 15px 0;-moz-border-radius: 0 15px 15px 0;border-radius: 0 15px 15px 0;-webkit-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;-moz-box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;box-shadow: rgba(0, 0, 0, .75) 0 2px 6px;";
iDiv5.style.border="2px groove #7c93ba";
iDiv5.style.padding="2px 20px";
iDiv5.style.borderRadius="25px";
//var iDiv3 = document.createElement('button');
var br=document.createElement('br');
document.getElementById("comments2").appendChild(iDiv4);
document.getElementById("comments2").appendChild(br);
document.getElementById("comments2").appendChild(iDiv5);

document.getElementById('togglebutton2').value="Hide Broadcast";
document.getElementById('togglebutton2').innerHTML="Hide Broadcast";

}
else{
document.getElementById('comments2').innerHTML="";
document.getElementById('togglebutton2').value="Broadcast Message";
document.getElementById('togglebutton2').innerHTML="Broadcast Message";


}

}



  }
  
 /* 

  var you="";
  var teacherid = new Array();
  var studid=new Array();
  var date=new Array();
  for ( i =0; i<<?php echo $rows;?>; i++) {
 var alert1= <?php echo $studid[0];?>
 alert(alert1);*/
    

         /*teacherid.push(<?php echo $teacherid[i];?>);
          studid.push(<?php echo $studid[i];?>);
          date.push(<?php echo $date[i];?>);
          
          document.getElementById('history').innerHTML=you+teacherid[i]+studid[i];

          document.getElementById('history').innerHTML=you;*/
  


  
  


   
 /*//$sql2="SELECT *  FROM feedback WHERE studid='$id'";
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

//}*/
   </script>
  
</body>
</html>
