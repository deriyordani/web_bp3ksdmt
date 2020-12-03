<!-- News List -->


<p><?php echo $text_desc; ?></p>

<table border="1" cellpadding="0" cellspacing="0" style="width:587px" class="tab-kurs">
	<tbody>
		<tr>
			<th>Kantor Cabang</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Fax</th>
		</tr>
		<?php foreach ($get_offices as $key => $get_office) { ?>
		<tr>
			<td><?php echo $get_office->cabang; ?></td>
			<td><?php echo $get_office->alamat; ?></td>
			<td><?php echo $get_office->telepon; ?></td>
			<td><?php echo $get_office->fax; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>


<!-- [end] News List -->