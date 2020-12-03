

<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/banners/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Add banners</span>
		</div>
		<?php foreach($banners as $n): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_banners(); ?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, $n->id_kategori_sub, 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Image</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('userfile'); ?></span>
				<input type="file" name="userfile" size="20" /><br />
				<?php echo $n->url_banner ?>
			</div>
		</div>
		<?php echo form_hidden('gambar', $n->url_banner);?>
		<?php echo form_hidden('id_banner', $n->id_banner);?>
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
				<?php echo form_hidden('id_banner_language_id', $banners_language[0]->id_banner_language); ?>
				<span class="error"><?php echo form_error('judul_banner_id'); ?></span>
				<?php echo form_input('judul_banner_id', set_value('judul_banner_id'), 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('content_banner_id'); ?></span>
				<?php echo form_textarea('content_banner_id', set_value('content_banner_id'), 'class="large"'); ?><br />
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
				<?php echo form_hidden('id_banner_language_en', $banners_language[1]->id_banner_language); ?>
				<span class="error"><?php echo form_error('judul_banner_en'); ?></span>
				<?php echo form_input('judul_banner_en', set_value('judul_banner_en'), 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('content_banner_en'); ?></span>
				<?php echo form_textarea('content_banner_en', set_value('content_banner_en'), 'class="large"'); ?><br />
			</div>
		</div>
	</div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/banners/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>