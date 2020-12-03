
<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/menus/create', $attributs) ?>
<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Add Menu Utama</span>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Parent</label>
      <div class="mws-form-item">
        <?php echo form_dropdown('id_menu_sub', $parrent, '',  'class="small"'); ?><br />
      </div>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Sort Order</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('sort_order'); ?></span>
        <?php echo form_input('sort_order', set_value('sort_order'),  'class="small"'); ?><br />
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Kategori</label>
      <div class="mws-form-item">
        <?php $kategories = $this->maluku_lib->kategori_menu(); ?>
        <?php echo form_dropdown('id_kategori_sub', $kategories, '', 'class="small"'); ?><br />
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Jenis</label>
      <div class="mws-form-item">
        <?php $jenis = array('' => 'Pilih','page' => 'Page', 'modul' => 'Modul', 'link' => 'Custom Link'); ?>
        <span class="error"><?php echo form_error('jenisa'); ?></span>
        <?php echo form_dropdown('jenis', $jenis, set_value('jenisa'), 'id="dropdown" class="small"'); ?><br />
      </div>
    </div>
    <?php include 'selectjs.php';?>
    <div class="mws-form-row">
      <div id="content" >
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
        <span class="error"><?php echo form_error('judul_menu_id'); ?></span>
        <?php echo form_input('judul_menu_id', set_value('judul_menu_id'), 'class="small"'); ?><br />
        <?php echo form_hidden('id_menu_language_id' );?>
      </div>
    </div>
  </div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/menus/index', 'Back', 'class="btn"'); ?>
 </div>
</div>

<?php echo form_close()?>