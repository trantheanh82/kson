
<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*Configure*/

	//$controller  = $this->router->fetch_class();
	//$action = $this->router->fetch_method();
/**/

//echo _('account_creation_successful',$this);

$this->load->view('templates/_parts/master_header_view'); ?>

<!-- CONTENT START -->
<div class='page-content'>
    <?php echo $the_view_content; ?>
</div>
<!-- CONTENT END -->
<?php $this->load->view('templates/_parts/master_footer_view');?>
