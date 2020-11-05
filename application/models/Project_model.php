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

        parent::__construct();
    }

    function get_all_items($lang){
      $items =  $this->project_model
	                            ->with_translation('where:`translations`.`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->with_slug('where:`model`="'.$this->name.'" and `language`="'.$lang.'"')
	                            ->where(array('active'=>'Y'))
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

		function get_item($id){
			$item = $this->project_model
											->with_translations('where:`translations`.`model`="'.$this->name.'"')
											->with_slugs('where:`model`="'.$this->name.'"')
											->where('id',$id)
											->get();
			$item->images = json_decode($item->images);

			return $item;
		}
}
