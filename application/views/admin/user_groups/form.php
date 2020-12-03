<?php $attributs = 'class="mws-form"'?>
<?php foreach($rows as $row): ?>
	<?php echo form_open('admin/user_groups/update', $attributs) ?>
	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Edit Menu</span>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">Permission name</label>
				<div class="mws-form-item">
					<span class="error"><?php echo form_error('permission_name'); ?></span>
					<?php echo form_input('permission_name', set_value('permission_name'), 'class="small"'); ?><br />
					<?php echo form_hidden('id_user_group', $row->id_user_group); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="mws-panel grid_8">
		<div class="mws-button-row">
			<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
			<?php echo anchor('admin/user_groups/index', 'Back', 'class="btn"'); ?>
		</div>
	</div>

	<?php form_close(); ?>

<?php endforeach ?>