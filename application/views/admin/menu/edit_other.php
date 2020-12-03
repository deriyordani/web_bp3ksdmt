
<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/menus/update', $attributs) ?>
    <?php foreach($menus as $menu): ?>
<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Edit Menu Other</span>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Parent</label>
      <div class="mws-form-item">
        <?php echo form_dropdown('id_menu_sub', $parrent, $menu->id_menu_sub,  'class="small"'); ?><br />
      </div>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Sort Order</label>
      <div class="mws-form-item">
        <?php echo form_input('sort_order', $menu->sort_order,  'class="small"'); ?><br />
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Kategori</label>
      <div class="mws-form-item">
        <?php $kategories = $this->maluku_lib->kategori_menu_other(); ?>
        <?php echo form_dropdown('id_kategori_sub', $kategories, $menu->jenis, 'class="small"'); ?><br />
        
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Jenis</label>
      <div class="mws-form-item">
        <?php $jenis = array('pilih' => 'Pilih','page' => 'Page', 'modul' => 'Modul', 'link' => 'Custom Link'); ?>
        <?php echo form_dropdown('jenis', $jenis, $menu->jenis, 'id="dropdown" class="small"'); ?><br />
      </div>
    </div>
    <?php include 'selecteditjs.php';?>
    <div class="mws-form-row">
      <div id="content" >
      </div>
    </div>
  </div>
</div>
  
  <?php echo form_hidden('id_menu', $menu->id_menu);?>
<?php endforeach ?>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Indonesia</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Judul</label>
      <div class="mws-form-item">
        <?php echo form_input('judul_menu_id', $menu_language[0]->judul_menu, 'class="small"'); ?><br />
        <?php echo form_hidden('id_menu_language_id', $menu_language[0]->id_menu_language);?>
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