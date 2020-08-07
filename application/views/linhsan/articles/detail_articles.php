<?php
  echo $this->load->view($template.'/elements/modules/page_inner_title');
?>
<!-- Latest News Start Here -->
        <div class="latest-news-area">
            <div class="container">
                <div class="row">
                    <!-- Content Start Here -->
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="news-details-layout">
                            <div class="item-img-holder">
                                <center><?=img($item->image,'',array('class'=>'img-responsive','alt'=>$item->translation->content->name))?><center>
                            </div>
                            <div class="item-header">
                                <ul class="item-info">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?=date_format(date_create($item->created_at),'d-m-Y')?></li>
                                    <!--<li><i class="fa fa-user" aria-hidden="true"></i><a href="#">by admin</a></li>
                                    <li><i class="fa fa-tag" aria-hidden="true"></i><a href="#">Business</a></li>
                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i><a href="#">02 Comments</a></li>-->
                                </ul>
                                <h2><?=$item->translation->content->name?></h2>
                            </div>
                            <div class="item-fulltext">

                                <?=$item->translation->content->content?>
                                <!--<div class="item-links fi-clear">
                                    <ul class="item-tags">
                                        <li><span>Tags:</span></li>
                                        <li><a href="#">Fitness</a>,</li>
                                        <li><a href="#">Weight</a>,</li>
                                        <li><a href="#">Fatloss</a></li>
                                    </ul>
                                    <ul class="item-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <!--
                            <div class="item-comments fi-clear">
                                <div class="item-author">
                                    <div class="pull-left">
                                        <img class="img-responsive" src="img/news/author.jpg" alt="author">
                                    </div>
                                    <div class="media-body">
                                        <h3>About The Author</h3>
                                        <span class="position">Admin</span>
                                        <p>Dorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                                    </div>
                                </div>
                                <div class="item-comments-list">
                                    <h2>03 Comments</h2>
                                    <ul class="comments-list">
                                        <li class="even fi-clear">
                                            <span class="comment-image">
                                                    <img class="img-responsive" src="img/news/comment-author1.jpg" alt="author">
                                                </span>
                                            <span class="comment-name">Nitiya,</span>
                                            <span class="comment-date">September 29, 2017</span>
                                            <span class="comment-reply"><a href="#">Reply</a></span>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </li>
                                        <li class="odd fi-clear">
                                            <span class="comment-image">
                                                    <img class="img-responsive" src="img/news/comment-author2.jpg" alt="author">
                                                </span>
                                            <span class="comment-name">Nathan Ford,</span>
                                            <span class="comment-date">September 28, 2017</span>
                                            <span class="comment-reply"><a href="#">Reply</a></span>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </li>
                                        <li class="even fi-clear">
                                            <span class="comment-image">
                                                    <img class="img-responsive" src="img/news/comment-author3.jpg" alt="author">
                                                </span>
                                            <span class="comment-name">Jhueal,</span>
                                            <span class="comment-date">September 27, 2017</span>
                                            <span class="comment-reply"><a href="#">Reply</a></span>
                                            <p>Borem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="item-comments-form">
                                    <h2>Leave Comments</h2>
                                    <form id="comments-form" class="comments-form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Site URL*" class="form-control" name="siteurl" id="form-subject" data-error="Site url field is required" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                                    <div class="form-group margin-bottom-none">
                                                        <button type="submit" class="ghost-btn">Send Message</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                                    <div class='form-response'></div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!-- Content End Here -->
                    <?=$this->load->view($template.'/elements/modules/m_right_sidebar',array('show_categories'=>$this->load->view($template.'/elements/modules/articles/m_category_articles','',TRUE)))?>
                </div>
            </div>
        </div>
        <!-- Latest News End Here -->
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
