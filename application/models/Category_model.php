<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model
{
	public $table = "categories";
	public $name = 'category';

	function __construct(){


		$this->has_many_pivot['articles'] = array(
			'foreign_model'=>'article_model',
			'pivot_table'=>	'articles_categories',
			'local_key'=>'id',
			'pivot_local_key'=>'category_id',
			'pivot_foreign_key'=>'article_id',
			'foreign_key'=>'id',
			'get_relate'=>false
		);

		$this->has_many['articles_categories'] = array(
			'foreign_model'=>'Article_category_model',
			'foreign_table'=>'articles_categories',
			'foreign_key'=>'category_id',
			'local_key'=>'id');

		$this->has_one['slug'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');
		$this->has_many['slugs'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');

		$this->has_one['translation'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');
		$this->has_many['translations'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');

		parent::__construct();

	}

	function get_dropdown($model,$current_lang="vn"){
		//$lists = $this->get_all();
		$lists = $this->with_translation('where: `model`=\'category\' AND `language`=\''.$current_lang.'\'')->where(array('model'=>$model,'active'=>'Y'))->get_all();
		$dropdown = array();

		foreach($lists as $k=>$value){
			$dropdown[$value->id] = $value->translation->content->name;
		}

		return $dropdown;

	}

	function get_menu_category(){
		return $this->where(array('model'=>'article','active'=>'Y','on_menu'=>'Y'))->fields(array('name','slug'))->get_all();
	}

	function get_cats_with_articles($category_slug){
		return $this->with_articles('fields:id,title,image,description')->where(array('active'=>'Y','slug'=>$category_slug))->get();
	}

	function get_menu($current_lang,$model){
		$conditions = "where:`model`='".$this->name."' and `language`='".$current_lang."'";

		return $this->with_translation($conditions)
								->with_slug($conditions)
								->where(array('model'=>$model,'on_menu'=>'Y','active'=>'Y'))
								->order_by('sort','ASC')
								->get_all();
	}

	function get_articles($id,$slug,$current_lang){
		return $this->with_translation("where:`model`='category' and `language`='".$current_lang."'")
								->with_slug("where:`model`='category' and `language`='".$current_lang."' and `slug`='".$slug."'")
								->with_articles('order_inside:created_at desc')
								->where(array('id'=>$id,'active'=>'Y'))
								->get();
	}

	function get_category($id,$slug,$current_lang){
		return $this->with_translation("where:`model`='category' and `language`='".$current_lang."'")
								->with_slug("where:`model`='category' and `language`='".$current_lang."' and `slug`='".$slug."'")
								-where(array('id'=>$id,'active'=>'Y'))
								->get();
	}

	function get_all_category_article($current_lang){
		$items =  $this->with_translation("fields:content","where:`model`='category' and `language`='".$current_lang."'")
								->with_slug("where:`model`='category' and `language`='".$current_lang."'")
								->where(array('active'=>'Y','model'=>'article'))
								->order_by('sort','ASC')
								->get_all();
								return $items;
	}

}
