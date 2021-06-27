<?php
if(isset($_POST['done']) or isset($_POST['delete'])){
require_once("dbConfig.inc.php");
// TODO: add prepare statement
$archiveId = strip_tags($_POST['done']);
$deleteId = strip_tags($_POST['delete']);

if ($_POST['done']!=null){
    $qy = "UPDATE `goals` SET `completed` = 1 WHERE `gid` = ".$gid;
 $result= mysqli_query($con,$qy);
}
else if($_POST['delete']!=null){
    $qy = "UPDATE `goals` SET `completed` = 2 WHERE `gid` = ".$gid;
    $result=mysqli_query($con,$qy);
}
   

    if ($result)
      {
        echo '<script>alert("Successfully updated");document.location="../dash.php"</script>';
      }
      else{
          echo  '<script>alert("update failed");document.location="../dash.php"</script>';
      }
    }
    else{

    }
    
    

