<?php include_once("header.php");?>
<div class="well container"><h1 class="text-center">Aplications</h1></div>
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
					  	Aplications
					  </div><br>
						<table class="cell-border display compact example" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Job Title</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Resume</th>
									<th>Edit</th>
									<th>Del</th>
									<th>View</th>
								</tr> 
							</thead>
							<tbody>
							<?php
								foreach($applications as $application){
							?>
								<tr>
									<td><?php echo $application->job_title?></td>
									<td><?php echo $application->name?></td>
									<td><?php echo $application->email?></td>
									<td><?php echo $application->phone?></td>
									<td><a class="btn btn-warning btn-xs" href="<?php echo base_url()?>filess/<?php echo $application->file?>" download><i class="fa fa-download"></i> Download</a></td>
									<td><a class="btn btn-success btn-xs" href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a class="btn btn-danger btn-xs" href="<?php echo site_url('post_controller/del_application/'.$application->id);?>"><i class="fa fa-trash-o"></i></a></td>
									<td><a class="btn btn-info btn-xs" href="<?php echo site_url('post_controller/job_view/'.$application->job_post_id);?>"><i class="fa fa-search"></i></a></td>
								</tr>
								<?php }?>
							</tbody>
							<tfoot>
								<tr>
									<th>Job Title</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Resume</th>
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