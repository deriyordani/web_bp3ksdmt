<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/settings/update15', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting Kategori News</span>
			</div>

			<?php foreach($rows as $key => $row): ?>

			<div class="mws-form-row">
				<label class="mws-form-label"><?php echo $row->judul_setting_website; ?></label>
				<div class="mws-form-item">
        <?php
          $slice = explode(",", $row->content_setting_website);
        ?>
        <table width="100%">
          <?php for($i=0;$i<15;$i++){ ?>
          <tr>
            <td width="70">Modul <?php echo $i+1; ?></td>
            <td>
                <select name="<?php echo $row->id_setting_website_language; ?>[]" class="medium">
                  <option value=""></option>
                  <?php
                  $selected = "";
                  foreach ($list_moduls as $key => $list_modul) {
                    if($slice[$i] == $list_modul->id_modul) $selected = "selected=selected";
                    echo "<option value='". $list_modul->id_modul ."' $selected>". $list_modul->judul_modul ."</option>";
                    $selected = "";
                  }
                  ?>
                </select>
          </tr>
          <?php } ?>
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