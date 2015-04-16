<?php
require 'current_file.php';
  if(isset($_SESSION['user_id'])&&!(empty($_SESSION['user_id'])))
  {
      header('Location: home.php');
      break;
  }
?>

<html>
  <head>
	
		<title>
			welcome
		</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		 <script src="js/jquery.js"></script>
   		 <script src="js/bootstrap.min.js"></script>

       
	</head>

	<body >
		<div class="container">
		<!-----------------------------nav bar section -------------------------->
		<div class="navbar navbar-inverse">
  			<div class="navbar-inner">
   				 <a class="brand" href="#">Embedded Systems</a>
   				 <ul class="nav">

   				 </ul>

           <!-- Button to trigger modal -->

<a href="#myModal" role="button" class="btn btn-inverse" style="float:right" data-toggle="modal">Login</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Login</h3>
  </div>
  <div class="modal-body">



   <form class="form-horizontal" action="login_check.php" method="post">
  <div class="control-group">
    <label class="control-label" for="inputEmail">username</label>
    <div class="controls">
      <input type="text" id="inputEmail" name="id" placeholder="username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
     
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>


    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    
  </div>
</div>
 			 </div>
		</div>
		<!---------------------------------------------- end of nav bar section---------------------------------->

		<!------------------------------------------------- hero unit---------------------------------------------->
		<div class="hero-unit">
  			<h1>Embedded Systems</h1>
 			 <p>Real time experiments for the better and smarter future</p>
 		 	
		</div>
		<!-----------------------------------------------------end of hero unit-------------------------------------->

	<!----------------------------------------- cariusel------------------------------------------------------------>
	<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    
  </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="img1.jpg"></div>
    
    
  
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
	<!-------------------------------------------end of carousel----------------------------------------------------->





<div id="footer" style="background-color:skyblue;clear:both;text-align:center;">
Copyright @ Sadath Shaik</div>

</div>
</div>
	</body>
</html>