<!-- berita -->
<div class="news floated-right">
	<div class="title-blok"><h2 class="head-title">Berita Terbaru</h2></div>
	<ul class="berita">
		<?php
		foreach ($get_news_homes as $key => $get_news_home) {
		?>
			<li>
				<h3><a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_news_home->id_news; ?>" class="head-berita"><?php echo $get_news_home->judul_news; ?></a></h3>
				<span class="tgl-berita"><?php echo $get_news_home->date_update; ?></span>
			</li>
		<?php
		}
		?>
	</ul>
	
	<a href="<?php echo base_url()?>modul/news" class="link-berita"><?php echo $text_view_news; ?></a>

</div>
<!-- [end] berita -->