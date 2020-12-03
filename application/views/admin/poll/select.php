<!-- <div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding"> -->
		<!-- <div class="mws-panel-header">
			<span>Pilihan Poling</span>
		</div> -->
		<?php for($i=1; $i <= $i_polls; $i++): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Poling indo <?php echo $i ?></label>
			<div class="mws-form-item">
				<?php echo form_input('pilihan_id['.$i.']', '', 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Poling English <?php echo $i ?></label>
			<div class="mws-form-item">
				<?php echo form_input('pilihan_en['.$i.']', '', 'class="small"'); ?><br />
			</div>
		</div>

	<?php endfor ?>
<!-- </div>
</div> -->
