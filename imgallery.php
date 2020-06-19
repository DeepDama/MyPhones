<?php
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