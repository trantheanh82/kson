<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Experts extends Admin_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('expert_profile_model');

		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}

		$this->data['before_head'] .= assets('plugins/bootstrap-slider/slider.css');
		$this->data['before_head'] .= assets('bootstrap-slider/slider.css');

		$this->data['before_body'] .= assets('bootstrap-slider/bootstrap-slider.js');

		$this->data['script_for_layout'] .= "<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').slider()
  })
</script>";

		$this->data['page_name'] = 'Experts';
		$this->model = 'expert_profile';
	}

  function index(){

		$this->data['items'] = $this->expert_profile_model->get_items($this->current_lang);
    $this->render('admin/experts/listing_experts');
  }

	function create(){

		$this->render('admin/experts/create_edit_expert');
	}

	function edit($id){
		$item = $this->expert_profile_model->get_item($id,$this->current_lang);


		$this->data['item']  = $item;
		$this->render('admin/experts/create_edit_expert');
	}

	function delete($id){

	}

	function submit(){
		$data = $this->input->post();
		if(!empty($data['social'])){
			$data['social'] = json_encode($data['social']);
		}

		$data['slug'] = parent::__slugify($data['name']);

		foreach($data['relation']['translation'] as $k=>$value){
			if($data['relation']['translation'][$k]['content']['meta_title'] == ""){
				$data['relation']['translation'][$k]['content']['meta_title'] = $value['content']['position'].' '.$data['name'];
			}

			if($data['relation']['translation'][$k]['content']['meta_description'] == ""){
				$data['relation']['translation'][$k]['content']['meta_description'] = strip_tags($value['content']['description']);
			}
		}

		if(!empty($data['id'])){

			if(parent::__submit($data,$this->model)){
				$this->session->set_flashdata('message','expert has been updated.');

			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{

			if($id = parent::__submit($data,$this->model)){

				$this->session->set_flashdata('message','expert has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}



		redirect('admin/experts','refresh');
	}
}
