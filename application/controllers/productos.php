<?php
class Productos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->pagina = '';
		$timezone = @date_default_timezone_get();
       if (!isset($timezone) || $timezone == '') { $timezone = @ini_get('date.timezone'); }
       if (!isset($timezone) || $timezone == '') { $timezone = 'UTC'; }
       date_default_timezone_set($timezone); 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->model('datos_model');
	}

	function comprados(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/productos/comprados');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
	function no_comprados(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/productos/no_comprados');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
}