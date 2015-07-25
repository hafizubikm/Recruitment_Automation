<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job Posting</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jqueryui.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery-te-1.4.0.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/datepicker.css"  media="all"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
		.btn-file {
		    position: relative;
		    overflow: hidden;
		}
		.btn-file input[type=file] {
		    position: absolute;
		    top: 0;
		    right: 0;
		    min-width: 100%;
		    min-height: 100%;
		    font-size: 100px;
		    text-align: right;
		    filter: alpha(opacity=0);
		    opacity: 0;
		    outline: none;
		    background: white;
		    cursor: inherit;
		    display: block;
		}
		.glyphicon-refresh-animate {
		    -animation: spin .7s infinite linear;
		    -webkit-animation: spin2 .7s infinite linear;
		    -moz-animation: spin2 .7s infinite linear;
		}

		@-webkit-keyframes spin2 {
		    from { -webkit-transform: rotate(0deg);}
		    to { -webkit-transform: rotate(360deg);}
		}

		@-moz-keyframes spin2 {
		    from { -moz-transform: rotate(0deg);}
		    to { -moz-transform: rotate(360deg);}
		}

		@keyframes spin {
		    from { transform: scale(1) rotate(0deg);}
		    to { transform: scale(1) rotate(360deg);}
		}
    </style>
  </head>
  <body>
	<nav class="navbar navbar-inverse navbar">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">NNS</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="<?php echo site_url('post_controller/')?>"><b>Home</b></a></li>
			<li><a href="#about"><b>About</b></a></li>
			<li><a href="#services"><b>Service</b></a></li>
			<li><a href="#portfolios"><b>Portfolios</b></a></li>
			<li><a href="#contact"><b>Contact</b></a></li>
			<li><a href="<?php echo site_url('post_controller')?>"><b><font color=red>All Jobs</font></b></a></li>
			<li><a href="<?php echo site_url('post_controller/admin')?>"><b><font color=lightgreen>Admin</font></b></a></li>
		  </ul>
		  <form class="navbar-form navbar-right" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
		<?php 
			date_default_timezone_set("Asia/Dhaka");
		?>