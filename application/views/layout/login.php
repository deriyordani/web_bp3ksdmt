<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8" />	
	<link rel="stylesheet"  href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet"  href="<?php echo base_url()?>css/fonts/ptsans/stylesheet.css" media="screen">
	<link rel="stylesheet"  href="<?php echo base_url()?>css/fonts/icomoon/style.css" media="screen">
	<link rel="stylesheet"  href="<?php echo base_url()?>css/login.css" media="screen">
	<link rel="stylesheet"  href="<?php echo base_url()?>css/mws-theme.css" media="screen">
    <title>Admin Panel BP3K SDMT</title>
    <link href="<?php echo base_url()?>assets/theme1/images/icon.png" rel="icon">
</head>
<body>
    <center><img src="<?php echo base_url()?>uploads/banner/logo.png" style="margin-top:30px"></center>
	<?php echo $this->load->view($content) ?>


    <!-- JavaScript Plugins -->
    <script src="<?php echo base_url()?>js/libs/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url()?>js/libs/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url()?>custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="<?php echo base_url()?>jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="<?php echo base_url()?>plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="<?php echo base_url()?>js/core/login.js"></script>

</body>
</html>