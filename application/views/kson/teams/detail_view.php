<!-- Content Start -->
<div class="page-content">
  <?=$this->load->view($template.'/elements/modules/page_inner_view')?>
  <!-- ABOUT TEAM MEMBER SECTION START -->
            <div class="section-full p-tb80 bg-white mobile-page-padding">
                <div class="container">
                    <div class="section-content ">
                         <div class="about-team-member text-black">
                            <div class="row">

                                <div class="col-lg-4 col-md-5 col-sm-12">
                                    <div class="about-single-team-info-left p-a30 sx-bg-secondry">
                                          <div class="profile-image">
                                              <?=img($item->image,'',array('alt'=>"K.SON's member: ".$item->translation->content->position.' '.$item->name));?>
                                          </div>
                                          <div class="text-black bg-white p-a30">
                                             <h4 class="m-t0"><?=$item->name?></h4>
                                             <h5 class="m-b0"><?=$item->translation->content->position?></h5>
                                          </div>
                                          <div class="team-single-social m-t30 text-white">
                                                <ul class="m-b0 list-unstyled">
                                                    <?php if(!empty($item->email)):?>
                                                    <li><span><i class="fa fa-envelope"></i></span><span><?=$item->email?></span></li>
                                                  <?php endif;?>
                                                  <?php if(!empty($item->phone)):?>
                                                    <li><span><i class="fa fa-phone"></i></span><span><?=$item->phone?></span></li>
                                                    <?php endif;?>
                                                    <li><span><i class="fa fa-map-marker"></i></span><span><?=$Settings['company_address']?></span></li>
                                                    <li><span><i class="fa fa-globe"></i></span><span><?=$Settings['company_url']?></span></li>
                                                </ul>
                                          </div>
                                      </div>
                                </div>

                                <div class="col-lg-8 col-md-7 col-sm-12">
                                    <div class="about-single-team-info">
                                        <div class="our-exp p-b30">
                                            <div class="sx-box">
                                                <h3 class="m-t0 m-b30"><?=strip_tags($item->translation->content->head_title,"<span>")?></h3>
                                            </div>
                                            <span class="progressText "><b><?=lang('Architecher')?></b></span>
                                            <div class="progress m-b30 m-t10">
                                              <div class="progress-bar sx-bg-primary progress-bar-striped progress-bar-animated text-black" role="progressbar" style="width: <?=$item->architecture_skill?>%;color:#fff;" aria-valuenow="<?=$item->architecture_skill?>" aria-valuemin="0" aria-valuemax="100"><?=$item->architecture_skill?>%</div>
                                            </div>


                                            <span class="progressText "><B><?=lang("Construction")?></B></span>
                                            <div class="progress m-b30 m-t10">
                                              <div class="progress-bar sx-bg-primary progress-bar-striped progress-bar-animated text-black" role="progressbar" style="width: <?=$item->construction_skill?>%;color:#fff;" aria-valuenow="<?=$item->construction_skill?>" aria-valuemin="0" aria-valuemax="100"><?=$item->construction_skill?>%</div>
                                            </div>

                                            <span class="progressText "><B><?=lang("Interior")?></B></span>
                                            <div class="progress m-b30 m-t10">
                                              <div class="progress-bar sx-bg-primary progress-bar-striped progress-bar-animated text-black" role="progressbar" style="width: <?=$item->interior_skill?>%;color:#fff;" aria-valuenow="<?=$item->interior_skill?>" aria-valuemin="0" aria-valuemax="100"><?=$item->interior_skill?>%</div>
                                            </div>


                                        </div>

                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="sx-separator-outer separator-left">
                                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/cross-line2.png)">
                                                    <h3 class="sep-line-one"><?=lang("Experience")?></h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->

                                       <div class="experience">

                                            <?=$item->translation->content->content?>

                                        </div>

                                  </div>
                               </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
            <!-- ABOUT TEAM MEMBER SECTION END -->

</div>
<!-- Content end -->
