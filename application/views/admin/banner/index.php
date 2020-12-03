	<link href="<?php echo base_url() ?>css/pagination.css" rel="stylesheet" />
	<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<?php if($code=='slide'){ ?>
		<span><i class="icon-newspaper"> List Slide Show</i></span>
		<?php } else if($code=='gallery'){ ?>
		<span><i class="icon-newspaper"> List Gallery</i></span>
		<?php } else if($code=='arsip'){ ?>
		<span><i class="icon-newspaper"> List Arsip Images</i></span>
		<?php } ?>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
			<?php if($code=='slide'){ ?>
			<a href="<?php echo base_url()?>admin/banners/add" class="btn"><i class="icol-add"></i> Add</a>
			<?php } else if($code=='gallery'){ ?>
			<a href="<?php echo base_url()?>admin/banners/add_gallery" class="btn"><i class="icol-add"></i> Add</a>
			<?php } else if($code=='arsip'){ ?>
			<a href="<?php echo base_url()?>admin/banners/add_arsip" class="btn"><i class="icol-add"></i> Add</a>
			<?php } ?>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<div id="content">
		<?php if($code=='slide'){ ?>
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Judul Banner</th>
					<th>Kategori Banner</th>
					<th>Image</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row){
				if($row->id_kategori_sub==4){
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->judul_banner ?></td>
					<td><?php echo $row->nama_kategori_sub ?></td>
					<td><img style="max-width:300px" src="<?php echo base_url() . $row->url_banner ?>"><br><?php echo base_url() . $row->url_banner ?></td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/banners/edit/<?php echo $row->id_banner?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/banners/delete/slide/<?php echo $row->id_banner?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
					</td>
				</tr>
				<?php $i++; ?>
				<?php
				}
				} ?>
				</tbody>
			</table>
			<?php } else if($code=='gallery'){ ?>
			<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Judul Foto</th>
					<th>Image</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row){
				if($row->id_kategori_sub==10){
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->judul_banner ?></td>
					<td><img style="max-width:300px" src="<?php echo base_url() . $row->url_banner ?>"><br><?php echo base_url() . $row->url_banner ?></td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/banners/edit_gallery/<?php echo $row->id_banner?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/banners/delete/gallery/<?php echo $row->id_banner?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
					</td>
				</tr>
				<?php $i++; ?>
				<?php
				}
				} ?>
				</tbody>
			</table>


