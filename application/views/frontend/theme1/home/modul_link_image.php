<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
        	<?php
			foreach ($get_link_images as $get_link_image) {
				$slice = explode(",", $get_link_image->content_setting_website);
			?>
				<div class="col-md-4 col-sm-4">
	                <div class="home_feat_1_box">
	                    <a href="<?php echo $slice[2]; ?>">
	                        <img src="<?php echo base_url()."uploads/banner/".$slice[1]; ?>" class="img-responsive" alt="">
	                        <div class="short_info"><h3><?php echo $slice[0]; ?></h3><i class="arrow_carrot-right_alt2"></i></div>
	                    </a>
	                </div>
	            </div>
			<?php
			}
			?>
        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->