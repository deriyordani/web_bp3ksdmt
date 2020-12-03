<div class="clear"></div>
<?php echo form_open('admin/admin/update_permission', '') ?>

<?php foreach($users as $user): ?>
	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Edit User</span>
			</div>
			<br />
			<div class="mws-form-row">
				&nbsp&nbsp&nbsp<label class="mws-form-label">Username</label> : <?php echo $user->username ?>
				<?php $id_user_group = $user->id_user_group ?>
				<?php $id_user = $user->id ?>
			</div>	<div class="mws-form-row"><br />
			&nbsp&nbsp&nbsp<label class="mws-form-label">Kategori</label> : <?php $kategories = $this->maluku_lib->kategori_news(); ?>
				<?php echo form_dropdown('id_user_group', $this->maluku_lib->user_group(), $id_user_group, 'class="small"');?>
		</div>
		<br />
		<?php echo form_hidden('id_user', $id_user);?>
	</div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/admin/list_user', 'Back', 'class="btn"'); ?>
 </div>
</div>

<?php endforeach ?>
<?php form_close(); ?>