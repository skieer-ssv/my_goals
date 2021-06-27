<!DOCTYPE html>
<?php
session_start();
?>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<head>
	<!-- The fixed navbar will overlay your other content, unless you add padding to the bottom of the <body>. Tip: By default, the navbar is 50px high.  -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">
		  <h2>Goals Site</h2>
         </div>
      <form class="form-inline my-2 my-lg-0">
         <?php 
		  if (isset($_SESSION['User'])) {?>
		  <div class="nav-item active">
            <a class="nav-link text-dark" href="dash.php">Dashboard <span class="sr-only">(current)</span></a>
         </div>
		  <?php }
		 
			?>
		  <div class="nav-item">
            <a class="nav-link text-dark" href="search.php">Search</a>
         </div >
		  <?php
		  if (isset($_SESSION['User'])) {?><a class="nav-link text-dark" href="include/logout.inc.php">Logout</a>
			  
		 <?php }
		 
			?>
      </form>
   </div>
</nav>
	
</head>


</html>