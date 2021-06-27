<?php 
require_once('dbConfig.inc.php');

    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:../index.php?Empty= Please Fill in the Blanks");
       }

       else
       {
        $username=strip_tags($_POST['UName']);
        $pass=strip_tags($_POST['Password']);
            $query="select * from credentials where username='".$username."' and password='".$pass."'";
            $result=mysqli_query($con,$query);

            if(mysqli_num_rows($result)>0)
            {
            	
            	session_start();
            	$record=mysqli_fetch_array($result);
                
                $_SESSION['user']=$record['username'];
                $_SESSION['uid']=$record['id'];
                
                header("location:../dash.php");
                exit();
            }
            else
            {
                header("location:../index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Guys';
    }

?>



function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}


echo randomPassword();