<?php

$email=$_POST['Email'];
$password=$_POST['Password'];

$username=stripcslashes($email);
$password=stripcslashes($password);

$con=mysqli_connect("localhost","root","","Webstacks");

$result=mysqli_query($con,"select * from Log_in where Email_address='$email' and Password='$password'")
or die("Failed to query database.mysql_error()");

$row=mysqli_fetch_array($result);
if($row['Email_address']==$email and $row['Password']==$password)
{
	header("Location:http://localhost/The%20final/WebstacksLoggedIn.php"); 
}
else
{
	header("Location:http://localhost/The%20final/Log_in.php"); 
}

?>







