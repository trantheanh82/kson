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
