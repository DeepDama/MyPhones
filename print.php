<?php
session_start();
$user=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sessionpractical');
error_reporting(0);
$query="SELECT * FROM `photopath` WHERE username='$id'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);

if ($total!=0) {
	?>
	<head>
		<style type="text/css">
			body{
			}
			
			#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}
h1{
	background-color: grey;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
			
		
		</style>
		<script type="text/javascript">
			function makepdf()
			{
				var printMe=document.getElementById('customers');
				var wme=window.open("","","width:700,height:900");
				wme.document.write(printMe.outerHTML);
				wme.document.close();
				wme.focus();
				wme.print();
				wme.close();
			}
		</script>
	</head>

	<h1 align="center" color="white">PRODUCT DETAIL</h1>

	<table id="customers" align="center">
		<tr bgcolor="#1a8deb">
	<td>username</td>
	<td>product</td>
</tr>
	

	<?php
	
	while ($result=mysqli_fetch_assoc($data)) {

echo "<tr>
	<td>".$result['username']."</td>
	<td>".$result['product']."</td>
</tr>";
		
	}
	
}
else{
	echo "<h1>no records found....</h1>";
}

?>
</table>
<button style="color: red" onclick="makepdf()">CLICK ME to generate pdf</button>
