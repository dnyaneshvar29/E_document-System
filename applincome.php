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
form 
{
      position: absolute;
      right: 300px;
      width: 1000px;
      padding: 20px;
      font-size: 20px;
      border-style: solid;
}
h3{
 
  font-family: algerian, courier ,serif;
  font-style: italic;
  
}
body{
  background-color: #ccccff;
}


</style>




</head>
<body>
<!-----------------------------------------header------------------- -->

  <div >
    <h1>E-DOCUMENT SYSTEM</h1>
    <p>&nbsp;&nbsp;All government certificates are available at one place</p>
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
      <li class="active"><a href="homelogin.php">
        <span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li class="active"><a href="register.php">
        <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Register</a></li>
      
    </ul>
  </div>
</nav>
<h2><label> INCOME CERTIFICATE APPLICATION FORM</label></h2>
<div class="apply"></div>
<form action="dbincome.php" method="post">
  <table align="center">
    <tr>
      <td>
        <label>Enter the aadhar number&nbsp;:&nbsp;</label><input type="text" name="id" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>First Name&nbsp;:&nbsp;</label><input type="text" name="firstname" required><br><br>
      </td>
      <td>
        <label>&nbsp;&nbsp;Last Name&nbsp;:&nbsp;</label><input type="text" name="lastname" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Contact&nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="contact" required><br><br>
      </td>
      <td>
        <label>Gender&nbsp;:&nbsp;&nbsp;&nbsp;</label>
        <label><input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;</label>
        <label><input type="radio" name="gender" value="Female">Female</label><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Enter Date&nbsp;:&nbsp;</label><input type="date" name="Cdate" required><br><br>
      </td>
      </tr>
    <tr>
      <td>
        <label><h4>UPLOAD THE DOCUMENT</h4></label><br><br>
      </td>
    </tr>
    <tr>
      <td><b>PLZ SHARE THE DOCUMENT ON BELOW MAIL ID IN PROPER FORMAT</b></td>
    </tr>
    <tr align="center"><td><b>E-DOCUMENT@gmail.com</b></td></tr>
    <tr>
      <td>
        <h4>NAME:<br>
          ADDRESS:<br>
          SIGN:<br>
          PHOTO:<br>
          ADHAR CARD:<br>
          PAN CARD:<br>
          LICENSE:<br>
          RATION CARD:<br>
        </h4>
    </td>
    </tr>
    <tr>
      <td>
        <h2 align="center"><input type="submit" class="btn btn-success" value="submit" name="submit"></h2><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <div class="footer">
  <h3><marquee>WE BELIVE IN BEST QUALITY & SERVICES</marquee></h3>
</div>
      </td>
    </tr>
    
  </table>
  
</form>








</body>
</html>