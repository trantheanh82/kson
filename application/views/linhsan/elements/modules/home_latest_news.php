<!-- Our Latest News Start Here -->
        <div class="latest-news-one-area news-two-style bg-accent">
            <div class="container">
                <div class="section-title">
                  <h2><?=lang("Our Latest News")?></h2>
                </div>
                <div class="row">
                    <div class="fn-carousel" data-loop="true" data-items="3" data-margin="0" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false">
                      <?php
                        foreach($items as $k=>$v):
                          $link = base_url().$v->translation->language.'/'.$v->translation->model.'/'.$v->slug->slug;
                      ?>
                        <div class="single-news">
                            <div class="item-image">
                                <?php echo img($v->image,'',array('alt'=>$v->translation->content->name,'class'=>'img-responsive'))?>
                            </div>
                            <div class="item-info">
                              <h3><?=anchor($link,$v->translation->content->name)?></h3>
                              <span class="date"><?=date_format(date_create($v->created_at),'d/m/ Y')?></span>

                            </div>
                        </div>
                      <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Latest News End Here -->
