<?php
$servername="localhost";
$username="root";
$password="";
$dbname="document";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'document');

if(isset($_POST['login']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$sql =" SELECT userid, firstname, lastname, mobile, username, password, email
FROM register WHERE username='$username' and password= '$password' ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
        { 
            //..............here is booking .php//
            
						require("applicationbutton.php");
        }
        else
        {
            echo '<h1>The username or password are incorrect!</h2>';
        }


	}
mysqli_close($conn);


?>


