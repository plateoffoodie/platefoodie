<html>
<head>
	<title> Plate Foodie </title>
	<link href="css/platefoodie.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript" src="js/jquery.js"></script>	
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/bootstrap.min..js"></script>
	<script type="text/javascript" src="js/jssor.slider-21.1.6.mini.js"></script>
	<script type="text/javascript" src="js/npm.js"></script>
	<script type="text/javascript" src="js/platefoodie.js"></script>
	
</head>
	
	
<body>
	<div class="container" style="width:95%">
	<div class="row">
		
        <nav class="navbar navbar-default" role="navigation">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <table>
        <th><img src="images/PlateFoodie.png" height="300" width="300"></th>	
	  </table>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="restaurants.php">Promos</a></li>
      </ul>
      <!---form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form--->
	 
      <ul class="nav navbar-nav navbar-right"> 
        <li class="dropdown" id="navLogin">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>
          <ul class="dropdown-menu">  
			<div class="loginForm">
			  Username:<input type="text" name="firstname" class="loginInput" id="username" required>
			  <br><br>
			  Password:<input type="password" name="lastname" class="loginInput" id="password" required>
			  <br>
			  <input type="submit" id="loginbutton" name="login" value="Let Me In" class="btn btn-secondary loginButton">
			  <p class="error" id="loginError"></p>
			</div>
		 </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  
</nav>

	</div>
</div>

</body>