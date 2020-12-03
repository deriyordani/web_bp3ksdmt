<!-- logo & main menu -->
<div class="floated-left">
	<h1><a class="logo" href="<?php echo base_url()?>" title="Bank Maluku - Mitra Usaha Anda">Bank Maluku</a></h1>
	<ul id="main-navigation">
		<li class="<?php if($this->uri->segment(1) == '')echo "aktif"?>"><a href="<?php echo base_url()?>"><?php echo $text_home; ?></a></li>
		<li class="submenu-link <?php if($this->uri->segment(1) == 'page' || $this->uri->segment(2) == 'news' || $this->uri->segment(2) == 'report' || $this->uri->segment(2) == 'peta_atm' || $this->uri->segment(2) == 'simulasi_produk' || $this->uri->segment(2) == 'gallery')echo "aktif"?>">
			<a href="<?php echo base_url()?>page/view/13"><?php echo $text_corporate; ?></a>
			<div class="bgmenu-link">
				<?php
				$q = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   menu m ON s.id_table=m.id_kategori_sub
								   JOIN
								   menu_language ml ON m.id_menu=ml.id_menu
								   LEFT JOIN
								   modul mo ON m.id_jenis=mo.id_modul
								   WHERE
								   s.key='menu_utama' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub=0
								   ORDER BY m.sort_order ASC");

				foreach ($q->result() as $key => $get_menu) {
					echo "<ul class='submenu'>";

					echo "<li>";

					if ($get_menu->jenis == "page") { ?>
						<a style="font-size:14px;" href="<?php echo base_url() . 'page/view/' . $get_menu->id_jenis;  ?>">
					<?php } else { ?>
						<a style="font-size:14px;" href="<?php echo base_url() . 'modul/' . $get_menu->key_modul;  ?>">
					<?php }

					echo "$get_menu->judul_menu";

					echo "</a></li>";
					
					$q2 = $this->db->query("SELECT *
								   FROM
								   setting s
								   JOIN
								   menu m ON s.id_table=m.id_kategori_sub
								   JOIN
								   menu_language ml ON m.id_menu=ml.id_menu
								   LEFT JOIN
								   modul mo ON m.id_jenis=mo.id_modul
								   WHERE
								   s.key='menu_utama' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='$get_menu->id_menu'
								   ORDER BY m.sort_order ASC");

					foreach ($q2->result() as $key => $get_menu_sub) {
						echo "<li>";
						if ($get_menu_sub->jenis == "page") { ?>
						<a href="<?php echo base_url() . 'page/view/' . $get_menu_sub->id_jenis;  ?>">
						<?php } else { ?>
						<a href="<?php echo base_url() . 'modul/' . $get_menu_sub->key_modul;  ?>">
						<?php }
						echo "$get_menu_sub->judul_menu</a></li>";
					}

					echo "</ul>";
				}
				?>
			</div>
		</li>
		<li class="<?php if($this->uri->segment(1) == 'contact' && !$this->uri->segment(2))echo "aktif"?>"><a href="<?php echo base_url()?>contact"><?php echo $text_contact; ?></a></li>
		<li class="<?php if($this->uri->segment(2) == 'site_map' && !$this->uri->segment(3))echo "aktif"?>"><a href="<?php echo base_url()?>modul/site_map"><?php echo $text_site; ?></a></li>
	</ul>
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
                    <!-- <div class="search-bar">
                        <form class="search-form">
                            <input type="text" class="search-box floated-left" name="search" placeholder="pencarian..." />
                            <input type="submit" class="search-submit floated-right" value="" />
                        </form>
                    </div> -->
                </div>
                <!-- [end] tanggal bahasa pencarian -->
                <div class="klir"></div>