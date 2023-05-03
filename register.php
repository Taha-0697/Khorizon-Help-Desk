<?php
include_once 'include/register.inc.php';
include_once 'include/functions.php';

?>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html>
    <body>
   <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>

 
		    <div class="panel panel-default" style="margin:2em; margin-top: 90px;">
			  <div class="panel-heading">User Registration</div>
				<div class="panel-body">
					
					<?php
					if (!empty($error_msg)) {
						echo $error_msg;
					}
					if (!empty($success)) {
						echo $success;
					}
					?>
					<div id="regForm">
					  <div class="col-md-6">
						<form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" method="post" name="registration_form">
							<input type='text' class="form-control" placeholder="Username" aria-describedby="basic-addon1"  name='username' id='username' /><br>
							<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" id="email" /><br>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1"/><br>
							<input type="password" name="confirmpwd" id="confirmpwd" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1" /><br>
							<select class="form-control" name="UserType" id="UserType">
								<option value="none">Select User Type</option>
								<option value="1">Administrator</option>
								<option value="2">User</option>
							</select>
						 <br/>
	                        <select class="form-control" name="groupId" id='groupId'>  
	                         <?php department::displayDepartmentsOptionList(); ?> 
	                        </select>
				               
							<br/>
 
							<input type="button" name="registerBtn" id="registerBtn" class="btn btn-primary" value="Save" onclick="return regformhash(this.form);" /> 
						</form> 
					 </div>
					 <div class="col-md-6"> 
						<ul>
							<li>All fields are required</li>
							<li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
							<li>Emails must have a valid email format</li>
							<li>Passwords must be at least 6 characters long</li>
							<li>Passwords must contain
								<ul>
									<li>At least one uppercase letter (A..Z)</li>
									<li>At least one lowercase letter (a..z)</li>
									<li>At least one number (0..9)</li>
								</ul>
							</li>
							<li>Your password and confirmation must match exactly</li>
						</ul>
					 </div>

      
    </body>
</html>