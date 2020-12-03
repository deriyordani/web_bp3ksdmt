<div class="container margin_60">
    <div class="main_title">
    <h2>BALAI DIKLAT PEMBANGUNAN KARAKTER SDM TRANSPORTASI</h2>
    <p>Sarana & Prasarana</p>
    </div>

        	<?php
        	$i=1;
			foreach ($gets_fasilitas as $get_fasilitas) {
				$slice = explode(",", $get_fasilitas->content_setting_website);

				if($i==1 || $i%3==1) echo "<div class='row'>";

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
				if($jml==$i || $i%3==0) echo "</div><br><br>";
			
			$i++;
			}
			?>

    <hr class="more_margin">
</div><!-- End container -->