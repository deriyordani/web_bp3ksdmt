
<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/categories/update_child', $attributs) ?>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Add Sub Category</span>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Parent</label>
      <div class="mws-form-item">
        <?php echo form_dropdown('id_kategori', $parrent, set_value('id_kategori'), 'class="small"'); ?><br />
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
      <label class="mws-form-label">Nama sub kategori</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('nama_kategori_sub_id'); ?></span>
        <?php echo form_input('nama_kategori_sub_id',set_value('nama_kategori_sub_id'), 'class="small"'); ?><br />
        <?php echo form_hidden('id_kategori_language_id' );?>
      </div>
    </div>
  </div>
</div>
<?php if($rows[0]->id_language  == 1){?>
<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>English</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Nama sub kategori</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('nama_kategori_sub_en'); ?></span>
        <?php echo form_input('nama_kategori_sub_en', set_value('nama_kategori_sub_en'), 'class="small"'); ?><br />
      </div>
    </div>
  </div>
</div>
<?php } ?>
<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_hidden('id_kategori_sub_language_id', $rows[0]->id_kategori_sub_language); ?>
   <?php if($rows[0]->id_language  == 1){?>
   <?php echo form_hidden('id_kategori_sub_language_en', $rows[1]->id_kategori_sub_language); ?>
    <?php }else{
    echo form_hidden('id_language', 0);
  } ?>
   <?php echo form_hidden('id_kategori_sub', $rows[0]->id_kategori_sub); ?>
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/categories/index', 'Back', 'class="btn"'); ?>
 </div>
</div>

<?php echo form_close()?>