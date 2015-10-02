<?php
class Clientes extends CI_Controller {
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

	function datos_generales(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/clientes/datos_generales');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
	function comprados(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/clientes/comprados');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
}