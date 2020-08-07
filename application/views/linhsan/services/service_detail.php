<?php
  echo $this->load->view($template.'/elements/modules/page_inner_title');
?>
<!-- Service Detail layout Start Here -->
        <div class="service-layout-detail">
            <div class="container">
                <div class="row">
                    <!-- Content Start Here -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 col-lg-push-3 col-md-push-3 col-sm-push-3">
                        <div class="detail-item">
                            <div class="item-image">
                                <?=img($service->image,false,array('class'=>'image-responsive',
                                                            'alt'=>$service->translation->content->name,
                                                                  'title'=>$service->translation->content->name));?>
                            </div>
                            <div class="item-header">
                              <h2><?=$service->translation->content->name?></h2>
                            </div>
                            <div class="item-content">
                              <?php
                                  if(!empty($service->translation->content->content)){
                                    echo $service->translation->content->content;
                                  }

                                  if(!empty($service->translation->content->benefits)){
                                    echo "<h2>".lang("Benefits")."</h2>";
                                    echo $service->translation->content->benefits;
                                  }

                                  if(!empty($service->translation->content->responsibility)){
                                    echo "<h2>".lang("Responsibility")."</h2>";
                                    echo $service->translation->content->responsibility;
                                  }
                              ?>
                            </div>
                        </div>
                    </div>
                    <!-- Content End Here -->
                    <?php
                    echo $this->load->view($template.'/elements/modules/m_left_sidebar',array('show_service'=>$this->load->view($template.'/elements/modules/services/listing_services','',TRUE)))?>
                </div>
            </div>
        </div>
        <!-- Service Detail layout End Here -->
        <!-- Waste More time Start Here -->
        <!--<div class="waste-time-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="waste-time-content">
                            <h3>Waste No More Time!</h3>
                            <p>Rimply dummy text of the printing and typesetting industry Ipsum has been the industry's.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="waste-time-button">
                            <a href="#" class="btn btn-default btn-rounded">Get a Quote <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Waste More time End Here -->
