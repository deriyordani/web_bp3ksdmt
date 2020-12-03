
<div id="kurs_all" class="content">
	<div class="title-blok mb-20">
        <h2 class="head-title"><?php echo $text_title; ?></h2>
    </div>
	<table border="1" class="tab-kurs">
		<thead>
			<tr>
				<td></td>
				<td><?php echo $text_simbol; ?></td>
				<td><?php echo $text_beli; ?></td>
				<td><?php echo $text_jual; ?></td>
			</tr>
		</thead>
		<tbody>
			<?php
			echo "<tr>";

			echo $kurs;

			?>
		</tbody>
	</table>

</div>