<!-- HEADER START -->
        <header class="site-header header-style-1 nav-wide">
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="d-flex justify-content-end">
                        <ul class="list-unstyled e-p-bx">
                            <li><span><?=lang("Mail us")?>:</span> <?=$Settings['company_email']?></li>
                            <li><span><?=lang("Call us")?>:</span><?=$Settings['company_phone_1']?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div  class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar header-left-gray-block bg-white">
                    <div class="container clearfix">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                              <?=anchor(base_url(),img($Settings['company_logo'],false))?>
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                            <!-- EXTRA NAV -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <a href="#search">
                                    	<i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="extra-cell">
                                    <div class="contact-slide-show"><a href="javascript:;" class="get-in-touch-btn from-top"><?=lang("Get in touch")?></a></div>
                                </div>
                            </div>
                            <!-- EXTRA Nav -->

                        	<?=$this->load->view($template.'/elements/modules/navigator')?>

                            <!-- CONTACT -->
                         	<div class="contact-slide-hide" style="background-image:url(<?=base_url()?>assets/<?=$template?>/images/background/bg-map.png)">
                                <div class="contact-nav">
                                     <a href="javascript:void(0)" class="contact_close">&times;</a>
                                     <div class="contact-nav-form">
                                     	<div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12">

                                                <div class=" contact-nav-info">

                                                    <div class="sx-icon-box-wraper left p-b30">
                                                        <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-phone"></i></div>
                                                        <div class="icon-content">
                                                            <h6 class="m-t0"><?=lang("Phone number")?></h6>
                                                            <p><?=$Settings['company_phone_1']?></p>
                                                        </div>
                                                    </div>

                                                    <div class="sx-icon-box-wraper left p-b30">
                                                        <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-envelope"></i></div>
                                                        <div class="icon-content">
                                                            <h6 class="m-t0"><?=lang('Email address')?></h6>
                                                            <p><?=$Settings['company_email']?></p>
                                                        </div>
                                                    </div>

                                                    <div class="sx-icon-box-wraper left p-b30">
                                                        <div class="icon-xs inline-icon m-b20 scale-in-center"><i class="fa fa-map-marker"></i></div>
                                                        <div class="icon-content">
                                                            <h6 class="m-t0"><?=lang('Address info')?></h6>
                                                            <p><?=$Settings['company_address']?></p>
                                                        </div>
                                                    </div>

                                                    <div class="full-social-bg">
                                                          <ul>
                                                            <?php
                                                                if(!empty($Settings['social_facebook']))
                                                                  echo '<li><a href="'.$Settings['social_facebook'].'" class="facebook"><i class="fa fa-facebook"></i></a></li>';
                                                                if(!empty($Settings['social_instagram']))
                                                                  echo '<li><a href="'.$Settings['social_instagram'].'" class="instagram"><i class="fa fa-instagram"></i></a></li>';
                                                                if(!empty($Settings['social_twitter']))
                                                                  echo '<li><a href="'.$Settings['social_twitter'].'" class="twitter"><i class="fa fa-twitter"></i></a></li>';
                                                                  if(!empty($Settings['social_linkedin']))
                                                                    echo '<li><a href="'.$Settings['social_linkedin'].'" class="twitter"><i class="fa fa-linkedin"></i></a></li>';

                                                             ?>
                                                          </ul>
                                                    </div>

                                                 </div>

                                            </div>


                                            <div class="col-xl-6 col-lg-6 col-md-12 ">
                                            	<div class="contact-nav-field shadow-lg p-a30 bg-white" style="background-image:url(images/background/bg-map.png)">
                                                <form class="cons-contact-form2 form-transparent" method="post" action="form-handler2.php">

                                                    <div class="input input-animate">
                                                        <label for="name"><?=lang('Name')?></label>
                                                        <input type="text" name="username" id="name" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="email"><?=lang('Email')?></label>
                                                        <input type="email" name="email" id="email" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="Phone"><?=lang('Phone')?></label>
                                                        <input type="text" name="phone" id="Phone" required>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="input input-animate">
                                                        <label for="message"><?=lang('Message')?></label>
                                                        <textarea name="message" id="message" required></textarea>
                                                        <span class="spin"></span>
                                                    </div>

                                                    <div class="text-left p-t10">
                                                        <button type="submit" class="site-button-secondry btn-half ">
                                                         <span><?=lang('Submit Now')?></span>
                                                        </button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                         </div>
                                     </div>


                                </div>
                            </div>

                            <!-- SITE SEARCH -->
                            <div id="search">
                                <span class="close"></span>
                                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                    <div class="input-group">
                                        <input value="" name="q" type="search" placeholder="Type to search"/>
                                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search arrow-animation"></i></button></span>
                                    </div>
                                </form>
                            </div>



                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->