<div class="pagination">
    <ul>
        <?php
            $npp = $posisi-2;

            if($posisi==1) echo '<li class="inactive"><a style="color:#bababa;">Prev</a></li>';
            else{
                if($npp==0) echo '<li>'.anchor($base_url,'Prev', 'class="prev" style="color:#006699;"').'</li>';
                else echo '<li>'.anchor($base_url . '' . $npp,'Prev', 'class="prev" style="color:#006699;"').'</li>';
            }
        ?>

        <?php
        for($i=1;$i<=$total_page;$i++){
            $np = $i-1;
            
            if($total_page >= 15){
                $tengah = round($total_page/2);

                if($i==$tengah || $i==1 || $i==$total_page || $i==$tengah-1 || $i==$tengah+1){
                    if($i==1){
                        if($i==$posisi){
                            echo "<li style='background-color:#006699;'>";
                            echo anchor($base_url,$i, 'style="color:#fff;"');
                        } else {
                            echo "<li>";
                            echo anchor($base_url,$i, 'style="color:#006699;"');
                        }
                    } else if ($i==$posisi){
                        echo "<li style='background-color:#006699;'>";
                        echo anchor($base_url . '' . $np,$i, 'style="color:#fff;"');
                    } else {
                        echo "<li>";
                        echo anchor($base_url . '' . $np,$i, 'style="color:#006699;"');
                    }
                    echo "</li>";
                }
            } else {
                if($i==1){
                    if($i==$posisi){
                        echo "<li style='background-color:#006699;'>";
                        echo anchor($base_url,$i, 'style="color:#fff;"');
                    } else {
                        echo "<li>";
                        echo anchor($base_url,$i, 'style="color:#006699;"');
                    }
                } else if ($i==$posisi){
                    echo "<li style='background-color:#006699;'>";
                    echo anchor($base_url . '' . $np,$i, 'style="color:#fff;"');
                } else {
                    echo "<li>";
                    echo anchor($base_url . '' . $np,$i, 'style="color:#006699;"');
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

        
        <?php
            if($posisi==$total_page) echo '<li class="inactive"><a style="color:#bababa;">Next</a></li>';
            else echo '<li>'.anchor($base_url . '' . $posisi,'Next', 'class="next" style="color:#006699;"').'</li>';
        ?>
    </ul><!-- end pagination-->
</div>
<br>


			<?php } else if($code=='arsip'){ ?>
			<table border="1" width="100%">
				<?php $i = 1 ?>
				<?php foreach($rows as $row){
				if($row->id_kategori_sub!=10 && $row->id_kategori_sub!=4){
				?>
				<?php if($i==1 || $i%3==1) echo "<tr>"; ?>
					<td>
						<?php echo $row->nama_kategori_sub ?><br>
						<img style="max-width:200px" src="<?php echo base_url() . $row->url_banner ?>"><br><?php echo base_url() . $row->url_banner ?><br>
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/banners/edit_arsip/<?php echo $row->id_banner?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/banners/delete/arsip/<?php echo $row->id_banner?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
					</td>
				<?php if($i==3 || $i%3==0) echo "</tr>"; ?>
				<?php $i++; ?>
				<?php
				}
				} ?>
			</table>


<div class="pagination">
    <ul>
        <?php
            $npp = $posisi-2;

            if($posisi==1) echo '<li class="inactive"><a style="color:#bababa;">Prev</a></li>';
            else{
                if($npp==0) echo '<li>'.anchor($base_url,'Prev', 'class="prev" style="color:#006699;"').'</li>';
                else echo '<li>'.anchor($base_url . '' . $npp,'Prev', 'class="prev" style="color:#006699;"').'</li>';
            }
        ?>

        <?php
        for($i=1;$i<=$total_page;$i++){
            $np = $i-1;
            
            if($total_page >= 15){
                $tengah = round($total_page/2);

                if($i==$tengah || $i==1 || $i==$total_page || $i==$tengah-1 || $i==$tengah+1){
                    if($i==1){
                        if($i==$posisi){
                            echo "<li style='background-color:#006699;'>";
                            echo anchor($base_url,$i, 'style="color:#fff;"');
                        } else {
                            echo "<li>";
                            echo anchor($base_url,$i, 'style="color:#006699;"');
                        }
                    } else if ($i==$posisi){
                        echo "<li style='background-color:#006699;'>";
                        echo anchor($base_url . '' . $np,$i, 'style="color:#fff;"');
                    } else {
                        echo "<li>";
                        echo anchor($base_url . '' . $np,$i, 'style="color:#006699;"');
                    }
                    echo "</li>";
                }
            } else {
                if($i==1){
                    if($i==$posisi){
                        echo "<li style='background-color:#006699;'>";
                        echo anchor($base_url,$i, 'style="color:#fff;"');
                    } else {
                        echo "<li>";
                        echo anchor($base_url,$i, 'style="color:#006699;"');
                    }
                } else if ($i==$posisi){
                    echo "<li style='background-color:#006699;'>";
                    echo anchor($base_url . '' . $np,$i, 'style="color:#fff;"');
                } else {
                    echo "<li>";
                    echo anchor($base_url . '' . $np,$i, 'style="color:#006699;"');
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

        
        <?php
            if($posisi==$total_page) echo '<li class="inactive"><a style="color:#bababa;">Next</a></li>';
            else echo '<li>'.anchor($base_url . '' . $posisi,'Next', 'class="next" style="color:#006699;"').'</li>';
        ?>
    </ul><!-- end pagination-->
</div>
<br>


			<?php } ?>

			</div>
		</div>
	</div>
