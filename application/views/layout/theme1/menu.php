		<nav class="col-md-9 col-sm-9 col-xs-9">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <div class="main-menu">
                <div id="header_menu">
                	<?php
                    foreach ($home_sets as $key => $home_set) {
                        if($home_set->key == 'logo'){
                    ?>
                            <img src="<?php echo base_url()?>uploads/banner/<?php echo $home_set->content_setting_website ?>" alt="BP2IP" width="125" data-retina="true">
                    <?php
                        }
                    }
                    ?>
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <?php
                    foreach ($get_menus as $key => $get_menu) {
                    	if ($get_menu->sub_cek > 0) {
							echo '<li class="submenu">';

							if ($get_menu->jenis == "page") {
								echo '<a href="'. base_url() . 'page/view/' . $get_menu->id_jenis . '" class="show-submenu">' . $get_menu->judul_menu . ' <i class="icon-down-open-mini"></i></a>';
							} else if ($get_menu->jenis == "modul") {
								echo '<a href="'. base_url() . $get_menu->key_modul . '" class="show-submenu">' . $get_menu->judul_menu . ' <i class="icon-down-open-mini"></i></a>';
							} else {
								echo '<a href="'. $get_menu->link . '" class="show-submenu">' . $get_menu->judul_menu . ' <i class="icon-down-open-mini"></i></a>';
							}

						} else {
							echo '<li>';

							if ($get_menu->jenis == "page") {
								echo '<a href="'. base_url() . 'page/view/' . $get_menu->id_jenis . '">' . $get_menu->judul_menu . '</a>';
							} else if ($get_menu->jenis == "modul") {
								echo '<a href="'. base_url() . $get_menu->key_modul . '">' . $get_menu->judul_menu . '</a>';
							} else {
								echo '<a href="'. $get_menu->link . '">' . $get_menu->judul_menu . '</a>';
							}
						}
						
						if ($get_menu->sub_cek > 0) {
							$q = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
												   FROM
												   setting s
												   JOIN
												   menu m ON s.id_table=m.id_kategori_sub
												   JOIN
												   menu_language ml ON m.id_menu=ml.id_menu
												   LEFT JOIN
												   modul mo ON m.id_jenis=mo.id_modul
												   LEFT JOIN
								   				   menu_link l ON m.id_jenis=l.id_menu_link
												   WHERE
												   s.key='menu_utama' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='" . $get_menu->id_menu . "'
												   ORDER BY m.sort_order ASC");
							
							echo "<ul class='sub1'>";
							
							foreach ($q->result() as $key => $get_menu_sub) {

								echo "<li>";

								if ($get_menu_sub->jenis == "page") {
									echo '<a href="'. base_url() . 'page/view/' . $get_menu_sub->id_jenis . '">' . $get_menu_sub->judul_menu . '</a>';
								} else if ($get_menu_sub->jenis == "modul") {
									echo '<a href="'. base_url() . $get_menu_sub->key_modul . '">' . $get_menu_sub->judul_menu . '</a>';
								} else {
									echo '<a href="'. $get_menu_sub->link . '">' . $get_menu_sub->judul_menu . '</a>';
								}

								if ($get_menu_sub->sub_cek > 0) {

									$r = $this->db->query("SELECT *
														   FROM
														   setting s
														   JOIN
														   menu m ON s.id_table=m.id_kategori_sub
														   JOIN
														   menu_language ml ON m.id_menu=ml.id_menu
														   LEFT JOIN
														   modul mo ON m.id_jenis=mo.id_modul
														   LEFT JOIN
										   				   menu_link l ON m.id_jenis=l.id_menu_link
														   WHERE
														   s.key='menu_utama' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='" . $get_menu_sub->id_menu . "'
														   ORDER BY m.sort_order ASC");
									
									echo "<ul class='sub2'>";
							
									foreach ($r->result() as $key => $get_menu_sub2) {
										echo "<li>";

										if ($get_menu_sub2->jenis == "page") {
											echo '<a href="'. base_url() . 'page/view/' . $get_menu_sub2->id_jenis . '">' . $get_menu_sub2->judul_menu . '</a>';
										} else if ($get_menu_sub2->jenis == "modul") {
											echo '<a href="'. base_url() . $get_menu_sub2->key_modul . '">' . $get_menu_sub2->judul_menu . '</a>';
										} else {
											echo '<a href="'. $get_menu_sub2->link . '">' . $get_menu_sub2->judul_menu . '</a>';
										}

										echo "</li>";
									}

									echo "</ul>";

								}

								echo "</li>";

							}

							echo "</ul>";
						}

						echo '</li>';

					}
					?>
					<li class="megamenu submenu">
                    <a href="javascript:void(0);" class="show-submenu-mega">Other<i class="icon-down-open-mini"></i></a>
                    <div class="menu-wrapper">
                        <div class="col-md-6">
                        	<?php
                        	$o = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
												   FROM
												   setting s
												   JOIN
												   menu m ON s.id_table=m.id_kategori_sub
												   JOIN
												   menu_language ml ON m.id_menu=ml.id_menu
												   LEFT JOIN
												   modul mo ON m.id_jenis=mo.id_modul
												   LEFT JOIN
								   				   menu_link l ON m.id_jenis=l.id_menu_link
												   WHERE
												   s.key='menu_other' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='0' AND m.sort_order<=6
												   ORDER BY m.sort_order ASC");

                        	foreach ($o->result() as $key => $get_menu_other) {

								echo "<h3>";

								if ($get_menu_other->jenis == "page") {
									echo '<a style="padding:0" href="'. base_url() . 'page/view/' . $get_menu_other->id_jenis . '">' . $get_menu_other->judul_menu . '</a>';
								} else if ($get_menu_other->jenis == "modul") {
									echo '<a style="padding:0" href="'. base_url() . $get_menu_other->key_modul . '">' . $get_menu_other->judul_menu . '</a>';
								} else {
									echo '<a style="padding:0" href="'. $get_menu_other->link . '">' . $get_menu_other->judul_menu . '</a>';
								}

								echo "</h3>";

								if ($get_menu_other->sub_cek > 0) {

									$os = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
														    FROM
														    setting s
														    JOIN
														    menu m ON s.id_table=m.id_kategori_sub
														    JOIN
														    menu_language ml ON m.id_menu=ml.id_menu
														    LEFT JOIN
														    modul mo ON m.id_jenis=mo.id_modul
														    LEFT JOIN
										   				    menu_link l ON m.id_jenis=l.id_menu_link
														    WHERE
														    s.key='menu_other' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='" . $get_menu_other->id_menu . "'
														    ORDER BY m.sort_order ASC");

									echo "<ul>";

									foreach ($os->result() as $key => $get_menu_other_sub) {
										echo "<li>";

										if ($get_menu_other_sub->jenis == "page") {
											echo '<a href="'. base_url() . 'page/view/' . $get_menu_other_sub->id_jenis . '">' . $get_menu_other_sub->judul_menu . '</a>';
										} else if ($get_menu_other_sub->jenis == "modul") {
											echo '<a href="'. base_url() . $get_menu_other_sub->key_modul . '">' . $get_menu_other_sub->judul_menu . '</a>';
										} else {
											echo '<a href="'. $get_menu_other_sub->link . '">' . $get_menu_other_sub->judul_menu . '</a>';
										}

										echo "</li>";
									}

									echo "</ul>";

								}

							}

                        	?>
                        </div>
                        <div class="col-md-6">
                            <?php
                        	$o = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
												   FROM
												   setting s
												   JOIN
												   menu m ON s.id_table=m.id_kategori_sub
												   JOIN
												   menu_language ml ON m.id_menu=ml.id_menu
												   LEFT JOIN
												   modul mo ON m.id_jenis=mo.id_modul
												   LEFT JOIN
								   				   menu_link l ON m.id_jenis=l.id_menu_link
												   WHERE
												   s.key='menu_other' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='0' AND m.sort_order>6
												   ORDER BY m.sort_order ASC");

                        	foreach ($o->result() as $key => $get_menu_other) {

								echo "<h3>";

								if ($get_menu_other->jenis == "page") {
									echo '<a style="padding:0" href="'. base_url() . 'page/view/' . $get_menu_other->id_jenis . '">' . $get_menu_other->judul_menu . '</a>';
								} else if ($get_menu_other->jenis == "modul") {
									echo '<a style="padding:0" href="'. base_url() . $get_menu_other->key_modul . '">' . $get_menu_other->judul_menu . '</a>';
								} else {
									echo '<a style="padding:0" href="'. $get_menu_other->link . '">' . $get_menu_other->judul_menu . '</a>';
								}

								echo "</h3>";

								if ($get_menu_other->sub_cek > 0) {

									$os = $this->db->query("SELECT *, (SELECT count(*) FROM menu as m1 WHERE m1.id_menu_sub=m.id_menu) as sub_cek
														    FROM
														    setting s
														    JOIN
														    menu m ON s.id_table=m.id_kategori_sub
														    JOIN
														    menu_language ml ON m.id_menu=ml.id_menu
														    LEFT JOIN
														    modul mo ON m.id_jenis=mo.id_modul
														    LEFT JOIN
										   				    menu_link l ON m.id_jenis=l.id_menu_link
														    WHERE
														    s.key='menu_other' AND ml.id_language='" . $this->maluku_lib->language() . "' AND m.id_menu_sub='" . $get_menu_other->id_menu . "'
														    ORDER BY m.sort_order ASC");

									echo "<ul>";

									foreach ($os->result() as $key => $get_menu_other_sub) {
										echo "<li>";

										if ($get_menu_other_sub->jenis == "page") {
											echo '<a href="'. base_url() . 'page/view/' . $get_menu_other_sub->id_jenis . '">' . $get_menu_other_sub->judul_menu . '</a>';
										} else if ($get_menu_other_sub->jenis == "modul") {
											echo '<a href="'. base_url() . $get_menu_other_sub->key_modul . '">' . $get_menu_other_sub->judul_menu . '</a>';
										} else {
											echo '<a href="'. $get_menu_other_sub->link . '">' . $get_menu_other_sub->judul_menu . '</a>';
										}

										echo "</li>";
									}

									echo "</ul>";

								}

							}

                        	?>
                        </div>
                    </div><!-- End menu-wrapper -->
                    </li>
                    <li><a href="#search" id="search_bt"><i class=" icon-search"></i><span>Search</span></a></li>
                </ul>
            </div><!-- End main-menu -->
        </nav>