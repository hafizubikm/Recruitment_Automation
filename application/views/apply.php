<?php include_once("header.php");?>
<div class="well container"><h1 class="text-center">Apply Online</h1></div>
<div class="container">
   <div class="row">
      <div class="panel panel-primary">
         <div class="panel-heading fsecond">Online Application</div>
         <div class="panel-body">
            <div class="col-md-6 col-sm-12">
               <div class="stitle">* Mandatory Field</div>
               <font color=red><?php echo $error;?></font>
               <br>
               <?php echo form_open_multipart('post_controller/application');?>
                  <div class="form-group">
                     <label for="Name">Select a Job*</label>
                     <div>
                     <select class="form-control" required="" name="job_id">
							<option value="">Select a Job</option>
                     <?php foreach ($jobs as $job ){?>
                        <option <?php if($job->id===$this->uri->segment(3)) echo 'selected="selected"'?> value="<?php echo $job->id;?>"><?php echo $job->job_title?></option>
                    <?php }?>
						   </select>
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="Name">Name*</label>
                     <div>
                        <input type="text" class="form-control" id="Name" name="Name" value="" placeholder="Please enter Name" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="Email">Email*</label>
                     <div>
                        <input type="email" class="form-control" id="Email" name="Email" value="" placeholder="Please enter Email" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="Phone">Phone*</label>
                     <div>
                        <input type="text" class="form-control" id="Phone" name="Phone" value="" placeholder="Please enter Phone" required="">
                        <span class="fred"></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="ResumeURL">Upload Your Resume*</label>
                     <div>
                        <span class="btn btn-danger btn-file">
               <i class="fa fa-upload"></i> Browse <input type="file" name="userfile" required>
                        </span>
                        
                        <span><b><i>( Supported Format: doc, docx)</i></b></span>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Submit Application">
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
<?php include_once("footer.php")?>