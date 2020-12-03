<!-- kurs -->
<div class="box-300 floated-left mr-20">
	<div class="title-blok">
		<h2 class="head-title"><?php echo $text_title; ?></h2>
		<a href="<?php echo base_url(); ?>modul/kurs_sidebar/all" class="link-kurs"><?php echo $text_tampil; ?></a>
	</div>
	<div class="tgl-kurs">
		<span class="floated-left"><?php echo date("d M Y"); ?></span>
		<span class="floated-right"><?php echo date("h:i:s"); ?></span>
		<div class="klir"></div>
	</div>
	<table class="tab-kurs">
		<tr>
			<th></th>
			<th><?php echo $text_beli; ?></th>
			<th><?php echo $text_jual; ?></th>
		</tr>
		<?php
			echo "<tr>";

			echo $kurs[57];
			echo $kurs[58];
			echo $kurs[59];

			echo "<tr>";

			echo $kurs[21];
			echo $kurs[22];
			echo $kurs[23];

			echo "<tr>";

			echo $kurs[33];
			echo $kurs[34];
			echo $kurs[35];

			echo "<tr>";

			echo $kurs[53];
			echo $kurs[54];
			echo $kurs[55];

			echo "<tr>";

			echo $kurs[1];
			echo $kurs[2];
			echo $kurs[3];
		?>
	</table>
</div>
<!-- [end] kurs -->