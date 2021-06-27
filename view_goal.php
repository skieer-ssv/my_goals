

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Goal</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<?php require_once 'nav.php'; ?>
<?php
if(isset($_GET['gid'])){
$g=$_GET['gid'];
session_start();
require_once 'include/dbConfig.inc.php';
$sql= 'select * from goals where gid='.$g;
$result= mysqli_query($con,$sql);
if($result){
    $goal=mysqli_fetch_array($result);

echo '
<div class="container" style="margin-top:100px;">
<center>
<h3>
'.$goal['title'].'
</h3>
</center>
<br>
<p style="font-size:19px;">
'.$goal['description'].'
</p>
</div>
';



}
else{
    echo 'No such goal';
}




}
else{
    header("location:../index.php");
}

?>

</body>
</html>