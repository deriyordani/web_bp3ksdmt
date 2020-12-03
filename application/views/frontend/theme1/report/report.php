			<?php
			foreach ($get_reports as $key => $get_report) {
			?>
						<div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="img_list">
                                        <img src="<?php echo base_url(); ?>images/download.png" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="course_list_desc">
                                        <h3><strong><?php echo $get_report->judul_file; ?></strong></h3>
                                        <a href="<?php echo base_url(); ?>modul/report/download_file/<?php echo $get_report->id_file; ?>" class="button_outline"><?php echo $text_download; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
			<?php
			}
			?>

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
