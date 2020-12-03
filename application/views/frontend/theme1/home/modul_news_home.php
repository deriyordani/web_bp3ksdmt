<div class="container margin_60">
    <div class="main_title">
    <h2>Berita</h2>
    <p>Berita terbaru dari BP3KSDMT</p>
    </div>
    <div id="tabs" class="tabs">
        <nav style="display:none">
            <ul>
                <li><a href="#section-1" class="icon-news"><span>News</span></a></li>
            </ul>
        </nav>
        <div class="content">
            <section id="section-1">
                <div class="row list_news_tabs">
                	<?php
					foreach ($get_news_homes as $key => $get_news_home) {
					?>
						<div class="col-md-4 col-sm-4">
	                        <p><a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_news_home->id_news; ?>">
                            <?php if($get_news_home->url_gambar_news!=''){ ?>
                            <img src="<?php echo base_url() . $get_news_home->url_gambar_news; ?>" alt="" class="img-responsive">
                            <?php }else{ ?>
                            <img src="<?php echo base_url(); ?>images/def.jpg" alt="" class="img-responsive">
                            <?php } ?>
                            </a></p>
	                        <span class="date_published"><?php echo $get_news_home->date_update; ?></span>
	                        <h3><a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_news_home->id_news; ?>"><?php echo $get_news_home->judul_news; ?></a></h3>
	                        <p><?php echo character_limiter(strip_tags($get_news_home->content_news), 250); ?></p>
	                        <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_news_home->id_news; ?>" class="button small">Read more</a>
	                    </div>
					<?php
					}
					?>
                </div><!--End row -->
            </section>
        </div><!-- /content -->
    </div><!-- End tabs -->
</div>