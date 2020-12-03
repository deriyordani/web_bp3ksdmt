<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
    <head>
        <?php echo $this->load->view($head); ?>
    </head>

    <body>
        <!-- HEADER -->
        <div id="box-header">
            <div class="box-main">
                <?php echo $this->load->view($menu); ?>
            </div>
        </div>
        <!-- [end] HEADER -->

        <!-- CONTENT -->
        <div id="box-content">
            <div id="headline">
                <div class="box-main">
                    <?php foreach($contents as $key => $content): ?>

					<?php echo ${$content}; ?>

					<?php endforeach ?>
                    <div class="klir"></div>
                </div>
            </div>

            <!-- promo -->
            <div id="promotion">
                <div class="box-main">
                    <!-- <p class="floated-left">1 Bulan, 3 Bulan, 6 Bulan, 12 Bulan, dan 24 Bulan : Rp 5.000.000,- s.d. Rp 2.000.000.000,- Suku Bunga <i>5.50%</i> per tahun. Diatas Rp 2.000.000.000,- diberikan <i>Special Rate</i>.</p>
                    <a href="" class="arrow floated-right" title="Lihat Selengkapnya">detail</a> -->
                    <div class="klir"></div>
                </div>
            </div>
            <!-- [end] promo -->
            
            <!-- bar 3 -->
            <div id="bars">
                <div class="box-main">
                    <?php foreach($contents_sidebar as $key => $content_sidebar): ?>
			
					<?php echo ${$content_sidebar}; ?>

					<?php endforeach ?>	
                    <div class="klir"></div>
                </div>
            </div>
            <!-- [end] bar 3 -->
        </div>
        <!-- [end] CONTENT -->

        <!-- FOOTER -->
        <?php echo $this->load->view($footer); ?>
        <!-- [end] FOOTER -->

        <!-- Flexslider -->
        <script src="<?php echo base_url()?>assets/theme2/js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('#slideshow .flexslider').flexslider({
            animation: "slide",
          });
        });
        </script>

    </body>
</html>