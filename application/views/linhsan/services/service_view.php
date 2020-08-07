<?php
 $this->load->view($template.'/elements/modules/page_inner_title');
 ?>
<!-- Service three layout Start Here -->
        <div class="service-layout-3">
            <div class="container">
                <div class="row">
                  <?php
                    if(!empty($items)):
                      foreach($items as $k=>$v):
                        $link = base_url().$current_lang['slug'].'/'.$item->slug->slug.'/'.$v->slug->slug;
                  ?>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="single-item">
                          <div class="item-image">
                            <?=img($v->image,'',array('alt'=>$v->translation->content->name,
                                                      'ttile'=>$v->translation->content->name))?>
                          </div>
                          <div class="item-content">
                              <h3><a href="<?=$link?>"><?=$v->translation->content->name?></a></h3>
                              <p><?=getSnippet($v->translation->content->description,18)?></p>
                              <a class="button btn-flat" href="<?=$link?>"><?=lang("Read More")?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                              <a class="item-icon" href="<?=$link?>">
                                  <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                                  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                              </a>
                          </div>
                      </div>
                  </div>
                  <?php
                endforeach;
              else:
                  ?>
                  <?php
                endif;
                  ?>


                </div>
            </div>
        </div>
        <!-- Service three layout End Here -->
