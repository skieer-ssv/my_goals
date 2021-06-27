<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/login-style.css">
	<img src="images/logo.png" alt="Logo" style="width:200px;height:50px;"> <hr>
	
</head>
<body>
	
	<div class="search-box" id="btn2" >  
		<form action="search.php" method="post">
			<div class="search-input"  >
		<h2>Search that developer in your class</h2><br>
			<input  type="text" name="search-name" id="btn1">
       		<button class="search-btn">Search</button></div>
		
		</form>
		
	</div>
	
<form action="include/process.inc.php" method="post">
	<div class="login-box" id="green">
		<img class="locimg" src="images/loc.png" alt="Lock" style="width:70px;height:75px;">
		<h1> Login </h1>
		<div class="texttbox">
    
    <input type="text" placeholder="Username" name="UName" required>
  </div>

  <div class="texttbox">
    
    <input type="password" placeholder="Password" name="Password" required>
  </div>

  <button  class="bttn" name="Login">Sign in</button>
		<a href="#" class="forgot">Forgot password?</a> 
		<a class="con" href="#" class="forgot" id="signup">No account yet? Sign up</a>
		<?php 
		
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
	</div>
</form>

	
	
	
	
	<form action="include/register.inc.php" method="post" enctype="multipart/form-data">
	<div class="signup-box" id="ee">
		
		<h1> New Account </h1>
		<div class="texttbox2">
    
    <input type="text" placeholder="name" name="UName" required>
  	</div>
	<div class="texttbox2">
    
    <input type="text" placeholder="email" name="Uemail" required>
 	 </div>
		<div class="texttbox2">
    
    <input type="text" placeholder="Username" name="Uuname" required>
  	</div>
		<div class="texttbox2">
    
    <input type="text" placeholder="linkedin" name="Ulinkedin" required>
  </div>
		<div class="texttbox2">
    
    <input type="text" placeholder="github" name="Ugithub" required>
  </div>
		<div class="texttbox2">
    
    <input type="text" placeholder="codechef" name="Ucodechef" required>
  </div> <br>
		<div class="texttbox2">
	<input class="a" type="file" name="file" >
	</div>
		
  	<div class="texttbox2">
    <input type="password" placeholder="Password" name="Password">
  	</div>

  <button  class="bttn" type="submit" value="Upload" name="Signup">Sign up</button>
		
		<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
	</div>
</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
	<script>
		var box3=document.getElementById("ee");
			box3.style.display="none";
		
	document.getElementById("btn1").addEventListener("focus",function()
	{
		
		var box1=document.getElementById("green");
		
		if(box1.style.display=="none")
			{
				
			}
		else
		{
			box1.style.display="none";
		}
		
	})
	
		document.getElementById("btn1").addEventListener("blur",function()
	{
		var box1=document.getElementById("green");
		if(box1.style.display=="none")
			{
				box1.style.display="block";
			}
		else
		{
			
		}
		
	})
		
		document.getElementById("signup").addEventListener("click",function()
	{
		
		var box1=document.getElementById("green");
		var box2=document.getElementById("btn2");
		var box3=document.getElementById("ee");
			box3.style.display="block";
			box1.style.display="none";
			box2.style.display="none";
		
		
	})
		
		
		
		
		
	

		
	</script>
	
	
	
	
	
</html>