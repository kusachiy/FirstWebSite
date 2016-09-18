<!DOCTYPE html>
<html>	
	<?php
	include_once("includes/header.php"); 
	
	if($_SESSION['status']=="login")	
	{
		/*header("location: /profile.php");*/
		echo "<br><a href='profile.php?id=$user_id'>Мой профиль</a>";		
	}?>	
	<style>
	body
	{		
		background-size: 100% 100%;		
		background-repeat: no-repeat;
		background-image: url('images/main_background.jpg');
		background-color: @myhbc;		
	}
	.colorbutton
	{
		background: navy; 
		color: white; 
		font-size: 9pt;
	}
	</style>	
	
	<body>		
		
		<div class="big-container">		
			<div class="row - fluid">
				<aside class="left-sidebar col-md-6">
					 <form role="form text-center" action = "query_login.php" method = "post">
						 <div class="form-group ">
							  <label for="email">Email</label>
							  <input type="email" class="form-control " id="email" name="login" placeholder="Email">					  
						 </div>
						 <div class="form-group">
							  <label for="pass">Password</label>
							  <input type="password" class="form-control" id="pass" name = "pass" placeholder="Password">
						 </div>
						 <div class="checkbox">
							<label><input type="checkbox" name = "check"> Remember Me</label>
						 </div>
						 
						 
						<button type="submit" class="btn btn-success col-md-6">Log In</button>						
						<button formaction = "registration.php" class="btn colorbutton">Registration</button>
						
					</form>
				</aside>				
				
				<section class="content col-md-18">			
					<div class="jumbotron jumbotron-fluid text-center">						
							<h1 class="display-3">Welcome!!!</h1>
							<p class="lead">This is my first work on the layout of the site. Do not judge strictly...</p>	
							<h3><a href="registration.php">Sign Up-----></a></h3>
							
					</div>			
				</section>
			</div>
		</div>	
	
		
	<footer>
		<div class="container">
			<h1>Footer<h1>
		</div>
	</footer>
	</body>
</html>