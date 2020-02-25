<html>
<head> <title> Scoring Portal </title></head>
<body>
	<form method="POST" action="">
		Host team:
	<input type="text" name="t1"><br>
		Visitor team:
	<input type="text" name="t2"><br>
	Spin the toss? 
	<input type="submit" name="check" value="Yes"><br>
	Toss won by?<br>
	<?php
		if(isset($_POST['check']))
		{
			$toss=check();
			if($toss)
			{?>
				<input type="text" name="a" value="team 1" ><br> 
				<?php
			}
			else
			{?>
				<input type="text" name="a" value="team 2" ><br> <?php
			}
		}
		else
		{
			?>
			Toss won by?<br>
			<input type="radio" name="toss" > team1 
			<input type="radio" name="toss" > team 2<br>
		<?php } ?>
		Opted?<br>
		<input type="radio" name="opted" > Bat
		<input type="radio" name="opted" > Bowl
</body>
</html>
<?php
function check()
{

if(isset($_POST['check']))
{
	if(rand(0,1))
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
}
?>

