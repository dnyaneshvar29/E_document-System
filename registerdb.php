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
	$userid=$_POST['userid'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	


$sql="INSERT INTO register(userid, firstname, lastname, mobile, username, password, email) VALUES ('$userid','$firstname','$lastname',
	'$mobile','$username','$password','$email')";
if(mysqli_query($conn,$sql))
{
	echo "<h1>REGISTERED.. SUCCESFULLY </h1>";
}
else
{
	echo "<h1> SORRY .? THERE IS AN ERROR TO REGISTERED </h1>".mysqli_error($conn);;
}

}

mysqli_close($conn);
?>