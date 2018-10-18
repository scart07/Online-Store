<html>
	<head>
		<title>phpAdministration</title>
	</head>
	<body>
		<?php

			$conn = mysqli_connect("localhost" , "root" , "" , "MEN" );

			if(!$conn){
				die("unable to connect to server ". mysqli_error());
			}
			else{ echo "Connection successful"."<br>";}

			$sql = "CREATE TABLE OUTDOOR_GAMES( 
			ID INT(4) AUTO_INCREMENT PRIMARY KEY,
			NAME VARCHAR(50) NOT NULL,
		 	SRC VARCHAR(100) , 
		 	BRAND VARCHAR(20) , 
		 	PRICE FLOAT(4) , 
		 	MFGDATE DATE,
		 	DESCRIPTION VARCHAR(200) , 
		 	POPULARITY INT(1) 
		 	)";

		 	$sql1 = "DROP TABLE JACKET_HOODIES";

			
		 	$sql2 = "INSERT INTO jacket_hoodies(id,name,src)  VALUES('1' , 'Adidas_Black_Hoodie' , 'IMAGE/MEN/JACKET.JPG');";

		 	$result = mysqli_connect( $conn , $sql2);

			if($result){
				echo "sql query successful";
			}
			else{
				die("sql query unsuccessfull". mysqli_error() );
			}
		?>

	</body>
</html>