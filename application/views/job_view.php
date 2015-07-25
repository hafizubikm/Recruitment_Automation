	<?php include_once("header.php");?>
	<div class="well container"><h1 class="text-center">Job Details</h1></div>
	<div class="container">
	<div class="row">
		<?php extract($jobs);?>
	<div class="panel-body">
		<div class="col-md-2">
			<?php include_once("sidebar.php");?>
		</div>
		<div class="col-md-10">
		<div class="row">
		   <div class="panel panel-primary">
			  <div class="panel-heading">
				 <a href="<?php echo site_url('post_controller/jobs');?>" class="btn btn-default btn-xs">
			<i class="fa fa-search"> Show Jobs</i></a>
			  </div>
			  <div class="panel-body">
				 <div>
					<h4>Post: <?php echo $job_title;?></h4>
				 </div>
				 <div>
					<h5><b>Department:</b> <?php echo $department_name;?></h5>
				 </div>
				 <div>
					<strong>Job Description</strong>
					<div>
							<?php echo $requirement?>
					</div>
				 </div><br>
				 <div>
					<strong>Education</strong>

					   <div><?php echo $education?></div>

				 </div><br>
				 <div>
					<strong>Experience</strong>

					   <div><?php echo $experience?></div>

				 </div><br>
				 <div>
					<strong>Application Start:</strong> 
					<div><?php echo $start_date?></div>
				 </div><br>
				 <div>
					<strong>Application Deadline:</strong> 
					<div><?php echo $end_date?></div>
				 </div>
				 <br>
				 <div>
					<strong>Salary Range:</strong> 
					<div><?php echo $salary?></div>
				 </div><br><br>
				 <div><a class="btn btn-success" href="<?php echo site_url('post_controller/jobs/'.$id);?>" title="Apply">Edit</a></div>
			  </div>
		   </div>
		   <!--end .panel-->
		</div>	
	</div>
	<?php include_once("footer.php");?>