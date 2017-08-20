<?php

	$title='<center><h1>Add Semester Form</h1></center>';
	$content='<form class="form-horizontal" method="POST" action="AddSemesterProcess.php" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Semester </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" name="sem" placeholder="Semester \'Year\' e.g. Fall 2014" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>
									
									
									
									
									

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



<?php include('index2.php');?>

