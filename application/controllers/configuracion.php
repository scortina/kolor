<?php
class Configuracion extends CI_Controller {
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
	
	function usuarios(){
		$crud = new grocery_CRUD();
		$crud->set_table('usuarios');
		$crud->set_theme('datatables');
		$crud->set_language('spanish');
		$crud->set_subject('Usuario');
		
		$crud->field_type('clave','password');
		//-> Display as
		$crud->display_as('id_nivel','Nivel');
		$crud->display_as('id_estatus','Estado');
		$crud->set_field_upload('foto','assets/uploads/users');
		//-> Columnas
		$crud->columns('usuario','nombre','email','id_nivel');
		//-> Relaciones
		$crud->set_relation('id_nivel','usuario_niveles','descripcion');
		$crud->set_relation('id_estatus','usuario_estatus','descripcion');
		//-> Output
		$output = $crud->render();
		$data['titulo']="USUARIOS";
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('admin/main',$data);
		$this->load->view('admin/grocery_crud',$output);
		$this->load->view('include/footer');			
	}
	
	function niveles(){
		$crud = new grocery_CRUD();
		$crud->set_table('usuario_niveles');
		$crud->set_theme('datatables');
		$crud->set_language('spanish');
		$crud->set_subject('Nivel');
		//-> Display As
		$crud->display_as('id_estatus','Estatus');
		//-> Columnas
		$crud->columns('descripcion');
		//-> Relaciones
		$crud->set_relation('id_estatus','disponible_nodisponible','descripcion');
		//-> Output
		$output = $crud->render();
		$data['titulo']="NIVELES";
		$this->load->view('include/head');
		$this->load->view('include/header');
		$this->load->view('include/sidebar');
		$this->load->view('admin/main',$data);
		$this->load->view('admin/grocery_crud',$output);
		$this->load->view('include/footer');			
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('user/index');
	}

}