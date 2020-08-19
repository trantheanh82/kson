<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends Public_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->language('articles_lang');

		$this->load->model('page_model');
		$this->load->model('category_model');
    $this->load->model('article_model');
    $this->load->model('slug_model');

		$page_id = $this->slug_model
    ->fields('model_id')
    ->where(
      "slug='article' and language='".$this->current_lang."' and model='page' or `slug`='tin-tuc' and language='".$this->current_lang."' and model='page'  ",'','',false,false,true)
  	->get();

		$this->data['item']= $this->page_model
                          ->with_translation('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->with_slug('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->where('id',$page_id->model_id)
                          ->get();
    $this->data['before_head'] .= "<style>.page-title{background: url(".base_url().$this->data['item']->image.")}</style>";

		$this->data['categories'] = $this->category_model->get_all_category_article($this->current_lang);

	}

  function index($slug=""){
		if(!empty($slug)){
			$this->data['slug'] = $this->slug_model->where(array('model'=>'category','slug'=>$slug,'language'=>$this->current_lang))->get();
			$this->data['item'] = $this->category_model->get_articles($this->data['slug']->model_id,$slug,$this->current_lang);

      if(!empty($this->data['item']->articles)){
        $this->data['items'] = array();
          foreach($this->data['item']->articles as $k=>$v){
            $this->data['items'][$k] = $this->article_model->get_articles($v->id,$this->current_lang);
          }
      }else{
				$this->data['page_title'] .= $this->data['item']->translation->content->name;
				$this->data['meta_description'] .= $this->data['item']->translation->content->name;
				$this->data['meta_image'] .= $this->data['item']->image;
      }
    }
		
		$this->render('/articles/listing_articles');

  }

  function detail($category,$slug){
		$this->data['item'] = $this->article_model->get_an_article($slug,$this->current_lang);
		$this->render('/articles/detail_articles');
  }

}
