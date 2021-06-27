<?php
if (isset($_POST['submit'])) {
// TODO: add prepare statement 
  session_start();
  $title = strip_tags($_POST['GoalTitle']);
  
  $desc = $_POST['GoalDescription'] ? strip_tags($_POST['GoalDescription']) : NULL;
  $alert = $_POST['alert'] ? strtotime(strip_tags($_POST['alert'])) : NULL;
  
  $uid= $_SESSION['uid'];
  require_once 'dbquery.inc.php';
  require_once 'dbConfig.inc.php';
  $qy = "INSERT INTO `goals`(`title`,`description`,`alert_date`,`uid`) VALUES( ?,?,?,?)";

   try{
    add_goal($con,$qy,"ssii",$title,$desc,$alert,$uid);
   
      echo '<script>alert("Successfully updated";)document.location="../dash.php"</script>';
   }
   catch (PDOException $e) {
    echo $e->getMessage();
  }
  
  
} else {
  header("location: ../dash.php");
}
