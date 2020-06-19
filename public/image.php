<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Image Insertion</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<h2 align="center">Image Insertion...</h2>
		<table align="center">
			<tr>
				<td><label>Image</label></td>
				<td><label>:</label></td>
				<td><label><input type="file" name="img" required></label></td>
			</tr>
			<tr>
				<td><label></label></td>
				<td><label></label></td>
				<td><label><input type="submit" name="save_btn" value="SAVE"></label></td>
			</tr>
			
			
		</table>
	</form>
	<?php
		if (isset($_POST['save_btn']))
		 {
			if ($con = mysqli_connect('localhost', 'root','', 'photopath'))
			 {
				$filetemp = $_FILES['img']['tmp_name'];
				$filename = $_FILES['img']['name'];
				$filetype = $_FILES['img']['type'];
				$filepath = "images/".$filename;

				move_uploaded_file($filetemp, $filepath);

				$query = mysqli_query($con,"call imageInsert('$filename', '$filepath', '$filetype')");
				if ($query)
				 {
				 	echo "Image Inserted successfully";
				}

				else{

					echo "insertion failed";
				}

			 }
		 }
		 ?>

</body>
</html>