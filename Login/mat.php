<html>
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mat.css">
<title> Scoring Portal </title></head>
<body>

	<div align="center">
	<header>SCORE TRACKER</header>
	<form method="POST" action="" >
		Teams:
		<div  class="d2">
		Host team:
		<input type="text" id="text1" name="t1"><br>
		Visitor team:
		<input type="text" id="text2" name="t2"><br>
		</div><br>
		<div class ="d2">
		Spin the toss?
		<input type="submit" name="check" value="Yes"> 
		<input type="submit" name="check1"  value="No">  
<!-- 		<input type="radio" name="check" id="Yes" value="Yes"> Yes
		<input type="radio" name="check" id="No" value="No"> No
use this when radio button can be used further
 -->		<br>
		</div>
		<br>

		
	<?php


		$t1;
		$t2;
		if(isset($_POST['check']))
		//if($_POST['check'].getElementById("Yes").value =="True") // if radio button set to true enters loop
		{
			$t1=$_POST['t1'];
			$t2=$_POST['t2'];
			$toss=check();
			//$_POST['toss']=$toss;
			?>
			<br>
			<?php if($toss)
			{?>

				Toss Won By?
				<div class="d2">
				<input type="text" name="a" value="<?php echo $t1; ?>" ></div><br> 
				<!-- Opted?<br>
				<div class="d2">
				<input type="radio" name="opted" > Bat
				<input type="radio" name="opted" > Bowl
				</div> -->
				
			<?php
			}
			else
			{?>
				<div class="d2">
					Toss Won By?
				<input type="text" name="a" value="<?php echo $t2; ?>" ></div><br> 
				<!-- Opted?<br>
				<div class="d6">
				<input type="radio" name="opted" > Bat
				<input type="radio" name="opted" > Bowl
				</div> -->
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
			
			<div class="d2">
				Toss won by?<br>
			<input type="radio" name="toss"><?php echo $t1;?>  
			<input type="radio" name="toss"><?php echo $t2;?>
			</div><br><br>
			
	<?php }
		} ?>
			
			<div class="d2">
				Opted?
			<input type="radio" name="opted" value="Bat"> Bat
			<input type="radio" name="opted" value="Bowl"> Bowl
			</div>
			<br>
		
			<div class="d2">
				Overs?
			<input type="text" name="overs" > <br> </div> <br>

			<div style="padding-right: 270px">
			Click below to change the rules <br>
			<a href="rules.php"> Advanced Settings </a> <br><br>
			</div>

		<div class="sub">
			<input type ="submit" name="submit" value="Start Match">
		</div>
	</div>
	</form>
	<?php

	if(isset($_POST['submit']))
	{
		//first check if all the values are entered and if all the values are entered thn redirect ot next page
		$host="localhost";
		$user="root";
		$pass="";
		$db="score_tracker";
		$cnn=mysqli_connect($host,$user,$pass,$db);
		$over=$_POST['overs'];
		$a=$_POST['a'];
		$op=$_POST['opted'];
		if ($a)//error:endefined variable bool
		{
			if(isset($op) and $op=="Bat")
			{
				$abc="Bat";
			}
			else
			{
				$abc="bowl";
			}

			$qry="insert into rules(overs,toss,opted) values($over,'$a',$abc)"; //add opted field in database.... error:how to redirect a page without refreshing its values
			$res=mysqli_query($cnn,$qry);
			if($res)
			{
				echo "error";
			}
		}
		
		//header("Location:select_player.php");
		
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

