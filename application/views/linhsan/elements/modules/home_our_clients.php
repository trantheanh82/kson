<?php
if(!empty($items)):
?>
<!-- Our Partners Start Here -->
<div class="our-partner">
    <div class="container">
        <div class="fn-carousel nav-control-middle"
        data-loop="true" data-items="5" data-margin="30"
        data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000"
        data-dots="false" data-nav="true" data-nav-speed="false"
        data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="true"
        data-r-x-medium="2" data-r-x-medium-nav="false"
        data-r-x-medium-dots="true" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false">
          <?php
            foreach($items as $k=>$v):
          ?>
            <div class="single-item">
                <div class="item-image">
                      <?php
                        echo img($v->logo,'',array('class'=>'image-responsive','alt'=>$v->name));
                      ?>
                </div>
            </div>
          <?php
        endforeach;
          ?>
        </div>
    </div>
</div>
<!-- Our Partners End Here -->
<?php
endif;
?>
