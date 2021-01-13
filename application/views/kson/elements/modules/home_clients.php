<?php
if(!empty($items)):?>
<!-- TESTIMONIAL START -->
<div class="section-full mobile-page-padding bg-repeat p-t80 p-b80" style="background-image:url(/assets/kson/images/background/bg-5.png);">
    <div class="section-content">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head">
                <div class="sx-separator-outer separator-center">
                    <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                        <h3 class="sep-line-one">Testimonial</h3>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

             <!-- TESTIMONIAL START -->
             <div class="owl-carousel testimonial-home-two owl-btn-vertical-center">
               <?php
                foreach($items as $k=>$v):
               ?>
                <div class="item">
                    <div class="testimonial-1 hover-animation-1 bg-white">
                        <div class="testimonial-detail clearfix">
                            <div class="testimonial-pic  scale-in-center">
                              <?=img($v->logo,'',array('class'=>'img-responsive'))?></div>
                            <!--<span class="testimonial-position">Architect</span>-->
                            <h4 class="testimonial-name"><?=$v->name?></h4>
                            <span class="fa fa-quote-right"></span>
                        </div>

                        <?php if(!empty($v->comment))  echo '<div class="testimonial-text"><p>'.$v->comment.'</div></p>';?>
                    </div>
                </div>
              <?php endforeach;?>
            </div>
        </div>
   </div>
</div>
<!-- TESTIMONIAL  END -->
<?php endif; //end if empty $item?>
