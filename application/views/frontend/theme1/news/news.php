<!-- News List -->

<?php foreach ($get_news as $key => $get_new) { ?>
<div class="post">
    <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_new->id_news; ?>" >
    <?php if($get_new->url_gambar_news != ''){ ?>
    <img src="<?php echo base_url() . $get_new->url_gambar_news; ?>" alt="" class="img-responsive">
    <?php }else{ ?>
    <img src="<?php echo base_url(); ?>images/def.jpg" alt="" class="img-responsive">
    <?php } ?>
    </a>
    <div class="post_info clearfix">
        <div class="post-left">
            <ul>
                <li><i class="icon-calendar-empty"></i><?php echo $get_new->date_update; ?> <em>by <?php echo $get_new->username; ?></em></li>
            </ul>
        </div>
    </div>
    <h2><?php echo $get_new->judul_news; ?></h2>
    <!-- <p><?php echo character_limiter($get_new->content_news, 450); ?></p> -->

    <a href="<?php echo base_url(); ?>modul/news/view/<?php echo $get_new->id_news; ?>" class="button" >Read more</a>
</div><!-- end post -->
<?php } ?>
                
<div class="text-center">
    <ul class="pagination">
        <li>
        <?php
            $npp = $posisi-2;

            if($posisi==1) echo '<a class="prev disabled">Prev</a>';
            else{
                if($npp==0) echo anchor($base_url,'Prev', 'class="prev"');
                else echo anchor($base_url . '/' . $npp,'Prev', 'class="prev"');
            }
        ?>
        </li>

        <?php
        for($i=1;$i<=$total_page;$i++){
            $np = $i-1;
            
            if($total_page >= 15){
                $tengah = round($total_page/2);

                if($i==$tengah || $i==1 || $i==$total_page || $i==$tengah-1 || $i==$tengah+1){
                    if($i==1){
                        if($i==$posisi){
                            echo "<li class='active'>";
                            echo anchor($base_url,$i);
                        } else {
                            echo "<li>";
                            echo anchor($base_url,$i);
                        }
                    } else if ($i==$posisi){
                        echo "<li class='active'>";
                        echo anchor($base_url . '/' . $np,$i);
                    } else {
                        echo "<li>";
                        echo anchor($base_url . '/' . $np,$i);
                    }
                    echo "</li>";
                }
            } else {
                if($i==1){
                    if($i==$posisi){
                        echo "<li class='active'>";
                        echo anchor($base_url,$i);
                    } else {
                        echo "<li>";
                        echo anchor($base_url,$i);
                    }
                } else if ($i==$posisi){
                    echo "<li class='active'>";
                    echo anchor($base_url . '/' . $np,$i);
                } else {
                    echo "<li>";
                    echo anchor($base_url . '/' . $np,$i);
                }
                echo "</li>";
            }

            if($total_page >= 15){
                if($i==1){
                    echo "<li><a>.</a></li>";
                }

                if($i==$total_page-1){
                    echo "<li><a>.</a></li>";
                }
            }
        }
        ?>

        <li>
        <?php
            if($posisi==$total_page) echo '<a class="next disabled">Next</a>';
            else echo anchor($base_url . '/' . $posisi,'Next', 'class="next"');
        ?>
        </li>
    </ul><!-- end pagination-->
</div>
<!-- [end] News List -->