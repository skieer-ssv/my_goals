<?php

require 'include/dbConfig.inc.php';

if(isset($_POST['search-name']))
{
    $searchName = mysqli_real_escape_string($con,$_POST['search-name']);
    
  
    $sql =  "SELECT * FROM user_info u join credentials c ON u.uid=c.id WHERE `name`='".$searchName."' or `username` ='".$searchName."'";                                    
                  
    $result = mysqli_query($con,$sql);
    
    $row= mysqli_fetch_array($result);

    $id = $row["uid"];

    if($result)
    {

    ?>
        
       <div class="col-10 offset-1">
       
       
        <table class='table table-hover'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>username</th>
      <th scope='col'>Email</th>
      <th scope='col'>Details</th>
    </tr>
  </thead>
        
        

<?php
    echo "
    
    <tbody>
    <tr>
      <th scope='row'>1</th>";

    echo "<td>".$row['name']."</td>";
    
    echo "<td>".$row['linkedin']."</td>";
    
    echo "<td><a href='./user_profile.php?uid=";
    
    echo $id." '><button type='button' class='btn btn-outline-dark'>View</button></a></td>";

    echo "
    
    </tr>
    </tbody>
    </table>

    
    </div>
    
    ";
    
     
    }
    else
    {
        echo "No match found";
    }
    $_POST['search-name']=NULL;
    
}
elseif(isset($_POST['search-btn']))
{
    // $searchName = mysqli_real_escape_string($con,$_POST['search-name']);
    
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email_id = mysqli_real_escape_string($con,$_POST['email_id']);
    
  
    $sql =  "SELECT * FROM user_info u join credentials c ON u.uid=c.id WHERE `email`='".$email_id."' or `username` ='".$username."'";                                    
                  
    $result = mysqli_query($con,$sql);
    
    $row= mysqli_fetch_array($result);

    $id = $row["uid"];

    if($result)
    {

    ?>
        
       <div class="col-10 offset-1">
       
       
        <table class='table table-hover'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>username</th>
      <th scope='col'>Email</th>
      <th scope='col'>Details</th>
    </tr>
  </thead>
        
        

<?php
    echo "
    
    <tbody>
    <tr>
      <th scope='row'>1</th>";

    echo "<td>".$row['name']."</td>";
    
    echo "<td>".$row['linkedin']."</td>";
    
    echo "<td><a href='./user_profile.php?uid=";
    
    echo $id." '><button type='button' class='btn btn-outline-dark'>View</button></a></td>";

    echo "
    
    </tr>
    </tbody>
    </table>

    
    </div>
    
    ";
    
     
    }
    else
    {
        echo "No match found";
    }
    
}
else
{

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
                    <input class="form-control" name="username" type="text" placeholder="Search by student id" aria-label="Search">
                </div>
                
            </div>
            <div class="row ">
                <div class="col-10 offset-1 offset-md-4 col-md-3 md-form mt-4 ">
                    <h5>OR</h5>
                </div>
            </div>
            <div class="row">
                
                <div class="col-10 offset-1 offset-md-4 col-md-3 md-form mt-2">
                    <input class="form-control" type="email" name="email_id" placeholder="Search by email id" aria-label="Search">
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-12 offset-4 ">
                    <input class="btn btn-outline-dark mt-4" name="search-btn" type="submit" value="Search">
                </div>
                
            </div>
        </form>
        
        
            
            
            

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>