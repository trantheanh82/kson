<section class="select-languages overlay">
  <div class="card-body"  style="">
    <div class='logo text-center' style="margin-bottom:7rem;">
        <?php echo img('/assets/'.$template.'/img/logo_h300.png','',array('class'=>'img-responsive'))?>
    </div>
    <div class='btn-select-languages text-center'>

    <a href='<?=base_url()?>en/home' class='site-button btn-half'>English</a>&nbsp;&nbsp;&nbsp;
    <a href="<?=base_url()?>vi/home" class='site-button btn-half'>Vietnamese</a>

    </div>
    <div class='footer-dark'>
    <div class='site-footer social-links text-center'>
      <ul class="social-icons  sx-social-links">
          <li><a href="mailto:<?=$Settings['company_email']?>" class="fa fa-envelope" target="blank"></a></li>
          <li><a href="<?=$Settings['social_facebook']?>" class="fa fa-facebook" target="blank"></a></li>
          <li><a href="<?=$Settings['social_instagram']?>" class="fa fa-instagram" target="blank"></a></li>
      </ul>
    </div>

    </div>
  </div>
</section>
