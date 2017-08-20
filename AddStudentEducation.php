<?php
	$title='<center><h1>Student Education Form</h1></center>';
	$content='<form class="form-horizontal" role="form">
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Student ID </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Student ID--</option>
																<option value="AL">104676903</option>
																<option value="AK">106529874</option>
																<option value="CA">104785412</option>
																<option value="CO">104563258</option>
																<option value="CT">106258957</option>
															</select>
										</div>

									</div>
	
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree </label>

										<div class="radio">
													<label>
														<input name="form-field-radio1" type="radio" class="ace" />
														<span class="lbl"> Undergraduate</span>
													</label>
													<label>
														<input name="form-field-radio1" type="radio" class="ace" />
														<span class="lbl"> Graduate</span>
													</label>
										</div>
									</div>


									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree Title </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Degree Title" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Degree CGPA </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Degree CGPA" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> University Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="University Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> University Country </label>

											<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Country--</option>
																<option value="AL">India</option>
																<option value="AK">Canada</option>
																<option value="CA">United States</option>
																<option value="CO">China</option>
																<option value="CT">Japan</option>
															</select>
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Certifications </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Certifications" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Certification Body </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Certification Body" class="col-xs-10 col-sm-5" />
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