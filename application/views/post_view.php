<?php include_once("header.php");?>
	<div class="well container"><h1 class="text-center">Available Jobs</h1></div>
	<div class="container">
		<div class="panel panel-primary">
		   <div class="panel-heading">
			Available Jobs
		   </div>
		   <div class="panel-body"> 
			<?php
				$format='Y-m-d';
				$today=DateTime::createFromFormat ($format,date('Y-m-d'));
				//var_dump($today); echo "<br>";
				foreach($jobs as $job){
				//var_dump(DateTime::createFromFormat($format,$job->start_date)); echo "<br>";
				//var_dump(DateTime::createFromFormat($format,$job->end_date)); echo "<br>";
				$start_date	=	DateTime::createFromFormat($format,$job->start_date);
				$end_date	=	DateTime::createFromFormat($format,$job->end_date);
					if($today>=$start_date && $today<=$end_date){
			?>
			  <div class="col-md-6">
			  	<table>
				   <tr>
					  <td><h4>Post </h4></td><td><h4>: <a href="<?php echo site_url('post_controller/job_details/'.$job->id)?>"><?php echo $job->job_title;?></a> <a href="<?php echo site_url('post_controller/apply/'.$job->id);?>" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Apply</a></h4></td>
				   </tr>
				   <tr><td><b>Department &nbsp;</b> </td><td> : <?php echo $job->department_name;?></td></tr>
				   <tr>
					  <td><b>Education</b> </td> <td> : <?php echo $job->education;?></td>
				   </tr>
				   <tr><td><b>Experience</b> <td> : <?php echo $job->experience;?></td></tr>
				   <tr><td><b>Dead Line</b> <td> : <?php echo $job->end_date;?></td></tr>
				 </table>
				  <hr>
			</div>
				<?php }}?>
			</div>
		</div>
	</div>
<?php include_once("footer.php");?>