<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php echo $this->load->view($head); ?>
</head>
<body>

	<!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


	<div class="container">
		<!-- HEADER -->
		<header class="site-header">
			<?php echo $this->load->view($menu); ?>
		</header>
		<!-- [end] HEADER -->

		<!-- CONTENT -->
		<div id="content">

			<div class="row">
                <div class="span-4">
                    <h1 class="page-title"><?php echo $text_title; ?></h1>
                </div>
                <div class="span-2">
                    <span class="breadcrumb"><a href="<?php echo base_url()?>"><?php echo $text_home; ?></a> | <?php echo $text_title; ?></span>
                </div>
            </div>

			<div class="row">
				<div class="span-4">
				<?php echo $this->load->view($content); ?>
				</div>

				<!-- Sidebar -->
				<div class="span-2 sidebar">
				<?php
				
				foreach($contents_sidebar as $key => $content_sidebar): ?>
			
				<?php 

				echo ${$content_sidebar};

				//echo file_get_contents(base_url() . 'modul/' . $content_sidebar.'/index/'.$this->maluku_lib->language().'/'.$this->maluku_lib->language_name()); ?>

				<?php endforeach ?>		
				</div>
				<!-- [end] Sidebar -->

			</div>
		</div>
		<!-- [end] CONTENT -->

		<!-- FOOTER -->
		<footer class="site-footer">
			<?php echo $this->load->view($footer); ?>
		</footer> <!-- [end] FOOTER -->
	</div>

	<!-- Flexslider -->
	<script src="<?php echo base_url()?>assets/theme1/js/jquery.flexslider.min.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		$('#slideshow .flexslider').flexslider({
			animation: "slide",
		});
	});
	</script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

	<script type="text/javascript">

	$(function(){
	var loader=$('#loader');
	var pollcontainer=$('#pollcontainer');
	loader.fadeIn();
	//Load the poll form
	$.get('modul/polling_sidebar', '', function(data, status){
		pollcontainer.html(data);
		animateResults(pollcontainer);
		pollcontainer.find('#viewresult').click(function(){
			//if user wants to see result
			loader.fadeIn();
			$.get('modul/polling_sidebar', 'result=1', function(data,status){
				pollcontainer.fadeOut(1000, function(){
					$(this).html(data);
					animateResults(this);
				});
				loader.fadeOut();
			});
			//prevent default behavior
			return false;
		}).end()
		.find('#pollform').submit(function(){
			var selected_val=$(this).find('input[name=poll]:checked').val();
			if(selected_val!=''){
				//post data only if a value is selected
				loader.fadeIn();
				$.post('modul/polling_sidebar', $(this).serialize(), function(data, status){
					$('#formcontainer').fadeOut(100, function(){
						$(this).html(data);
						animateResults(this);
						loader.fadeOut();
					});
				});
			}
			//prevent form default behavior
			return false;
		});
		loader.fadeOut();
	});
	
	function animateResults(data){
		$(data).find('.bar').hide().end().fadeIn('slow', function(){
							$(this).find('.bar').each(function(){
								var bar_width=$(this).css('width');
								$(this).css('width', '0').animate({ width: bar_width }, 1000);
							});
						});
	}
	
});
	
</script>

</body>
</html>