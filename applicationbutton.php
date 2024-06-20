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
  text-align: center;
	
  font-size: 100px;

}
h4{

  font-style: italic;
  font-size: 20px;
}
h2{
 border-style: dotted;
  font-family: algerian, courier ,serif;
  font-style: italic;
  
}
body{
  background-color: #99e699;
}



</style>




</head>
<body>
<!-----------------------------------------header------------------- -->

  <div >
    <h1>E-DOCUMENT SYSTEM</h1>
    <h4>&nbsp;&nbsp;All government certificates are available at one place</h4>
  </div>
	<!-----------------------------------------navbar------------------- -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="adminlogin.php">Admin</a>
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
      <li class="active"><a href="login.php.php">
        <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li class="active"><a href="register.php">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Register</a></li>
      
    </ul>
  </div>
</nav>



<!--------------------------------------------------------------------------- Photo Grid -------------------------------->
<h3><b><u>CLICK HERE TO APPLY</u></b></h3>
<div class="row"> 
	<div class="column">
    <p><a href="applcast.php"><button type="button" class="btn btn-primary">Caste Certificate</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="applvalidity.php"><button type="button" class="btn btn-primary">Caste Validity</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="applincome.php"><button type="button" class="btn btn-primary">Income Certificate</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    
  </div> 
  <br><br><br><br><br><br>

  <div class="column">
    
    <p><a href="applnoncreamy.php"><button type="button" class="btn btn-primary">Non-Creamy layer</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="appldom.php"><button type="button" class="btn btn-primary">Domicile </button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="applnation.php"><button type="button" class="btn btn-primary">Nationality</button></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </p></div>

</div>
<div class="footer">
  <h2><marquee>WE BELIVE IN BEST QUALITY & SERVICES</marquee></h2>
</div>




</body>
</html>