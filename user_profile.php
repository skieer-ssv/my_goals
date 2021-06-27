<?php


require 'include/dbConfig.inc.php';


$uid=$_GET['uid'];

if(!empty($uid))
{
    $sql =  "SELECT `uid`, `name`, `linkedin`, `github`, `codechef`, `profile_pic` FROM `user_info` WHERE  `uid`='".$uid."' ";                                    
                  
    $result = mysqli_query($con,$sql);
    
    $row= mysqli_fetch_assoc($result);

    $username=$row['name'];
    $linkedin=$row['linkedin'];
    $codechef=$row['codechef'];
    $github=$row['github'];


}
else
{
    echo "Error";
}




?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  
        
    </head>
    <body>
        <div class="container col-12">
            <div class="row ">
                <div class="col-3">
                    <div id='img' class="row">
                        <img class="col-8" src="images/avatar_1.png" width="100px" style="display:block">
                    </div>
                    <div id="info">
                        <div class="row">
                            <div class="col-4">
                            <label>Name  : </label>
                            </div>
                            <div class="col-6">
                                <p> 
                                    <?php echo $username; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>Github  : </label>
                            </div>
                            <div class="col-6">
                                <p> 
                                    <?php echo $github; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>LinkedIn : </label>
                            </div>
                            <div class="col-6">
                                <p> 
                                    <?php echo $linkedin; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>CodeChef: </label>
                            </div>
                            <div class="col-6">
                                <p> 
                                    <?php echo $codechef; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>  Student </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-7">
                        <!-- toggle tab view starts -->
                        
                                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Completed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ongoing</a>
                    </li>
                    
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php

$sql="SELECT `gid`, `uid`, `title`, `description`, `timestamp`, `completed`, `alert_date` FROM `goals` WHERE `uid`='".$uid."' and `completed`=1 ";
$result = mysqli_query($con,$sql);

$srno=1;
if($result)
{

?>
    
    
    <table class='table'>
<thead class='thead-dark'>
<tr>
  <th scope='col'>#</th>
  <th scope='col'>Target</th>
  <th scope='col'>Aim</th>
</tr>
</thead>
</table> 

<tbody> 


<?php

while($row=mysqli_fetch_assoc($result))
{
    $title=$row['title'];
    $alert_date=$row['alert_date'];
    $completed=$row['completed'];
?>

<tr>
  <th scope='row'><?php echo $srno; ?></th>

  <td><?php echo $alert_date; ?></td>

  <td><?php echo $title; ?></td>

</tr> 

<?php 

$srno++;

}

?>
</tbody>
</table>



<?php

}
else
{
    echo "No entries";
}

?>
                        
                        
                        
                        
                        
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                        
                        <?php

$sql="SELECT `gid`, `uid`, `title`, `description`, `timestamp`, `completed`, `alert_date` FROM `goals` WHERE `uid`='".$uid."' and `completed`=0 ";
$result = mysqli_query($con,$sql);

$srno=1;
if($result)
{
?>

    <table class='table'>
<thead class='thead-dark'>
<tr>
  <th scope='col'>#</th>
  <th scope='col'>Target</th>
  <th scope='col'>Aim</th>
</tr>
</thead>

<tbody> 

<?php

while($row=mysqli_fetch_assoc($result))
{
    $title=$row['title'];
    $alert_date=$row['alert_date'];
    $completed=$row['completed'];
?>

<tr>
  <th scope='row'><?php echo $srno; ?></th>

  <td><?php echo $alert_date; ?></td>

  <td><?php echo $title; ?></td>

</tr> 

<?php 

$srno++;

}

?>
</tbody>
</table>



<?php

}
else
{
    echo "No entries";
}

?>
                
                        
                        
                        
                        
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       
    </body>
</html>