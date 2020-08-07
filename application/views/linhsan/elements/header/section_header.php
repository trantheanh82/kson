<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div class="header header-two-style">
                <div class="header-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="logo-area">
                                    <a href="<?=base_url()?>"><?=img($Settings['company_logo'],false,array('alt'=>$Settings['company_name'],'class'=>'img-responsive'))?></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <ul class="header-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><?=$Settings['company_phone_1']?><span><?=lang("Hot Line Number")?></span></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><?=$Settings['address']?><span><?=lang("Company Address")?></span></li>
                                    <li class='hidden-sm'><i class="fa fa-clock-o" aria-hidden="true"></i><?=$Settings['company_email']?><span><?=lang("Email Contact")?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-two-style" id="sticker">
                    <div class="container">
                        <div class="row menu-full">
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="main-menu-area">
                                    <nav>
                                        <ul>
                                          <?php
                                              foreach($main_menu as $k=>$v):
                                          ?>
                                          <li><?php

                                            echo anchor((!empty($v->link)?$v->slug->slug:"#"),$v->translation->content->name);
                                            if(!empty($v->children)){
                                              if($v->type == 'simple'){
                                                echo $this->load->view($template.'/elements/modules/menu/simple_menu',array('items'=>$v->children));
                                              }
                                            }
                                          ?></li>
                                          <?php
                                              endforeach;
                                          ?>

                                            <?php
                                              if(count($langs) >=2):
                                                $selected_language = $this->config->config['language_abbr'];
                                            ?>
                                            <li>

                                                <select id="language_selector" class="selectpicker">
                                                  <?php
                                                      foreach($langs as $lang):
                                                  ?>
                                                  <option value="<?=$lang->slug?>" <?=($lang->slug==$selected_language)?"selected":""?> data-content="<img src='/assets/img/flags/<?=$lang->image?>' />"></option>
                                                  <?php
                                                      endforeach;
                                                  ?>
                                                </select>
                                            </li>
                                            <?php
                                          endif;
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 hidden-sm">
                                <div class="get-quote">
                                    <a href="tel:<?=$Settings['company_phone_1']?>" class='callus'><?=lang('Call Us')?> <?=$Settings['company_phone_1']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                      <?php
                                          foreach($main_menu as $k=>$v):
                                      ?>
                                      <li><?php

                                        echo anchor((!empty($v->link)?$v->slug->slug:"#"),$v->translation->content->name);
                                        if(!empty($v->children)){
                                          if($v->type == 'simple'){
                                            echo $this->load->view($template.'/elements/modules/menu/simple_menu',array('items'=>$v->children));
                                          }
                                        }
                                      ?></li>
                                      <?php
                                          endforeach;
                                      ?>

                                        <?php
                                          if(count($langs) >=2):
                                            $selected_language = $this->config->config['language_abbr'];
                                        ?>
                                        <li>

                                            <select id="language_selector" class="selectpicker">
                                              <?php
                                                  foreach($langs as $lang):
                                              ?>
                                              <option value="<?=$lang->slug?>" <?=($lang->slug==$selected_language)?"selected":""?> data-content="<img src='/assets/img/flags/<?=$lang->image?>' />"></option>
                                              <?php
                                                  endforeach;
                                              ?>
                                            </select>
                                        </li>
                                        <?php
                                      endif;
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
