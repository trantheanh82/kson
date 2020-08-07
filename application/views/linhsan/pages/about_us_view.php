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
<?php //echo $this->load->view($template.'/elements/modules/home_banner',array('type'=>'2'))?>
<div class="section-about-page">
  <div class="container">
    <div class="row equal-cols">
      <?php echo $item->translation->content->mission?>

  </div>
</div>
</div>

<?php echo $this->load->view($template.'/elements/modules/home_our_experts',array('items'=>$experts))?>
<?php echo $this->load->view($template.'/elements/modules/home_our_clients',array('items'=>$clients))?>
