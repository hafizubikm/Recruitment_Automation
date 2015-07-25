	<?php include_once("header.php")?>
	<div class="well container"><h1 class="text-center">Admin Panel</h1></div>
	<div class="container">
		<div class="row">

			  <div class="panel-body">
					<div class="col-md-2">
						<?php include_once("sidebar.php")?>
					</div>
					<div class="col-md-10">
					<div class="row">
					   <div class="panel panel-primary">
						  <div class="panel-heading"><a href="<?php echo site_url('post_controller/add_department')?>" class="btn btn-default btn-xs">
							 <i class="fa fa-search"> Show Department</i></a>
						  </div>
						<div class="col-md-6">
							<?php echo form_open('post_controller/add_department');?>
							
							  <div class="form-group"><br>
							  <div class="stitle">* Mandatory Field</div><br>
								 <label for="Name">Department Name*</label>
								 <div>
									<input type="text" class="form-control" id="deptName" name="department" value="" placeholder="Please enter Department Name" required="">
									<span class="fred"></span>
								 </div>
							  </div>
							  <div class="form-group">
								 <input type="submit" class="btn btn-primary" value="Submit">
							  </div>
							<?php echo form_close();?>
						</div>
					</div>
			  </div>
					</div>
		   </div>
		   <!--end .panel-->
		   
		   
	</div>
	</div>
	<?php include_once("footer.php")?>