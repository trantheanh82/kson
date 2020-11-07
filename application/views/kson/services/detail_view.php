<!-- CONTENT START -->
        <div class="page-content">

            <?=$this->load->view($template.'/elements/modules/page_inner_view')?>

			<!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50 mobile-page-padding">
            	<div class="container">

                    <!-- GALLERY CONTENT START -->
                     <div class="row">
                        <div class="col-lg-4 col-md-12 sticky_column">
                            <div class="about4-section m-b20 bg-gray p-a20">
                                <?=$this->load->view($template.'/elements/modules/widgets/services_category_view')?>
                                <div class="wt-icon-box-wraper left bg-white p-a15 m-b10">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="text-uppercase text-black">Download .PDF</strong>
                                    </a>
                                </div>
                                <div class="wt-icon-box-wraper left bg-white p-a15 m-b10">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
                                        <strong class="text-uppercase text-black"> Download .DOC</strong>
                                    </a>
                                </div>
                                <div class="wt-icon-box-wraper left bg-white p-a15 m-b10">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
                                        <strong class="text-uppercase text-black">Download .PPT</strong>
                                    </a>
                                </div>
                                <div class="about4-content m-t30">
                                    <h4>GET 10% OFF TODAY</h4>
                                    <p>A Completely Safe and Advanced Cleaning Solution for both Petrol and Diesel Engines</p>
                                    <a href="#" class="site-button-link">Read More</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="section-content">
                            	<div class="service-single-block m-b30">
                                	<div class="sx-media">
                                    	<?=img($item->image,'',array('alt'=>$item->name))?>
                                    </div>
                                    <?php if(isset($item->title)):?>
                                    <h3 class="m-t30 sx-tilte"><?=$item->title?></h3>
                                  <?php endif;?>
                                    <?=$item->content?>
                                </div>

                                <div class="sx-accordion acc-bg-gray m-b30" id="accordion5">
                                    <div class="panel sx-panel">
                                        <div class="acod-head acc-actives">
                                             <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
                                                    Choose between rates or instant payment
                                                    <span class="indicator"><i class="fa"></i></span>
                                                </a>
                                             </h6>
                                        </div>
                                        <div id="collapseOne5" class="acod-body collapse show">
                                            <div class="acod-content p-tb15"><p> Motivate others and change the way we feel about ourselves. This is why I find them so interesting and crucial on our paths to success mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est.
Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci consectetur vel posuere posuere, rutrum eu ipsum. Cost is important.</p></div>
                                        </div>
                                    </div>
                                    <div class="panel sx-panel">
                                        <div class="acod-head">
                                             <h6 class="acod-title">
                                                <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5" >
                                                Come to see a live preview
                                                <span class="indicator"><i class="fa"></i></span>
                                                </a>
                                             </h6>
                                        </div>
                                        <div id="collapseTwo5" class="acod-body collapse">
                                            <div class="acod-content p-tb15">Inspirational quotes have an amazing ability to motivate others and change the way we feel about ourselves. This is why I find them so interesting and crucial on our paths to success.</div>
                                        </div>
                                    </div>
                                    <div class="panel sx-panel">
                                        <div class="acod-head">
                                            <h6 class="acod-title">
                                            <a data-toggle="collapse"  href="#collapseThree5" class="collapsed"  data-parent="#accordion5">
                                            Choose the correct service
                                            <span class="indicator"><i class="fa"></i></span>
                                            </a>
                                         </h6>
                                        </div>
                                        <div id="collapseThree5" class="acod-body collapse">
                                            <div class="acod-content p-tb15">The leap into electronic typesetting, remaining essentially unchanged. It was popularised sheets containing Lorem Ipsum passagese.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6 m-b30">
                                        <div class="sx-icon-box-wraper p-a30  center bg-white shadow">
                                            <div class="sx-icon-box-lg inline-icon text-primary  m-b20 radius bg-secondry  scale-in-center">
                                                <span class="icon-cell sx-text-primary"><i class="flaticon-door"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="sx-tilte">Decoration</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and setting as Planning.</p>
                                                <a href="#" class="site-button-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 m-b30">
                                        <div class="sx-icon-box-wraper p-a30  center bg-white shadow">
                                            <div class="sx-icon-box-lg inline-icon text-primary  m-b20 radius bg-secondry  scale-in-center">
                                                <span class="icon-cell sx-text-primary"><i class="flaticon-ruler-1"></i></span>
                                            </div>
                                            <div class="icon-content">
                                                <h4 class="sx-tilte">Solution</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and setting as Planning.</p>
                                                <a href="#" class="site-button-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                          </div>

                        </div>
                     </div>
                    <!-- GALLERY CONTENT END -->
            	</div>


            </div>
            <!-- SECTION CONTENT END  -->




        <!-- CONTENT END -->
