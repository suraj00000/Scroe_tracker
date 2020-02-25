<!DOCTYPE HTML>

	<head>
		<title color:#25500	>SCORE TRACKER </title>
		<link rel="stylesheet" type="text/css" href="hm.css">
		
	</head>
		<body background="MAIN.JPG">
				<?php
					session_start();
?>
				
			<center>
			<header id="header">
				<h1>SCORE TRACKER</h1> <span></span></a></div>
			</center>
			<div class="topnav">
				    		<a class="active" href="hm.html">HOME</a>
							<?php				
				    		if(isset($_SESSION["id"]))
				    		{
				    			?>
				    			<a class="active" href="logout.php">Logout</a> 	
				    			<?php
				    		}
				    		else
				    		{?>
				    			<a class="active" href="l1.php">Login</a>
				    		<?php
				    		}
				    		 ?>
			</div>
	<center>
				    	
				    		<br><br>
				    		<div class="logo">
				    			<br><br>
				    			
				    			
				 
				   <form method="post" action="">
				   	<input type="submit" class="button" name="mat" value="Start Single Match" ><br><br>
				   	<input type="submit" class="button" name="tour" value="Start Tournament"><br><br>
				   	<input type="submit" class="button" name="history" value="History"><br><br>				 
				   
				</div>

				<?php
						if(isset($_POST['mat']))
						{
							if(isset($_SESSION["id"]))
							{
								header("Location:mat.php");//window open for start match
							}
							else
							{
								//popup
							}
						}				
				?>
				 <style type="">        
                .button{
	 	display:inline-black;
	 	padding:15px 25px;
	 	font-size: 26px;
	 	cursor:pointer;`
	 	font-weight: bold;
	 	width: 400px;
	 	height:70px;
	 	text-align: center;
	 	text-decoration: none;
	 	outline: none;
	 	color:#fff;
	 	background-color: #0012ff;
	 	border:none;
	 	border-radius: 5px;
	 	box-shadow: 0 9px #000674;
	 }
	 .button:hover{
	 	background-color: #0211DD;
	 	button:active;
	 	background-color: #0012ff;
	 	box-shadow: 0 5px #666;
	 	text-decoration-style: (4px)

	 }
	</style>
			</header>
		</center>

	</body>
	</html>