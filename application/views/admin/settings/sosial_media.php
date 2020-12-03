<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/settings/update', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting Sosial Media</span>
			</div>

			<?php foreach($rows as $row): ?>

			<div class="mws-form-row">
				<label class="mws-form-label"><?php echo $row->judul_setting_website; ?></label>
				<div class="mws-form-item">
					<?php echo form_input($row->id_setting_website_language, $row->content_setting_website, 'class="small"'); ?>
				</div>
			</div>

			<?php endforeach ?>
		
		</div>
	</div>

	<div class="mws-panel grid_8">
		<div class="mws-button-row">
			<?php echo form_hidden('id_kategori_sub', $row->id_kategori_sub); ?>
			<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
			<?php echo anchor('admin/settings/index', 'Back', 'class="btn"'); ?>
		</div>
	</div>


<?php echo form_close()?>