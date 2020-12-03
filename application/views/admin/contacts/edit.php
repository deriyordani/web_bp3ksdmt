
<?php foreach($rows as $row): ?>
	<?php echo form_open('admin/user_groups/update', '') ?>
		Permission name:<br />
		<?php echo form_input('permission_name', $row->permission_name); ?><br />
		<?php echo form_hidden('id_user_group', $row->id_user_group); ?>
		<?php echo form_submit('submit', 'Submit'); ?>
	<?php form_close(); ?>
<?php endforeach ?>

<?php echo anchor('admin/user_groups/index', 'Back',  'class="btn"'); ?>