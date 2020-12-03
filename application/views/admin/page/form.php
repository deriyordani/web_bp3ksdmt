
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
              <span class="error"><?php echo form_error('judul_page_id'); ?></span>
              <?php echo form_input('judul_page_id', set_value('judul_page_id'), 'class="small"'); ?><br />
          </div>
      </div>
      <div class="mws-form-row">
        <label class="mws-form-label">Content</label>
        <div class="mws-form-item">
            <span class="error"><?php echo form_error('content_page_id'); ?></span>
            <?php echo form_textarea('content_page_id',set_value('content_page_id'), 'id="editor1" class="large"'); ?><br />
        </div>
    </div>
</div>
</div>
 <?php echo form_hidden('id_page_language_id', $pages[0]->id_page_language); ?>


<div class="mws-panel grid_8">
    <div class="mws-panel-body no-padding">
        <div class="mws-panel-header">
            <span>English</span>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">Judul</label>
            <div class="mws-form-item">
              <span class="error"><?php echo form_error('judul_page_en'); ?></span>
              <?php echo form_input('judul_page_en', set_value('judul_page_en'), 'class="small"'); ?><br />
          </div>
      </div>
      <div class="mws-form-row">
        <label class="mws-form-label">Content</label>
        <div class="mws-form-item">
            <span class="error"><?php echo form_error('content_page_en'); ?></span>
            <?php echo form_textarea('content_page_en',set_value('content_page_en'), 'id="editor2" class="large"'); ?><br />
        </div>
    </div>
</div>
</div>

 <?php echo form_hidden('id_page_language_en', $pages[1]->id_page_language); ?>

  <div class="mws-panel grid_8">
<div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/pages/index', 'Back', 'class="btn"'); ?>
</div>
</div>

<?php echo form_close()?>