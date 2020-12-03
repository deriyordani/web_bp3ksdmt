<div class="box_style_1">
	<?php foreach ($get_page_views as $key => $get_page_view) { ?>
	<h1 class="title"><?php echo $get_page_view->judul_page; ?></h1>
	<div class="text"><?php echo $get_page_view->content_page; ?></div>
	<?php } ?>
</div>