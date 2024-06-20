<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    table{
      padding: 50px;
      border-spacing: 20px;
      background-color: ;
    }
    body{
      background-color: #8585ad;
    }
  </style></head>
<body>

<h1>INCOME CERTIFICATE APLLICATIONS  ARE</h1>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="document";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);



	$sql =" SELECT id, firstname, lastname, contact, gender
FROM income  ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" width="1500px" align="center" bgcolor="#f9e6ff">
    <div>
  <tr>
    <td><?php echo "<h4>ADHAR NUMBER:&nbsp;{$row['id']}</h4>";?></td>
    <td><?php echo "<h4>FIRST NAME:&nbsp;{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>LAST NAME:&nbsp;{$row['lastname']}</h4>";?></td>
    <td><?php echo "<h4>CONTACT:&nbsp;{$row['contact']}</h4>";?></td>
    <td><?php echo "<h4>GENDER:&nbsp;{$row['gender']}</h4>";?></td>
  </tr>

  </div>
  </table>
  <?php
  }
}
else
{
  echo"<h3>incorrect deta</h3>";
}
  

mysqli_close($conn);

?>
</body>
</html>
