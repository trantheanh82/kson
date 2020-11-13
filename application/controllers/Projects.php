<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends Public_Controller {
  protected $page;
	 public function __construct(){

	   parent::__construct();

		$this->load->model('project_model');
    $this->load->model('page_model');
    $this->load->model('category_model');

    $this->page = $this->page_model->get_page(lang('projects'),$this->current_lang);
    $this->breadcrumbs->push($this->page->translation->content->name,'/'.$this->page->slug->slug);
  }

  function index(){

    $this->data['page_title'] .= $this->data['page_inner_title'] =  $this->page->translation->content->name;
    $this->data['page_inner_description'] = $this->data['page_description'] = $this->page->translation->content->description;
    $this->data['meta_image'] .= $this->page->image;
    $this->data['before_head'] .= "<style>.page-title{background-image: url(".base_url().$this->page->image.")}</style>";

    $this->data['categories'] = $this->category_model->get_dropdown('project',$this->current_lang);

    $projects = $this->project_model->get_all_items($this->current_lang,array('active'=>'Y'));

    $this->data['projects'] = $projects;

    $this->render('/projects/index_view');
  }

  function detail($slug){
    $item = $this->project_model->get_item_detail($slug,$this->current_lang);

    $this->data['page_title'] .= $this->data['page_inner_title'] =  $item->name;
    $this->data['meta_description'] =$this->data['page_inner_description'] = $this->data['meta_description'] = $item->description;
    $this->data['meta_image'] .= PROJECT_IMAGE_FOLDER.reset($item->images)->name;

    $this->breadcrumbs->push($item->name,'/'.$item->slug);

    $this->data['item'] = $item;
    $other_projects = $this->project_model->get_all_items($this->current_lang,array('active'=>'Y','id <>'=>$item->id));

    $this->data['other_projects'] = $other_projects;
    $this->render('/projects/detail_view');
  }

}
