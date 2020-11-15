<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends MY_Model
{

		public $table = "projects";
		public $name = "project";
    public function __construct()
    {
    	//$this->has_many['translations'] = array('Page_translation_model','page_id','id');
			$this->has_one['slug'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');
			$this->has_many['slugs'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');

			$this->has_one['translation'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');
			$this->has_many['translations'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');

			$this->has_one['category'] = array('foreign_model'=>'Category_model','foreign_table'=>'categories','foreign_key'=>'id','local_key'=>'category_id');

        parent::__construct();
    }

    function get_all_items($lang,$conditions = ""){

      $items =  $this->project_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
															->with_category(array('fields'=>'id','where'=>array('model'=>'"project"'),'with'=>array('relation'=>'translation','fields'=>'content','where'=>array('model'=>'"category"','language'=>'"'.$lang.'"'))))
	                            ->where($conditions)
	                            ->order_by('sort','ASC')
	                            ->get_all();

			foreach($items as $k=>$v){
				if(!empty($v->images)){
					$jsondecode = json_decode($v->images);
					$items[$k]->images = reset($jsondecode)->name;
				}else{
					$items[$k]->images = "";
				}
			}

		  return $items;
    }

		function get_home_items($lang){
			$items = $items =  $this->project_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
															->with_category(array('fields'=>'id','where'=>array('model'=>'"project"'),'with'=>array('relation'=>'translation','fields'=>'content','where'=>array('model'=>'"category"','language'=>'"'.$lang.'"'))))
	                            ->where(array('active'=>'Y'))
	                            ->order_by('sort','ASC')
															->limit(10)
	                            ->get_all();
			foreach($items as $k=>$v){
				if(!empty($v->images)){
					$jsondecode = json_decode($v->images);
					$items[$k]->images = reset($jsondecode)->name;
				}else{
					$items[$k]->images = "";
				}
			}
		  return $this->__short_items($items);
		}

		function get_item($id){
			$item = $this->project_model
											->with_translations('where:`translations`.`model`="'.$this->name.'"')
											->with_slugs('where:`model`="'.$this->name.'"')
											->where('id',$id)
											->get();
			$item->images = json_decode($item->images);

			return $item;
		}

		function get_item_detail($slug,$lang){

			$slug = $this->slug_model->where(array('slug'=>$slug,'language'=>$lang))->get();

			$item = $this->project_model
											->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
											->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
											->with_category(array('fields'=>'id','where'=>array('model'=>'"project"'),'with'=>array('relation'=>'translation','fields'=>'content','where'=>array('model'=>'"category"','language'=>'"'.$lang.'"'))))
											->where(array('active'=>'Y','id'=>$slug->model_id))
											->get();
			$item = $this->__short_items($item);
			$item->images = json_decode($item->images);

			return $item;
		}

		function __short_items($items){
			if(is_array($items)){
				foreach($items as $k=>$v){
					$items[$k]->name = $v->translation->content->name;
					$items[$k]->description = $v->translation->content->description;
					$items[$k]->content = $v->translation->content->content;
					$items[$k]->slug = $v->slug->slug;
					unset($items[$k]->translation);
				}
			}else{
				$items->name = $items->translation->content->name;
				$items->description = $items->translation->content->description;
				$items->content = $items->translation->content->content;
				$items->slug = $items->slug->slug;
				unset($items->translation);
			}
			return $items;
		}
}
