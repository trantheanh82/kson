<?php
  if(!empty($items)):
?>
<div class="expert-people-area">
            <div class="container">
                <div class="section-title section-title-center">
                    <h2><?=lang("Our Experts")?></h2>
                </div>
                <div class="row">
                  <?php
                    foreach($items as $k=>$v):
                      $image = img($v->image,'',array('alt'=>$v->translation->content->name,'class'=>'image-responsive'));
                  ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-item">
                            <div class="item-image pull-left">
                                <?=$image?>
                                <span class="plus-icon"><a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></span>
                            </div>
                            <div class="item-content media-body">
                                <h3><a href="#"><?=$v->translation->content->name?></a></h3>
                                <span class="position"><?=$v->translation->content->position?></span>
                                <?=$v->translation->content->description?>
                                <?php
                                  if(!empty($v->social)):
                                ?>
                                <ul class="social-icon">
                                  <?php
                                      foreach($v->social as $social =>$link):
                                          if(!empty($link)):
                                  ?>
                                    <li><a href="<?=$link?>"><i class="fa fa-<?=$social?>" aria-hidden="true"></i></a></li>
                                    <?php
                                  endif;
                                  endforeach;//end social loop
                                    ?>
                                </ul>
                                <?php
                              endif;//end if social
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                  endforeach;
                    ?>

                </div>
            </div>
        </div>
<?php
endif;
?>
