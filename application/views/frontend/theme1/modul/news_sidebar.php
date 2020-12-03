				<div class="widget">
					<h4>Recent post</h4>
					<ul class="recent_post">
						<?php
						foreach ($gets_news as $key => $get_news) {
						?>
						<li>
						<i class="icon-calendar-empty"></i> <?php echo $get_news->date_update; ?>
						<div><a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_news->id_news; ?>"><?php echo $get_news->judul_news; ?></a></div>
						</li>
						<?php
						}
						?>
					</ul>
				</div><!-- End widget -->
                <hr>

                <div class="widget">
					<h4>Video BP3K SDMT</h4>
						<?php
						foreach ($videos as $key => $video) {
							$slice = explode(',', $video->content_setting_website);
						?>
						<b><?php echo $slice[0]; ?></b><br>
						<iframe width="100%" src="<?php echo $slice[1]; ?>" frameborder="0" allowfullscreen></iframe>
						<?php
						}
						?>
				</div><!-- End widget -->
                <hr>

                <div class="widget">
					<h4>Link Situs</h4>
						<?php
						foreach ($links as $key => $link) {
							$slice = explode(',', $link->content_setting_website);
						?>
						<a href="<?php echo $slice[0]; ?>" target='blank'><img style="margin-bottom:5px;" src="<?php echo base_url().'uploads/banner/'.$slice[1]; ?>"></a><br>
						<?php
						}
						?>
				</div><!-- End widget -->
                <hr>