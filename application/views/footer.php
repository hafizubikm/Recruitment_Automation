    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jqueryui.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-te-1.4.0.min.js"></script>
	
	
<script>
	// for datatable
	$(document).ready(function(){

		//for dataTable
		$('.example').dataTable();
		
		//for text modifier
		$('.jqte-test').jqte();	
		
		//for date-picker
		$('.datepicker').datepicker({
			format:'yyyy/mm/dd',
		});

		//for model show on page load
		$(window).load(function(){
			$('#myModal').modal('show');
		});

		//for static model
		$('#myModal').modal({
			backdrop: 'static',
			keyboard: false
		});
	});
</script>
</body>
</html>