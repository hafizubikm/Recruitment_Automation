<?php include_once("header.php");?>

<div id="container">
	<h1>Welcome to Department!</h1>
	<select id="job_post">
		<?php foreach ($job_posts as $job_post):?>
		<option value="<?php echo $job_post->id;?>"><?php echo $job_post->job_title;?></option>
		<?php endforeach;?>
	</select>
</div>
<div>
</div>
<?php include_once("footer.php");?>