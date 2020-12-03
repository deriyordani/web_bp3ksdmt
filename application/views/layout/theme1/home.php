<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<?php echo $this->load->view($head); ?>
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

<div id="preloader">
    <div class="pulse"></div>
</div><!-- Pulse Preloader -->

    <!-- Header================================================== -->
    <header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <?php
                    foreach ($home_sets as $key => $home_set) {
                        if($home_set->key == 'logo'){
                    ?>
                            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url()?>uploads/banner/<?php echo $home_set->content_setting_website ?>" alt="BP2IP" height=60 data-retina="true"></a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>

            <?php echo $this->load->view($menu); ?>
            
        </div>
    </div><!-- container -->
    </header><!-- End Header -->
    
    <?php foreach($contents as $key => $content): ?>

		<?php echo ${$content}; ?>

	<?php endforeach ?>
    
    <div class="bg_content testimonials">
             
    </div><!-- End bg_content -->

    <?php foreach($contents_footer as $key => $content_footer): ?>

        <?php echo ${$content_footer}; ?>

    <?php endforeach ?> 
    
    	<div class="bg_content magnific">
            <div>
                    <?php
                    foreach ($home_sets as $key => $home_set) {
                        if($home_set->key == 'text_video'){
                    ?>
                            <h3><?php echo $home_set->content_setting_website ?></h3>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    foreach ($home_sets as $key => $home_set) {
                        if($home_set->key == 'url_video'){
                    ?>
                            <a href="<?php echo $home_set->content_setting_website ?>" class="video_pop"><i class="arrow_triangle-right_alt2"></i></a>
                    <?php
                        }
                    }
                    ?>
            </div>
        </div><!-- End bg_content -->
        
        <div class="container_gray_bg" id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Subscribe BP3K SDMT</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="<?php echo base_url() ?>page/subscribe" name="newsletter" id="newsletter" class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                        <button id="submit-newsletter" class="button"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        </div><!-- End newsletter_container -->

        <?php echo $this->load->view($footer); ?>


    
 <!-- Login modal -->   
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myLogin">
                    <input type="text" class="form-control form-white" placeholder="Username">
                    <input type="text" class="form-control form-white" placeholder="Password">
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_1" id="check_1" name="check_1" />
                            <label for="check_1"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>  
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myRegister">
                    <input type="text" class="form-control form-white" placeholder="Name">
                    <input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password">
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                            <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Register</button>
                </form>
            </div>
        </div>
    </div>
    
  <!-- Search modal -->   
 <div id="search">
    <button type="button" class="close">X</button>
    <form method="post" action="<?php echo base_url() ?>page/search">
        <input type="search" name="search" value="" placeholder="type keyword(s) here" >
        <button type="submit" class="button">Search</button>
    </form>
</div>
    
<!-- Common scripts -->
<script src="<?php echo base_url()?>assets/theme1/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url()?>assets/theme1/js/common_scripts_min.js"></script>
<script src="<?php echo base_url()?>assets/theme1/js/functions.js"></script>
<script src="<?php echo base_url()?>assets/theme1/assets/validate.js"></script>

<!-- Specific scripts -->
<script src="<?php echo base_url()?>assets/theme1/layerslider/js/greensock.js"></script>
 <script src="<?php echo base_url()?>assets/theme1/layerslider/js/layerslider.transitions.js"></script>
<script src="<?php echo base_url()?>assets/theme1/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        'use strict';
        $('#layerslider').layerSlider({
            autoStart: true,
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1170,
            skinsPath: 'layerslider/skins/'
            // Please make sure that you didn't forget to add a comma to the line endings
            // except the last line!
        });
    });
</script>
<script src="<?php echo base_url()?>assets/theme1/js/tabs.js"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>	
</body>
</html>