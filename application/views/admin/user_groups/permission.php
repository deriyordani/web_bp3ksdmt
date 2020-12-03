<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/user_groups/set_permission', $attributs) ?>
<?php foreach($user_groups as $user_group): ?>
	
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
			<span><i class="icon-newspaper"> Permission for </i> <?php echo $user_group->permission_name ?> <br /></span>
		</div>

		<div class="mws-panel-body no-padding">
			<?php echo form_hidden('id_user_group', $user_group->id_user_group); ?>
			<table class="mws-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Page Permission</th>
						<th>Show</th>
						<th>Create</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($user_permissions as $user_permission): ?>

					<tr>

						<td><?php echo $no ?></td>
						<td><?php echo $user_permission->page_user_permission ?></td>
						<td><?php echo form_checkbox('page_user_permission['.$no.'][show]', 1, user_permission_check('show', $user_group->id_user_group, $user_permission->id_user_permission)) ?></td>
						<td><?php echo form_checkbox('page_user_permission['.$no.'][create]', '1', user_permission_check('create', $user_group->id_user_group, $user_permission->id_user_permission)) ?></td>
						<td><?php echo form_checkbox('page_user_permission['.$no.'][update]',  '1', user_permission_check('update', $user_group->id_user_group, $user_permission->id_user_permission)) ?></td>
						<td><?php echo form_checkbox('page_user_permission['.$no.'][delete]',  '1', user_permission_check('delete', $user_group->id_user_group, $user_permission->id_user_permission)) ?></td> 

						<?php echo form_hidden('page_user_permission['.$no.'][id_user_group]', $user_group->id_user_group, '');?>
						<?php echo form_hidden('page_user_permission['.$no.'][id_user_permission]', $user_permission->id_user_permission, '');?>
						<?php  echo form_hidden('page_user_permission['.$no.'][check]', permission_exist($user_group->id_user_group, $user_permission->id_user_permission));?>

					</tr>
					<?php $no++?>	
				<?php endforeach ?>
				<?php echo form_hidden('id_user_group', $user_group->id_user_group); ?>
			</tbody>
		</table>
		<!-- EndPermission -->

	</div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/user_groups/index', 'Back', 'class="btn"'); ?>
	</div>
</div>
<?php endforeach ?>
<?php echo form_close()?>
