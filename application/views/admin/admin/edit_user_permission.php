	<?php echo form_open('admin/user_permissions/update', '') ?>
		Username : <?php foreach($users as $user): ?>
			<?php echo $user->username ?>
		<?php endforeach ?>
		<br />
		Access:
		<?php echo form_dropdown('name', $this->maluku_lib->user_group(), 'default');?><br />
		<?php echo form_submit('submit', 'Submit'); ?>
	<?php form_close(); ?>

<?php echo anchor('admin/user_permissions/index', 'Back', 'attributs'); ?>