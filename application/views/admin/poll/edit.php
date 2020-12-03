<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/polls/update', $attributs) ?>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Indonesia</span>
    </div>
    <div class="mws-form-row">
      <label class="mws-form-label">Judul Topik Polls</label>
      <div class="mws-form-item">
        <?php echo form_input('judul_topik_polls_id', $topik_polls[0]->judul_topik_polls, 'class="small"'); ?><br />
        <?php echo form_hidden('id_topik_polls_id', $topik_polls[0]->id_topik_polls_language, 'class="small"'); ?><br />
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
        <?php echo form_input('judul_topik_polls_en', $topik_polls[1]->judul_topik_polls, 'class="small"'); ?><br />
        <?php echo form_hidden('id_topik_polls_en', $topik_polls[1]->id_topik_polls_language, 'class="small"'); ?><br />
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
    <!--   <label class="mws-form-label">Jumlah Opsi</label> -->
      <div class="mws-form-item">
        <?php $i_rows = array()?>
       <!--  <?php for($i=0; $i <= 10; $i++):?>
        <?php $i_rows[$i] = $i?>
      <?php endfor ?>
      <?php echo form_dropdown('i_rows', $i_rows, $pilihan, 'id="dropdown"'); ?><br /> -->
    </div>
  </div>

  <?php include 'selecteditjs.php';?>
  <div id="content" >
  </div>
</div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_hidden('id_topik_polls', $this->uri->segment(4)); ?>
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/polls/index', 'Back', 'class="btn"'); ?>
 </div>
</div>
<?php echo form_close()?>