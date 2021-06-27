<?php
session_start();
$_SESSION['uid']=1;
if (!isset($_SESSION['uid'])) {

  echo '<script>alert("You are not logged in");document.location="admin-login.php"</script>';
} else {
    require_once 'include/dbConfig.inc.php';
    
  echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<link href="css/style.css"  rel= "stylesheet">
  <title>myGoals | Profile</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  </head>

<body>
  <!-- NAVBAR-->
  <center><h1>'.$_SESSION['username'].'</h1></center>';
  echo '
  <!-- DIVIDER -->
  
<div style="min-height:70%">
<div class="container">';

  
  // Check connection
  if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo 'Cannot connect to database';
  } else {
    $sql = 'select * from user_stat where uid='.$_SESSION['uid'];
    $record = mysqli_query($con, $sql);
    
    $stat=mysqli_fetch_array($record);
    echo '<div class="row">
    <div class="col-12 col-md-3">
    <div class = "card" width="100%" > <div class="container"   style="width:80%; margin:0 auto;">';
    if (mysqli_num_rows($record) > 0) {
    echo '
    <div class="row"><center>
    <img  src="images/avatar_1.png" width="100px" style="display:block">
    </center></div>
    <div class="stat-numbers">
    <div class = "row">Completed: '.$stat['goals_completed'].'</div>
    <div class = "row">Gave up: '.$stat['goals_giveup'].'</div>
    <div class = "row">Ongoing: '.$stat['goals_ongoing'].'</div>
    </div>
    ';}
    else{ echo 'No goals yet';}
    echo '</div>

    </div>
   
    </div>
    <div class="col-12 col-md-8"  style="overflow-y:scroll; height:70vh">
    ';
    $sql = 'select * from goals g join user_info u on u.uid=g.uid WHERE g.uid= '.$_SESSION['uid'].' and completed = 0 ORDER BY `timestamp` DESC';
    $goals = mysqli_query($con, $sql);
    if (mysqli_num_rows($goals) > 0) {
      while ($record = mysqli_fetch_array($goals)) {
        echo '<div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><a href="view_goal.php?g=' . $record["gid"] . '">' . $record["title"] . '</a></h5> 
                  </div>
                  <div class="row" style="display:flex; justify-content:space-evenly">
                  <form action="../include/edit-goal.inc.php" method="POST"><button class="btn btn-success" name="done" value="' . $record["gid"] . '">Done</button></form>
                  <form action="../include/edit-news.inc.php" method="POST"><button class=" btn btn-outline-dark" name="give_up" value="' . $record["gid"] . '">Give up</button></form>
              </div></div>';
      }
    }
  }

  echo '</div><br><br>
      
      
      </div>
      </div>
      </div>
      <div class="container"> <center>
      <form  action="add_goal.php">
      <button type="submit" class="btn btn-outline-dark">Add Goal</button>
      </form>
      </center></div><br>
      
 ';

  echo '

</body>
</html>';
}