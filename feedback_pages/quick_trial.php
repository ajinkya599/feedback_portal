<?php

session_start();
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
if(isset($_POST['button']))
{  // echo $_SESSION['id'];
  $var1=$_POST['num11'];
  $var2=$_POST['num22'];
  $var3=$_POST['num33'];
  $var4=$_POST['num44'];
  $var5=$_POST['num55'];
  $comment=$_POST['textbox'];
  $teacherid=$_POST['teacherid'];
  $studentid=$_SESSION['id'];
  $sql="INSERT INTO feedback(studid,teacherid,q1,q2,q3,q4,q5,comment) VALUES('$studentid','$teacherid','$var1','$var2','$var3','$var4','$var5','$comment')";
    $result=mysql_query($sql,$conn);
     header('Location: ../student_login.php');
}


?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Quick Feedback</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/index_events.css">
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>

<script>

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


</head>

<body style="overflow-y:scroll">
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
        <!-- insert the page content here -->
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

        <div id="wrapper">
  <div id="mask">
  <br/><br/><br/>
       <div id="item1" class="item">
      <div id="basic">
      <div class="ques" style="left:40%">QUESTION 1/5</div>
      <div class="what" style="left:20%">This is the question</div>
        <div class="rate" style="left:37.5%">
        <span class="star-rating1">
          <input class="aa" type="radio" name="rating" value="1"><i></i>
          <input class="aa" type="radio" name="rating" value="2"><i></i>
          <input class="aa" type="radio" name="rating" value="3"><i></i>
          <input class="aa" type="radio" name="rating" value="4"><i></i>
          <input class="aa" type="radio" name="rating" value="5"><i></i>
        </span>
        </div>

        <a href="#item2" class="panel" style="left:45%">NEXT</a>

      </div>
    </div>

    <div id="item2" class="item">
      <div id="basic">
        <div class="ques" style="left:140%">QUESTION 2/5</div>
        <div class="what" style="left:120%">This is the question</div>
        <div class="rate" style="left:137.5%">
        <span class="star-rating1">
          <input class="bb" type="radio" name="rating" value="1"><i></i>
          <input class="bb" type="radio" name="rating" value="2"><i></i>
          <input class="bb" type="radio" name="rating" value="3"><i></i>
          <input class="bb" type="radio" name="rating" value="4"><i></i>
          <input class="bb" type="radio" name="rating" value="5"><i></i>
        </span>
        </div>

        <a href="#item3" class="panel" style="left:145%">NEXT</a>
      </div>
    </div>

    <div id="item3" class="item">
      <div id="basic">
        <div class="ques" style="left:240%">QUESTION 3/5</div>
        <div class="what" style="left:220%">This is the question</div>
        <div class="rate" style="left:237.5%">
        <span class="star-rating1">
          <input class="cc" type="radio" name="rating" value="1"><i></i>
          <input class="cc" type="radio" name="rating" value="2"><i></i>
          <input class="cc" type="radio" name="rating" value="3"><i></i>
          <input class="cc" type="radio" name="rating" value="4"><i></i>
          <input class="cc" type="radio" name="rating" value="5"><i></i>
        </span>
        </div>
        <a href="#item4" class="panel" style="left:245%">NEXT</a>
      </div>
    </div>

    <div id="item4" class="item">
      <div id="basic">
        <div class="ques" style="left:340%">QUESTION 4/5</div>
        <div class="what" style="left:320%">This is the question</div>
        <div class="rate" style="left:337.5%">
        <span class="star-rating1">
          <input class="dd" type="radio" name="rating" value="1"><i></i>
          <input class="dd" type="radio" name="rating" value="2"><i></i>
          <input class="dd" type="radio" name="rating" value="3"><i></i>
          <input class="dd" type="radio" name="rating" value="4"><i></i>
          <input class="dd" type="radio" name="rating" value="5"><i></i>
        </span>
        </div>
        <a href="#item5" class="panel" style="left:345%">NEXT</a>
      </div>
    </div>

    <div id="item5" class="item">
      <div id="basic">
        <div class="ques" style="left:440%">QUESTION 5/5</div>
        <div class="what" style="left:420%">This is the question</div>
        <div class="rate" style="left:437.5%">
        <span class="star-rating1">
          <input class="ee" type="radio" name="rating" value="1"><i></i>
          <input class="ee" type="radio" name="rating" value="2"><i></i>
          <input class="ee" type="radio" name="rating" value="3"><i></i>
          <input class="ee" type="radio" name="rating" value="4"><i></i>
          <input class="ee" type="radio" name="rating" value="5"><i></i>
        </span>
        </div>
        <a href="#item6" class="panel" style="left:445%">NEXT</a>
        
      </div>
    </div>

    <div id="item6" class="item">
      <div id="basic">
        <div class="ques" style="left:533%;">SUGGESTIONS/REMARKS</div>
        <div id="suggestions">
        <textarea id="suggest_box" style="left:523%"></textarea>
        </div>
        <button style="position:absolute;left:545%;top:80%">SUBMIT</button>
      </div>
    </div>

    
    
  </div>
</div>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
</body>
</html>
