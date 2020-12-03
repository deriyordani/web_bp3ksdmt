<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> List User</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>auth/register" class="btn"><i class="icol-add"></i> Add</a>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>User Access</th>
					<th width="80px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i=1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td>
						<?php echo $row->username ?>
					</td>
					<td><?php echo $this->maluku_lib->user_permmision($row->id_user_group) ?></td>
					<td>
						<div class="btn-group">
						<?php if($row->id_user_group != 1): ?>
							<a href="<?php echo base_url()?>admin/admin/user_permissions/<?php echo $row->id?>" class="btn"><i class="icol-pencil"></i> Permission</a>
							<a href="<?php echo base_url()?>admin/admin/delete/<?php echo $row->id?>" class="btn" OnClick="return confirm('Are you sure?');"><i class='icol-cross'></i> Delete</a>
						<?php endif ?>
						</div>
					</td>
				</tr>
				<?php $i++ ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
<?php $i++ ?>
