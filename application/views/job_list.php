	<?php include_once("header.php");?>
	<div class="well container"><h1 class="text-center">Application Reports</h1></div>
	<div class="container">
		<div class="row">
			  <div class="panel-body">
					<div class="col-md-2">
						<?php include_once("sidebar.php");?>
					</div>
					<div class="col-md-10">
					<div class="row">
					   <div class="panel panel-primary">
						  <div class="panel-heading">Application Reports
						  </div><br>

						  	<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Applications</th>
									<th>View Details</th>
								</tr>
							</thead>
							
							 <tbody>
							<?php foreach($jobs as $job):?>
								<tr>
									<td><?php echo $job->job_title?></td>
									<td><span class="btn btn-info btn-xs"><?php echo $this->post_model->count_app($job->id)?></span> Application</td>
									<td><a class="btn btn-success btn-xs" href="<?php echo site_url('post_controller/display_application/'.$job->id);?>"><i class="fa fa-search"></i> View All Application</a></td>
								</tr>
							<?php endforeach;?>
							</tbody>
							
							<tfoot>
								<tr>
									<th>Job Title</th>
									<th>Applications</th>
									<th>View Details</th>
								</tr>
							</tfoot>
						</table>
					</div>
			  </div>
					</div>
		   </div>
		   <!--end .panel-->
	</div>
	</div>
	<?php include_once("footer.php")?>