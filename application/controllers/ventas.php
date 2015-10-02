<?php
class Ventas extends CI_Controller {
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

	function index(){
		if($this->session->userdata('is_logged_in')){
			if($this->session->userdata('user_nivel')== 1){
				redirect('user/dashboard');
			}
        } else {
        	$this->load->view('admin/login');	
        }
	}
	
	function promedio_mensual(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/ventas/promedio_mensual');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
	function promedio_facturado(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/ventas/promedio_facturado');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
	function productos_facturados(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/ventas/productos_facturados');
			$this->load->view('include/footer');	
			$this->load->view('admin/librerias_stats_table');
		} else {
			$this->load->view('admin/login');	
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('user/index');
	}

}