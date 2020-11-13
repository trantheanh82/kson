<!-- WHAT WE DO START -->
<div class="section-full  mobile-page-padding bg-white  p-t80 p-b50 bg-repeat overflow-hide" style="background-image:url(/assets/kson/img/cross-line2.png)">

    <div class="container">
        <!-- TITLE START -->
        <div class="section-head">
            <div class="sx-separator-outer separator-center">
                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/img/cross-line2.png)">
                    <h3 class="sep-line-one"><?=lang("What we do")?></h3>
                </div>
            </div>
        </div>
        <!-- TITLE END -->
        <div class="section-content">
            <div class="row number-block-three-outer justify-content-center">
              <?php
                    $i = 1;
                    foreach($services as $k=>$v):
                    $link = "/dich-vu-".$v->slug;
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b30">

                    <div class="number-block-three slide-ani-top">
                      <?php if(!empty($v->image)):?>
                        <div class="sx-media">
                            <?=img($v->image,'',array('alt'=>$Settings['company_name'].' '.$v->name))?>
                        </div>
                      <?php endif;?>
                        <div class="figcaption bg-gray  p-a30">
                            <h4 class="m-tb0"><?=anchor($link,$v->name)?></h4>

                            <div class="figcaption-number animate-top-content">
                                <span><?=($i<10)?'0'.$i:$i?></span>
                            </div>
                        </div>
                    </div>

                </div>
              <?php
                    $i++;
                    endforeach; ?>

            </div>
        </div>
    </div>
 </div>
<!-- WHAT WE DO END -->
