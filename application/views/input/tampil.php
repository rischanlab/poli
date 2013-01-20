<!DOCTYPE html>
<html>
<head>
<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="<?php echo base_url(); ?>assets/mos-css/mos-style0.css"
	rel="stylesheet" type="text/css" />

<link rel="shortcut icon"
	href="<?php echo base_url(); ?>public/images/icon.png" />
<title>Poliklinik UIN Sunan Kalijaga Yogyakarta</title>


</head>
<body>

	<a href="<?php echo base_url(); ?>/input" /><img src="<?php echo base_url(); ?>public/images/icon.png"/></a>
		
		<div class="clear"></div>
		
	
	</div>
	<div style='height: 20px;'></div>
	<div>
		<?php echo $output; ?>
	</div>
</body>
</html>
