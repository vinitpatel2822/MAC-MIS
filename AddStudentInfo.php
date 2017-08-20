<?php

	$title='<center><h1>Student Information Form</h1></center>';
	$content='<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="fname" placeholder="First Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Middle Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="mname" placeholder="Middle Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="lname" placeholder="Last Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="email" placeholder="Email" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Telephone </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="tel" placeholder="Telephone" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Gender </label>

										<div class="radio">
													<label>
														<input name="form-field-radio1" name="gender" type="radio" class="ace" />
														<span class="lbl"> Male</span>
													</label>
													<label>
														<input name="form-field-radio1" name="gender" type="radio" class="ace" />
														<span class="lbl"> Female</span>
													</label>
										</div>

									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

										<div class="radio">
													<label>
														<input name="form-field-radio2" name="status" type="radio" class="ace" checked />
														<span class="lbl"> International</span>
													</label>
													<label>
														<input name="form-field-radio2" name="status" type="radio" class="ace" />
														<span class="lbl"> Permanent Resident</span>
													</label>
										</div>

									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Current_Past </label>

										<div class="radio">
													<label>
														<input name="form-field-radio3" name="curpast" type="radio" class="ace" checked />
														<span class="lbl"> Current</span>
													</label>
													<label>
														<input name="form-field-radio3" name="curpast" type="radio" class="ace" />
														<span class="lbl"> Past</span>
													</label>
										</div>

									</div>
									
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

										<div class="col-sm-4 widget-body">
										
															<select class="form-control" name="sem" id="form-field-select-1">
														
															
															<?php
																$con=mysqli_connect("localhost","root","");
																mysqli_select_db($con,"MACMIS");
																$sql = mysqli_query($con, "SELECT Semester FROM tblSemester");
																
																while ($row = $sql->fetch_assoc()){
																	 echo "<option value="" . $row["Semester"] . "">" . $row["Semester"] . "</option>";
																}
																
															?>
															
															</select>
														</div>

									</div>
									
									<div class="space-4"></div>
									
									
									
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

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