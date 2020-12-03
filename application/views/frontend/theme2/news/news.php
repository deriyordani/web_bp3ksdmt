<!-- News List -->

<?php foreach ($get_news as $key => $get_new) { ?>
<div class="box-berita">
    <div class="title-blok"><h2 class="head-title"><a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_new->id_news; ?>"><?php echo $get_new->judul_news; ?></a></h2></div>
    <div class="meta-date"><?php echo $get_new->date_update; ?> | <?php echo $get_new->username; ?></div>
    <img src="<?php echo base_url() . $get_new->url_gambar_news; ?>">
    <p><?php echo character_limiter($get_new->content_news, 250); ?></p>
    <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_new->id_news; ?>" class="more"><?php echo $text_read; ?>...</a>
</div>
<?php } ?>

<!-- [end] News List -->

<!-- Pagination -->
<div class="nav-berita">
    <?php
        $npp = $posisi-2;

        if($posisi==1) echo '<a class="prev mr-20 disabled"><span class="arrow"></span></a>';
        else{
            if($npp==0) echo anchor($base_url,'<span class="arrow"></span>', 'class="prev mr-20"');
            else echo anchor($base_url . '/' . $npp,'<span class="arrow"></span>', 'class="prev mr-20"');
        }
    ?>

    <?php
    for($i=1;$i<=$total_page;$i++){
        $np = $i-1;
        if($i==1){
            if($i==$posisi) echo anchor($base_url,$i,'class="active pagi"');
            else echo anchor($base_url,$i,'class="pagi"');
        } else if ($i==$posisi){
            echo anchor($base_url . '/' . $np,$i,'class="active pagi"');
        } else {
            echo anchor($base_url . '/' . $np,$i,'class="pagi"');
        }
    }
    ?>

    <?php
        if($posisi==$total_page) echo '<a class="next disabled"><span class="arrow"></span></a>';
        else echo anchor($base_url . '/' . $posisi,'<span class="arrow"></span>', 'class="next"');
    ?>
</div>
<!-- [end] Pagination -->  