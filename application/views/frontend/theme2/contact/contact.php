<!-- Contact -->
<div id="contact" class="content">
    <div class="title-blok mb-20">
        <h2 class="head-title"><?php echo $text_title; ?></h2>
    </div>
    <p class="par-kontak">
        <span class="t36">PT. Bank Maluku</span><br/>
        <span class="t24">Cabang Utama Ambon<br/> Jl. Raya Pattimura No. 09</span><br/>
        <span class="t18">Telepon : (0911) 354214 s.d. 354217 (hunting), 312013</span><br/>
        <span class="t18">Fax : (0911) 349195, 349196</span><br/><br/>
    </p>

    <form method="post" class="floated-left">
        <?php echo $benar; ?>
        <div class="title-abu mb-20"><h2 class="head-title"><?php echo $text_form; ?></h2></div>
        <div class="floated-left">
            <label><?php echo $text_name; ?>:</label>
            <input type="text" class="form-box mb-20" name="name"><br/>
            <label><?php echo $text_email; ?>:</label>
            <input type="text" class="form-box mb-20" name="email"><br/>
             <label><?php echo $text_phone; ?>:</label>
            <input type="text" class="form-box mb-20" name="phone"><br/>
            <label><?php echo $text_message; ?>:</label>
            <textarea cols="40" class="form-box mb-20" rows="7" name="message"></textarea><br/>
            
            <label>Captcha:</label>
        
            <?php echo $recaptcha_html; ?></br>
         <button class="btn floated-left"><?php echo $text_send; ?></button>
        </div>     
    </form>

<br><br>
<!-- [end] Contact -->

<!-- Map -->
<div class="map floated-left" style="margin-top:20px;">
<iframe width="622" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?ie=UTF8&amp;cid=3316231373823807116&amp;q=Bank+Maluku+Kantor+Pusat&amp;gl=ID&amp;hl=en&amp;t=m&amp;ll=-3.700022,128.098837&amp;spn=0.004283,0.006663&amp;z=17&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?ie=UTF8&amp;cid=3316231373823807116&amp;q=Bank+Maluku+Kantor+Pusat&amp;gl=ID&amp;hl=en&amp;t=m&amp;ll=-3.700022,128.098837&amp;spn=0.004283,0.006663&amp;z=17&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>
<!-- [end] Map -->

</div>