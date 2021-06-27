<?php

require 'include/dbConfig.inc.php';

if(isset($_POST['search-btn']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email_id = mysqli_real_escape_string($con,$_POST['email_id']);
  
    
  
    $sql =  "SELECT `username`,`email`, `id`  FROM credentials WHERE `username`='".$username."'and `email`='".$email_id."'limit 1";                                    
                  
    $result = mysqli_query($con,$sql);
    
    $row= mysqli_fetch_assoc($result);

    $id = $row["id"];

    if($result)
    {
        echo "
        
        <table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>username</th>
      <th scope='col'>Email</th>
      <th scope='col'>Details</th>
    </tr>
  </thead>
        ";


    echo "
    
    <tbody>
    <tr>
      <th scope='row'>1</th>";

    echo "<td>".$username."</td>";
    
    echo "<td>".$email_id."</td>";
    
    echo "<td><a href='./user_profile.php?uid=";
    
    echo $id." '><button type='button' class='btn btn-dark'>Dark</button></a></td>";

    echo "
    
    </tr>
    </tbody>
    </table>
    
    ";
    

    
    }
    else
    {
        echo "No match found";
    }
  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyGoals | Search</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	
    </head>
    <body>

        <!-- Search form -->
        <form name="searchform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row">
                
                <div class="col-10 offset-1 offset-md-4 col-md-3 md-form mt-4">
                    <input class="form-control" name="username" type="text" placeholder="Search by student id" aria-label="Search" required>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-10 offset-1 offset-md-4 col-md-3 md-form mt-4">
                    <input class="form-control" type="email" name="email_id" placeholder="Search by email id" aria-label="Search" required>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-12 offset-4 offset-md-0 col-md">
                    <input class="btn btn-outline-success mt-4" name="search-btn" type="submit" value="Search">
                </div>
                
            </div>
        </form>
        
        
            
            
            

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>