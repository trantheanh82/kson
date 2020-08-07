<?php
  /*Sliders*/
  if(isset($sliders) && !empty($sliders)){
echo $this->load->view($template.'/elements/modules/home_sliders',
  array('sliders'=>$sliders));
  }
  ?>
<?php echo $this->load->view($template.'/elements/modules/home_business')?>
<?php echo $this->load->view($template.'/elements/modules/home_who_we_are')?>
<?php echo $this->load->view($template.'/elements/modules/home_our_core')?>

<?php echo $this->load->view($template.'/elements/modules/home_banner',array('type'=>'1'))?>
<?php echo $this->load->view($template.'/elements/modules/home_services')?>
<?php echo $this->load->view($template.'/elements/modules/home_banner',array('type'=>'2'))?>
<?php echo $this->load->view($template.'/elements/modules/home_faq')?>
<?php echo $this->load->view($template.'/elements/modules/home_request_callback')?>
<?php echo $this->load->view($template.'/elements/modules/home_latest_news')?>
<?php echo $this->load->view($template.'/elements/modules/home_counter_services')?>
