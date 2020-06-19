<?php
$server="localhost";
$uid="root";
$pwd=" ";
$db="login";
$con= new mysqli($server,$uid,$pwd,$db);
if($con->connect_error)
{
	die("connection failed".connect_error());
}
else
{
	echo("connection successful");
} 
$n=$_POST("uname");
$r=$_POST("pwd");
$sql="insert into login($name,roll)
values('$n',$r)";
if($can->query($sql)==true)
{
	echo"record successful";
}
else
{
	echo"nt inserted";
}
?>