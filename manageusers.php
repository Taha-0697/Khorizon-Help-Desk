<?php
include_once 'include/functions.php';
include_once 'include/connect.php';
include_once 'include/user.php';
include_once 'include/saveuser.php';
include_once 'include/userType.php';

sec_session_start();

if(login_check(dbConnect()) == true) {
	include_once('include/navbar.php');
        // Add your protected page content here!

	$user = new user();
	$user->deleteuser();
}
?> 
  
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
	                       		<?php userType::displayUserOptionList(); ?> 
							</select>
						 <br/>
	                        <select class="form-control" name="groupId">  
	                        <?php department::displayDepartmentsOptionList(); ?> 
	                        </select>
				               
							<br/>
 
							<input type="button" name="registerBtn" id="registerBtn" class="btn btn-primary" value="Save" onclick="return regformhash(this.form);" /> 
						</form> 
					 </div>
					 <div class="col-md-6"> 
						<ul>
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
					 <div class="col-md-12">
					 	<table class="table table-bordered">
					 		<thead>
					 			<th>UserID</th>
					 			<th>Fullname</th>
					 			<th>Username</th> 
					 			<th>User Role</th> 
					 			<th>Department</th> 
					 			<th>Action</th>
					 		</thead>
					 		<tbody>
					 			<?php 
					 			  $user->loadUser();
					 			?>
					 		</tbody>
					 	</table>
					 </div>
					</div>
				</div>
			</div> 
 