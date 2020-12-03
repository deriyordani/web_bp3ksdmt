<!-- Kurs -->
<div class="menu yellow" style="padding-left:0;padding-right:0;">
	
	<ul class="menu-sidebar">
		<?php foreach ($get_menus as $key => $get_menu) { ?>
			<li>
			<?php if ($get_menu->jenis == "page") { ?>
			<a href="<?php echo base_url() . 'page/view/' . $get_menu->id_jenis;  ?>">
			<?php } else { ?>
			<a href="<?php echo base_url() . 'modul/' . $get_menu->key_modul;  ?>">
			<?php } ?>
				<?php echo $get_menu->judul_menu; ?></a>
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
								   s.key='menu_utama' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='$get_menu->id_menu'
								   ORDER BY m.sort_order ASC");

					echo "<ul>";

					foreach ($q->result() as $key => $get_menu_sub) {
						if ($get_menu_sub->jenis == "page") { ?>
						<a href="<?php echo base_url() . 'page/view/' . $get_menu_sub->id_jenis;  ?>">
						<?php } else { ?>
						<a href="<?php echo base_url() . 'modul/' . $get_menu_sub->key_modul;  ?>">
						<?php }
						echo "<li>$get_menu_sub->judul_menu</li></a>";
					}

					echo "</ul>";
					?>
				</li>
			
		<?php } ?>
		
	</ul>

</div>
					<!-- [end] Kurs -->