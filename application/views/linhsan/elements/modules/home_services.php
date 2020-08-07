<!-- Feature Service Start Here -->
<div class="service-two-area">
    <div class="container">
        <div class="row">
            <div class="section-title section-title-center">
                <h2><?=lang('Business')?></h2>
                <p></p>
            </div>
        </div>
        <div class="row equal-cols">
            <?php
                if(isset($items)):
                  foreach($items as $k=>$v):
                    $link = base_url().$v->translation->language.'/'.$v->translation->model.'/'.$v->slug->slug;
            ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?=$link?>">
                <div class="single-service">
                    <div class="image">
                      <?php
                        echo anchor($link,img($v->image,'',array('class'=>'img-responsive','alt'=>$v->translation->content->name)));
                      ?>
                    </div>
                    <!--<div class="item-icon"><i class="fa <?=$v->icon?>"></i></div>-->
                    <div class="item-content media-body">
                        <h3><?=$v->translation->content->name?></h3>
                      <!--  <p><?=getSnippet($v->translation->content->description,20)?></p>-->
                    </div>
                </div>
                </a>
            </div>
            <?php
                  endforeach;
                endif;
            ?>
        </div>
    </div>
</div>
<!-- Feature Service End Here -->
