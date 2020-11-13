<?php

class Public_Controller extends MY_Controller{

	protected $template = 'kson';

	function __construct(){

		parent:: __construct();
		$this->load->library('breadcrumbs');
		$this->data['lang'] = $this->lang->load('global',strtolower($this->data['current_lang']['name']));

		parent::load_languages(false);

		$this->data['Settings'] = $this->__getGlobalSettings();

		$this->template = 'kson';
		$this->data['template'] = $this->template;

		$this->data['langs'] = $this->__getLanguages();
		$this->data['css_for_elements'] .= "";
		$this->data['before_head'] .= parent::insert_assets(array(
			'bootstrap.min.css',
			'fontawesome/css/font-awesome.min.css',
			'owl.carousel.min.css',
			'magnific-popup.min.css',
			'loader.min.css',
			'flaticon.min.css',
			'style.css',
			'skin/skin-9.css',
			'switcher.css',
			'/plugins/revolution/revolution/css/settings.css',
			'/plugins/revolution/revolution/css/navigation.css',
			'responsive.css'
		),$this->template,'css',false);

		$this->data['before_head'] .= parent::insert_assets(array(
			'jquery-1.12.4.min.js'),$this->template,'js',false);

		/*Footer Javascripts*/
		$this->data['before_body'] .= parent::insert_assets(array(
			'popper.min.js',
			'bootstrap.min.js',
			'magnific-popup.min.js',
			'waypoints.min.js',
			'counterup.min.js',
			'waypoints-sticky.min.js',
			'isotope.pkgd.min.js',
			'owl.carousel.min.js',
			'jquery.owl-filter.js',
			'stellar.min.js',
			'custom.js',
			'jquery.bgscroll.js',
			'theia-sticky-sidebar.js',
			'switcher.js',
			'/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js',
			'/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js',
			'/plugins/revolution/revolution/js/extensions/revolution-plugin.js',
			'rev-script-1.js'
		),$this->template,'js',false);

		if(!empty($this->data['Settings']['header_javascript'])){
			$this->data['before_head'] .= $this->data['Settings']['header_javascript'];
		}

		if(!empty($this->data['Settings']['footer_javascript'])){
			$this->data['before_body'] .= $this->data['Settings']['footer_javascript'];
		}
		$this->data['main_menu'] = $this->__getPublicMenu();
		$this->data['footer_links'] = $this->__getFooterLinks();
		$this->data['newest_posts'] = $this->article_model->get_home_items($this->current_lang);

		$this->data['page_title'] = $this->data['Settings']['company_name']." ";
		$this->data['meta_description'] = $this->data['Settings']['description'];
		$this->data['meta_image'] = "";

		$this->breadcrumbs->push(lang("Home"),'/home');

	}

	/**
	* Get Global Menu
	*
	**/
	function __getPublicMenu(){
			$this->load->model('public_menu_model');

			//$this->db->cache_on();
			$public_menu = $this->public_menu_model->getTreeMenu($this->current_lang);
			foreach($public_menu as $k => $v){
				if(!empty($v->user_function)){
					$model = $v->class_name.'_model';
					$this->load->model($model);

					$items = $this->{$model}->get_menu($this->current_lang,'article');
					$public_menu[$k]->children = $items;

				}
			}

		return $public_menu;
	}

	/**
	*
	*
	*
	**/
	function matedata($item){

	}

	function __getFooterLinks(){
		$this->load->model('link_model');

		$links = $this->link_model
		->with_translation("fields:content","where:`model`='link' and language='".$this->current_lang."'")
		->where(array('active'=>'Y'))
		->order_by('sort','asc')
		->set_cache($this->current_lang.'_footer_menu',8400)
		->get_all();

		return $links;
	}

	function __getLanguages(){

		if(! $langs = $this->cache->get('languages')){
			$this->load->model('language_model');

			$langs = $this->language_model->get_all(array('active'=>1));

			$this->cache->save('languages',$langs);
		}

		return $langs;
	}

	protected function render($the_view = null, $template = "master" ){
		parent::render($this->template.$the_view, $template);
	}

}
