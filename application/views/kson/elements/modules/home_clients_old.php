<!-- OUR CLIENTS -->
  <div class="section-full  mobile-page-padding p-t80 p-b10 bg-repeat" style="background-image: url(http://localhost:8000/assets/kson/images/background/bg-5.png);">
				<div class="container">
         <!-- TITLE START -->
					<div class="section-head">
						<div class="sx-separator-outer separator-left">
							<div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(/assets/kson/images/background/cross-line2.png)">
								<h3 class="sep-line-one"><?=$content->head_title?></h3>
							</div>
						</div>
					</div>
          <!-- TITLE END -->
					<div class="section-content">
                    	<div class="client-grid m-b40">

                        	<div class="row justify-content-center">
                            <?php foreach($items as $k=>$v): ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 m-b30">
                                    <a href="javascript:;" class="client-logo-pic">
                                      <?=img($v->logo,'',array('alt'=>$v->name))?>
                                      <!--<div>
                                        <span>View More</span>
                                      </div>-->
                                    </a>
                                </div>
                              <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="hilite-title text-left p-l50 text-uppercase">
                    <strong><?=lang("Clients")?></strong>
                </div>
             </div>
            <!-- OUR CLIENTS END -->
