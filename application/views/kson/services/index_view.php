<!-- CONTENT START -->
        <div class="page-content">

            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>


            <!-- OUR SERVICES START -->
            <div class="section-full mobile-page-padding p-t80  p-b50 bg-gray">
                <div class="section-content">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-left">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                    <h3 class="sep-line-one "><?=lang('All Services')?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                          <div class="row">
                            <?php
                                  $i = 1;
                                  foreach($items as $k=>$v):
                                  $link = lang('services').'-'.$v->slug;
                            ?>
                            <!-- Block <?=$i?> -->
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">

                                <div class="sx-icon-box-wraper  icon-count-2-outer">
                                    <div class="icon-count-2 bg-white">
                                        <span class="icon-count-number"><?=$i?></span>
                                        <div class="icon-xl inline-icon m-b5 scale-in-center">
                                            <span class="icon-cell"><i class="<?=$v->icon?>"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte"><?=$v->name?></h4>
                                            <p><?=getSnippet(strip_tags($v->description),15)?></p>
                                            <div class="text-left">
                                                <?=anchor($link,lang('Read More'),array('class'=>'site-button-link'))?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          <?php $i++; endforeach;?>
                        </div>
                    </div>
                </div>

                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong><?=lang('Services')?></strong>
                </div>
            </div>
            <!-- OUR SERVICES  END -->

            <!-- ABOUT COMPANY START -->
            <div class="section-full mobile-page-padding p-t80 p-b50 bg-white">
              <?php if(!empty($item->translation->content->content))
                              echo $item->translation->content->content;
                              ?>

            </div>
            <!-- ABOUT COMPANY END -->


            <?php //echo $this->load->view($template.'/elements/modules/counter_view')?>

            <?php //echo $this->load->view($template.'/elements/modules/testimonial_view')?>

        <!-- CONTENT END -->
