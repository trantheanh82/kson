<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Admin_Controller {


	function __construct(){

		parent::__construct();
		$this->load->model('project_model');

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
		$this->data['items'] = $this->project_model
		->with_translation('where:`model`=\''.$this->model.'\' AND `language`=\''.$this->current_lang.'\'')
		->with_slug('where:`model`=\''.$this->model.'\' AND `language`=\''.$this->current_lang.'\'')
		->as_object()
		->order_by('created_at','ASC')
		->get_all();

		$this->render('admin/projects/project_index_view');
  }

  function create(){
    $this->render('admin/projects/project_create_edit_view');
  }
}
