<!-- Contact -->
<div class="box_style_1">
    <h4>BP3K SDMT</h4>
                        <?php
                        foreach ($home_sets as $key => $home_set) {
                            if($home_set->key == 'contact'){
                                echo $home_set->content_setting_website;
                            }
                        }
                        ?>

    <br><br><br>

                            <div class="indent_title_in">
                                <i class="pe-7s-mail-open-file"></i>
                                <h3><?php echo $text_form; ?></h3>
                            </div>
                            <div class="wrapper_indent">
                                <div id="message-contact"></div>
                                <form method="post">
                                    <?php echo $benar; ?>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label><?php echo $text_name; ?></label>
                                                <input type="text" class="form-control styled" name="name" placeholder="<?php echo $text_name; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo $text_email; ?></label>
                                                <input type="email" class="form-control styled" name="email" placeholder="<?php echo $text_email; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label><?php echo $text_phone; ?></label>
                                                <input type="text" class="form-control styled" name="phone" placeholder="<?php echo $text_phone; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><?php echo $text_message; ?></label>
                                                <textarea rows="5" name="message" class="form-control styled" style="height:100px;" placeholder="<?php echo $text_message; ?>"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Captcha</label>
                                                <?php echo $recaptcha_html; ?>
                                            </div>
                                            <input type="submit" value="<?php echo $text_send; ?>" class="button add_bottom_30" id="submit-contact"/>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- End wrapper_indent -->      


<!-- Map 
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15836.867402310445!2d107.47357541809242!3d-7.100847517951723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6892b4481e2b6f%3A0xbe6cbc5c0e5e683!2sBalai%20Diklat%20Pembangunan%20Karakter%20SDM%20Transportasi!5e0!3m2!1sid!2sid!4v1587786621194!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 [end] Map -->

</div>
<!-- [end] Contact -->