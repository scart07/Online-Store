<html>
	<head>
		<title>DATABASE FORM</title>
	</head>
	<body>
			
		<form method="post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/formdata">
			<table>
					<tr>
							<th>ASSOCIATION</th>
							<th>VALUES</th>
					</tr>

					<tr>
							<td>id</td>
							<td><input type="number" name="id" value=""></td>
					</tr>

					<tr>
							<td>name</td>
							<td><input type="text" name="name" value=""></td>
					</tr>

					<tr>
							<td>Src of file</td>
							<td><input type="text" name="src" value=""></td>
					</tr>

					<tr>
							<td>Name OF Brand</td>
							<td><input type="text" name="brand" value=""></td>
					</tr>

					<tr>
							<td>Price</td>
							<td><input type="number" name="price" value=""></td>
					</tr>

					<tr>
							<td>Mfg Date</td>
							<td><input type="Date" name="mfg" value=""></td>
					</tr>

					<tr>
							<td>Description</td>
							<td><textarea name = "description" ></textarea></td>
					</tr>

					<tr>
							<td>Popularity</td>
							<td><input type = "number" max-value= "10" value=""></td>
					</tr>







			</table>
		</form>

	</body>
</html>