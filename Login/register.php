<!DOCTYPE html >
<html>
<head>
<title>SCORE TRACKER LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div > <div align="center">

    <form class="register-form" method="post"  >
        <h3>SCORE TRACKER LOGIN FORM</h3>

        <table border="0.5" >
            <tr>
            	<td> Username
            	<td> <input type="text" name="id"/>
            </tr>

            <tr>	
            	<td>Password
            	<td> <input type="password" name="pass"/>
            </tr>

        	<tr>
        		<td> <input type="submit" value="submit" name="submit"/>
        	</tr>

        </table>
    </form>
</div>
</body>
</html>
<?php

                    if(isset($_POST['submit']))
                    {
                        if($_POST['id']==null or $_POST['pass']==null )
                        {
                            echo "Enter Details";
                        }
                        else
                        {
                            $bool=register($_POST['id'],$_POST['pass']);
                            if($bool)
                            {
                            echo "<center> Succesfully Registered </center>";
                            header("Location: l1.php");
                            }
                            else
                            {
                                echo "Enter different Username";
                            }
                        }
                        
                    }
                    

function register($id,$pass)
{
    $bool=true;
    $cnn=mysqli_connect("localhost","root","","score_tracker");
    $query = "select uname from login";
    $qry = mysqli_query($cnn,$query);

   while($row=$qry->fetch_assoc())
                    {
                        //echo $row["uname"];
                        if($row["uname"]==$id)
                        {
                            $bool= false;
                            //echo "invalid";
                        }
                        else
                        {
                            $bool=true;
                            //echo "valid";
                        }
                    }
    if($bool)
    {
        $query = "insert into login values('$id','$pass')";
        $qry = mysqli_query($cnn,$query);
        if($qry)
        {
            return true;
        }
    }
    else 
    {
       return false;
    }    
}
?>