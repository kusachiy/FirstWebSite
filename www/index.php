<!DOCTYPE html>
<html>
	<?php include_once("includes/header.php"); ?>
	<style>
	body
	{
		background-position: 0px 60px;
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
		<header>	
			<a href="/"><img src="images\logo2.png" alt="logo" class="col-sm-5 col-sm-offset " height = "60px";></a>
		</header>
		
		
		<div class="big-container">		
			<div class="row - fluid">
				<aside class="left-sidebar col-md-6">
					 <form role="form text-center .">
						 <div class="form-group ">
							  <label for="email">Email</label>
							  <input type="email" class="form-control " id="email" placeholder="Email">					  
						 </div>
						 <div class="form-group">
							  <label for="pass">Password</label>
							  <input type="password" class="form-control" id="pass" placeholder="Password">
						 </div>
						 <div class="checkbox">
							<label><input type="checkbox"> Checkbox</label>
						 </div>
						 
						 
						<button type="submit" formaction = "query_login.php" class="btn btn-success col-md-6">Log In</button>						
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