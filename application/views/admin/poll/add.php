<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/polls/create', $attributs) ?>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Indonesia</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Judul Topik Polls</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('judul_topik_polls_id'); ?></span>
        <?php echo form_input('judul_topik_polls_id', set_value('judul_topik_polls_id'), 'class="small"'); ?><br />
      </div>
    </div>
  </div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>English</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Judul Topik Polls</label>
      <div class="mws-form-item">
        <span class="error"><?php echo form_error('judul_topik_polls_en'); ?></span>
        <?php echo form_input('judul_topik_polls_en', set_value('judul_topik_polls_en'), 'class="small"'); ?><br />
      </div>
    </div>
  </div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Poling Option</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Jumlah Opsi</label>
      <div class="mws-form-item">
        <?php $i_rows = array()?>
        <?php for($i=0; $i <= 10; $i++):?>
        <?php $i_rows[$i] = $i?>
      <?php endfor ?>
      <?php echo form_dropdown('i_rows', $i_rows, '', 'id="dropdown"'); ?><br />
    </div>
  </div>

  <?php include 'selectjs.php';?>
  <div id="content" >

  </div>
</div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/polls/index', 'Back', 'class="btn"'); ?>
 </div>
</div>
<?php echo form_close()?>