<!-- CONTENT START -->
        <div class="page-content">
            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 column-grid-4 inner-page-padding">

                <!-- GALLERY CONTENT START -->
                <div class="container">
                  <?php if(isset($categories)):?>
                    <!-- Filter Nav START -->
                  <div class="filter-wrap p-b30 text-center">
                        <ul class="filter-navigation masonry-filter clearfix">
                            <li class="active"><a class="btn from-top" data-filter="*" href="#" data-hover="All">All</a></li>
                            <?php foreach($categories as $k=>$v): ?>
                            <li><a class=" btn from-top" data-filter=".cat-<?=$k?>" href="#"><?=$v?></a></li>
                          <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Filter Nav END -->
                  <?php endif;?>
                    <?php if(!empty($projects)):?>
                    <!-- GALLERY CONTENT START -->
                     <ul id="load-more-item-2" class="masonry-outer mfp-gallery work-grid row clearfix list-unstyled">

                        <?php foreach($projects as $k=>$v):
                              $link =  site_url(lang('project').'-'.$v->slug->slug);
                          ?>
                        <!-- COLUMNS 1 -->
                        <li class="masonry-item cat-<?=$v->category->id?> col-xl-3 col-lg-4  col-md-6 col-sm-12 m-b30">
                            <div class="project-mas hover-shadow">
                                <div class="image-effect-one">
                                  <?php if(!empty($v->images)):?>
                                    <?=img(PROJECT_IMAGE_FOLDER.$v->images,'',array('alt'=>$v->translation->content->name))?>
                                    <div class="figcaption">
                                      <?=anchor(base_url().PROJECT_IMAGE_FOLDER.$v->images,'<i class="fa fa-arrows-alt"></i>',array('class'=>'mfp-link'))?>
                                    </div>
                                    <?php endif;?>
                                </div>
                                <div class="project-info p-a20 bg-gray">
                                    <h4 class="sx-tilte m-t0"><?=anchor($link,$v->translation->content->name)?></h4>
                                      <p><?=strip_tags($v->translation->content->description)?></p>
                                    <?=anchor($link,'<i class="link-plus bg-primary"></i>')?>
                                </div>
                            </div>
                        </li>
                      <?php endforeach;?>
                     </ul>
                    <!-- GALLERY CONTENT END -->
                  <?php endif;?>
                    <!--<div class="text-center load-more-btn-outer" style="background-image:url(images/background/cross-line.png)">
                        <button class="site-button-secondry btn-half"><span>Load More</span></button>
                    </div>-->
                </div>
                <!-- GALLERY CONTENT END -->

            </div>
            <!-- SECTION CONTENT END  -->

        </div>
        <!-- CONTENT END -->
