<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Admin_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('project_model');
		$this->load->model('category_model');

		if(!$this->ion_auth->in_group('admin'))
		{
			$this->session->set_flashdata('message','You are not allowed to visit the Groups page');
			redirect('admin','refresh');
		}


		$this->data['page_name'] = 'Projects';
		$this->model = 'project';

		$this->data['before_head'] .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">';
		$this->data['before_head'] .= assets($this->template.'/css/flaticon.min.css',false);
		$this->data['before_body'] .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>';
		$this->data['before_body'] .= '<script>$.fn.selectpicker.Constructor.DEFAULTS.iconBase="fa";</script>';

		/*Script for upload*/
		$this->data['before_body'] .= parent::__loadScriptUpload();

	}

  function index(){
    $this->data['page_name'] = lang('Projects listing');
		$this->data['items'] = $this->project_model->get_all_items($this->current_lang);

		$this->render('admin/projects/project_index_view');
  }

  function create(){
		$this->data['categories'] = $this->category_model->get_dropdown('project',$this->current_lang);

    $this->render('admin/projects/project_create_edit_view');
  }

	function edit($id){
		if(!empty($id)){
			$this->data['categories'] = $this->category_model->get_dropdown('project',$this->current_lang);
			$this->data['item'] = $this->project_model->get_item($id);

			foreach($this->data['item']->translations as $k=>$value){
				$this->data['item']->content[$value->language] = $value->content;
				$this->data['item']->content[$value->language]->id = $value->id;
			}

			foreach($this->data['item']->slugs as $k=>$value){
				$this->data['item']->slug[$value->language] = new \stdClass();
				$this->data['item']->slug[$value->language]->slug = $value->slug;
				$this->data['item']->slug[$value->language]->id = $value->id;
			}

			unset($this->data['item']->translations);
			unset($this->data['item']->slugs);

			$this->render('admin/projects/project_create_edit_view');
		}
	}

	function delete($id){
		if(parent::__delete($id,'project',true,true)){
			$this->session->set_flashdata('message','project has been deleted.');
		}else{
			$this->session->set_flashdata('error','Error occures, please try again');
			redirect($this->agent->referrer(),'refresh');
		}
		redirect('admin/projects','refresh');
	}

	function submit(){
		$data = $this->input->post();
		if(!empty($data['images'])){
			foreach($data['images'] as $k=>$v){
				if($k == $data['profile_image']){
					$data['images'][$k]['default'] = 1;
				}else{
					$data['images'][$k]['default'] = 0;
				}
			}

			usort($data['images'],function($i1,$i2){
				return $i1['default'] < $i2['default'];
			});

			$data['images'] = json_encode($data['images']);
			unset($data['files']);

		}

		foreach($data['relation']['translation'] as $k=>$value){
			if($data['relation']['translation'][$k]['content']['meta_title'] == ""){
				$data['relation']['translation'][$k]['content']['meta_title'] = $value['content']['name'];
			}

			if($data['relation']['translation'][$k]['content']['meta_description'] == ""){
				$data['relation']['translation'][$k]['content']['meta_description'] = strip_tags($value['content']['description']);
			}
		}

		if(!empty($data['id'])){
			if(parent::__submit($data,$this->model)){
				$this->session->set_flashdata('message','services has been updated.');

			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');
			}
		}else{

			if($id = parent::__submit($data,$this->model)){

				$this->session->set_flashdata('message','services has been updated.');
			}else{
				$this->session->set_flashdata('error','Error occures, please try again');
				redirect($this->agent->referrer(),'refresh');

			}
		}

		redirect('admin/projects','refresh');
	}

}
