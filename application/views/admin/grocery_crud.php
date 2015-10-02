<? echo $output;?>

<div class="clearfix"></div>
	</div>
	<!-- END PAGE HEADER -->
</div>
<!-- END CONTENT -->

<!-- END PAGE LEVEL PLUGINS -->
	<?php 
		if(isset($css_files))
		{
		foreach($css_files as $file): 
	?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php 
		endforeach; 
		}
	?>
	<?php 
		if(isset($js_files))
		{
		foreach($js_files as $file): 
	?>
		<script src="<?php echo $file; ?>"></script>
	<?php 
		endforeach; 
		}
	?>