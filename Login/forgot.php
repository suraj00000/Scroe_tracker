<!DOCTYPE html >
<html>
<head>
<title>SCORE TRACKER LOGIN FORM</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div>   
    <div align="center">


    <form class="forgot-form" method="post" >
        <h3>SCORE TRACKER LOGIN FORM</h3>
        <table border="0.5" >
            <tr>
            	<td> Username </td>
            	<td> <input type="text" name="id"/>
            </tr>

            <tr>
            	<td> Password</td>
            	<td> <input type="Password" name="pass"/>
            </tr>

            <tr>
            	<td> <input type="Submit" value="Update" name="update"/>
            </tr>
            </table>
    </form>
    </div>
</div>
</body>
</html>


<?php
if(isset($_POST['update']))
{
    if($_POST['id'] == null or $_POST['pass'] == null)
    {
       echo "Enter Details";
    }
    else
    {
        $bool=update($_POST['id'], $_POST['pass']);
        if($bool)
        {
            echo "<center>valid data</center>";
            header("Location: l1.php");
        }
        else
        {
            echo "Invalid Details";    
        }
    }
}

function update($id,$pass)
{
    $bool=false;
    $cnn=mysqli_connect("localhost","root","","score_tracker");
    $query = "select uname from login";
    $qry = mysqli_query($cnn,$query);
    while($row=$qry->fetch_assoc())
    {
        if($row["uname"]==$id)
        {
            $bool=true;
        }  
    }  
    if($bool)
    {
        $query = "update login set pass='$pass' where uname='$id'";
        $qry = mysqli_query($cnn,$query);
        if($qry)
        {
            return true;
        }
        else 
        {
            return false;
        }
    }    
}
?>