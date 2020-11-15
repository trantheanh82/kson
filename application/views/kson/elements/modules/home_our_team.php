<!-- OUR TEAM START -->
             <div class="section-full p-t80 p-b50 mobile-page-padding">
                        <div class="container">
                            <!-- TITLE START -->
                            <div class="section-head">
                                <div class="sx-separator-outer separator-left">
                                    <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                        <h3 class="sep-line-one"><?=$content->head_title?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- TITLE END -->

                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content">
                                <div class="row team-item-four">
                                  <?php foreach($items as $k=>$v):
                                          $link = lang('member').'-'.$v->slug;?>
                                    <div class="col-lg-3 col-md-6 col-sm-6 m-b30   ">
                                        <div class="our-team-2 ">
                                            <?php if(!empty($v->image)):?>
                                              <div class="profile-image">
                                                  <?=img($v->image,'',array('alt'=>$v->translation->content->position.' - '.$v->name.' - K.SON\' team'))?>
                                                <?php if(!empty($v->social)):?>
                                                 <div class="icons">
                                                   <?php foreach($v->social as $icon=>$social_link):?>
                                                     <?=anchor($social_link,"<i class='fa fa-".$icon."'></i>");?>
                                                  <?php endforeach; ?>
                                                </div>
                                              <?php endif; ?>
                                              </div>
                                            <?php endif;?>
                                         	  <div class="figcaption text-black">
                                                 <h4 class="m-t0"><?=anchor($link,$v->name)?></h4>
                                                 <span class="m-b0"><?=$v->translation->content->position?></span>
                                              </div>
                                          </div>
                                    </div>
                                  <?php endforeach;?>

                                </div>
                            </div>

                        </div>
                     </div>
            <!-- OUR Team END -->
