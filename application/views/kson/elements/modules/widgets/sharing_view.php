<?php
      if($type==1):
?>
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
<?php endif;?>
<?php if($type == 2):?>
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
<?php endif;?>
