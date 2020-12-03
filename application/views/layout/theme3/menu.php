<!-- logo & main menu -->
<div class="floated-left">
	<h1><a class="logo" href="<?php echo base_url()?>" title="Bank Maluku - Mitra Usaha Anda">Bank Maluku</a></h1>
</div>
<!-- [end] logo & main menu -->
<!-- tanggal bahasa pencarian -->
<div class="floated-right mt-20">
	<div class="tgl-bhs">
    	<span class="tgl-main"><?php echo date("d M Y - H:i:s"); ?></span>
        <?php
		$base = $this->uri->segment(1);

		if($this->uri->segment(2)) $base .= "/".$this->uri->segment(2);
		if($this->uri->segment(3)) $base .= "/".$this->uri->segment(3);
		if($this->uri->segment(4)) $base .= "/".$this->uri->segment(4);
		if($this->uri->segment(5)) $base .= "/".$this->uri->segment(5);
		if($this->uri->segment(6)) $base .= "/".$this->uri->segment(6);
		?>
		<?php if($this->maluku_lib->language()==1){ $flag='indo'; $text='Indonesia'; } else if($this->maluku_lib->language()==2){ $flag='eng'; $text='English'; } ?>
		<div class="filter-bhs">
			<span class="teks <?php echo $flag; ?>"><?php echo $text; ?></span>
			<span class="icon-drop"></span>
			<ul class="filtering">
				<li><?php echo anchor('home/set_language/1/indonesia/'.$base,'Indonesia', 'id="id"');?></li>
				<li><?php echo anchor('home/set_language/2/english/'.$base,'English', 'id="eng"');?></li>
			</ul>
		</div>
    </div>
    <div class="klir"></div>
	<ul id="main-navigation">
		<li class="<?php if($this->uri->segment(1) == '')echo "aktif"?>"><a href="<?php echo base_url()?>"><?php echo $text_home; ?></a></li>
		<li class="<?php if($this->uri->segment(1) == 'page' || $this->uri->segment(2) == 'news' || $this->uri->segment(2) == 'report' || $this->uri->segment(2) == 'peta_atm' || $this->uri->segment(2) == 'simulasi_produk' || $this->uri->segment(2) == 'gallery')echo "aktif"?>"><a href="<?php echo base_url()?>page/view/13"><?php echo $text_corporate; ?></a></li>
		<li class="<?php if($this->uri->segment(1) == 'contact' && !$this->uri->segment(2))echo "aktif"?>"><a href="<?php echo base_url()?>contact"><?php echo $text_contact; ?></a></li>
		<li class="<?php if($this->uri->segment(2) == 'site_map' && !$this->uri->segment(3))echo "aktif"?>"><a href="<?php echo base_url()?>modul/site_map"><?php echo $text_site; ?></a></li>
	</ul>
</div>
<div class="klir"></div>