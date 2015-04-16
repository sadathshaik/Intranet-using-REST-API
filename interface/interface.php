<?php

?>


<html>

	<head>
		<title>
			interface
		</title>

		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
       	<script src="add_user.js"></script>

       	
 	
<script>


  function showUser()     //this function is used to show list of all the students
  {
    //if (str=="")
    //{
    //document.getElementById("userlist").innerHTML="";
    //return;
   //}
    if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
         {  
            document.getElementById("userlist").innerHTML=xmlhttp.responseText; //printing the list in the div where id=userlist
          }
      }
      xmlhttp.open("GET","view_user.php",true);
      xmlhttp.send();
}
</script>




<script>
function close_list()
{
  document.getElementById("userlist").innerHTML="";
}
</script>





<script>
function adduser()
{

  var id=document.getElementById('id').value;
  var password=document.getElementById('password').value;
//alert(id);
//alert(password);
if (id=="")
  {
  document.getElementById("add_status").innerHTML="<p style='color:red'>"+"<b>"+"Enter an Roll no"+"</b>"+"</p>";
  return;
  }
  if (password=="")
  {
  document.getElementById("add_status").innerHTML="<p style='color:red'>"+"<b>"+"Enter an password"+"</b>"+"</p>";
  return;
  }

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("add_status").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","add.php?id="+id+"&password="+password,true);
xmlhttp.send();
}
</script>





<script>
var counter_remove_add_status=1;
function remove_add_status()
{
  if(counter_remove_add_status>1)
  {
    document.getElementById('add_status').innerHTML="";
  }
  counter_remove_add_status++;

}
</script>



	</head>

	<body>
	<div class="container">
		 	<div class="navbar navbar-inverse">
      			<div class="navbar-inner">
        			<a class="brand" href="#">Embedded Systems</a>
        			<ul class="nav">
          				<li class="active"><a href="#">Home</a></li>
         				 
        			</ul>
       
         		</div>
 			 </div>

<h3>view list of users:</h3>
<input type="button" class="btn btn-primary" value="Get List" onclick="showUser()">
<div id="userlist"></div>
<hr>
<hr>


<h3>ADD USER</h3>

<div class="control-group">
    <label class="control-label" for="inputusername">username</label>
    <div class="controls">
      <input type="text" id="id" name="id" placeholder="username" onclick="remove_add_status()">
    </div>
    </div>



    <div class="control-group">
    <label class="control-label" for="inputpassword">password</label>
    <div class="controls">
      <input type="text" id="password" name="password" placeholder="Password">
    </div>
  </div>

<div id="add_status"></div> 

<input type="button" id="adduser" class="btn btn-primary" onclick="adduser()" value="Add">



	</div> <!---- div of container -------------------->
	</body>
</html>