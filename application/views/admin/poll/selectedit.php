<!-- <div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding"> -->
		<!-- <div class="mws-panel-header">
			<span>Pilihan Poling</span>
		</div> -->

		

		<?php for($i=0; $i < $i_polls; $i++): ?>
		<div class="mws-form-row">
			<label class="mws-form-label">Poling indo <?php echo $i+1 ?></label>
			<div class="mws-form-item">
				<?php if(array_key_exists($i, $pilihan_polls_id)):?>
				<?php echo form_input('pilihan_id['.$i.']', $pilihan_polls_id[$i]->judul_pilihan_polls, 'class="small"'); ?><br />
				<?php echo form_hidden('id_pilihan_id['.$i.']', $pilihan_polls_id[$i]->id_pilihan_polls_language);?>
				<?php echo form_hidden('id_pilihan_polls', $pilihan_polls_id[$i]->id_pilihan_polls); ?>
				<?php else: ?>
				<?php echo form_input('add_pilihan_id['.$i.']', '', 'class="small"'); ?><br />
				<?php endif ?>
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Poling English <?php echo $i+1 ?></label>
			<div class="mws-form-item">
				<?php if(array_key_exists($i, $pilihan_polls_en)):?>
				<?php echo form_input('pilihan_en['.$i.']', $pilihan_polls_en[$i]->judul_pilihan_polls, 'class="small"'); ?><br />
				<?php echo form_hidden('id_pilihan_en['.$i.']', $pilihan_polls_en[$i]->id_pilihan_polls_language, 'class="small"'); ?><br />
				<?php else: ?>
				<?php echo form_input('add_pilihan_en['.$i.']', '', 'class="small"'); ?><br />
				<?php endif ?>
			</div>
		</div>

	<?php endfor ?>
<!-- </div>
</div> -->

