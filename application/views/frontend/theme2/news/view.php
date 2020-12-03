<div id="news" class="content">

<div class="box-berita" style="margin-top:0">
    <?php foreach ($get_news_views as $key => $get_news_view) { ?>
    <div class="title-blok"><h2 class="head-title"><?php echo $get_news_view->judul_news; ?></h2></div>
    <div class="meta-date"><?php echo $get_news_view->date_update; ?> | <?php echo $get_news_view->username; ?></div>
    <img src="<?php echo base_url() . $get_news_view->url_gambar_news; ?>">
    <p><?php echo $get_news_view->content_news; ?></p>
    <?php } ?>
</div>

<br><br>
<?php if($get_row_comment>0){ ?>
<div class="title-abu mb-20"><h2 class="head-title"><?php echo $text_comment; ?></h2></div>
<ul class="komentar">
    <?php foreach ($get_comments as $key => $get_comment) { ?>
    <li>
        <span class="pengirim">Posted by <?php echo $get_comment->name; ?> on <?php echo $get_comment->date_comment; ?></span>
        <p><?php echo $get_comment->content; ?></p>
    </li>
    <?php } ?>
</ul>
<?php } ?>

<!-- Contact -->
<div id="comment">
    <form method="post">
        <?php echo $benar; ?>
        <h1 class="title"><?php echo $text_form; ?></h1>
        <div class="box-300 floated-left">
            <label><?php echo $text_name; ?>:</label>
            <input type="text" class="form-box mb-20" name="name"><br/>
            <label><?php echo $text_email; ?>:</label>
            <input type="text" class="form-box mb-20" name="email"><br/>
            <label><?php echo $text_url; ?>:</label>
            <input type="text" class="form-box mb-20" name="url">
        </div>
        <div class="box-300 floated-right">
            <label><?php echo $text_comment; ?>:</label>
            <textarea rows="7" name="comment" style="width:100%;padding:1px 0;"></textarea>
        </div>

        <label>Captcha:</label>
        <?php echo $recaptcha_html; ?><br>
        <button class="btn floated-left"><?php echo $text_send; ?></button>
        <div class="klir"></div>
    </form>
</div>
<!-- [end] Contact -->

</div>