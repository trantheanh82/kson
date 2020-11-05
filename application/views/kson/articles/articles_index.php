<!-- CONTENT START -->
       <div class="page-content">
           <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

     <!-- SECTION CONTENT START -->
           <div class="section-full p-tb80 inner-page-padding">

               <!-- GALLERY CONTENT START -->
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-8 col-md-12 col-sm-12">
                               <div class="news-listing ">
                                  <?php
                                    if(!empty($items)):
                                        foreach($items as $k =>$v):
                                          $link = lang('detail').'-'.$v->slug;
                                  ?>
                                   <!-- COLUMNS <?=$k?> -->
                                   <div class="blog-post blog-lg date-style-3 block-shadow">
                                      <?php if(!empty($v->image)):?>
                                       <div class="sx-post-media sx-img-effect zoom-slow">
                                           <?=anchor($link,img($v->image,'',array('alt'=>$v->name)))?>
                                       </div>
                                     <?php endif;?>
                                       <div class="sx-post-info  bg-white">
                                           <div class="sx-post-meta ">
                                               <ul>
                                                   <li class="post-date"> <strong><?=date_format(date_create($v->created_at),'d')?> </strong> <span><?=date_format(date_create($v->created_at),'m / Y')?></span> </li>
                                                   <!--<li class="post-author"><a href="javascript:void(0);">By <span>John</span></a> </li>
                                                   <li class="post-comment"><a href="javascript:void(0);">0 Comments</a> </li>-->
                                               </ul>
                                           </div>
                                           <div class="sx-post-title ">
                                               <h4 class="post-title"><?=anchor($link,$v->name)?></h4>
                                           </div>

                                           <div class="sx-post-text">
                                              <p><?=strip_tags($v->description)?></p>
                                          </div>
                                           <div class="clearfix">
                                               <div class="sx-post-readmore pull-left">
                                                    <?=anchor($link,lang('Read More'),array('title'=>$v->name,'rel'=>'bookmark','class'=>'site-button-link'))?>
                                               </div>

                                               <div class="widget_social_inks pull-right">
                                                   <ul class="social-icons social-square social-dark m-b0">
                                                       <li><?=anchor("https://www.facebook.com/sharer/sharer.php?u=".site_url(uri_string()),' ',array('class'=>'fa fa-facebook'))?></li>
                                                       <li><?=anchor("http://twitter.com/intent/tweet?url=".site_url(uri_string()),' ',array('class'=>'fa fa-twitter'))?></li>
                                                       <li><?=anchor("https://www.linkedin.com/sharing/share-offsite/?url=".site_url(uri_string()),' ',array('class'=>'fa fa-linkedin'))?></li>
                                                       <!--<li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                       <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                       <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>-->
                                                   </ul>
                                              </div>
                                           </div>


                                       </div>

                                   </div>
                                   <?php
                                 endforeach;
                               else:
                                    ?>
                                    <?php
                                  endif; ?>


                               </div>

                               <ul class="pagination m-b30">
                                  <?php echo $this->article_model->all_pages; ?>
                               </ul>
                           </div>

                           <?=$this->load->view($template.'/elements/modules/sidebar/right_sidebar_view')?>

                       </div>
               </div>
               <!-- GALLERY CONTENT END -->

           </div>
           <!-- SECTION CONTENT END  -->

       </div>
       <!-- CONTENT END -->
