<!Doctype html>
<?php include_once("includes/header.php"); ?>

<html>	
	<body>	
	<header> 
	<a href="/"><img src="images\logo2.png" alt="logo" class="col-sm-5" height = "60px";></a>
			<div class = "col-sm-19"  			
			</div>
	</header>	
	
	<div class="wrapper container" >		
		<h2 class = "text-center">Registration:</h2>		
		<div class="row">
			<div>
				<form class="form-horizontal col-sm-offset-7 col-sm-20">		
				  <div class="form-group">
					<label class="control-label col-xs-3" for="lastName">Last Name:</label>
					<div class="col-xs-9">
					  <input type="text" class="form-control" id="lastName" placeholder="Last Name">
					</div>
				  </div>
				  <div class="form-group">	
				  <label class="control-label col-xs-3" for="firstName">First Name:</label>
					<div class="col-xs-9">
					  <input type="text" class="form-control" id="firstName" placeholder="First Name">
					</div>
				  </div>		  
				  <div class="form-group">
					<label class="control-label col-xs-3">Date of Birth:</label>
					<div class="col-xs-3">
					  <select class="form-control">
						<option>Date</option>
					  </select>
					</div>
					<div class="col-xs-3">
					  <select class="form-control">
						<option>Month</option>
					  </select>
					</div>
					<div class="col-xs-3">
					  <select class="form-control">
						<option>Year</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-xs-3" for="inputEmail">Email:</label>
					<div class="col-xs-9">
					  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-xs-3" for="inputPassword">Password:</label>
					<div class="col-xs-9">
					  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
					</div>
				  </div>
				  <div class="form-group">
				  <label class="control-label col-xs-3" for="confirmPassword">Confirm Password:</label>
					<div class="col-xs-9">
					 <input type="password" class="form-control" id="confirmPassword" placeholder="ConfirmPassword">
					</div>
				  </div>
				<div class="form-group">
					<label class="control-label col-xs-3">GenderRadios:</label>
					<div class="col-xs-2">
					  <label class="radio-inline">
						<input type="radio" name="genderRadios" value="male"> Male
					  </label>
					</div>
					<div class="col-xs-2">
					  <label class="radio-inline">
						<input type="radio" name="genderRadios" value="female"> Female
					  </label>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-xs-offset-3 col-xs-9">
					  <label class="checkbox-inline">
						<input type="checkbox" value="agree">  I accept <a href="#">agreement</a>.
					  </label>
					</div>
				  </div>
				  <br />
				  <div class="form-group">
					<div class="col-xs-offset-3 col-xs-9">
					  <input type="submit" formaction = "query_registration.php" class="btn btn-primary" value="Submit">
					  <input type="reset" class="btn btn-default" value="Reset">
					</div>
				  </div>
				</form>
			</div>			
		</div>		
	</div>
	
			

	<footer></footer>
	</body>
</html>