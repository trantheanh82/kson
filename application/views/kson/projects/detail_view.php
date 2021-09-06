<!-- CONTENT START -->
        <div class="page-content">
            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 inner-page-padding stick_in_parent">
            	<div class="container">
                    <div class="row">
                        <div  class="col-lg-12 col-md-12  sticky_column">
                            <div  class="project-detail-containt">
                                <div class="bg-white text-black">
                                    <h3><?=strip_tags($item->description)?></h3>
                                    <?=$item->content?>
                               <div class="product-block">
                                    <ul>
                                      <li>
                                        <h4 class="m-b10"><?=lang('Date')?></h4>
                                        <p><?=date_format(date_create($item->created_at),'d/m/Y')?></p>
                                      </li>
                                      <li>
                                        <h4 class="m-b10"><?=lang('Client')?></h4>
                                        <p><?=$item->client?></p>
                                       </li>
                                      <li>
                                        <h4 class="m-b10"><?=lang("Project Category")?></h4>
                                        <p><?=$item->category->translation->content->name?></p>
                                      </li>
                                      <li>
                                        <h4 class="m-b10"><?=lang("Location")?></h4>
                                        <p><?=$item->location?></p>
                                      </li>
                                      <li>
                                        <h4 class="m-b10"><?=lang("Year")?></h4>
                                        <p><?=$item->year?></p>
                                      </li>
                                  </ul>
                                </div>


                                    <?=$this->load->view($template.'/elements/modules/widgets/sharing_view',array('type'=>2))?>
                                </div>
                            </div>
                        </div>

                        <!--<div class="col-lg-5 col-md-5 ">
                            <?php if(!empty($item->images)):?>
                            <div class="project-detail-outer">
                                <?php foreach($item->images as $k=>$v): ?>
                                <div class="project-detail-pic m-b30">
                                    <div class="sx-media">
                                        <img src="images/projects/portrait/pic7.jpg" alt="">
                                        <?=img(PROJECT_IMAGE_FOLDER.$v->name,'',array('alt'=>$item->name))?>
                                    </div>
                                </div>
                              <?php endforeach;?>
                                <!--
                                <div class="sx-box">
                                    <div class="sx-thum-bx sx-img-overlay1 sx-img-effect yt-thum-box">
                                        <img src="https://img.youtube.com/vi/Oy2QIiSQT2U/0.jpg" alt="">
                                        <a href="https://www.youtube.com/watch?v=OfFFZnOtqFQ" class="mfp-video play-now">
                                            <i class="icon fa fa-play"></i>
                                            <span class="ripple"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          <?php endif;?>
                        </div> -->

                    </div>
                    <!--
                    <div  class="project-detail-containt-2 m-t50">
						                  <h3>Creating a sustainable future through building preservation, green architecture, and smart design</h3>
                        <p class="m-b0"> Designers think everything done by someone else is awful, and that they could do it better themselves, which explains why I designed my own living room carpet, I suppose. the architect represents neither a Dionysian nor an Apollinian condition: here it is the mighty act of will, the will which moves mountains, the intoxication of the strong will, which demands artistic expression. The most powerful men have always inspired the architects; the architect has always been influenced by power.</p>
                    </div>
                  -->
                </div>
            </div>
            <!-- SECTION CONTENT END  -->

            <?php if(!empty($other_projects)):?>
            <!-- Similar projects START -->

            <div class="section-full p-tb80 bg-gray inner-page-padding">
                <div class="container">
                    <div class="section-content">
                        <!-- TITLE START -->
                        <div class="section-head">
                            <div class="sx-separator-outer separator-left">
                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(images/background/cross-line2.png)">
                                    <h3 class="sep-line-one"><?=lang("Similar Project")?></h3>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->
                        <div class="work-carousel-outer">
                            <div class="owl-carousel mfp-gallery project-carousel project-carousel3 owl-btn-vertical-center p-lr80">
                                <?php foreach($other_projects as $k=>$v):
                                      $link = "";
                                      $img = PROJECT_IMAGE_FOLDER.$v->images;
                                  ?>
                                <!-- COLUMNS <?=$k?> -->
                                <div class="item">
                                    <div class="project-mas m-a30">
                                        <div class="image-effect-one">
                                          <?=img($img,'',array('alt'=>$v->translation->content->name))?>
                                            <div class="figcaption">

                                                <a class="mfp-link" href="images/projects/portrait/pic4.jpg">
                                                    <i class="fa fa-arrows-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="project-info p-t20">
                                            <h4 class="sx-tilte  m-t0">
                                              <?=anchor($link,$v->translation->content->name,array('title'=>$v->translation->content->name))?></h4>
                                            <p><?=strip_tags($v->translation->content->description)?></p>
                                            <a href="#"><i class="link-plus bg-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach;?>
                             </div>
                        </div>
                     </div>
                 </div>
             </div>
            <!-- Similar projects END -->
          <?php endif;?>

        </div>
        <!-- CONTENT END -->
