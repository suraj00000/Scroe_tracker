<!DOCTYPE HTML>

	<head>
		<title>SCORE TRACKER </title>
		<link rel="stylesheet" type="text/css" href="hm.css">
		
	</head>
		<body background="MAIN.JPG">
				<?php
					session_start();
				?>
				
			<center>
			<header id="header">
				<h1><font color="green">SCORE TRACKER</font></h1> </div>
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
			 <img src="C:\Users\JAYMEEN\Downloads\jalu\cricket.jpg" height="100px"></img>
		<center>
				    		<br><br>

				<?php
						// if(isset($_POST['mat']))
						// {
							if(isset($_SESSION["id"]))
							{
								//header("Location:mat.php");//window open for start match
								?>
								
				    			<br><br>
				    			<a class="button1" href="mat.php" target="_blank">Start Single Match</a><br><br>
				    			<br><a class="button2 " href="" target="_blank">Start tournament</a><br><br>
				    			<br><a class="button3" href="" target="_blank">History</a><br><br>
				   				
				   			<?php
							}				
							?>
				 <style type="">        
                
     .button1{
	 	padding:15px 30px;
	 	font-size: 26px;
	 	cursor:pointer;
	 	font-weight: bold;
	 	text-decoration: none;
	 	color:#fff;
	 	background-color: #0012ff;
	 	border:none;
	 	border-radius: 50px;
	 	box-shadow: 0 9px #000674;


	 }
	 .button2
	 {
	 	display: inline-block;
	 	padding:15px 40px;
	 	font-size: 26px;
	 	cursor:pointer;
	 	font-weight: bold;
	 	text-decoration: none;
	 	color:#fff;
	 	background-color: #0012ff;
	 	border:none;
	 	border-radius: 50px;
	 	box-shadow: 0 9px #000674;
	 }
	 .button3
	 {
	 	padding:15px 95px;
	 	font-size: 26px;
	 	cursor:pointer;
	 	font-weight: bold;
	 	text-decoration: none;
	 	color:#fff;
	 	background-color: #0012ff;
	 	border:none;
	 	border-radius: 50px;
	 	box-shadow: 0 9px #000674;

	 }
	</style>
			</header>
		</center>

	</body>
	</html>

