<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div class="header header-two-style">
                <div class="header-top-bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="top-address">
                                    <ul>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?=$Settings['address']?></li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i><?=$Settings['company_phone_1']?></li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?=$Settings['company_email']?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="top-social-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><?=$Settings['company_phone_1']?><span>Hot Line Number</span></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><?=$Settings['address']?><span>Corporate Ofice Location</span></li>
                                    <li class='hidden-sm'><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - 8.00 - 18.00<span>Ofice Location</span></li>
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
                                            <li><a href="#">Home</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="index.html">Home Layout 1</a></li>
                                                    <li><a href="index2.html">Home Layout 2</a></li>
                                                    <li><a href="index3.html">Home Layout 3</a></li>
                                                    <li><a href="index4.html">Home Layout 4</a></li>
                                                    <li><a href="index5.html">Home Layout 5</a></li>
                                                    <li><a href="index6.html">Home Layout 6</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">About</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="about1.html">About Layout 1</a></li>
                                                    <li><a href="about2.html">About Layout 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-justify"><a href="#">Pages</a>
                                                <div class="rt-dropdown-mega container">
                                                    <div class="rt-dropdown-inner">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <h3>Team Layout</h3>
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="team1.html">Team Layout 1</a></li>
                                                                    <li><a href="team2.html">Team Layout 2</a></li>
                                                                    <li><a href="team3.html">Team Layout 3</a></li>
                                                                    <li><a href="single-team.html">Single Team</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <h3>Portfolio Layout</h3>
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="portfolio1.html">Portfolio Layout 1</a></li>
                                                                    <li><a href="portfolio2.html">Portfolio Layout 2</a></li>
                                                                    <li><a href="portfolio3.html">Portfolio Layout 3</a></li>
                                                                    <li><a href="single-portfolio.html">Single Portfolio</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <h3>Service Layout</h3>
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="service1.html">Service Layout 1</a></li>
                                                                    <li><a href="service2.html">Service Layout 2</a></li>
                                                                    <li><a href="service3.html">Service Layout 3</a></li>
                                                                    <li><a href="single-service.html">Single Service</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <h3>Other Layout</h3>
                                                                <ul class="rt-mega-items">
                                                                    <li><a href="case-studies.html">Case Studies</a></li>
                                                                    <li><a href="single-case.html">Case Details</a></li>
                                                                    <li><a href="faqs.html">Faq's</a></li>
                                                                    <li><a href="404.html">404 Page</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#">Services</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="service1.html">Service Layout 1</a></li>
                                                    <li><a href="service2.html">Service Layout 2</a></li>
                                                    <li><a href="service3.html">Service Layout 3</a></li>
                                                    <li><a href="single-service.html">Single Service</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Case Studies</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="case-studies.html">Case Studies</a></li>
                                                    <li><a href="single-case.html">Case Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">News</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="news1.html">News Layout 1</a></li>
                                                    <li><a href="news2.html">News Layout 2</a></li>
                                                    <li><a href="news3.html">News Layout 3</a></li>
                                                    <li><a href="single-news.html">News Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop</a>
                                                <ul class="rt-dropdown-menu">
                                                    <li><a href="shop1.html">Shop Layout 1</a></li>
                                                    <li><a href="shop2.html">Shop Layout 2</a></li>
                                                    <li><a href="single-shop.html">Shop Details</a></li>
                                                    <li><a href="cart.html">View Cart</a></li>
                                                    <li><a href="check-out.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
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
                                    <a href="#" class='callus'><?=lang('Call us')?> <?=$Settings['company_phone_1']?></a>
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
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Layout 1</a></li>
                                                <li><a href="index2.html">Home Layout 2</a></li>
                                                <li><a href="index3.html">Home Layout 3</a></li>
                                                <li><a href="index4.html">Home Layout 4</a></li>
                                                <li><a href="index5.html">Home Layout 5</a></li>
                                                <li><a href="index6.html">Home Layout 6</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="about1.html">About Layout 1</a></li>
                                                <li><a href="about2.html">About Layout 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="team1.html">Team Layout 1</a></li>
                                                <li><a href="team2.html">Team Layout 2</a></li>
                                                <li><a href="team3.html">Team Layout 3</a></li>
                                                <li><a href="single-team.html">Single Team</a></li>
                                                <li><a href="portfolio1.html">Portfolio Layout 1</a></li>
                                                <li><a href="portfolio2.html">Portfolio Layout 2</a></li>
                                                <li><a href="portfolio3.html">Portfolio Layout 3</a></li>
                                                <li><a href="single-portfolio.html">Single Portfolio</a></li>
                                                <li><a href="case-studies.html">Case Studies</a></li>
                                                <li><a href="single-case.html">Case Details</a></li>
                                                <li><a href="faqs.html">Faq's</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a>
                                            <ul>
                                                <li><a href="service1.html">Service Layout 1</a></li>
                                                <li><a href="service2.html">Service Layout 2</a></li>
                                                <li><a href="service3.html">Service Layout 3</a></li>
                                                <li><a href="single-service.html">Single Service</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">News</a>
                                            <ul>
                                                <li><a href="news1.html">News Layout 1</a></li>
                                                <li><a href="news2.html">News Layout 2</a></li>
                                                <li><a href="news3.html">News Layout 3</a></li>
                                                <li><a href="single-news.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop1.html">Shop Layout 1</a></li>
                                                <li><a href="shop2.html">Shop Layout 2</a></li>
                                                <li><a href="single-shop.html">Shop Details</a></li>
                                                <li><a href="cart.html">View Cart</a></li>
                                                <li><a href="check-out.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
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
