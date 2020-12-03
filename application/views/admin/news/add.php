
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
      $( '#editor1' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
      $( '#editor2' ).ckeditor(); // Use CKEDITOR.replace() if element is <textarea>.
      $( '#editable' ).ckeditor(); // Use CKEDITOR.inline().
  } );

function setValue() {
	$( '#editor1' ).val( $( 'input#val' ).val() );
	$( '#editor2' ).val( $( 'input#va2' ).val() );
}

</script>


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
			<label class="mws-form-label">Status</label>
			<div class="mws-form-item">
				<?php
					$status_arr = array(1 => 'Active', 0 => 'Not Active');
					echo form_dropdown('status', $status_arr, '', 'class="small"');
				?><br />
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
				<span class="error"><?php echo form_error('judul_news_id'); ?></span>
				<?php echo form_input('judul_news_id', set_value('judul_news_id'), 'class="small"'); ?><br />
			</div>
		</div>
		<div class="mws-form-row">
			<label class="mws-form-label">Content</label>
			<div class="mws-form-item">
				<span class="error"><?php echo form_error('content_news_id'); ?></span>
				<?php echo form_textarea('content_news_id',set_value('content_news_id'), 'id="editor1" class="large"'); ?><br />
			</div>
		</div>
	</div>
</div>

<div class="mws-panel grid_8">
	<div class="mws-button-row">
		<?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
		<?php echo anchor('admin/news/index', 'Back', 'class="btn"'); ?>
	</div>
</div>

<?php echo form_close()?>

 <script>
  $(function() {
    $( "#datepicker" ).datepicker({
    	minDate: 0,
    	dateFormat: "yy-mm-dd",
    });
    $( "#datepicker2" ).datepicker(
    	{
    	minDate: 0,
    	dateFormat: "yy-mm-dd",
    });
  });

  </script>