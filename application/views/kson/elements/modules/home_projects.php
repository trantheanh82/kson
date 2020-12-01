<!-- PROJECTS START -->
            <div class="section-full mobile-page-padding  p-t80 p-b50 bg-white">
				<div class="section-content">
                	<div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-center">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                    <h3 class="sep-line-one"><?=$content->head_title?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                     </div>

                     <div class=" filter-carousal-1-outer relative z-index1">
                     	<div class="container">
                        <!-- TITLE START -->
                            <div class="text-center clearfix filter-pos-right shadow m-b30">
                                <ul class="btn-filter-wrap">
                                    <li class="btn-filter btn-active" data-filter="*"><?=lang("All")?></li>
                                    <?php foreach($categories as $k=>$v):?>
                                    <li class="btn-filter" data-filter=".col-<?=$k?>"><?=$v?></li>
                                  <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="filter-carousal-1  container-fluid p-b30">
                            <!-- IMAGE CAROUSEL START -->
                            <div class="section-content ">
                                <div class="owl-carousel owl-carousel-filter  owl-btn-bottom-center mfp-gallery navigation-with-name">
                                    <?php foreach($items as $k=>$v):
                                          $link = lang('project')."-".$v->slug;
                                    ?>
                                    <!-- COLUMNS 1 -->
                                    <div class="item fadingcol col-<?=$v->category->id?> overflow-hide">
                                        <div class="sx-box   image-hover-block">
                                            <?php if(!empty($v->images)):?>
                                            <div class="sx-thum-bx">
                                                <?=img(PROJECT_IMAGE_FOLDER.$v->images,false,array('alt'=>$v->name))?>
                                            </div>
                                          <?php endif; ?>
                                            <div class="sx-info  p-t20 text-white">
                                                <h4 class="sx-tilte"><?=anchor($link,$v->name,array('alt'=>$v->name))?></h4>
                                                <p class="m-b0"><?=$v->description?></p>
                                            </div>
                                            <?=anchor($link,"<i class='fa fa-arrows-alt'></i>",array('class'=>'mfp-link'))?>
                                            <!--<a class="mfp-link" href="/html/images/projects/portrait/pic1.jpg">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>-->
                                       </div>
                                    </div>
                                  <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- PROJECTS  END -->
