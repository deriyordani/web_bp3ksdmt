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
      $( '#editor0' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
      $( '#editor1' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
      $( '#editor2' ).ckeditor();
      $( '#editor3' ).ckeditor();
      $( '#editor4' ).ckeditor();
      $( '#editable' ).ckeditor(); // Use CKEDITOR.inline().
    } );

  function setValue() {
    $( '#editor1' ).val( $( 'input#val' ).val() );
    $( '#editor2' ).val( $( 'input#va2' ).val() );
  }

  </script>

<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/settings/update2', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting Link Situs</span>
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
            <td width="70">Link</td>
            <td><input type="text" name="<?php echo $row->id_setting_website_language ?>[]" value="<?php echo $slice[0] ?>" class="small"></td>
          </tr>
          <tr>
            <td>File Image</td>
            <td>
                <select name="<?php echo $row->id_setting_website_language; ?>[]" class="medium">
                  <option value=""></option>
                  <?php
                  $selected = "";
                  foreach ($list_banners as $key => $list_banner) {
                    if($slice[1] == $list_banner->img) $selected = "selected=selected";
                    echo "<option value='". $list_banner->img ."' $selected>". $list_banner->judul_banner ." - ". $list_banner->img ."</option>";
                    $selected = "";
                  }
                  ?>
                </select>
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