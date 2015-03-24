<?php
$conn = mysql_connect("localhost","root","") or die(mysql_error("NOT CONNECTED"));
mysql_select_db("dkml",$conn);
$a=1;
$sql="SELECT * FROM teacher WHERE new ='$a'";
$result=mysql_query($sql);
$row=mysql_num_rows($result);
$name=array();
$course=array();
$theoryorlab=array();
$id=array();
while($row=mysql_fetch_array($result)){
  array_push($course,$row['course']);
  array_push($name,$row['name']);
  array_push($theoryorlab,$row['theoryorlab']);
  array_push($id,$row['teacherid']);


}
//echo $name[3]." ".$course[3]." ".$theoryorlab[3]." ";
$course_to_json=json_encode((array)$course);
  $name_to_json=json_encode((array)$name);
   $theoryorlab_to_json=json_encode((array)$theoryorlab);
   $id_to_json=json_encode((array)$id);


?>




<!DOCTYPE HTML>
<html>

<head>
  <title>New Feedback</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style11.css" title="style" />
  <style>
/* Let's get this party started */ ::-webkit-scrollbar { width: 12px; } /* Track */ ::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); -webkit-border-radius: 10px; border-radius: 10px; } /* Handle */ ::-webkit-scrollbar-thumb { -webkit-border-radius: 10px; border-radius: 10px; background: rgba(255,0,0,0.8); -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); } ::-webkit-scrollbar-thumb:window-inactive { background: rgba(255,0,0,0.4); }




</style>
<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/function.js"></script>
  <script>
  
  function func(obj)
  {
    var id=obj.id;
   
   window.location.href = '../qdfb.php?teacherid='+String(id);
    
  }
  </script>
 <style>
  #navigation {
  position: absolute;
}

#menu-toggle {
  display: none;
  float: right;
}

/* HEADER > MENU */
#main-menu {
  float: right;
  font-size: 0;
  margin: 10px 0;
}

#main-menu > li {
  display: inline-block;
}

#main-menu > li.parent {
 
  width:240px;
  background-repeat: no-repeat;
  background-position: left center;
}

#main-menu > li.parent > a {
}

#main-menu > li > a {
  color: RoyalBlue;
  font-size: 20px;
   
  text-decoration:none;
}

#main-menu > li:hover > a,
#main-menu > li.current-menu-item > a {
}

/* HEADER > MENU > DROPDOWN */
#main-menu li {
  position: relative;
}

ul.sub-menu { /* level 2 */
  display: none;
  z-index: 9999;
  position: absolute;
  padding-top: 0;
  top:80%;
}

ul.sub-menu ul.sub-menu {
  margin-top: -1px;
  padding-top: 0;
  left: 100%;
  top: -5.5%;
  position:absolute;
  width:180px;
}

ul.sub-menu > li > a {
  background-color: #333;
  border: 1px solid #444;
  border-top: none;
  color: #bbb;
  display: block;
  font-size: 15px;
  line-height: 15px;
  padding: 15px 15px;
}

ul.sub-menu > li > a:hover {
  background-color: #2a2a2a; 
  color: #fff;
}

ul.sub-menu > li:first-child {
  border-top: 3px solid #23dbdb;
}

ul.sub-menu ul.sub-menu > li:first-child {
  border-top: 1px solid #444;
}

ul.sub-menu > li:last-child > a {
  border-radius: 0 0 2px 2px;
}

ul.sub-menu > li > a.parent {
  background-image: url(images/arrow.png);
  background-repeat: no-repeat;
  background-position: 95% center;
}

#main-menu li:hover > ul.sub-menu {
  display: block; /* show the submenu */
}

@media all and (max-width: 700px) {

  #navigation {
    position: static;
    margin-top: 20px;
  }

  #menu-toggle {
    display: block;
  }

  #main-menu {
    display: none;
    float: none;
  }

  #main-menu li {
    display: block;
    margin: 0;
    padding: 0;
  }

  #main-menu > li {
    margin-top: -1px;
  }

  #main-menu > li:first-child {
    margin-top: 0;
  }

  #main-menu > li > a {
    background-color: #333;
    border: 1px solid #444;
    color: #bbb;
    display: block;
    font-size: 20px;
  }

  #main-menu li > a:hover {
    background-color: #444; 
  }

  #main-menu > li.parent {
    background: none !important;
    padding: 0;
  }

  #main-menu > li:hover > a,
  #main-menu > li.current-menu-item > a {
    border: 1px solid #444 !important;
    color: #fff !important;
  }

  ul.sub-menu {
    display: block;
    margin-top: -1px;
    margin-left: 20px;
    position: static;
    padding: 0;
    width: inherit;
  }

  ul.sub-menu > li:first-child {
    border-top: 1px solid #444 !important;
  }

  ul.sub-menu > li > a.parent {
    background: #333 !important;
  }
}

  </style>
</head>

