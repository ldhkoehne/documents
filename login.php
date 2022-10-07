<?php  session_start(); ?>      

<?php

if(isset($_SESSION['use']))   

 {
    header("Location:index.php"); 
 }

if(isset($_POST['login']))   
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "username1" && $pass == "password1")    
         {                                   
          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("index.php","_self");</script>';    

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Log in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="/style.css" type="text/css" />

</head>

<div id="lg_outr" class="mn_outr">
    <div id="lg_ctnr" class="mn_ctnr">
        <div id="lg_innr" class="mn_innr">

        <form class="lg_frm" action="" method="post">
            <h1>Log in</h1>
                <input class="usr_fld" type="text" name="user" placeholder="Username"/>
                <input class="pw_fld" type="password" name="pass" placeholder="Password"/>
                <input class="sub_btn" type="submit" name="login" value="LOGIN"/>
        </form>

        </div>
    </div>
</div>