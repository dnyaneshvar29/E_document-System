<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="document";
	

	//create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']))

{
	//getting values from form
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$date=$_POST['Cdate'];
	
	
	


$sql="INSERT INTO caste(id, firstname, lastname, contact, gender, Cdate) VALUES 
('$id','$firstname','$lastname','$contact','$gender','$date')";

if(mysqli_query($conn,$sql))
{
	echo "<h1>SUBMITTED .. SUCCESFULLY </h1>";

}
else
{
	echo "<h1> SORRY .? THERE IS AN ERROR TO SUBMITTED </h1>".mysqli_error($conn);;
}

}

mysqli_close($conn);
?>
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
</head>
<body>
	<table>
		<tr>
			<td>
				<p>
					<b>
						PLEASE MAKE PAYMENT OTHERWISE YOUR APPLICATION WILL NOT BE CONFIRM <br>
						THESE IS AUTO GENRATED AMOUNT OF RUPEES OF 80 RS.
					</b>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center">
				<img src="images/qr.png" height="250px" width="250px">
			</td>
		</tr>
		<tr align="center">
			<td>
					<a href="home.php"><button type="button" class="btn btn-primary">LOGOUT</button></a>
			</td>
		</tr>
	



</table>
</body>
</html>