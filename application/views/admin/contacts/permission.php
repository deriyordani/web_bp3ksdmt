
<?php foreach($user_groups as $user_group): ?>
	<?php echo $user_group->permission_name ?> <br />

	<?php echo form_open('admin/user_groups/set_permission', '') ?>
		<br />
		<?php echo form_hidden('id_user_group', $user_group->id_user_group); ?>
		
		<!-- Permission -->
		<table>
		<tr>
			<td>No</td>
			<td>Page Permission</td>
			<td>Show</td>
			<td>Create</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
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
		</table>
		<!-- EndPermission -->

		<?php echo form_submit('submit', 'Submit'); ?>
	<?php form_close(); ?>

<?php endforeach ?>

<?php echo anchor('admin/user_groups/index', 'Back', 'attributs'); ?>