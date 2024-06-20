<?php
$servername="localhost";
$username="root";
$password="";
$dbname="document";


//create conection
$conn=mysqli_connect($servername,$username,$password,$dbname);

mysqli_select_db($conn,'document');

if(isset($_POST['search']))
{
  
  $Cdate=$_POST['Cdate'];
 
  

  $sql =" SELECT id, firstname, lastname, contact, gender, Cdate
FROM dom WHERE Cdate='$Cdate'  ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" width="1500px"  height="50" width="1500">
  <tr>
    <td><?php echo "<h4>ADHAR NUMBER:&nbsp;{$row['id']}</h4>";?></td>
    <td><?php echo "<h4>FIRST NAME:&nbsp;{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>LAST NAME:&nbsp;{$row['lastname']}</h4>";?></td>
    <td><?php echo "<h4>CONTACT:&nbsp;{$row['contact']}</h4>";?></td>
    <td><?php echo "<h4>GENDER:&nbsp;{$row['gender']}</h4>";?></td>
     <td><?php echo "<h4>date:&nbsp;{$row['Cdate']}</h4>";?></td>
  </tr>
  
  </table>
  <?php
  }
}
else
{
  echo"<h1>NO USER FOUND ON THESE ID</h1>";
}
  

mysqli_close($conn);
}
?>

