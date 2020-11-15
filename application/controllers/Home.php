<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->language('home_lang');

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function selectlanguages(){
			$slug = $this->slug_model->where('slug',array('select-language','chon-ngon-ngu'))->get();
			$item = $this->page_model->get($slug->model_id);

			$this->data['item'] = $item;
			$this->render('/home/selectlanguage_view','blank');
	}

	public function index()
	{

		$this->load->model('slider_model');
		$this->load->model('layout_item_model');

		$this->data['sliders'] = $this->slider_model->get_home_sliders($this->current_lang);

		$layout_items = $this->layout_item_model->get_home_layout(1,$this->current_lang);
		$content = "";
		foreach($layout_items as $k=>$v){
			if(!empty($v->model) && !empty($v->function)){
				$this->load->model($v->model);

				$items = $this->{$v->model}->get_home_items($this->current_lang);
				$variables = array('items'=>$items,'content'=>$v->translation->content);

				if($v->code == 'projects'){
					$this->load->model('category_model');
					$categories =  $this->category_model->get_dropdown('project',$this->current_lang);
					$variables = array_merge(array('categories'=>$categories),$variables);
				}
				$content .= $this->load->view($this->template.'/elements/modules/'.$v->view,$variables,TRUE);

			}else{
				if(!empty($v->view)){
					$content .= $this->load->view($this->template.'/elements/modules/'.$v->view,array('content'=>$v->translation->content),TRUE);
					//pr($v->translation);
				}
			}
		}

		$this->data['content'] = $content;
		$this->render('/home/index_view');

	}

	function not_found(){
		$this->render('/home/not_found_404');
	}

	function language($slug = null){
		$this->load->library('user_agent');

		redirect($this->agent->referrer());
		if($this->agent->is_referral()){

		}
	}

	public function clearcache(){
		$this->output->delete_cache('/');

		$this->load->library('user_agent');
		if(!empty($this->agent->referrer())){
			redirect($this->agent->referrer(), 'location');
		}else{
			redirect('/','location');
		}

	}
}
