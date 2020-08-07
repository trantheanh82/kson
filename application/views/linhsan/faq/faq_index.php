<?php
  echo $this->load->view($template.'/elements/modules/page_inner_title');
?>
<div class="faqs-area">
            <div class="container">
                <div class="row faq-accordion fi-clear panel-group" id="faq-accordion">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <?php
                          foreach($items_l as $k=>$v):
                      ?>
                        <div class="panel panel-default">
                            <div class="panel-heading<?=($k==0)?" active":""?>">
                                <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$v->id?>"><?=$v->translation->content->question?></a>
                                    </h4>
                            </div>
                            <div id="collapse<?=$v->id?>" class="panel-collapse collapse<?=($k==0)?" in":""?>">
                                <div class="panel-body">
                                    Bpsum has been the industry's standard dummy text everty since the 1500s, when an unknown printer took a galley ofety type and scrambled it to make pecimen book.
                                </div>
                            </div>
                        </div>
                        <?php
                          endforeach;
                        ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <?php
                          foreach($items_r as $k=>$v):
                      ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$v->id?>"><?=$v->translation->content->question?></a>
                                    </h4>
                            </div>
                            <div id="collapse<?=$v->id?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Bpsum has been the industry's standard dummy text everty since the 1500s, when an unknown printer took a galley ofety type and scrambled it to make pecimen book.
                                </div>
                            </div>
                        </div>
                        <?php
                          endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
