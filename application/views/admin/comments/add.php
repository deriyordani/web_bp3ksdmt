<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/news/create', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Add news</span>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php $kategories = $this->maluku_lib->kategori_news(); ?>
				<?php echo form_dropdown('id_kategori_sub', $kategories, '', 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Image</label>
			<div class="mws-form-item">
				<input type="file" name="userfile" size="20" /><br />
			</div>
		</div>
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
				<?php echo form_input('judul_news_id', '', 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<?php echo form_textarea('content_news_id','', 'id="editor1" class="large"'); ?><br />
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
				<?php echo form_input('judul_news_en', '', 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<?php echo form_textarea('content_news_en','', 'id="editor2" class="large"'); ?><br />
			</div>
		</div>
	</div>
</div>
<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/pages/index', 'Back', 'attributs'); ?>
	</div>
</div>

<?php echo form_close()?>