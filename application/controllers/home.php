<?php

class Home extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('web/param');
		$this->load->library('sql');
		$this->load->model('db/query_model');
		$this->load->library('db/field_1');
		$this->load->library('db/table_1');
	}
	
	/*
	 * 登入畫面
	 */
	public function ma() 
	{
		$data = $this->param->resources(array('base_css'=>Param::$base_css, 'js_path'=>Param::$js_path, 'jquery_js'=>Param::$jquery_js, 'function_js'=>Param::$function_js, 'index_url'=>Param::$index_url));
		$data['now_use'] = 'home/home_report.js';
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('web/home/home', $data);
		
	}
}//end