<!-- CONTENT START -->
        <div class="page-content">

            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>


            <!-- OUR SERVICES START -->
            <div class="section-full mobile-page-padding p-t80  p-b50 bg-gray">
                <div class="section-content">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-left">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                    <h3 class="sep-line-one "><?=lang('All Services')?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                          <div class="row">
                            <?php
                                  $i = 1;
                                  foreach($items as $k=>$v):
                                  $link = lang('services').'-'.$v->slug;
                            ?>
                            <!-- Block <?=$i?> -->
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">

                                <div class="sx-icon-box-wraper  icon-count-2-outer">
                                    <div class="icon-count-2 bg-white">
                                        <span class="icon-count-number"><?=$i?></span>
                                        <div class="icon-xl inline-icon m-b5 scale-in-center">
                                            <span class="icon-cell"><i class="<?=$v->icon?>"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte"><?=$v->name?></h4>
                                            <p><?=getSnippet(strip_tags($v->description),15)?></p>
                                            <div class="text-left">
                                                <?=anchor($link,lang('Read More'),array('class'=>'site-button-link'))?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          <?php $i++; endforeach;?>
                        </div>
                    </div>
                </div>

                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong><?=lang('Services')?></strong>
                </div>
            </div>
            <!-- OUR SERVICES  END -->

            <!-- ABOUT COMPANY START -->
            <div class="section-full mobile-page-padding p-t80 p-b50 bg-white">
                <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <div class="about-home-3 m-b30 bg-gray">
                                        <h3 class="m-t0 m-b20 sx-tilte">A small efficient interior design team.</h3>
                                        <p>Inteshape is a team of highly talented, experienced, and architects and designers. Our company has been the leading provider of architecture services to clients through out the USA since May 1999. We pay attention to every demand...</p>

                                    <ul class="list-angle-right anchor-line">
                                        <li><a href="#">We provide a architectural 3D modeling services.</a></li>
                                        <li><a href="#">Our specialists are ready to consult you on any topic.</a></li>
                                        <li><a href="#">We develop and implement better interior design.</a></li>
                                        <li><a href="#">We provide high-quality interior services for clients.</a></li>
                                    </ul>

                                        <div class="text-left">
                                            <a href="javascript:;" class="site-button btn-half"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="video-section-full-v2">
                                        <div class="video-section-full bg-no-repeat bg-cover bg-center overlay-wraper m-b30" style="background-image:url(images/video-bg.jpg)">
                                            <div class="overlay-main bg-black opacity-04"></div>
                                            <div class="video-section-inner">
                                                <div class="video-section-content">
                                                     <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a>
                                                    <div class="video-section-bottom">
                                                        <h3 class="sx-title text-white">25 Years<br>Experience</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                       </div>
                 </div>

            </div>
            <!-- ABOUT COMPANY END -->


            <!-- COUNTER START -->
            <div class="section-full overlay-wraper sx-bg-secondry mobile-page-padding  p-t80 p-b50 bg-parallax ml-auto"  data-stellar-background-ratio="0.5" style="background-image:url(images/background/bg-1.jpg)">
                <div class="overlay-main bg-black opacity-05"></div>
                <div class="container">
                    <div class="section-content">

                        <div class="counter-blocks">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 m-b30 ">
                                    <div class="sx-count text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(images/background/bg-5.png)">
                                        <h2 class="m-t0 sx-text-primary text-right"><span class="counter">24</span></h2>
                                        <h4 class="m-b0">Our Experience</h4>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 m-b30">
                                    <div class="sx-count  text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(images/background/bg-5.png)">
                                        <h2 class="m-t0  sx-text-primary text-right"><span class="counter">340</span></h2>
                                        <h4 class="m-b0">Project Taken</h4>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 m-b30">
                                    <div class="sx-count  text-white sx-icon-box-wraper bg-repeat p-a30" style="background-image:url(images/background/bg-5.png)">
                                        <h2 class="m-t0  sx-text-primary text-right"><span class="counter">86</span></h2>
                                        <h4 class="m-b0">Awards Won</h4>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 m-b30">
                                    <div class="sx-count  text-white sx-icon-box-wraper bg-repeat  p-a30" style="background-image:url(images/background/bg-5.png)">
                                        <h2 class="m-t0  sx-text-primary text-right"><span class="counter">36</span><span>K</span></h2>
                                        <h4 class="m-b0">Twitter Followers</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                   </div>
               </div>

            </div>
            <!-- COUNTER  END -->

            <!-- TESTIMONIAL START -->
            <div class="section-full mobile-page-padding bg-repeat p-t80 p-b80" style="background-image:url(images/background/bg6.jpg)">
                <div class="section-content">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-left">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                    <h3 class="sep-line-one">Testimonial</h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                         <!-- TESTIMONIAL START -->
                         <div class="owl-carousel testimonial-home-two owl-btn-vertical-center">
                            <div class="item">
                                <div class="testimonial-1 hover-animation-1 bg-gray">
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic  scale-in-center"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
                                        <span class="testimonial-position">Architect</span>
                                        <h4 class="testimonial-name">Rosalina D. William</h4>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Amazing fast and reliable customer support! The team of willing to go mile for customer service! Thanks!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1  hover-animation-1 bg-gray">
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic scale-in-center"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
                                        <span class="testimonial-position">Architect</span>
                                        <h4 class="testimonial-name">Mitchal Jhon</h4>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Great theme, just what we were looking for. Easy to install, easy to navigate. Well documented. Really enjoyed the support.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1 hover-animation-1 bg-gray">
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic  scale-in-center"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
                                        <span class="testimonial-position">Interior designer</span>
                                        <h4 class="testimonial-name">Barney Smith</h4>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Amazing fast and reliable customer support! The team of willing to go mile for customer service! Thanks!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-1 hover-animation-1 bg-gray">
                                    <div class="testimonial-detail clearfix">
                                        <div class="testimonial-pic scale-in-center"><img src="images/testimonials/pic4.jpg" width="100" height="100" alt=""></div>
                                        <span class="testimonial-position">Architect</span>
                                        <h4 class="testimonial-name">Rosalina D. William</h4>
                                        <span class="fa fa-quote-right"></span>
                                    </div>
                                    <div class="testimonial-text">
                                        <p>Great theme, just what we were looking for. Easy to install, easy to navigate. Well documented. Really enjoyed the support.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
               </div>
            </div>
            <!-- TESTIMONIAL  END -->

        <!-- CONTENT END -->
