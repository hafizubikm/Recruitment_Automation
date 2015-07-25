	<?php include_once("header.php");?>
	<div class="well container"><h1 class="text-center">Edit Jobs</h1></div>
	<div class="container">
	<div class="row">
	<div class="panel-body">
		<div class="col-md-2">
			<?php include_once("sidebar.php");?>
		</div>
		<div class="col-md-10">
		<div class="row">
      <div class="panel panel-primary">
      <div class="panel-heading"><a href="<?php echo site_url('post_controller/jobs')?>" class="btn btn-default btn-xs">
			<i class="fa fa-search"> Show Jobs</i></a>
		</div>
         <div class="panel-body">
            <div class="col-md-8 col-sm-12">
               <div>* Mandatory Field</div>
               <?php extract($jobs);?>
               <br>
               <?php echo form_open('post_controller/add_jobs/'.$id);?>
                  <div class="form-group">
                     <label for="department">Select a Department*</label>
                  <select class="form-control" id="department" name="department" required="">

							<option value="">Select a Department</option>
							<?php foreach($department as $dept):?>
							<option <?php if($department_id===$dept->id) echo 'selected="selected"'?>  value="<?php echo $dept->id?>"><?php echo $dept->department_name?></option>
							<?php endforeach;?>
						</select>
						<span class="fred"></span>
                  </div>
                  <div class="form-group">
                     <label for="jobTitle">Job Title*</label>
                     <div>
                        <input type="text" class="form-control" id="jobTitle" name="jobTitle"  placeholder="Job Title" value="<?php echo $job_title;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="requirement">Job Descriptions*</label>
                     <div>
                        <textarea class="form-control jqte-test" id="requirement" name="requirement" required=""><?php echo $requirement;?></textarea>
						<span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="experience">Experience*</label>
                     <div>
                        <input type="text" class="form-control" id="experience" name="experience"  placeholder="Experience"  value="<?php echo $experience;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
				     <div class="form-group">
                     <label for="education">Education*</label>
                     <div>
                        <input type="text" class="form-control" id="education" name="education"  placeholder="Education" value="<?php echo $education;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="sdate">Start_date*</label>
                     <div>
                        <input type="text" class="form-control datepicker" id="sdate" name="sdate"  placeholder="Start Date" value="<?php echo $start_date;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="edate">End_date*</label>
                     <div>
                        <input type="text" class="form-control datepicker" id="edate" name="edate"  placeholder="End Date" value="<?php echo $end_date;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="salary">Salary*</label>
                     <div>
                        <input type="text" class="form-control" id="salary" name="salary"  placeholder="Salary" value="<?php echo $salary;?>" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
               </form>
            </div>
            <div class="col-md-6 col-sm-12">
            </div>
         </div>
      </div>
      <!--end .panel-->
   </div>
	</div>
		   <!--end .panel-->
	</div>
	</div>
	<?php include_once("footer.php")?>