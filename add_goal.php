<?php
session_start();
if (!isset($_SESSION['uid'])) {

  echo '<script>alert("You are not logged in");document.location="login.php"</script>';
} else {
  echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Goals | Add Goal</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

<body>
  <!-- NAVBAR-->
  <center><h1>'.$_SESSION['user'].'</h1></center>';
include_once 'nav.php';
  echo '
  <!-- DIVIDER -->
  
<div style="min-height:70%">
<div class="container" style="margin-top:100px;">
<form action="dash.php" >
<button class="btn" style="float:right; margin:15px;">Back</button>
</form>
<center><h2>Add Goal</h2></center>
  <form action="include/add_goal.inc.php" method="POST" enctype="multipart/form-data">

          <div class="form-group align-content-center">
            <label class="col-form-label" for="postTitle">Goal Title</label>
            <input type="text" class="form-control" placeholder="Enter Goal Title" id="GoalTitle" name="GoalTitle" required>
          </div>
          <div class="form-group align-content-center">
            <label class="col-form-label" for="postTitle">Goal Description</label>
            
            <textarea class="form-control" placeholder="Enter Goal Description" id="GoalDescription" name="GoalDescription" rows="4" cols="=50"> </textarea>
          </div>
       
          <div class="form-group align-content-center">
          <label class="col-form-label" for="expiryDate">Alert Date <h6>Select date of event or deadline for this goal</h6></label>
        
          <input type="date" class="form-control"  id="alert" name="alert" min=' . date('Y-m-d') . '>
        </div>
     
        
        
        <br>
      </div>
<center>
      <div class="col-md-6 ">
               <input type="submit" class="btn" value="submit" name="submit">
            </div>
</center>
      </form>
      <br><br>
     
     
      </div>
     
      </div>






  ';

  echo '
</body>
</html>';
}