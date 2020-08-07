<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends Public_Controller {

	public function __construct(){

		parent::__construct();

    $this->load->model('service_model');
		$this->load->language('services_lang');

    $this->load->model('page_model');
    $this->load->model('slug_model');


    $page_id = $this->slug_model
    ->fields('model_id')
    ->where(
      "slug='service' and language='".$this->current_lang."' and model='page' or `slug`='dich-vu' and language='".$this->current_lang."' and model='page'  ",'','',false,false,true)
    ->get();

    $this->data['item']= $this->page_model
                          ->with_translation('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->with_slug('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->where('id',$page_id->model_id)
                          ->get();

    $this->data['before_head'] .= "<style>.page-title{background: url(".base_url().$this->data['item']->image.")}</style>";

	}

  function index($slug=""){
    $this->data['items'] = $this->service_model->get_items($this->current_lang);

    if(empty($slug)){

      $this->render('/services/service_view');
    }else{
      foreach($this->data['items'] as $k =>$v){

        if($slug == $v->slug->slug){
          $this->data['service'] = $this->data['items'][$k];
        }
      }

      if(!empty($this->data['service'])){
        $this->data['item_slug'] = $slug;

        /*For meta tag*/
        $this->data['page_title'] .= $this->data['service']->translation->content->name;
        $this->data['meta_description'] .= $this->data['service']->translation->content->description;
        $this->data['meta_image'] .= $this->data['service']->image;
      }else{
        redirect('/home/not_found');
      }
      $this->render('/services/service_detail');

    }

  }
}
