<!-- Footer Area Start Here -->
<footer>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <!--<div class="footer-logo">
                            <?php echo anchor(base_url(),img($Settings['company_logo_footer'],'',array('class'=>'img-responsive','alt'=>$Settings['company_name'],'title'=>$Settings['company_name'])))?>
                        </div>-->
                        <div class="footer-about">
                          <h3><?=$Settings['company_name']?></h3>
                          <span><?=lang("Copyright")?> Linh San Group 2019</span>
                        </div>
                        <div class="footer-connect">
                          <p><?=lang("Connect us")?></p>
                        </div>
                      <!--  <div class="footer-phone"><i class="fa fa-phone" aria-hidden="true"></i><?=$Settings['company_phone_1']?></div>-->
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/dailythuelinhsan"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="footer-box">
                      <ul class="useful-link">
                        <?php
                            foreach($footer_links as $k=>$v):
                              echo "<li>".anchor($v->link,$v->translation->content->name)."</li>";
                      endforeach;
                        ?>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <?=anchor('/pages/dieu-khoan-su-dung',lang('Term & Conditions'))?> |
            <?=anchor('/pages/chinh-sach-bao-mat',lang('Privacy'))?>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->


<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
