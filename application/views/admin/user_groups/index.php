<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> User Group</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/user_groups/add" class="btn"><i class="icol-add"></i> Add</a>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Permission name</th>
					<th width="200px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->permission_name ?></td>
					<td>
	
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/user_groups/permission/<?php echo $row->id_user_group?>" class="btn"><i class="icol-bullet-key"></i> Permission</a>
							<a href="<?php echo base_url()?>admin/user_groups/edit/<?php echo $row->id_user_group?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/user_groups/delete/<?php echo $row->id_user_group?>" class="btn"  OnClick="return confirm('Are you sure?')"><i class="icol-cross"></i> Delete</a>
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
