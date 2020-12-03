<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/files/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Add files</span>
		</div>
		<?php foreach($files as $n): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_files(); ?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, set_value('id_kategori_sub'), 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">File <br />
				<i>pdf, doc, txt file only</i></label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('userfile'); ?></span>
				<input type="file" name="userfile" size="20" /> <?php echo $n->url_file ?><br />
			</div>
		</div>
		<?php echo form_hidden('file', $n->url_file);?>
		<?php echo form_hidden('id_file', $n->id_file);?>
	<?php endforeach ?>
</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Indonesia</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Judul</label>
			<div class="mws-form-item">
				<?php echo form_hidden('id_file_language_id', $files_language[0]->id_file_language); ?>
				<span class="error"><?php echo form_error('judul_file_id'); ?></span>
				<?php echo form_input('judul_file_id', set_value('judul_file_id'), 'class="small"'); ?><br />
			</div>
		</div>
		
	</div>
</div>


<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>English</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Judul</label>
			<div class="mws-form-item">
				<?php echo form_hidden('id_file_language_en', $files_language[1]->id_file_language); ?>
				<span class="error"><?php echo form_error('judul_file_en'); ?></span>
				<?php echo form_input('judul_file_en', set_value('judul_file_en'), 'class="small"'); ?><br />
			</div>
		</div>
		
	</div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/files/index', 'Back','class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>