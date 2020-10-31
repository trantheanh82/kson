<?php
  if(isset($sliders)):
 ?>
<!-- SLIDER START -->
            <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container home-rev-slider" data-alias="mask-showcase" data-source="gallery">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                      <?php
                          foreach($sliders as $k =>$v):
                      ?>
                         <!-- SLIDE 1 -->
                        <li data-index="rs-<?=$k+1?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="images/main-slider/slider1/slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <?php
                              echo img($v->translation->content->image,'',array(
                                'data-bgcolor'=>'',
                                'style'=>'',
                                'alt'=>$v->translation->content->tagline,
                                'data-bgposition'=>"center center",
                                'data-bgfit'=>"cover",
                                'data-bgrepeat'=>"no-repeat",
                                'data-bgparallax'=>"off",
                                'class'=>"rev-slidebg",
                                'data-no-retina'=>""
                              ));
                            ?>

            				<!-- LAYER 1  right image overlay dark-->
                        	<div class="tp-caption tp-shape tp-shapewrapper  rs-parallaxlevel-tobggroup"
                            id="slide-<?=$k?>-layer-1"
                            data-x="['right','right','right','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                            data-fontweight="['100','100','400','400']"
                            data-width="['full','full','full','full']"
                            data-height="['full','full','full','full']"
                            data-whitespace="nowrap"

                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 6;background-color:rgba(0,0,0,0.7);">
                            </div>

                            <?php
                              if(isset($v->translation->content->headline)):
                              ?>
                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption   tp-resizeme slider-tag-line"
                                id="slide-<?=$k?>-layer-3"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['150','150','150','100']"
                                data-fontsize="['22',22','20','16']"
                                data-lineheight="['26','26','26','22']"
                                data-width="['700','600','600','380']"
                                data-height="none"
                                data-whitespace="nowrap"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":300,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 10; font-weight:500; letter-spacing:10px; color: #fff;font-family: 'Poppins', sans-serif; text-transform:uppercase"><?=$v->translation->content->headline?></div>
                            <?php endif; ?>
                            <?php
                              if(isset($v->translation->content->tagline)): ?>
                            <!-- LAYER 4  Bold Title-->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-<?=$k?>-layer-4"
                                data-x="['left','left','center','center']" data-hoffset="['46','46','0','0']"
                                data-y="['top','top','top','top']" data-voffset="['190','190','190','150']"
                                data-fontsize="['64','54','44','34']"
                                data-lineheight="['80','70','60','50']"
                                data-width="['700','600','500','380']"
                                data-height="none"
                                data-whitespace="normal"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 10;white-space: normal;font-weight: 600; color: #fff;font-family: 'Poppins', sans-serif;"><?=$v->translation->content->tagline?></div>
                            <?php endif; ?>

                            <?php
                                if(isset($v->translation->content->description)):?>
                            <!-- LAYER 5  Paragraph-->
                            <div class="tp-caption   tp-resizeme"
                                id="slide-<?=$k?>-layer-5"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['30','60','50','70']"
                                data-fontsize="['18','18','18','16']"
                                data-lineheight="['30','30','30','30']"
                                data-width="['600','600','500','380']"
                                data-height="none"
                                data-whitespace="normal"

                                data-type="text"
                                data-responsive_offset="on"

                                data-frames='[{"delay":200,"speed":750,"sfxcolor":"#fff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                    style="z-index: 10; white-space: normal; color: #fff; font-family: 'Poppins', sans-serif;"><?=$v->translation->content->description?></div>
                            <?php endif; ?>
                            <?php
                            if(!empty($v->translation->content->button_text)):?>
                            <!-- LAYER 6  Read More-->
                            <div class="tp-caption rev-btn  tp-resizeme"
                                id="slide-<?=$k?>-layer-6"
                                data-x="['left','left','center','center']" data-hoffset="['50','50','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['120','140','140','150']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button"
                                data-responsive_offset="on"

                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;",
                                "speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},
                                {"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'

                                data-textAlign="['left','left','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:9; line-height:30px;">
                                <?php
                                  if(!empty($v->translation->content->button_link)): ?>
                                  <a href="Javascript:;" class="site-button btn-half"><span><?=$v->translation->content->button_text?></span></a>
                                <?php else:?>
                                  <span><?=$v->translation->content->button_text?></span>
                                <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <!-- Border left Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                id="slide-<?=$k?>-layer-8"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-visibility="['on','off','off','off']"

                                data-type="shape"
                                data-basealign="slide"
                                data-responsive_offset="off"
                                data-responsive="off"
                                data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:8;background-color:rgba(0, 0, 0, 0);border-left:40px solid #eef1f2;"> </div>

                             <!-- Border bottom Part -->
                            <div class="tp-caption tp-shape tp-shapewrapper "
                                id="slide-<?=$k?>-layer-7"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-visibility="['on','on','off','off']"

                                data-type="shape"
                                data-basealign="slide"
                                data-responsive_offset="off"
                                data-responsive="off"
                                data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index:8;background-color:rgba(0, 0, 0, 0);border-bottom:80px solid #eef1f2;"> </div>
                        </li>
                        <?php
                      endforeach;
                         ?>

                    </ul>
                    <div class="tp-bannertimer"></div>

                    <?=$this->load->view($template.'/elements/modules/social_bar')?>
                   

                    </div>
            </div>
            <!-- SLIDER END -->
<?php endif; ?>
