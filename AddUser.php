<?php
	$title='<center><h1>Add User Form</h1></center>';
	$content='<form action="AddUser.php" class="form-horizontal" role="form" method="POST">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" name="userType" id="form-field-select-1">
																<option value="">--Select User Role--</option>
																<option value="Staff">Staff</option>
																<option value="Faculty">Faculty</option>
																<option value="Student">Student</option>
															</select>
										</div>

									</div>

									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" id="fname" name="fname" placeholder="First Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" id="lname" name="lname" placeholder="Last Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" id="uname" name="uname" placeholder="Username" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

										<div class="col-sm-9">
											<input type="text" id="pwd" name="pwd" placeholder="Password" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4">
						
									</div>
									
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" value="submit" class="btn btn-info">


											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
				</form>';
		
?>
<?php

if(!empty($_POST))
{
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$u_name=$_POST['uname'];
	$p_wd=$_POST['pwd'];
	$user_type=$_POST['userType'];

	$con=mysqli_connect("localhost","root","");
	//mysql_connect("localhost","root","");
	mysqli_select_db($con,"MACMIS");
	//mysql_select_db("MACMIS");
	//$result=mysqli_query($con,"select * from tblRegisterUser") or die("Failed to Query Database".mysqli_error());
	$result=mysqli_query($con,"INSERT INTO tblRegisterUser (UserFirstName,UserLastName,UserEmail,UserPassword,UserType) VALUES ('$f_name','$l_name','$u_name','$p_wd','$user_type')") or die("Failed to Query Database".mysql_error());
	//echo "Inserted Successfully...!!!";
	$success='<div class="form-group">
				<center><h3>Inserted Successfully...!!!</h3></center>
				
			</div>';
}
?>
<?php include('index2.php');?>