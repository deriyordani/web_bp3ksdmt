<!-- Search List -->

<h3>Search Keyword <i>"<?php echo $keyword; ?>"</i></h3>

<?php foreach ($get_search_views as $key => $get_search_view) { ?>
<div class="post">
    <?php if($get_search_view->tipe_search == 'page'){ ?>
        <a href="<?php echo base_url(); ?>page/view/<?php echo $get_search_view->id_search; ?>" >
    <?php }else{ ?>
        <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_search_view->id_search; ?>" >
    <?php } ?>


    <?php if($get_search_view->img_search != ''){ ?>
    <img src="<?php echo base_url() . $get_search_view->img_search; ?>" alt="" class="img-responsive">
    <?php }else{ ?>
    <img src="<?php echo base_url(); ?>images/def.jpg" alt="" class="img-responsive">
    <?php } ?>
    </a>
    <div class="post_info clearfix">
        <div class="post-left">
            <ul>
                <li><i class="icon-calendar-empty"></i><?php echo $get_search_view->date_search; ?></li>
            </ul>
        </div>
    </div>
    <h2><?php echo $get_search_view->judul_search; ?></h2>

    <?php if($get_search_view->tipe_search == 'page'){ ?>
        <a href="<?php echo base_url(); ?>page/view/<?php echo $get_search_view->id_search; ?>" class="button" >Read more</a>
    <?php }else{ ?>
        <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_search_view->id_search; ?>" class="button" >Read more</a>
    <?php } ?>

</div><!-- end post -->
<?php } ?>
                
<!-- [end] Search List -->