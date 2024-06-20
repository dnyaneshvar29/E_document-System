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
	font-size: 60px;
}
h2{
 border-style: dotted;
  font-family: algerian, courier ,serif;
  font-style: italic;
  
}
body{
  background-color:#c2d1f0;
}
body
    {
      background-color: #f2d9d9;
    }
  form
    {
      position: absolute;
      right: 100px;
      width: 600px;
      padding: 10px;
      font-size: 20px;
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



<!-------------------------these is login code-------------------->
<h2>ADMIN LOGIN HERE</h2>
<div class="login">
<form action="dbadminlogin.php" method="post">
 <table>
  <br><br>
    <tr>
      <td>
          <label>Username &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="text" name="username" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <label>Password &nbsp;&nbsp;:&nbsp;&nbsp;</label><input type="password" name="password" required><br><br>
      </td>
    </tr>
    <tr>
      <td>
        <p align="center"><input type="submit" class="btn btn-primary" value="login" name="login"></p><br><br>
      </td>
    </tr>
    



 </table> 

</form>

</div>







</body>
</html>