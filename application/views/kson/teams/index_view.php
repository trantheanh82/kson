<!-- Content Start -->
<div class="page-content">
  <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

  <!-- OUR Team START -->
             <div class="section-full p-t80 p-b50 mobile-page-padding">
                        <div class="container">

                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content">
                                <div class="row our-team-2-outer">
                                    <?php
                                      foreach($items as $k=>$v):
                                        $link = lang('member').'-'.$v->slug;
                                      ?>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">
                                        <div class="our-team-2">
                                              <div class="profile-image">
                                                  <?=img($v->image,'',array('alt'=>$v->name))?>
                                                 <div class="icons">
                                                   <?php foreach($v->social as $icon=>$social_link):
                                                          echo anchor($social_link,"<i class='fa fa-".$icon."'></i>");
                                                          endforeach;?>
                                                </div>
                                              </div>
                                         	  <div class="figcaption text-black">
                                                 <h4 class="m-t0"><?=anchor($link,$v->name)?></h4>
                                                 <span><?=$v->translation->content->position?></span>
                                              </div>
                                          </div>
                                    </div>
                                  <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                     </div>
            <!-- OUR Team END -->
</div>
<!-- Content end -->
