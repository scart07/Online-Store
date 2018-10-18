<!DOCTYPE html>

<html>
	<head>
		<title>MEN</title>
			
		<meta charset="UTF-8">	

		<meta name="viewport" content="width=device-width, initial-scale=1.0">		
		
		<link rel="stylesheet" type="text/css" href="css/FilterPanel.css">

		<script src="js/Timer.js"></script>
			
	</head>

	<body>
		<header id="header">
			<nav id="topbar">
        	<ul type="none" class="top_menu_list">
            	<li id="LogoMenu" class="menu_bar">SportStore
            	</li>
        
            
            	<li id="HomeMenu" class="menu_bar">Home 
            	</li>
        
            	<li id="MenMenu" class="menu_bar"><a href="men.php">Men</a> 
            	</li>
        
           		 <li id="WomenMenu" class="menu_bar"><a href="women.php">Women</a> 
            	</li>
        
             	<li id="KidsMenu" class="menu_bar"><a href="kids.php">Kids</a> 
            	</li>
        
            	<li id="AccessoriesMenu" class="menu_bar">Accessories 
            	</li>
        
           
                    
            	<li id="SearchMenu" class="menu_bar">
            		<input type="search" placeholder="search your favourite">
            	</li>

        	</ul>
       
    		</nav>
			
		</header>
	
		
		<nav id="Category_Filter" >
			<h3>FILTER</h3>
			
			
			<a href="men.php?id=<?php echo "1234"; ?>"><h3>Footwear</h3></a>
			<ul type="none" class="Filter_List">
				<a href="men.php?id=<?php echo "1"; ?>"><li>LIFESTYLE</li></a>
				<a href="men.php?id=<?php echo "2"; ?>"><li>RUNNING</li></a>
				<a href="men.php?id=<?php echo "3"; ?>"><li>SOCCER</li></a>
				<a href="men.php?id=<?php echo "4"; ?>"><li>BASKETBALL</li></a>
			</ul>
			<br>

			<a href="men.php?id=<?php echo "567"; ?>"><h3>Clothing</h3></a>
			
			<ul type="none" class="Filter_List">
				<a href='men.php?id=<?php echo "5"; ?>'><li>Jacket & Hoodies</li></a>
				<a href='men.php?id=<?php echo "6"; ?>'><li>T-Shirts</li></a>
				<a href='men.php?id=<?php echo "7"; ?>'><li>Jerseys</li></a>
			</ul>
			<br>
			
			<a href='men.php?id=<?php echo "89"; ?>'><h3>Accessories</h3>
			<ul type="none" class="Filter_List">
				<a href='men.php?id=<?php echo "8"; ?>'><li>BAGS</li></a>
				<a href='men.php?id=<?php echo "9"; ?>'><li>SOCKS</li></a>
				<a href="#Bottles"><li>BOTTLES</li></a>
			</ul>

			<ul type="none" >
				<a href='men.php?id=<?php echo ""; ?>'><li><input type="button" value="RESET FILTER" ></li></a>
			</ul>

		</nav>

		

		<main>
				<section id="display_content">
					<table id="content_table">
					
						<tr>
							<td colspan="3" id="banner">
								
								<input type="button" value="1" onclick="BannerMovement(0)" class="banner_buttons">
								<input type="button" value="2" onclick="BannerMovement(1)" class="banner_buttons">
								<input type="button" value="3" onclick="BannerMovement(2)" class="banner_buttons">
								<input type="button" value="4" onclick="BannerMovement(3)" class="banner_buttons">
				
							</td>
						</tr>

						<tr>
							<th colspan="2" align="left">Showing Contents:</th>
							<th colspan="1" id="sort_by">SORT BY:
								<form action="men.php">	
									<select name="SelectSort" >
											<option value="0">DEFAULT</option>
											<option value="1">Price: High To Low</option>
											<option value="2">Price: Low To High</option>
											<option value="3">Newest</option>								
									</select>
										
										<input type="number" value="<?php 
											if(isset($_GET['id']))
												{echo $_GET["id"];}
											else{echo "";}
										?>" name="id" hidden>
									
										<input type="submit" value="GO" style="border-radius:15px;" >
								</form>
								
								
							</th>
						</tr>

						<?php
							if(isset($_GET['id'])){
								$id = $_GET['id'];
							}
							else{$id = 0;}
							static $count = 0;
							if($id == 1){
								echo Lifestyle();
							}
							elseif($id == 2){
								echo Running();
							}
							elseif($id == 3){
								echo Soccer();
							}
							elseif($id == 4){
								echo Basketball();
							}
							elseif($id == 1234){
								echo Lifestyle();
								echo Running();
								echo Basketball();
								echo Soccer();
							}
							elseif($id == 5){
								echo Hoodies();
							}
							elseif($id == 6){
								echo Tshirts();
							}
							elseif($id == 7){
								echo Jerseys();
							}
							elseif($id == 567){
								echo Hoodies();
								echo Tshirts();
								echo Jerseys();
							}
							elseif($id == 8){
								echo Bags();
							}
							elseif($id == 9){
								echo Socks();
							}
							elseif($id == 89){
								echo Bags();
								echo Socks();
							}
							else{
								echo Lifestyle();
								echo Running();
								echo Basketball();
								echo Soccer();
								echo Hoodies();
								echo Tshirts();
								echo Jerseys();
								echo Bags();
								echo Socks();
							}


						?>
					
						<!- php for displaying men hoodies-!>
						<?php
						function Hoodies(){
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JACKET_HOODIES";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JACKET_HOODIES ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JACKET_HOODIES ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JACKET_HOODIES ORDER BY MFGDATE DESC";

							}
							
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
							}				
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
									
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);	
						}

						
						?>	

						

						
						<!- php for displaying mens jerseys-!>
						<?php
						function Jerseys(){	
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JERSEYS";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JERSEYS ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JERSEYS ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM JERSEYS ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							
							

							$result = mysqli_query($conn , $sql);

							

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>	

						</div>

						
							
						<!- php for displaying men soccer boots-!>
						<?php
						function Soccer(){			
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCCER_SHOES";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCCER_SHOES ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCCER_SHOES ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCCER_SHOES ORDER BY MFGDATE DESC";

							}
														

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}


							$ROW_NUM = mysqli_num_rows($result);
							
							global $count ;

							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>		
						


						
						<!- php for displaying men basketball shoes-!>
						<?php	
						function Basketball(){		
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BASKETBALL_SHOES";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BASKETBALL_SHOES ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BASKETBALL_SHOES ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BASKETBALL_SHOES ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;

							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>	
						
						

						

						<!- php for displaying men T-shirts-!>
						<?php	
						function Tshirts(){	
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM TEE_TANKS";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM TEE_TANKS ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM TEE_TANKS ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM TEE_TANKS ORDER BY MFGDATE DESC";

							}
							


							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
							}					
							

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>		
						


							
						<!- php for displaying men LifestyleShoes-!>
						<?php	

						function Lifestyle(){	
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM LIFESTYLE";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM LIFESTYLE ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM LIFESTYLE ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM LIFESTYLE ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
							}					

							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
									
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>		
																			

						<!- php for displaying men RunningShoes-!>
						<?php	
						function Running(){		
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM RUNNING";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM RUNNING ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM RUNNING ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM RUNNING ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
								}				
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;
							
							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>		
						


						<!- php for displaying men socks-!>
						<?php
						function Socks(){
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCKS";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCKS ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCKS ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM SOCKS ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
							}						
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;

							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>	
					
						<!- php for displaying men Bags-!>
						<?php	
						function Bags(){
							if(isset($_GET['SelectSort'])){				
								$ordernum = $_GET['SelectSort'];
							}
							else{
								$ordernum = 0;
							}

							if($ordernum == 0){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BAGS";
							}	
							if($ordernum == 1){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BAGS ORDER BY PRICE DESC";

							}
							if($ordernum == 2){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BAGS ORDER BY PRICE ASC";

							}
							if($ordernum == 3){
								$sql = "SELECT ID,NAME,SRC,PRICE FROM BAGS ORDER BY MFGDATE DESC";

							}
							

							$conn = mysqli_connect( "localhost" , "root" , "" , "MEN" );
							if(!$conn){
								die("unable to connect" . mysqli_error());
							}						
							
							$result = mysqli_query($conn , $sql);

							if(!$result){
								echo "unable to select data";
							}

							$ROW_NUM = mysqli_num_rows($result);
							
							global $count;

							if($ROW_NUM > 0){
								
								while($row = mysqli_fetch_assoc($result)){
									
									
									if($count % 3 == 0){echo "<tr>";}
												
									$name = $row["NAME"];			
									$src = $row["SRC"];
									$price = $row["PRICE"];
									echo "<td>
											<img src='$src' class='content_image'>
											<article class='content_name'>$name</article>
											<article class='content_price'>"."$"."$price</article>
											<input type='submit' value='VIEW DETAILS' class='content_view'>
											
										</td>";
									$count++;
									if($count % 3 == 0){echo "</tr>";}
								}				
							}
							mysqli_close($conn);
						}
						?>	
						
						
					</table>

				</section>
		</main>	

		<footer>
			<!-- <ul type="none">
				<li style="position:relative; top:40px; left:500px; text-decoration: bold">Our Services</li>
				<li style="position:relative; top:50px ;left:500px;">Online Shopping</li>
				<li style="position:relative; top:60px ;left:500px; text-decoration: bold;">Online Help Line</li>
				<li style="position:relative; top:70px ;left:500px; text-decoration: bold;">News & Updates</li>
				<li style="position:relative; top:80px ;left:500px; text-decoration: bold;">FAQ/Contact</li>
				
			</ul>
			<ul type="none">
				<li style="position:relative; top:-130px ;left:900px; text-decoration: bold;">Information</li>
				<li style="position:relative; top:-120px ;left:900px;">Terms & Condition</li>
				<li style="position:relative; top:-110px ;left:900px;">License</li>
				<li style="position:relative; top:-100px ;left:900px;">Privacy & Policy</li>
				<li style="position:relative; top:-90px ;left:900px;">Contact Us</li> 
			</ul>
			<p style="position: relative; top:-80px; left:550px;">Copyright 2018. All Rights Reserved.</p>
 -->
		</footer>

	
	</body>
</html>