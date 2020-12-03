
<?php $attributs = 'class="mws-form"'?>
<?php echo form_open('admin/peta_atm/create', $attributs) ?>
<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Peta Sebaran</span>
    </div>

    <div id="jendelainfo">
        <div class="dialog-content">
            <div id="dialog-message">
              <p align="center">
                <span id="teksjenis"></span><br><br>
              </p>
              <span>Lokasi : </span><span id="teksjudul"></span><br>
              <span>Alamat : </span><span id="tekslokasi"></span><br>
              <span>Keterangan : </span><span id="teksdes"></span><br>
            </div>
            <a style="cursor:pointer" id="tutup" onClick="close_deskripsi()" class="button">Close</a>
        </div>
    </div>


    <div id="wp_petaku"><div id="petaku" style="height:500px"></div></div><br><br>

  </div>
</div>

<div class="mws-panel grid_8">
  <div class="mws-panel-body no-padding">
    <div class="mws-panel-header">
      <span>Detail</span>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Latitude</label>
      <div class="mws-form-item">
        <?php echo form_input('lat', '', 'class="small" id="x"'); ?>
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Longitude</label>
      <div class="mws-form-item">
        <?php echo form_input('long', '', 'class="small" id="y"'); ?>
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Jenis</label>
      <div class="mws-form-item">
        <?php $jenis = array('ATM' => 'ATM','AST' => 'AST','ANT' => 'ANT','Kantor Cabang' => 'Kantor Cabang'); ?>
        <?php echo form_dropdown('jenis', $jenis, '', 'class="small"'); ?><br />
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Lokasi</label>
      <div class="mws-form-item">
        <?php echo form_input('lokasi', '', 'class="small"'); ?>
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Alamat</label>
      <div class="mws-form-item">
        <?php echo form_input('alamat', '', 'class="small"'); ?>
      </div>
    </div>

    <div class="mws-form-row">
      <label class="mws-form-label">Keterangan</label>
      <div class="mws-form-item">
        <?php echo form_textarea('keterangan', '', 'class="small"'); ?>
      </div>
    </div>


  </div>
</div>


<div class="mws-panel grid_8">
  <div class="mws-button-row">
   <?php echo form_submit('submit', 'Submit', 'class="btn btn-danger"'); ?>
   <?php echo anchor('admin/peta_atm/index', 'Back', 'class="btn"'); ?>
 </div>
</div>

<?php echo form_close()?>