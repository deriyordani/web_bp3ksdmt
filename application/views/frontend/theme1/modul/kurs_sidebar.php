<!-- Kurs -->
<div class="kurs yellow">
	<h2 class="head-title"><?php echo $text_title; ?></h2>
	<table>
		<thead>
			<tr>
				<td></td>
				<td><?php echo $text_beli; ?></td>
				<td><?php echo $text_jual; ?></td>
			</tr>
		</thead>
		<tbody>
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
		</tbody>
	</table>
	<br>
	<?php echo anchor('modul/kurs_sidebar/all',$text_tampil); ?>

</div>
					<!-- [end] Kurs -->