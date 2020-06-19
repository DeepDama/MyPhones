<?php
session_start();
header('location:index.html');
$server="localhost";
$uid="root";
$pwd="";
$db="signin";
$con =new mysqli($server,$uid,$pwd,$db);
if($con->connect_error)
{
	die("connection failed".connect_error());
}
else
{
	echo("connection successful");
} 
$n=$_POST["uname"];
$p=$_POST["pwd"];

$sql="insert into signin(uname,pwd)
values('$n','$p')";
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
