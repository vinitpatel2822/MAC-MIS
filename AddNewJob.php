<?php
	$title='<center><h1>Add New Job Form</h1></center>';
	$content='<form class="form-horizontal" role="form">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Company Name </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Company--</option>
																<option value="AL">BlackBerry</option>
																<option value="AK">IBM</option>
																<option value="CA">Apple</option>
																<option value="CO">Google</option>
																<option value="CT">Microsoft</option>
															</select>
										</div>

									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Job Group </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Job Group--</option>
																<option value="AL">Mobile Application Developer</option>
																<option value="AK">Web Developer</option>
																<option value="CA">Database Designer</option>
																<option value="CO">Technician</option>
																<option value="CT">Support</option>
															</select>
										</div>

									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Internship Type </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Type--</option>
																<option value="AL">Industry</option>
																<option value="AK">MAC Project</option>
																<option value="CA">Other</option>
															</select>
										</div>

									</div>
									
									<div class="space-4"></div>
	
																		
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Job Position </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Position" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Job Description </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Description" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Responsibilities </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Responsibilities" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Requirements </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Requirements" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Salary </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Salary" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Status--</option>
																<option value="AL">Unopened</option>
																<option value="AK">Open</option>
																<option value="CA">Closed</option>
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

<?php include('index2.php');?>