<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/settings/update2', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting Video</span>
			</div>

			<?php foreach($rows as $key => $row): ?>

			<div class="mws-form-row">
				<label class="mws-form-label"><?php echo $row->judul_setting_website; ?></label>
				<div class="mws-form-item">
        <?php
          $slice = explode(",", $row->content_setting_website);
        ?>
        <table width="100%">
          <tr>
            <td width="70">Judul Video</td>
            <td>
                <input type="text" name="<?php echo $row->id_setting_website_language ?>[]" value="<?php echo $slice[0] ?>" class="medium">
            </td>
          </tr>
          <tr>
            <td>Url Video (Youtube)</td>
            <td>
                <input type="text" name="<?php echo $row->id_setting_website_language ?>[]" value="<?php echo $slice[1] ?>" class="medium">
            </td>
          </tr>
        </table>
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