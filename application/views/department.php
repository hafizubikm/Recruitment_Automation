	<?php include_once("header.php");?>
	<div class="well container"><h1 class="text-center">All Departments</h1></div>
	<div class="container">
		<div class="row">
			  <div class="panel-body">
					<div class="col-md-2">
						<?php include_once("sidebar.php");?>
					</div>
					<div class="col-md-10">
					<div class="row">
					   <div class="panel panel-primary">
						  <div class="panel-heading"><a href="<?php echo site_url('post_controller/newdepartment')?>" class="btn btn-default btn-xs">
							 <i class="fa fa-plus"> Add New Department</i></a>
						  </div><br>
						<table id="" class="cell-border display compact example" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Department Name</th>
									<th>Edit</th>
									<th>Del</th>
								</tr>
							</thead>
							
							 <tbody>
							<?php foreach($department as $dept):?>
								<tr>
									<td><?php echo $dept->department_name?></td>
									<td><a class="btn btn-success btn-xs" href="#"><i class="fa fa-pencil"></i></a></td>
									<td><a class="btn btn-danger btn-xs" href="<?php echo site_url('post_controller/del_department/'.$dept->id);?>"><i class="fa fa-trash-o"></i></a></td>
								</tr>
							<?php endforeach;?>
							</tbody>
							
							<tfoot>
								<tr>
									<th>Department Name</th>
									<th>Edit</th>
									<th>Del</th>
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