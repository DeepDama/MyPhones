<?php
session_start();
header('location:signin.php');
$server="localhost";
$uid="root";
$pwd="";
$db="signuppage";
$con =new mysqli($server,$uid,$pwd,$db);
if($con->connect_error)
{
	die("connection failed".connect_error());
}
else
{
	echo("connection successful");
} 
$f=$_POST["FirstName"];
$l=$_POST["LastName"];
$e=$_POST["Email"];
$n=$_POST["Username"];
$p=$_POST["Password"];

$sql="insert into signuppage(FirstName,LastName,Email,Username,Password)
values('$f','$l','$e','$n','$p')";
echo "<br>";
if($con->query($sql)==false)
{
	echo"record unsuccessful";

}
else
{
echo " inserted";
}
?>
