<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model
{
	public $table = "articles";
	public $name = 'article';
    public function __construct()
    {
	    $this->has_many_pivot['categories'] = array(
	    	'foreign_model'=>'Category_model',
	    	'pivot_table'=>'articles_categories',
	    	'local_key'=>'id',
	    	'pivot_local_key'=>'article_id',
	    	'pivot_foreign_key'=>'category_id',
	    	'foreign_key'=>'id');

	    $this->has_one['user'] = array('foreign_model'=>'User_model','foreign_key'=>'id','local_key'=>'created_by');
	    $this->has_many['articles_categories'] = array(
	    	'foreign_model'=>'Article_category_model',
	    	'foreign_table'=>'articles_categories',
	    	'foreign_key'=>'article_id',
	    	'local_key'=>'id');

			$this->has_one['slug'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');
			$this->has_many['slugs'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');

			$this->has_one['translation'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');
			$this->has_many['translations'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');

			parent::__construct();
    }

    function get_articles($id,$current_lang){
			return $this->with_translation("where:`model`='article' and `language`='".$current_lang."'")
											->with_slug("where:`model`='article' and `language`='".$current_lang."'")
											->get($id);
		}

		function get_an_article($slug,$current_lang){
			$model_id = $this->slug_model->where(array('model'=>'article','language'=>$current_lang,'slug'=>$slug))->get();

			$item =  $this->with_translation("where:`model`='article' and `language`='".$current_lang."'")
									->with_slug("where:`model`='article' and `language`='".$current_lang."' and `slug`='".$slug."'")
									->get($model_id->model_id);
								return $item;
		}

		public function get_home_items($language){
			return $this->article_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$language.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$language.'"')
	                            ->where(array('active'=>'Y'))
															->set_cache($language.'_get_home_items')
															->order_by('created_at','DESC')
															->limit(3)
	                            ->get_all();

		}

}
