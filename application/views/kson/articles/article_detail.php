<!-- CONTENT START -->
        <div class="page-content ">
            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

            <!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 inner-page-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="blog-single-space max-w900 ml-auto mr-auto">
                                <!-- BLOG START -->
                                <div class="blog-post blog-detail text-black">
                                    <?php if(!empty($item->image)): ?>
                                      <!-- Blog Image -->
                                    <div class="sx-post-media">
                                         <div class="portfolio-item">
                                            <?=img($item->image,'',array('class'=>'img-responsive','alt'=>$item->name))?>
                                        </div>
                                    </div>
                                  <?php endif; ?>
                                    <div class="sx-post-meta  m-t20">
                                        <ul>
                                            <li class="post-date"><strong><?=date_format(date_create($item->created_at),'d / m / Y')?> </strong> </li>
                                            <!--<li class="post-author"><a href="javascript:void(0);">By <span>Admin</span></a> </li>
                                            <li class="post-category"><a href="javascript:void(0);"><span>Architecture</span></a> </li>-->
                                        </ul>
                                    </div>

                                    <div class="sx-post-title ">
                                        <h3 class="post-title"><?=$item->name?></h3>
                                    </div>

                                    <div class="sx-post-text">
                                          <!-- blog description -->
                                          <?php if(!empty($item->description)) echo $item->description ?>
                                          <?php if(!empty($item->content)) echo $item->content ?>
                                    </div>

                                    <div class="autor-post-tag-share p-a30 bg-gray">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clearfix single-post-share">
                                                    <h5><?=lang('Share this Post')?>:</h5>
                                                    <div class="widget_social_inks">
                                                        <ul class="social-icons social-md social-square social-dark m-b0">
                                                          <li><?=anchor("https://www.facebook.com/sharer/sharer.php?u=".site_url(uri_string()),' ',array('class'=>'fa fa-facebook'))?></li>
                                                          <li><?=anchor("http://twitter.com/intent/tweet?url=".site_url(uri_string()),' ',array('class'=>'fa fa-twitter'))?></li>
                                                          <li><?=anchor("https://www.linkedin.com/sharing/share-offsite/?url=".site_url(uri_string()),' ',array('class'=>'fa fa-linkedin'))?></li>
                                                        </ul>
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="post-controls m-tb30">
                                        <div class="d-flex justify-content-between">
                                            <div class="prev-post">
                                              <?php if(!empty($item->prev_post->article_category)):  ?>
                                              <?=anchor(lang('detail').'-'.$item->prev_post->slug->slug,lang("Prev Article"))?>
                                              <?php endif; ?>
                                            </div>

                                            <div class="next-post">
                                              <?php if(!empty($item->next_post->article_category)):?>
                                              <?=anchor(lang('detail').'-'.$item->next_post->slug->slug,lang("Next Article"))?>
                                              <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                
                            </div>
                        </div>
                      <?=$this->load->view($template.'/elements/modules/sidebar/right_sidebar_view')?>
                    </div>



                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
