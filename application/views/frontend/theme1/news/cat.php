			<?php
			foreach ($get_categories as $key => $get_category) {
            $slice = explode(',', $get_category->content_setting_website);

                    for($i=0;$i<10;$i++){
                        if($slice[$i]!=''){
                            $q = $this->db->query("SELECT * 
                                                   FROM
                                                   modul
                                                   WHERE id_modul='".$slice[$i]."'")->row();

			?>
						<div class="strip_all_courses_list wow fadeIn" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="img_list">
                                        <img src="<?php echo base_url(); ?>images/def2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="course_list_desc">
                                        <h3><strong><?php echo $q->judul_modul; ?></strong></h3>
                                        <a href="<?php echo base_url() . $q->key_modul; ?>" class="button_outline">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
			<?php
                        }
                    }
			}
			?>
