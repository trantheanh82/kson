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
									->set_cache($current_lang)
									->get_all();
		}

		public function get_items($language){
			return $this->service_model
	                            ->with_translation('where:`translations`.`model`="service" and `language`="'.$language.'"')
	                            ->with_slug('where:`model`="service" and `language`="'.$language.'"')
	                            ->where(array('active'=>'Y'))
	                            ->order_by('sort','ASC')
	                            ->get_all();
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
}