<body>
  <div id="main">
  <div style="position:absolute;right:5%;top:3%;height:5%;color:white;font-size:20px"><a href="../logout.php">Log Out</a></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><span class="logo_colour">New Course Feedback</span></h1>
          
        </div>
      </div>
      <div id="menubar">
        
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
      
      </div>
      <div id="content">
         <nav id="navigation">
        <ul id="main-menu">
          
          <li class="parent" style="position:relative;left:30%">
            <a>THEORY COURSES</a>
            <ul class="sub-menu" style="list-style-type:none" id="theory">
            <li>
                <a>MA201-Mathematics III</a>
                <ul class="sub-menu" style="list-style-type:none" id="ma201">
                  <li><a onclick="func(this)" id="6">Pratyoosh Kumar</a></li>
                  <li><a onclick="func(this)" id="7">Swaroop Nandan Bora</a></li>
                  <li><a onclick="func(this)" id="8">Jitendra Swain</a></li>
                  <li><a onclick="func(this)" id="9">Rajen Kumar Sinha</a></li>
                  
                </ul>
              </li>
              <li><a>CS221-Digital Design</a>
                <ul style="list-style-type:none" class="sub-menu" id="cs221">
                  <li><a onclick="func(this)" id="1">Santosh Biswas</a></li>
                  <li><a onclick="func(this)" id="3">Hemangee Kapoor</a></li>
                  
                </ul>
              </li>
              <li><a>CS201-Data Structures</a>
              <ul class="sub-menu" style="list-style-type:none" id="cs201">
                  <li><a onclick="func(this)" id="2">Saswata Shannigrahi</a></li>
                  
                  
                </ul> 
              </li>
              <li><a>CS202-Discrete Mathematics</a>
                <ul class="sub-menu" style="list-style-type:none" id="cs202">
                  <li><a onclick="func(this)" id="4">Ashish Anand</a></li>
                  <li><a onclick="func(this)" id="5">G. Sajith</a></li>
                  
                </ul>
              </li>
              
              
            </ul>
          </li>

          <li class="parent" style="position:relative;left:60%">
            <a>LAB COURSES</a>
            <ul class="sub-menu" style="list-style-type:none" id="lab">
              <li><a>CS210-Data Structures Lab</a>
              <ul class="sub-menu" style="list-style-type:none" id="cs210">
                  <li><a onclick="func(this)" id="10">Rashmi Dutta Baruah</a></li>
                  <li><a onclick="func(this)" id="11">Arnab Sarkar</a></li>
                  
                </ul> 
              </li>
              <li><a>CS241-System Software Lab</a>
                <ul class="sub-menu" style="list-style-type:none" id="cs241">
                  <li><a onclick="func(this)" id="12">Santosh Biswas</a></li>
                  
                  
                </ul>
              </li>
             
              
            </ul>
          </li>
          
        </ul>
      </nav>
  
 
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DKML | O(1)
    </div>
  </div>
  <script type="text/javascript">
var course=<?php echo $course_to_json?>;
var name=<?php echo $name_to_json?>;
var theoryorlab=<?php echo $theoryorlab_to_json?>;
var id=<?php echo $id_to_json?>;
var split_name=name.split(',');

var save;
var flag;

for(var j=0;j<course.length;j++)
{
  var li=document.createElement('li');
//  li.innerHTML="<a>"+course[j]+"</a><ul class='sub-menu' style='list-style-type:none'><li><a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a></li></ul>";
  if(theoryorlab[j]==1)
  {
    //add to theory;
    if(course[j].toLowerCase()=="MA201-Mathematics III".toLowerCase())
    {
      var ma201=document.getElementById('ma201');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      ma201.appendChild(li);
    }
    else if(course[j].toLowerCase()=="CS221-Digital Design".toLowerCase())
    {
      var cs221=document.getElementById('cs221');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      cs221.appendChild(li);
    }
    else if(course[j].toLowerCase()=="CS201-Data Structures".toLowerCase())
    {
      var cs201=document.getElementById('cs201');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      cs201.appendChild(li);
    }
    else if(course[j].toLowerCase()=="CS202-Discrete Mathematics".toLowerCase())
    {
      var cs202=document.getElementById('cs202');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      cs202.appendChild(li);       
    }
    else
    {
      save=0;
      flag=0;
      for(var k=0;k<j;k++)
      {
       if(course[j].toLowerCase()==course[k].toLowerCase())
        {
          save=k;
          
          flag=1;
          
          break;
        }
      }
      //alert("yes"+save+" "+flag+"");
      if(flag==1)
      {
        var ul=document.getElementById("tul"+save+"");
         li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
         ul.appendChild(li);
      }
      else
      {
        li.innerHTML="<a>"+course[j]+"</a><ul class='sub-menu' style='list-style-type:none' id="+"\"tul"+j+"\""+"><li><a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a></li></ul>";
        document.getElementById('theory').appendChild(li);
      }
    }
  
  }
  else
  {
    //add to lab;
    if(course[j].toLowerCase()=="CS210-Data Structures Lab".toLowerCase())
    {
      var cs210=document.getElementById('cs210');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      cs210.appendChild(li);
    }
    else if(course[j].toLowerCase()=="CS241-System Software Lab".toLowerCase())
    {
      var cs241=document.getElementById('cs241');
      li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
      cs241.appendChild(li);
    }
    else
    {

      var save;
      var flag=0;
      for(var k=0;k<j;k++)
      {
       if(course[j].toLowerCase()==course[k].toLowerCase())
        {
          save=k;
          flag=1;
          
          break;
        }
      }
      if(flag==1)
      {
        var ul=document.getElementById("lul"+save+"");
         li.innerHTML="<a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a>";
         ul.appendChild(li);
      }
      else
      {
        li.innerHTML="<a>"+course[j]+"</a><ul class='sub-menu' style='list-style-type:none' id="+"\"lul"+j+"\"><li><a onclick='func(this)' id="+"\""+id[j]+"\">"+split_name[j]+"</a></li></ul>";
        document.getElementById('lab').appendChild(li);
      }
    }
  }
}


</script>
</body>
</html>
