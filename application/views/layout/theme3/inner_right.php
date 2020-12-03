<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <?php echo $this->load->view($head); ?>
    </head>

    <body>
        <!-- HEADER -->
        <div id="box-header">
            <div class="box-main">
                <?php echo $this->load->view($menu); ?>
            </div>
        </div>
        <!-- [end] HEADER -->

        <!-- CONTENT -->
        <div id="box-content">
        	<!-- breadcrumb -->
            <div id="breadcrumb">
                <div class="box-main">
                    <a href="<?php echo base_url()?>"><?php echo $text_home; ?></a> \ <?php echo $text_title; ?>
                </div>
            </div>
            <!-- [end] breadcrumb -->

            <div class="box-main mt-20">
            	<div class="box-300 floated-left">
            		<?php foreach($contents_sidebar as $key => $content_sidebar): ?>
			
					<?php echo ${$content_sidebar}; ?>

					<?php endforeach ?>	
            	</div>

            	<div class="box-620 floated-right">
            		<?php echo $this->load->view($content); ?>
            	</div>
            </div>
            <div class="klir"></div>
        </div>
        <!-- [end] CONTENT -->

        <!-- FOOTER -->
        <?php echo $this->load->view($footer); ?>
        <!-- [end] FOOTER -->

        <!-- Flexslider -->
        <script src="<?php echo base_url()?>assets/theme2/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('#slideshow .flexslider').flexslider({
            animation: "slide",
          });
        });
        </script>

    </body>
</html>