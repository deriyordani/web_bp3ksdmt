
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
<?php echo form_open('admin/pages/update', $attributs) ?>

  <div class="mws-panel grid_8">
    <div class="mws-panel-body no-padding">
        <div class="mws-panel-header">
            <span>Indonesia</span>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">Judul</label>
            <div class="mws-form-item">
              <?php echo form_input('judul_page_id', $pages[0]->judul_page, 'class="small"'); ?><br />
          </div>
      </div>
      <div class="mws-form-row">
        <label class="mws-form-label">Content</label>
        <div class="mws-form-item">
            <?php echo form_textarea('content_page_id',$pages[0]->content_page, 'id="editor1" class="large"'); ?><br />
        </div>
    </div>
</div>
</div>
 <?php echo form_hidden('id_page_language_id', $pages[0]->id_page_language); ?>

 <?php echo form_hidden('id_page', $pages[0]->id_page); ?>

  <div class="mws-panel grid_8">
<div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/pages/index', 'Back', 'class="btn"'); ?>
</div>
</div>

<?php echo form_close()?>