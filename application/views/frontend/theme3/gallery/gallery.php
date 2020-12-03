<!-- Gallery -->
<div id="gallery" class="content">
	<div class="title-blok mb-20">
        <h2 class="head-title"><?php echo $text_title; ?></h2>
    </div>
    <?php
    foreach ($gets_gallery as $key => $get_gallery) {
        if($key == 0) echo "<div class=main-foto>";
        else echo "<div class=sc-foto>";

        echo "<a class='fancybox' href='". base_url() . $get_gallery->url_banner . "' data-fancybox-group='gallery' title='". $get_gallery->content_banner . "'>";
        echo "<img src='". base_url() . $get_gallery->url_banner . "' alt='". $get_gallery->judul_banner . "'></a></div>";
    }
    ?>
</div>
<!-- [end] Gallery -->