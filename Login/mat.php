<html>
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mat.css">
<title> Scoring Portal </title></head>
<body>

	
	<header>SCORE TRACKER</header>
	<form method="POST" action="" >
		Teams:
		<div  class="d1">
		Host team:
		<input type="text" id="text1" name="t1"><br>
		Visitor team:
		<input type="text" id="text2" name="t2"><br>
		</div><br>
		<div class ="d2">
		Spin the toss? 
		<input type="submit" name="check" value="Yes">
		<input type="submit" name="check1" value="No">
		<br>
		</div>

		
	<?php
		$t1;
		$t2;
		if(isset($_POST['check']))
		{
			$t1=$_POST['t1'];
			$t2=$_POST['t2'];
			$toss=check();
			?>
			<br>
			<?php if($toss)
			{?>
				Toss Won By?
				<div class="d3">
				<input type="text" name="a" value="<?php echo $t1; ?>" ></div><br> 
				Opted?<br>
				<div class="d4">
				<input type="radio" name="opted" > Bat
				<input type="radio" name="opted" > Bowl
				</div>
			<?php
			}
			else
			{?>
				<div class="d5">
					Toss Won By?
				<input type="text" name="a" value="<?php echo $t2; ?>" ></div><br> 
				Opted?<br>
				<div class="d6">
				<input type="radio" name="opted" > Bat
				<input type="radio" name="opted" > Bowl
				</div>
			<?php
			}
		}
		else
		{

			if(isset($_POST['check1']))
			{
				$t1=$_POST['t1'];
				$t2=$_POST['t2'];
			?>
			Toss won by?<br>
			<div class="d7">
			<input type="radio" name="toss"><?php echo $t1;?>  
			<input type="radio" name="toss"><?php echo $t2;?>
			</div><br>
			Opted?<br>
			<div class="d8">
			<input type="radio" name="opted" > Bat
			<input type="radio" name="opted" > Bowl
			</div>
	<?php }
		} 
	?>

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

