<?php $attributs = 'class="mws-form"'?>
<?php echo form_open_multipart('admin/simulasi_products/update', $attributs) ?>

<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Edit Simulasi</span>
		</div>
		<?php foreach($rows as $n): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Kategori</label>
			<div class="mws-form-item">
				<?php echo form_input('bunga', $n->bunga, 'class="small"'); ?><br />
			</div>
		</div>
		
		<?php echo form_hidden('id_simulasi_produk', $n->id_simulasi_produk);?>
	<?php endforeach ?>
</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/simulasi_products/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>
