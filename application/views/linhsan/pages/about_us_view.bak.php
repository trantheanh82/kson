<?php
  echo $this->load->view($template.'/elements/modules/page_inner_title');
?>
<!-- About page one start here -->
<div class="about-page-one-area">
    <div class="container about-content">
        <?=$item->translation->content->content?>
    </div>
</div>
<!-- About page one End here -->
<?php echo $this->load->view($template.'/elements/modules/home_banner',array('type'=>'2'))?>
<div class="section-about-page">
  <div class="container">
    <div class="row equal-cols">
      <?php //echo $item->translation->content->mission?>
      <div class="col-sm-6 col-xs-12">
        <?php echo img('/assets/upload/img/pages/student-849824_1920.jpg',array('class'=>'img-responsive'))?>
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="section-about-page__content">
          <h2>OUR MISSION</h2>
          <p>Maecenas rhoncus pretium sapien, sed vestibulum est ornare ut. Morbi imperdiet massa sed tortor sollicitudin, eget pulvinar felis imperdiet. Morbi feugiat nisi quis rhoncus congue. Integer ornare nibh ex, tincidunt pulvinar arcu cursus at. Etiam auctor, risus eget tincidunt dictum, nulla magna dictum neque, lobortis ultrices nunc velit sit amet justo. Aenean porta justo in gravida tincidunt.</p>
        </div>
      </div>
    </div>

    <div class="row equal-cols">
      <?php //$item->translation->content->mission?>
      <div class="col-sm-6 col-xs-12">
        <div class="section-about-page__content">
          <h2>OUR FOCUS</h2>
          <p>Maecenas rhoncus pretium sapien, sed vestibulum est ornare ut. Morbi imperdiet massa sed tortor sollicitudin, eget pulvinar felis imperdiet. Morbi feugiat nisi quis rhoncus congue. Integer ornare nibh ex, tincidunt pulvinar arcu cursus at. Etiam auctor, risus eget tincidunt dictum, nulla magna dictum neque, lobortis ultrices nunc velit sit amet justo. Aenean porta justo in gravida tincidunt.</p>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12">
        <?php echo img('/assets/upload/img/pages/startup-593327_1280.jpg',array('class'=>'img-responsive'))?>
      </div>
    </div>
  </div>
</div>

<?php echo $this->load->view($template.'/elements/modules/home_banner',array('type'=>'1'))?>
