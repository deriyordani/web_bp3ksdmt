<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/moduls/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Config moduls</span>
		</div>
		<?php foreach($moduls as $modul): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Judul modul</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('judul_modul'); ?></span>
				<input type="text" name="judul_modul" value="<?php echo set_value('judul_modul') ?>"size="20" /><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Key Modul</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('key_modul'); ?></span>
				<input type="text" name="key_modul" value="<?php echo set_value('key_modul') ?>"size="20" /><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_moduls(); ?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, $modul->id_kategori_sub, 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Sort order</label>
			<div class="mws-form-item">
			  <span class="error"><?php echo form_error('sort_order'); ?></span>
              <input type="text" name="sort_order" value="<?php echo set_value('sort_order') ?>"size="20" /><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Sort order</label>
			<div class="mws-form-item">
				<?php $options = array('Not active', 'Active');?>
				<?php echo form_dropdown('status', $options, $modul->status);?><br />
			</div>
		</div>
		
		<?php echo form_hidden('id_modul', $modul->id_modul);?>
	<?php endforeach ?>
</div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Save', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/moduls/index', 'Back','class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>