<?php foreach($rows as $row): ?>
<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/user_permissions/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Edit Menu</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Menu</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('page_user_permission'); ?></span>
				<?php echo form_input('page_user_permission', $row->page_user_permission, 'class="small"'); ?>
				<?php echo form_hidden('id_user_permission', $row->id_user_permission); ?>
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
<?php endforeach ?>

<?php echo form_close()?>