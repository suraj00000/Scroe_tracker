<!DOCTYPE html >
<html>
<head>
<title>SCORE TRACKER LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
        session_start();
    ?>

<div> 
    <div align="center">
        
            <form class="login-form" method="post" action="">
                <h3>SCORE TRACKER LOGIN FORM</h3>
                <table border="0.5" >
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="id" ></td>
                    </tr>
                    
                    <tr>    
                        <td>Password</td>
                        <td><input type="password" name="pass" ></input></td>
                    </tr>
              
                    <tr>                
                        <td><input type="submit" name="submit" value="submit"/>
                        <td align="right"><input type="reset" value="Reset"/>
                          
                </table>
                <center><a href="forgot.php"> Forgot? </a> </center>
                <center>New User? <a href="register.php"> Register </a> </center>
                
            </form>
    </div>
</div>


</body>
</html>
<?php

                    if(isset($_POST['submit']))
                    {
                        if($_POST['id']==null or $_POST['pass']==null)
                        {
                            echo "Incorrect Info";
                        }
                        else
                        {
                            $bool=check_data($_POST['id'],$_POST['pass']);
                            if($bool)
                            {
                                echo "<center>valid data</center>";
                                $_SESSION["id"] = $_POST['id'];
                                $_SESSION["pass"] = $_POST['pass'];
                                header("Location: Home.php");
                            }
                            else
                            {
                                echo "Invalid";
                            }
                        }
                        
                    }
                    

function check_data($id,$pass)
{
    $cnn=mysqli_connect("localhost","root","","score_tracker");
    $query = "select * from login";
    $qry = mysqli_query($cnn,$query);

   while($row=$qry->fetch_assoc())
                    {
                        if($row["uname"]==$id and $row["pass"]==$pass){
                            return true;
                        }
                        
                        else{
                            return false;
                        }
                    }
}
?>

