<div id="full-slider-wrapper">
    <div id="layerslider" style="width:100%;height:650px;">
    	<?php
		foreach ($get_slides_home as $get_slide_home) {
		?>
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
            	<img src="<?php echo base_url() . $get_slide_home->url_banner; ?>" class="ls-bg" alt="Slide background">
            	<!-- <h3 class="ls-l slide_typo" style="top: 45%; left: 50%; text-shadow:0 0 10px #ccc;color:#ffba00 !important;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;" ><?php echo $get_slide_home->judul_banner; ?><br><?php echo $get_slide_home->content_banner; ?></h3> -->
       		</div>
		<?php
		}
		?>
    </div>
</div><!-- End layerslider -->