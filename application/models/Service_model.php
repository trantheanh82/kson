<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends MY_Model
{

		public $table = "services";
		public $name = "service";
    public function __construct()
    {
    	//$this->has_many['translations'] = array('Page_translation_model','page_id','id');
			$this->has_one['slug'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');
			$this->has_many['slugs'] = array('foreign_model'=>'Slug_model','foreign_table'=>'slugs','foreign_key'=>'model_id','local_key'=>'id');

			$this->has_one['translation'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');
			$this->has_many['translations'] = array('foreign_model'=>'Translation_model','foreign_table'=>'translations','local_key'=>'id','foreign_key'=>'model_id');

        parent::__construct();
    }

    public function get_services(){
	    return $this->where(array('active'=>'Y'))->fields(array('name','slug','image','description'))->order_by('sort','asc')->get_all();
    }


		public function get_menu($current_lang){
			$conditions = "where:`model`='".$this->name."' and `language`='".$current_lang."'";

			return $this->with_translation($conditions)
									->with_slug($conditions)
									->where(array('on_menu'=>'Y','active'=>'Y'))
									->order_by('sort','ASC')
									->get_all();
		}

		public function get_items($language){
			$items = $this->service_model
	                            ->with_translation('where:`translations`.`model`="service" and `language`="'.$language.'"')
	                            ->with_slug('where:`model`="service" and `language`="'.$language.'"')
	                            ->where(array('active'=>'Y'))
	                            ->order_by('sort','ASC')
	                            ->get_all();
			return $this->__short_items($items);
		}

		public function get_detail($id,$lang){
			$conditions = 'where:`model`="'.$this->name.'" and `language`="'.$lang.'"';
			$item = $this
										->with_translation($conditions)
										->with_slug($conditions)
										->where(array('id'=>$id,'active'=>'Y'))
										->get();
			return $this->__short_items($item);

		}

		public function get_home_items($language){
			return $this->service_model
	                            ->with_translation('where:`translations`.`model`="service" and `language`="'.$language.'"')
	                            ->with_slug('where:`model`="service" and `language`="'.$language.'"')
	                            ->where(array('active'=>'Y'))
															->set_cache($language.'_get_home_items')
															->order_by('sort','ASC')
	                            ->get_all();
		}

		function __short_items($items){
			if(is_array($items)){
				foreach($items as $k=>$v){
					$items[$k]->name = $v->translation->content->name;
					$items[$k]->description = $v->translation->content->description;
					$items[$k]->content = $v->translation->content->content;
					$items[$k]->slug = $v->slug->slug;
					if(isset($v->translation->content->title)){
						$items[$k]->title = $v->translation->content->title;
					}
					unset($items[$k]->translation);
				}
			}else{
				$items->name = $items->translation->content->name;
				if(isset($items->translation->content->title)){
					$items->title = $items->translation->content->title;
				}
				$items->description = $items->translation->content->description;
				$items->content = $items->translation->content->content;
				$items->slug = $items->slug->slug;
				unset($items->translation);
			}
			return $items;
		}
}
