<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model
{
	public $table = "articles";
	public $name = 'article';
	public $delete_cache_on_save = TRUE;
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
			$this->has_one['article_category'] = array(
				'foreign_model'=>'Article_category_model',
				'foreign_key'=>'article_id',
				'local_key'=>'id'
			);

			$this->has_one['slug'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');
			$this->has_many['slugs'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');

			$this->has_one['translation'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');
			$this->has_many['translations'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');

			parent::__construct();
			$this->set_pagination_delimiters(array('<li>','</li>'));
			$this->set_pagination_delimiters_active(array('<li class="active">','</li>'));
			$this->set_pagination_arrows(array('«','»'));
    }

    function get_articles($id,$current_lang){
			return $this->with_translation("where:`model`='".$this->name."' and `language`='".$current_lang."'")
											->with_slug("where:`model`='".$this->name."' and `language`='".$current_lang."'")
											->get($id);
		}

		function get_all_articles($current_lang,$limit=10,$page=1,$conditions = ""){
			$conds = $conditions;
			$total = $this->count_rows($conds);

			if(is_array($conditions)){
				$conditions = implode("",$conditions);
				$custome_string = FALSE;
			}else{
				$custome_string = TRUE;
			}

			$items = $this->with_translation("where:`model`='".$this->name."' and `language`='".$current_lang."'")
											->with_slug("where:`model`='".$this->name."' and `language`='".$current_lang."'")
											->fields(array('id','created_at','image'))
											->where($conds,NULL,NULL,FALSE,FALSE,$custome_string)
											->order_by('created_at','desc')
											//->set_cache($current_lang.'_'.$limit.'_'.$conditions.'_'.$page)
										  //->get_all();
											->paginate($limit,$total,$page);

			return $this->__short_items($items);
		}

		function get_an_article($slug,$lang){
			$model_id = $this->slug_model->where(array('model'=>'article','language'=>$lang,'slug'=>$slug))->get();

			$item =  $this->with_translation("where:`model`='article' and `language`='".$lang."'")
											->with_slug("where:`model`='article' and `language`='".$lang."' and `slug`='".$slug."'")
											->with_article_category("where:`model`='article'")
											->set_cache('detail_'.$slug.'_'.$lang)
											->get($model_id->model_id);
											
			$item_category = $this->category_model->get_category_v2($item->article_category->category_id,$lang);
			$item->category = $item_category;

			$this->reset_connection();
			$item = $this->__short_items($item);

			$item->next_post = $this
												->with_article_category("where:`model`='article' and `articles_categories`.`category_id` = '".$item_category->id."'")
												->with_slug("where:`model`='article' and `language`='".$lang."' and `slug`<>'".$slug."'")
												->where(array('created_at >'=>$item->created_at))
												->order_by('created_at','asc')
												->set_cache('next_'.$item->created_at.'_'.$slug.'_'.$lang)
												->get();

		  $item->prev_post = $this
													->with_slug("where:`model`='article' and `language`='".$lang."' and `slug`<>'".$slug."'")
													->with_article_category("where:`model`='article' and `articles_categories`.`category_id` = '".$item_category->id."'")
													->where(array('created_at <'=>$item->created_at))
													->order_by('created_at','desc')
													->set_cache('prev_'.$item->created_at.'_'.$slug.'_'.$lang)
													->get();
		 return $item;
		}

		public function get_home_items($lang){
			return $this->article_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->where(array('active'=>'Y'))
															->set_cache($lang.'_get_home_items')
															->order_by('created_at','DESC')
															->limit(3)
	                            ->get_all();

		}

		public function recent_posts($lang,$limit){
			$items =  $this->article_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->where(array('active'=>'Y'))
															//->set_cache($lang.'_get_recent_items')
															->order_by('created_at','DESC')
															->limit($limit)
	                            ->get_all();
	   return $this->__short_items($items);
		}

		function __short_items($items){
			if(is_array($items)){
				foreach($items as $k=>$v){
					$items[$k]->name = $v->translation->content->name;
					$items[$k]->description = $v->translation->content->description;
					$items[$k]->slug = $v->slug->slug;
					unset($items[$k]->translation);
				}
			}else{
				$items->name = $items->translation->content->name;
				$items->description = $items->translation->content->description;
				$items->slug = $items->slug->slug;
				if(isset($items->translation->content->content)){
					$items->content = $items->translation->content->content;
				}
				unset($items->translation);
			}
			return $items;
		}

}
