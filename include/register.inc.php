<?php 
require_once('dbConfig.inc.php');

session_start();
    if(isset($_POST['Signup']))
    {
       if(empty($_POST['UName']) || empty($_POST['Uemail']) ||  empty($_POST['Uuname']) || empty($_POST['Ulinkedin']) || empty($_POST['Ugithub']) || empty($_POST['Ucodechef']) || empty($_POST['Password']))
       {
            header("location:../index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
        // $file = $_FILES['file'];
        // $fileTmpName = $_FILES['file']['tmp_name'];
        // $fileName = $_FILE['file']['name'];
        // $fileType = $_FILES['file']['type'];
        // $fileExt = explode('.',$fileName);
        // $fileActualExt = strtolower(end($fileExt));
        // $allowed = array('jpg','jpeg','png');

        // if (in_array($fileActualExt, $allowed)) {
        //     if ($fileError === 0) {
        //         // $fileNameNew = uniquid('',true).".".$fileActualExt;
        //         $fileDestination = 'uploads/'.$fileNameNew;
        //         move_uploaded_file($fileTmpName,$fileDestination);
        //         header("Location: index.php?uploadsuccess");
        //         }
        //     else{
        //         echo"There was an error";
        //     }
        // }
        // else{
        //     echo"Extension not allowed";
        // }

        
        
        $username = $_POST['Uuname'];
        $email = $_POST['Uemail'] ;
        $password =$_POST['Password'];
        $name=$_POST['UName'];
        $linkedin=$_POST['Ulinkedin'];
        $github=$_POST['Ugithub'];
        $codechef=$_POST['Ucodechef'];
        $profilepic="avatar_1.png";
            $query="INSERT INTO credentials(email,username,password)VALUES('$email','$username','$password')";
            $query2="INSERT INTO user_info(name,linkedin,github,codechef,profile_pic)VALUES('$name','$linkedin','$github','$codechef','$fileNameNew')";
            $result=mysqli_query($con,$query);
            $result2=mysqli_query($con,$query2);

            if(mysqli_fetch_assoc($result))
            {
             
                
                $_SESSION['User']=$_POST['UName'];
                
                header("location:../search.php");
            }
            else
            {
                header("location:../index.php?Invalid= User Created Now Please login ");
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