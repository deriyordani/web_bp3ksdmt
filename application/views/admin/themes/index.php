
</table>

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> Themes</i></span>
	</div>
	<div class="mws-panel-toolbar">
		
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Name</th>
					<th>Key</th>
					<th>Screenshot</th>
					<th>Status</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->name ?></td>
					<td><?php echo $row->key ?></td>
					<td width="306"><img src="<?php echo base_url().'assets/'.$row->key.'/images/sc.jpg'; ?>" width="300" style="border:1px solid #ccc;padding:3px;"></td>
					<td><?php echo get_status_modul($row->status) ?></td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/themes/active/<?php echo $row->id_theme ?>" class="btn"><i class="icol-accept"></i> Active</a>
						</div>
					</td>
				</tr>
				<?php $i++; ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
<?php $i++ ?>
