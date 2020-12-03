  <script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
  <script src="<?php echo base_url() ?>ckeditor/adapters/jquery.js"></script>
  <style>

  #editable
  {
    padding: 10px;
    float: left;
  }
  </style>
  <script>

  CKEDITOR.disableAutoInline = true;

  $( document ).ready( function() {
      $( '#editor0' ).ckeditor();
    });

  function setValue() {
    $( '#editor0' ).val( $( 'input#val' ).val() );
  }

  </script>

<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/settings/update', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting All</span>
			</div>

			<?php foreach($rows as $row): ?>

			<div class="mws-form-row">
				<label class="mws-form-label"><?php echo $row->judul_setting_website; ?></label>
				<div class="mws-form-item">
					<?php if($row->key == 'logo' || $row->key == 'image_1' || $row->key == 'back_video'){ ?>
					<select name="<?php echo $row->id_setting_website_language; ?>" class="medium">
						<option value=""></option>
						<?php
						$selected = "";
						foreach ($list_banners as $key => $list_banner) {
							if($row->content_setting_website == $list_banner->img) $selected = "selected=selected";
							echo "<option value='". $list_banner->img ."' $selected>". $list_banner->judul_banner ." - ". $list_banner->img ."</option>";
							$selected = "";
						}
						?>
					</select>
					<?php } else if($row->key == 'contact'){
						echo form_textarea($row->id_setting_website_language,$row->content_setting_website, 'id="editor0" class="large"');
					} else {
						echo form_input($row->id_setting_website_language, $row->content_setting_website, 'class="small"');
					} ?>
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