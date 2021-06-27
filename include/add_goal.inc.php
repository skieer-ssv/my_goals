<?php
if (isset($_POST['submit'])) {
// TODO: add prepare statement 
  session_start();
  $title = strip_tags($_POST['NewsTitle']);
  
  $desc = $_POST['newsDescription'] ? strip_tags($_POST['newsDescription']) : NULL;
  $alert = $_POST['alertDate'] ? strtotime(strip_tags($_POST['alertDate'])) : NULL;
  
  $uid= $_SESSION['uid'];
  require_once 'dbquery.inc.php';
  require_once 'dbConfig.inc.php';
  $qy = "INSERT INTO `goals`(`goal`,`description`,`alert_date`,`uid`) VALUES( ?,?,?,?)";

   try{
    add_goal($con,$qy,"sssi",$title,$desc,$alert,$uid);
   
      echo '<script>alert("Successfully updated");document.location="../dash.php"</script>';
   }
   catch (PDOException $e) {
    echo $e->getMessage();
  }
  
  
} else {
  header("location: ../dash.php");
}
