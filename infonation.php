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

h2{
 border-style: dotted;
  font-family: algerian, courier ,serif;
  font-style: italic;
  
}body{
  background-color:#eeffe6;
}
h4{
  font-style: italic;
  font-size: 20px;
}
p{
  text-align: center;
  font-size: 30px;
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
      <li class="active"><a href="login.php">
        <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li class="active"><a href="register.php">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Register</a></li>
      
    </ul>
  </div>
</nav>
<h3><b><u>Required Documents:-</b></u>
      <br><br><br>
        1) Certificate of age proof such as birth certificate, school certificate, etc<br>
        2)Address Proof: Ration Card / Voter ID /Passport/ Driving License /Electricity bill/ Water bill / property tax receipt.<br>
        3)Photograph: Applicant passport size photograph.<br>
        4)Identity Proof: Aadhar Card / Voter ID /Driving License.<br>
        5)Proof of Income: Form 16 if salaried, income tax return statement, salary slip.<br>
</h3>
<p>CLICK HERE TO REGISTERED FOR NATIONALITY</p>
<p><a href="login.php"><button class="btn btn-success">APPLY FOR NATIONALITY</button></a></li></p>


</body>
</html>