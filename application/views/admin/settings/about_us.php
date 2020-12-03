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
<?php echo form_open('admin/settings/update', $attributs) ?>

	<div class="mws-panel grid_8">
		<div class="mws-panel-body no-padding">
			<div class="mws-panel-header">
				<span>Setting About Us</span>
			</div>

			<?php foreach($rows as $key => $row): ?>

			<div class="mws-form-row">
				<label class="mws-form-label"><?php echo $row->judul_setting_website; ?></label>
				<div class="mws-form-item">
					<?php echo form_textarea($row->id_setting_website_language,$row->content_setting_website, 'id="editor'. $key .'" class="large"'); ?>
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