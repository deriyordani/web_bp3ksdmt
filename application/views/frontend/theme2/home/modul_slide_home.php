<!-- Slideshow -->
<div id="slideshow" class="floated-left">
	<div class="flexslider">
		<ul class="no-style slides">
			<?php
			foreach ($get_slides_home as $get_slide_home) {
				?>
				<li>
					<img src="<?php echo base_url() . $get_slide_home->url_banner; ?>">
					<div>
						<h2 class="display"><?php echo $get_slide_home->judul_banner; ?></h2>
						<p><?php echo $get_slide_home->content_banner; ?></p>
					</div>
				</li>
				<?php
			}
			?>
		</ul>
	</div>
</div>
<!-- [end] Slideshow -->