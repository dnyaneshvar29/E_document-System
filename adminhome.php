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
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php"><button class="btn btn-success">HOME</button></a></li>
      <li><a href="admin/register.php"><button class="btn btn-success">REGISTERED DETAILS</button></a></li>
      <li><a href="admin/caste.php"><button class="btn btn-success">CASTE DETAILS</button></a></li>
      <li><a href="admin/validity.php"><button class="btn btn-success">CASTE VALIDITY DETAILS</button></a></li>
      <li><a href="admin/domicile.php"><button class="btn btn-success">DOMICILE DETAILS</button></a></li>
      <li><a href="admin/noncreamy.php"><button class="btn btn-success">NON CREAMY LAYER DETAILS</button></a></li>
      <li><a href="admin/income.php"><button class="btn btn-success">INCOME DETAILS</button></a></li>
      <li><a href="admin/payment.php"><button class="btn btn-success">PAYMENT DETAILS</button></a></li>
    </ul>
    </div>
</nav>

<!.................................../details/...............................>

<form action="admin/searchbyadhar.php" method="post">
 <table>
  <tr>
    <td>
      <h4>
        <label>SEARCH REGISTERED USER BY ID :</label>&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Search.." name="userid">
        <input type="submit" class="btn btn-primary" value="search" name="search">
      </h4>
    </td>
  </tr>
  </table> 
</form>
<form action="admin/searchcaste.php" method="post">
 <table>
    <tr>
      <td>
        <h4>
          <label>SEARCH CASTE APPL BY Date : :</label>&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="Cdate">
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h4>
      </td>
    </tr>
  </table> 
</form>

<form action="admin/searchvalidity.php" method="post">
 <table>
    <tr>
      <td>
        <h4>
          <label>SEARCH VALIDITY APPL BY Date : :</label>&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="Cdate">
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h4>
      </td>
    </tr>
  </table> 
</form>

<form action="admin/searchdomicile.php" method="post">
 <table>
    <tr>
      <td>
        <h4>
          <label>SEARCH DOMICILE APPL BY Date : :</label>&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="Cdate">
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h4>
      </td>
    </tr>
  </table> 
</form>

<form action="admin/searchnoncreamy.php" method="post">
 <table>
    <tr>
      <td>
        <h4>
          <label>SEARCH NON CREAMY APPL BY Date: :</label>&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="Cdate">
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h4>
      </td>
    </tr>
  </table> 
</form>

<form action="admin/searchincome.php" method="post">
 <table>
    <tr>
      <td>
        <h4>
          <label>SEARCH INCOME APPL BY Date : :</label>&nbsp;&nbsp;&nbsp;<input type="date" placeholder="Search.." name="Cdate">
          <input type="submit" class="btn btn-primary" value="search" name="search">
        </h4>
      </td>
    </tr>
  </table> 
</form>




</body>
</html>

