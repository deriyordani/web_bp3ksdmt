<div id="page" class="content">
	<?php foreach ($get_page_views as $key => $get_page_view) { ?>
	<div class="title-blok"><h2 class="head-title"><?php echo $get_page_view->judul_page; ?></h2></div>
	<div class="text"><?php echo $get_page_view->content_page; ?></div>
	<?php } ?>
</div>