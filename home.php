<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
<style type="text/css">

h1{
	border-style: solid;
	font-family: "Times New Roman", Times, serif;
	text-align: center;
	font-size: 50px;
}
p{
	font-style: italic;
	font-size: 20px;
}
h2{
 border-style: dotted;
  font-family: algerian, courier ,serif;
  font-style: italic;
  
}
body{
  background-color:#c2d1f0;
}



</style>




</head>
<body>
<!-----------------------------------------header------------------- -->

  <div >
    <h1>
      <img src="images/logo.png" class="img-circle" alt="Cinque Terre" height="60" width="60">
          E-DOCUMENT SYSTEM
      <img src="images/logo.png" class="img-circle" alt="Cinque Terre" height="60" width="60">
  </h1>
    <p>&nbsp;&nbsp;All government certificates are available at one place</p>
  </div>
	<!-----------------------------------------navbar------------------- -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminlogin.php">ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Online application<span class="caret"></span>
      </a>
        <ul class="dropdown-menu">
        	<li><a href="infoincome.php">Income certificate</a></li>
        	<li><a href="infononcreamy.php">Non creamy layer certificate</a></li>
          <li><a href="infocaste.php">Caste certificate</a></li>
          <li><a href="infovalidity.php"> Caste validity</a></li>
          <li><a href="infodom.php">Domicile</a></li>
          <li><a href="infonation.php">Nationality</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact us</a></li>
      <li><a href="about.php">About us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="login.php">
        <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li class="active"><a href="register.php">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Register</a></li>
      
    </ul>
  </div>
</nav>



<!--------------------------------------------------------------------------- Photo Grid -------------------------------->
<div class="row"> 
	<div class="column">
   <img src="images/sarkar2.png" style="width:35%">&nbsp;&nbsp;&nbsp;
    <img src="images/maha1.png" style="width:20%">&nbsp;&nbsp;&nbsp;
    <img src="images/sarkar3.png" style="width:35%">
    
  </div> 
  <div class="column">
    
    <img src="images/domicile.jpg" style="width:33%">
    <img src="images/sarkar.png" style="width:30%">
    <img src="images/income.png" style="width:30%">
  </div>

</div>
<div class="footer">
  <h2><marquee>WE BELIVE IN BEST QUALITY & SERVICES</marquee></h2>
</div>




</body>
</html>