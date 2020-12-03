<div id="report" class="content">
	<div class="title-blok mb-20">
        <h2 class="head-title"><?php echo $title_report; ?></h2>
    </div>
	<ul class="blok-laporan">
		<?php
		foreach ($get_reports as $key => $get_report) {
		?>
        <li>
        	<span><?php echo $get_report->judul_file; ?></span>
        	<?php echo anchor("modul/report/download_file/".$get_report->id_file,$text_download,"class='btn-unduh'"); ?>
        </li>
        <?php
		}
		?>
    </ul>
</div>