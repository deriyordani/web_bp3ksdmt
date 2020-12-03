<?php $attributs = 'class="mws-form" id="formPermission"'?>
<?php echo form_open('admin/user_permissions/create', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Add Menu</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Menu</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('page_user_permission'); ?></span>
				<?php echo form_input('page_user_permission', set_value('page_user_permission'), 'class="small"' ); ?>
			</div>
		</div>
	</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/user_permissions/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>

