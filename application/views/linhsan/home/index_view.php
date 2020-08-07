<?php
  /*Sliders*/
  if(isset($sliders) && !empty($sliders)){
echo $this->load->view($template.'/elements/modules/home_sliders',
  array('sliders'=>$sliders));
  }
  echo $layout_content;
  ?>
