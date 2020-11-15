<!-- OUR SERVICES START -->
            <div class="section-full mobile-page-padding p-t80  p-b50 bg-gray">
				<div class="section-content">
                    <div class="container">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-left">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
                                    <h3 class="sep-line-one "><?=$content->head_title?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                          <div class="row">
                            <?php if(!empty($items)):
                              $i = 1;
                                      foreach($items as $k=>$v):
                                        $link = "";
                            ?>
                            <!-- Block one -->
                            <div class="col-lg-4 col-md-6 col-sm-12 m-b30">

                                <div class="sx-icon-box-wraper  icon-count-2-outer">
                                    <div class="icon-count-2 bg-white">
                                        <span class="icon-count-number"><?=($i<10)?'0'.$i:$i?></span>
                                        <div class="icon-xl inline-icon m-b5 scale-in-center">
                                            <span class="icon-cell"><i class="flaticon-sketch"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="sx-tilte"><?=$v->name?></h4>
                                            <?=getSnippet($v->description,15)?>
                                            <div class="text-left">
                                            	<a href="#" class="site-button-link"><?=lang("Read more")?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          <?php      $i++; endforeach;
                                  endif;?>
                        </div>
                    </div>
                </div>

                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong>Services</strong>
                </div>
            </div>
            <!-- OUR SERVICES  END -->
