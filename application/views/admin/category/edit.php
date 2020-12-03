<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/categories/update', $attributs) ?>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Indonesia</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Nama kategori</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('nama_kategori_id'); ?></span>
        <?php echo form_input('nama_kategori_id', $rows[0]->nama_kategori, 'class="small"'); ?><br />
        <?php echo form_hidden('id_kategori_language_id' );?>
      </div>
    </div>
  </div>
</div>


<div class="mws-panel grid_8">
  <div class="mws-button-row">
    <?php echo form_hidden('id_kategori_language_id', $rows[0]->id_kategori_language); ?>
    <?php echo form_hidden('id_kategori', $rows[0]->id_kategori); ?>
    <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
    <?php echo anchor('admin/categories/index', 'Back', 'class="btn"'); ?>
  </div>
</div>

<?php echo form_close()?>