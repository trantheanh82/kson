<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends Public_Controller {

  private $page;
	public function __construct(){
    $this->load->model('expert_profile_model');
    $this->load->model('page_model');

    parent::__construct();

    $this->page = $this->page_model->get_page('team',$this->current_lang);
    $this->data['before_head'] .= "<style>#page_inner{background-image: url(".base_url().$this->page->image.")}</style>";

    $this->breadcrumbs->push($this->page->translation->content->name,'/teams');
  }

  function index(){
    $items = $this->expert_profile_model->get_items($this->current_lang);

    $this->data['page_inner_title'] =  $this->page->translation->content->name;
    $this->data['page_inner_description'] = $this->page->translation->content->description;

    $this->data['page_title'] = $this->page->translation->content->meta_title;
    $this->data['meta_description'] =  $this->page->translation->content->meta_description;
    $this->data['meta_image'] = $this->page->image;

    $this->data['items'] = $items;

    $this->render('/teams/index_view');
  }

  function details($slug){
    $item = $this->expert_profile_model->get_detail($slug,$this->current_lang);

    $this->data['page_inner_title'] =  $item->name;
    $this->data['page_inner_description'] =  $item->translation->content->description;

    $this->data['page_title'] = 'K.SON\'s Team: '.$item->name;
    $this->data['meta_description'] =  $this->page->translation->content->meta_description;
    $this->data['meta_image'] = $this->page->image;

    $this->data['item']  = $item;
    $this->breadcrumbs->push($item->translation->content->position.' '.$item->name,'/');

    $this->render('/teams/detail_view');
  }

}
