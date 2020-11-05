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
      "slug='blogs' and language='".$this->current_lang."' and model='page' or `slug`='blog-kien-truc' and language='".$this->current_lang."' and model='page'  ",'','',false,false,true)
  	->get();

		$page = $this->page_model
                          ->with_translation('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->with_slug('where:`model`="page" and `language`="'.$this->current_lang.'"')
                          ->where('id',$page_id->model_id)
                          ->get();

    $this->data['before_head'] .= "<style>#page_inner_bg{background: url(".base_url().$page->image.")}</style>";

		$this->data['categories'] = $this->category_model->get_all_category_article($this->current_lang);

		$this->breadcrumbs->push($page->translation->content->name,'/'.$page->slug->slug);
		$this->data['item'] = $page;


		$this->data['page_inner_title'] = $page->translation->content->name;
		$this->data['page_inner_description'] = $page->translation->content->description;

		$this->data['recent_posts'] = $this->article_model->recent_posts($this->current_lang,3);
		$this->data['categories'] = $this->category_model->get_categories($this->current_lang,'article',array('active'=>'Y'));

	}

  function index($page=1,$slug=""){
		if(!empty($slug)){
			$this->data['slug'] = $this->slug_model->where(array('model'=>'category','slug'=>$slug,'language'=>$this->current_lang))->get();
			$page = $this->category_model->get_articles($this->data['slug']->model_id,$slug,$this->current_lang);

      if(!empty($page->articles)){
        $this->data['items'] = array();
          foreach($page->articles as $k=>$v){
            $page[$k] = $this->article_model->get_articles($v->id,$this->current_lang);
          }

      }else{
				$this->data['page_title'] .= $page->translation->content->name;
				$this->data['meta_description'] .= $page->translation->content->description;
				$this->data['meta_image'] .= $page->image;
      }

			$this->data['item'] = $page;
    }else{
			$items = $this->article_model->get_all_articles($this->current_lang,10,$page,array('active'=>'Y'));
			$this->data['items'] = $items;

		}

		$this->render('/articles/articles_index');

  }

	function category($slug,$page=1){
		$cat_slug = $this->slug_model->where(array('slug'=>$slug))->get();

		$item = $this->category_model->get_articles($cat_slug->model_id,$slug,$this->current_lang);
		if(!empty($item->articles)){
			$conditions = "`id` IN (0";
			foreach($item->articles as $k=>$v){
				$conditions .= ",".$v->id;
			}

			$conditions .= ")";
		}

		$items = $this->article_model->get_all_articles($this->current_lang,10,$page,$conditions);

		$this->data['page_title'] .= $item->name;
		$this->data['meta_description'] .= $item->description;
		$this->data['meta_image'] .= $item->image;
		$this->data['before_head'] .= "<style>#page_inner_bg{background: url(".base_url().$item->image.")}</style>";

		$this->data['items'] = $items;

		$this->breadcrumbs->push($item->name,'/'.$item->slug);
		$this->render('/articles/articles_index');
	}

  function detail($slug){
		$item = $this->article_model->get_an_article($slug,$this->current_lang);

		$this->data['page_title'] .= $item->name;
		$this->data['meta_description'] .= $item->description;
		$this->data['meta_image'] .= $item->image;
		$this->data['before_head'] .= "<style>#page_inner_bg{background: url(".base_url().$item->image.")}</style>";

		$this->breadcrumbs->push($item->category->translation->content->name,'/'.lang('category').'-'.$item->category->slug->slug);
		$this->breadcrumbs->push($item->name,'/'.$item->slug);

		$this->data['page_inner_title'] = $item->name;
		$this->data['page_inner_description'] = getSnippet(strip_tags($item->description),30);

		$this->data['item'] = $item;
		$this->render('/articles/article_detail');
  }

}
