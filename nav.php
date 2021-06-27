<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<head>
	<!-- The fixed navbar will overlay your other content, unless you add padding to the bottom of the <body>. Tip: By default, the navbar is 50px high.  -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
   <a class="navbar-brand text-danger" href="include/logout.inc.php">Logout</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="dash.php">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="add_goal.php">Add Goals</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="user_profile.php">User Profile</a>
         </li>
		  <li class="nav-item">
            <a class="nav-link" href=view_goal.php">View Goals</a>
         </li>
         
      </ul>
      <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
   </div>
</nav>
	
</head>


</html>