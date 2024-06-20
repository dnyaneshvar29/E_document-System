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
  
  $userid=$_POST['userid'];
 
  

  $sql =" SELECT userid, firstname, lastname, mobile, username, password, email
FROM register WHERE userid='$userid'  ";

 $retval=mysqli_query($conn,$sql);

if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  { 
  ?>
  <table border="2" width="1500px"  height="50" width="1500">
  <tr>
    <td><?php echo "<h4>ADHAR NUMBER:&nbsp;{$row['userid']}</h4>";?></td>
    <td><?php echo "<h4>FIRST NAME:&nbsp;{$row['firstname']}</h4>";?></td>
    <td><?php echo "<h4>LAST NAME:&nbsp;{$row['lastname']}</h4>";?></td>
    <td><?php echo "<h4>MOBILE:&nbsp;{$row['mobile']}</h4>";?></td>
    <td><?php echo "<h4>USERNAME:&nbsp;{$row['username']}</h4>";?></td>
    <td><?php echo "<h4>PASSWORD:&nbsp;{$row['password']}</h4>";?></td>
    <td><?php echo "<h4>EMAIL:&nbsp;{$row['email']}</h4>";?></td>
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

