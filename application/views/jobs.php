<?php include_once("header.php");?>
<div class="well container"><h1 class="text-center">All Jobs</h1></div>
<div class="container">
	<div class="row">
		<div class="panel-body">
			<div class="col-md-2">
				<?php include_once("sidebar.php");?>
			</div>
			<div class="col-md-10">
				<div class="row">
				   <div class="panel panel-primary">
					  <div class="panel-heading">
						<a href="<?php echo site_url('post_controller/load_add_jobs')?>" class="btn btn-default btn-xs"><i class="fa fa-plus"> Add Jobs</i></a>
					  </div><br>
						<table class="cell-border display compact example" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Department</th>
									<th>Job Title</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Salary</th>
									<th>Edit</th>
									<th>Del</th>
									<th>View</th>
								</tr> 
							</thead>
							<tbody>
							<?php
								foreach($jobs as $job){
							?>
								<tr>
									<td><?php echo $job->department_name?></td>
									<td><?php echo $job->job_title?></td>
									<td><?php echo $job->start_date?></td>
									<td><?php echo $job->end_date?></td>
									<td><?php echo $job->salary?></td>
									<td><a class="btn btn-success btn-xs" href="<?php echo site_url('post_controller/jobs/'.$job->id);?>"><i class="fa fa-pencil"></i></a></td>
									<td><a class="btn btn-danger btn-xs" href="<?php echo site_url('post_controller/del_job/'.$job->id);?>"><i class="fa fa-trash-o"></i></a></td>
									<td><a class="btn btn-info btn-xs" href="<?php echo site_url('post_controller/job_view/'.$job->id);?>"><i class="fa fa-search"></i></a></td>
								</tr>
								<?php }?>
							</tbody>
							<tfoot>
								<tr>
									<th>Department</th>
									<th>Job Title</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Salary</th>
									<th>Edit</th>
									<th>Del</th>
									<th>View</th>
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
<?php include_once("footer.php");?>