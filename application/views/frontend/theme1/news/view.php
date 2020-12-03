            <div class="post">
                    <?php foreach ($get_news_views as $key => $get_news_view) { ?>

                    <?php if($get_news_view->url_gambar_news != ''){ ?>
                    <img src="<?php echo base_url() . $get_news_view->url_gambar_news; ?>" alt="" class="img-responsive">
                    <?php }else{ ?>
                    <img src="<?php echo base_url(); ?>images/def.jpg" alt="" class="img-responsive">
                    <?php } ?>

                    <div class="post_info clearfix">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i><?php echo $get_news_view->date_update; ?> <em>by <?php echo $get_news_view->username; ?></em></li>
                            </ul>
                        </div>
                        <div class="post-right"><i class="icon-comment"></i> <?php echo $get_row_comment; ?></div>
                    </div>

                    <h2><?php echo $get_news_view->judul_news; ?></h2>
                    <p><?php echo $get_news_view->content_news; ?></p>
                    <?php } ?>

            </div><!-- end post -->
            
            <?php if($get_row_comment>0){ ?>

            <h4><?php echo $get_row_comment; ?> comments</h4>

                <div id="comments">
                    <ol>
                        <?php foreach ($get_comments as $key => $get_comment) { ?>
                            <li>
                            <div class="avatar"><a href="#"><img src="<?php echo base_url(); ?>assets/theme1/img/avatar3.jpg" alt=""></a></div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    <?php if($get_comment->url!=''){ ?>
                                    Posted by <a href="<?php echo $get_comment->url; ?>"><?php echo $get_comment->name; ?></a><span>|</span> <?php echo $get_comment->date_comment; ?>
                                    <?php }else{ ?>
                                    Posted by <?php echo $get_comment->name; ?><span>|</span> <?php echo $get_comment->date_comment; ?>
                                    <?php } ?>
                                </div>
                                <p><?php echo $get_comment->content; ?></p>
                            </div>
                            </li>
                        <?php } ?>
                    </ol>
                </div><!-- End Comments -->

            <?php } ?>
                
            <h4>Leave a comment</h4>
                <form method="post">
                    <?php echo $benar; ?>
                    <div class="form-group">
                        <input class="form-control styled" type="text" name="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <input class="form-control styled" type="text" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input class="form-control styled" type="text" name="url" placeholder="Enter website">
                    </div>
                    <div class="form-group">
                        <textarea name="comment" class="form-control styled" style="height:150px;" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Captcha:</label>
                        <?php echo $recaptcha_html; ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="button" value="Post Comment">
                        <input type="reset" class="button_outline" value="Clear form">
                    </div>
                </form>