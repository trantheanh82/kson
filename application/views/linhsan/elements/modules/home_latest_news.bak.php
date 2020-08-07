<!-- Our Latest News Start Here -->
<div class="latest-news-one-area news-three-style bg-accent">
    <div class="container">
        <div class="section-title section-title-center">
            <h2><?=lang("Our Latest News")?></h2>
            <p>Sed hendrerit, diam et pellentesque aliquam, lectus ipsum maximus</p>
        </div>
        <div class="row equal-cols">
          <?php
                foreach($items as $k=>$v):
                  $link = base_url().$v->translation->language.'/'.$v->translation->model.'/'.$v->slug->slug;
          ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-news">
                    <div class="item-image">
                        <?php echo img($v->image,'',array('alt'=>$v->translation->content->name,'class'=>'img-responsive'))?>
                        <span class="date">
                          <?=date_format(date_create($v->created_at),'d / m / Y')?>
                        </span>
                    </div>
                    <div class="item-info">
                        <h3>
                            <?=anchor($link,$v->translation->content->name)?>
                        </h3>
                        <div class="single-news__short-description">
                          <?=$v->translation->content->description?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
          endforeach;
            ?>
        </div>
    </div>
</div>
<!-- Our Latest News End Here -->
