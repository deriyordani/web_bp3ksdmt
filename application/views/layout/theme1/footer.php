<footer>
        <div class="container">
            <div class="row ">
                <div class="col-md-3 col-sm-3">
                    <p id="logo_footer">
                        <?php
                        foreach ($home_sets as $key => $home_set) {
                            if($home_set->key == 'logo'){
                        ?>
                                <img src="<?php echo base_url()?>uploads/banner/<?php echo $home_set->content_setting_website ?>" alt="BP2IP" data-retina="true">
                        <?php
                            }
                        }
                        ?>
                        
                    </p>
                </div>
                <div class="col-md-9 col-sm-9">
                    <h4>BP3K SDMT</h4>
                        <?php
                        foreach ($home_sets as $key => $home_set) {
                            if($home_set->key == 'contact'){
                                echo $home_set->content_setting_website;
                            }
                        }
                        ?>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
</footer><!-- End footer -->
        
        <div id="copy">
            <div class="container">
                 © Balai Diklat Pembangunan Karakter SDM Transportasi 2020 - All rights reserved.
            </div>
        </div><!-- End copy -->