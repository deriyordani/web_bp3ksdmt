<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/user_groups/create', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Add user group</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Permission Name</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('permission_name'); ?></span>
				<?php echo form_input('permission_name', set_value('permission_name'),'class="small"'); ?>
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

<?php echo form_close()?>