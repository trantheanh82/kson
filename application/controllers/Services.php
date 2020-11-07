<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Public_Controller {

	protected $page;
	public function __construct(){

		parent::__construct();

    $this->load->model('service_model');
		$this->load->language('services_lang');

    $this->load->model('page_model');
    $this->load->model('slug_model');


    $page_id = $this->slug_model
    ->fields('model_id')
    ->where(
      "slug='".lang('services')."' and language='".$this->current_lang."' and model='page'",'','',false,false,true)
    ->get();

    $this->page = $this->page_model
                          ->with_translation('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->with_slug('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->where('id',$page_id->model_id)
                          ->get();
		$this->breadcrumbs->push($this->page->translation->content->name,'/'.$this->page->slug->slug);
	}

  function index(){

		$this->data['page_inner_title'] = $this->page->translation->content->name;
    $this->data['page_inner_description'] = $this->page->translation->content->description;
    $this->data['before_head'] .= "<style>.page-title{background-image: url(".base_url().$this->page->image.")}</style>";

    $this->data['items'] = $this->service_model->get_items($this->current_lang);

		$this->render('/services/index_view');
  }

	function detail($slug){
		$this->data['service_categories'] = $this->service_model->get_items($this->current_lang);

		$slug = $this->slug_model->where(array('slug'=>$slug,'model'=>'service'))->get();

		$item = $this->service_model->get_detail($slug->model_id,$this->current_lang);

		$this->data['page_inner_title'] = $item->name;
    $this->data['page_inner_description'] =$item->description;
    $this->data['before_head'] .= "<style>.page-title{background-image: url(".base_url().$item->image.")}</style>";

		$this->data['item'] = $item;
		$this->breadcrumbs->push($item->name,'/'.$item->slug);
		$this->render('/services/detail_view');

	}

}
