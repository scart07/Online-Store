<html>
	<head>
		<title>KIDS</title>
			
		<link rel="stylesheet" type="text/css" href="css/FilterPanel.css">
		<?php
			$conn = mysqli_connect( "localhost" , "root" , "" , "KIDS" );
			if(!$conn){
				die("unable to connect" . mysqli_error());
				}
		?>
	</head>
	<body>
		<nav id="Category_Filter">
			<h3>FILTER</h3>
			
			
			<h3>Footwear</h3>
			<ul type="none" class="Filter_List">
				<li>LIFESTYLE</li>
				<li>RUNNING</li>
				<li>SOCCER</li>
				<li>BASKETBALL</li>
			</ul>
			<br>

			<h3>Clothing</h3>
			
			<ul type="none" class="Filter_List">
				<li>Jacket & Hoodies</li>
				<li>T-Shirts</li>
				<li>Jerseys</li>
			</ul>
			<br>
			<h3>Accessories</h3>
			<ul type="none" class="Filter_List">
				<li>BAGS</li>
				<li>SOCKS</li>
				<li>BOTTLES</li>
			</ul>
		</nav>

		<main>
				<section id="display_content">
					<table id="content_table">
						<tr>
							<th colspan="3" align="left">Showing Contents</th>
							<th colspan="1">Sort BY:</th>
						</tr>

						<!- php for displaying Kids hoodies-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM JACKET_HOODIES";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							$count = 0;
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		
						
						<!- php for displaying kids jerseys-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM JERSEYS";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		
							
						<!- php for displaying kids soccer boots-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM SOCCER_SHOES";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		


						<!- php for displaying kids basketball shoes-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM BASKETBALL_SHOES";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}

						?>	

						<!- php for displaying kids T-shirts-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM TEE_TANKS";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		
							
						
						<!- php for displaying kids LifestyleShoes-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM LIFESTYLE";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		
																			

						<!- php for displaying kids RunningShoes-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM RUNNING";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>		
						

						<!- php for displaying kids socks-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM SOCKS";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>	


							<!- php for displaying kids bags-!>
						<?php							
							$sql = "SELECT ID,NAME,SRC FROM BAGS";

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 4 == 0){echo "<tr>";}
												
									$src = $row["SRC"];
									echo "<td><img src='$src' width='300px' height='300px'></img></td>";

									$count++;
									if($count % 4 == 0){echo "</tr>";}
								}				
							}
						?>	
					</table>

				</section>
		</main>	
	</body>
</html>