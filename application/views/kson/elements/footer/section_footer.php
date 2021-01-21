<!-- FOOTER START -->
        <footer class="site-footer footer-large  footer-dark	footer-wide">

            <!-- FOOTER BLOCKES START -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- ABOUT COMPANY -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_about">
                                <!--<h4 class="widget-title">About Company</h4>-->
                                <div class="logo-footer clearfix p-b15">
                                  <?=anchor('/',img($Settings['company_logo_footer'],'',array('alt'=>$Settings['company_name'])))?>
                                </div>
                                <p><?=$Settings['company_description']?></p>

                                <ul class="social-icons sx-social-links">
                                  <?php
                                      if(!empty($Settings['social_facebook']))
                                        echo '<li><a href="'.$Settings['social_facebook'].'" class="fa fa-facebook"></a> </li>';
                                      if(!empty($Settings['social_linkedin']))
                                        echo '<li><a href="'.$Settings['social_linkedin'].'" class="fa fa-linkedin"></a> </li>';
                                      if(!empty($Settings['social_twitter']))
                                        echo '<li><a href="'.$Settings['social_twitter'].'" class="fa fa-twitter"></a> </li>';
                                      if(!empty($Settings['social_instagram']))
                                        echo '<li><a href="'.$Settings['social_instagram'].'" class="fa fa-instagram"></a> </li>';
                                  ?>

                                </ul>
                            </div>
                        </div>

                        <!-- RESENT POST -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="widget recent-posts-entry-date">
                                <h5 class="widget-title"><?=lang('Resent Post')?></h5>
                                <div class="widget-post-bx">
                                    <?php
                                          if(!empty($newest_posts)):
                                              foreach($newest_posts as $k=>$v):
                                                $link = lang('detail').'-'.$v->slug->slug;
                                     ?>
                                    <div class="widget-post clearfix">
                                        <div class="sx-post-date text-center text-uppercase text-white">
											                    <strong class="p-date"><?=date_format(date_create($v->created_at),'d')?></strong>
                                            <span class="p-month"><?=date_format(date_create($v->created_at),'m')?></span>
                                            <span class="p-year"><?=date_format(date_create($v->created_at),'Y')?></span>
                                        </div>
                                        <div class="sx-post-info">
                                            <div class="sx-post-header">
                                                <h6 class="post-title">
                                                  <?=anchor($link,getSnippet($v->translation->content->name,15))?>
                                                </h6>
                                            </div>
                                            <!--<div class="sx-post-meta">
                                                <ul>
                                                    <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>-->
                                        </div>
                                    </div>
                                    <?php endforeach;
                                  endif;?>
                                  </div>
                            </div>
                        </div>

                        <!-- USEFUL LINKS -->
                        <div class="col-lg-3 col-md-6 col-sm-6 footer-col-3">
                            <div class="widget widget_services inline-links">
                                <h5 class="widget-title"><?=lang('Useful links')?></h5>
                                <ul>
                                    <?php
                                          foreach($main_menu as $k=>$v):
                                            $link = $v->slug->slug;
                                    ?>
                                    <li><?=anchor($link,$v->translation->content->name)?></li>
                                  <?php  endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- CONTACT US -->
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget widget_address_outer">
                                <h5 class="widget-title"><?=lang("Contact us")?></h5>
                                <ul class="widget_address">
                                    <li><?=$Settings['company_address']?></li>
                                    <li><?=$Settings['company_email']?></li>
                                    <li><?=$Settings['company_phone_1']?></li>
                                    <li><?=$Settings['company_phone_2']?></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="container">
                    <div class="call-to-action-wrap">
                        <div class="row">
                            <div class="col-lg-7 col-md-6">
                                <div class="call-to-action-left">
                                    <h5 class="text-uppercase m-b10 m-t0">Subscribe to our newsletter!</h5>
                                    <span>Never Miss Anything From 7xtheme By Signing Up To Our Newsletter.</span>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6">
                                <div class="call-to-action-right">
                                    <div class="widget_newsletter">
                                        <div class="newsletter-bx">
                                            <form role="search" method="post">
                                                <div class="input-group">
                                                    <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                                    <span class="input-group-btn">
                                                        <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <div class="sx-footer-bot-left">
                            <span class="copyrights-text"><?=$Settings['copyright']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
<!-- BUTTON TOP START -->
<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-spinner">
            <div class="cssload-cube cssload-cube0"></div>
            <div class="cssload-cube cssload-cube1"></div>
            <div class="cssload-cube cssload-cube2"></div>
            <div class="cssload-cube cssload-cube3"></div>
            <div class="cssload-cube cssload-cube4"></div>
            <div class="cssload-cube cssload-cube5"></div>
            <div class="cssload-cube cssload-cube6"></div>
            <div class="cssload-cube cssload-cube7"></div>
            <div class="cssload-cube cssload-cube8"></div>
            <div class="cssload-cube cssload-cube9"></div>
            <div class="cssload-cube cssload-cube10"></div>
            <div class="cssload-cube cssload-cube11"></div>
            <div class="cssload-cube cssload-cube12"></div>
            <div class="cssload-cube cssload-cube13"></div>
            <div class="cssload-cube cssload-cube14"></div>
            <div class="cssload-cube cssload-cube15"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<?=$this->load->view($template.'/elements/modules/fb_messenger_view');
