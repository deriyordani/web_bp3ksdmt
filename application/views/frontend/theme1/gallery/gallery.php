	<div class="box_style_1">
		<section class="grid">
				<?php
			    foreach ($gets_gallery as $key => $get_gallery) {

			    	if($key==0 || $key%4==0){
			    		echo "<div class='row'><ul class='magnific-gallery'>";
			    	}

			    	echo "<li>";
			    	echo "<figure>";
			    		echo "<img src='". base_url() . $get_gallery->url_banner . "' alt='". $get_gallery->judul_banner . "'>";
			    		echo "<figcaption>";
			    		echo "<div class='caption-content'>";

			    			echo "<a href='". base_url() . $get_gallery->url_banner . "' title='". $get_gallery->judul_banner . "' data-effect='mfp-move-horizontal'>
										<i class='pe-7s-albums'></i>
										<p>". $get_gallery->judul_banner . "</p>
								</a>";

						echo "</div>";
			    		echo "</figcaption>";

			    	echo "</figure>";
			    	echo "</li>";

			    	if($key==3 || $key%4==3){
			    		echo "</ul></div>";
			    	}
		
			    }
			    ?>
		</section>
	</div>

<div class="text-center">
    <ul class="pagination">
        <li>
        <?php
            $npp = $posisi-2;

            if($posisi==1) echo '<a class="prev disabled">Prev</a>';
            else{
                if($npp==0) echo anchor($base_url,'Prev', 'class="prev"');
                else echo anchor($base_url . 'index/' . $npp,'Prev', 'class="prev"');
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
                        echo anchor($base_url . 'index/' . $np,$i);
                    } else {
                        echo "<li>";
                        echo anchor($base_url . 'index/' . $np,$i);
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
                    echo anchor($base_url . 'index/' . $np,$i);
                } else {
                    echo "<li>";
                    echo anchor($base_url . 'index/' . $np,$i);
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
            else echo anchor($base_url . 'index/' . $posisi,'Next', 'class="next"');
        ?>
        </li>
    </ul><!-- end pagination-->
</div>