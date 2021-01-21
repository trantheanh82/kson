<!-- CONTENT START -->
        <div class="page-content">

            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

            <!-- ABOUT COMPANY START -->
            <div class="section-full mobile-page-padding p-t80 p-b50 bg-gray">
                <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-12">

                                    <div class="about-home-3 m-b30 bg-white">
                                        <?=$item->translation->content->content?>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12">
                                    <div class="video-section-full-v2">
                                        <div class="video-section-full bg-no-repeat bg-cover bg-center overlay-wraper m-b30"<?=isset($background_image)?'style="background-image:url('.$background_image.')"':''?>>
                                            <div class="overlay-main bg-black opacity-04"></div>
                                            <div class="video-section-inner">
                                                <div class="video-section-content">
                                                  <?php if(isset($background_video)):?>
                                                     <a href="https://player.vimeo.com/video/34741214?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0" class="mfp-video play-now">
                                                        <i class="icon fa fa-play"></i>
                                                        <span class="ripple"></span>
                                                    </a>
                                                  <?php endif;?>
                                                    <!--<div class="video-section-bottom">
                                                        <h3 class="sx-title text-white">25 Years<br>Experience</h3>
                                                    </div>-->
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

            <?php if(!empty($services))
                  $this->load->view($template.'/elements/modules/what_we_do_view')?>

                  <?php //$this->load->view($template.'/elements/modules/counter_in_about_view')?>
            <?php if(!empty($experts))
                  $this->load->view($template.'/elements/modules/our_team_view')?>

            <?php if(!empty($clients))
                  $this->load->view($template.'/elements/modules/our_clients_view')?>

        </div>
        <!-- CONTENT END -->
