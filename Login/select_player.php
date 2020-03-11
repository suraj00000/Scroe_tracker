<html>
<head>
	<title> Opening Players</title>
</head>
<body>
	<h1> Select Opening Players </h1> <br><br>
	<h3> Enter Striker Name: </h3>
	<form method="POST" action="">
	<input type="text" name="striker"> <br><br>
	<h3> Enter Non-Striker: </h3>
	<input type="text" name="n_striker"> <br><br>
	<h3> Enter Opening Bowler </h3>
	<input type="text" name="bowler"> <br>
	<br><input type="submit" name="submit" value="Start Match">
</form>
</body>
</html>
	<?php
	if(isset($_POST['submit']))
	{
		//first check if all the values are entered and if all the values are entered thn redirect ot next page
		header("Location:start_match.php");
	}
		
	?> 

