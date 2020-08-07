<!-- Slider Area Start Here -->
<div class="slider-area slider-content-center slider-overlay">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
          <?php
            foreach($sliders as $k => $v):
              echo img($v->translation->content->image,'',
              array('alt'=>$v->translation->content->headline,
                    'title'=>"#slider-direction-".$v->id));
          ?>

            <!--<img src="/assets/<?=$template?>/img/slider/slide2_1.jpg" alt="slider" title="#slider-direction-1" />-->
            <?php
          endforeach;
            ?>
        </div>
        <?php
            foreach($sliders as $k => $v):

        ?>
            <div id="slider-direction-<?=$v->id?>" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2">
                    <div class="title-container s-tb-c">
                        <div class="container">
                            <div class="large-upper-title"><?=$v->translation->content->headline?></div>
                            <p><?=$v->translation->content->description?></p>
                            <div class="slider-btn-area">
                                <a href="<?=$v->translation->content->button_link?>" class="btn-fill-round"><?=$v->translation->content->button_text?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
        ?>
    </div>
</div>
<!-- Slider Area End Here -->
