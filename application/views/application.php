<?php include_once("header.php");?>
<div class="well container"><h1 class="text-center">Thank You</h1></div>
<div class="container">
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          
        <div class="panel panel-info">
          <!-- Default panel contents -->
          <div class="panel-heading"> <a class="btn btn-danger btn-xs" href="<?php echo site_url('post_controller');?>"><i class="fa fa-times"></i> Close</a></div>
          <div class="jumbotron panel-body">
            <h2>Thank You for Apply</h2>
          </div>
        </div>

        <div class="model-footer">
        We will contact as soon as posible <a href="<?php echo site_url('post_controller');?>" class="btn btn-default pull-right"><i class="fa fa-check-circle-o"></i> OK</a>
        </div>

        </div>

      </div>
   </div>
  </div>
</div>
<?php include_once("footer.php");?>

