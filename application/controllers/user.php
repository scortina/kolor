<?php
class User extends CI_Controller {
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
	
	function dashboard(){
            
            if($this->session->userdata('is_logged_in')){
                
                $this->load->view('include/head');
                $this->load->view('include/header');
                $this->load->view('include/sidebar');
                $this->load->model('datos_model');
                /////////////////////////////////
                $asd = $this->datos_model->get_val_ventas();
		foreach ($asd->result() as $row){
                    $data=array("ventas"=>$row->ventas,
                        "cotiza"=>(count($asd->result())),
                        "pedido"=>($row->cont)
                        ); 
                }
                $this->load->view('admin/dashboard',$data);
                $this->load->view('include/footer');	
                $this->load->view('admin/librerias');
                
                $querys = $this->datos_model->get_estadisticas();
                $query_mes = $this->datos_model->get_estads_mes();
                $datos_est = array("estadisticas"=>$querys,
                    "estads_mes"=>$query_mes);                
                $this->load->view('admin/ejemplo',$datos_est);

            } else {
                    $this->load->view('admin/login');	
            }
	}
	
	function login(){
		$data= array('usuario' => $this->input->post('usuario'),'clave' => $this->input->post('password'));
		$query= $this->db->get_where('usuarios',$data);
		if($query->num_rows() > 0){
			$data = array(
				'user_nombre' 	=> $query->row()->nombre,
				'user_id'		=> $query->row()->row_id,
				'user_nivel'	=> $query->row()->id_nivel,
				'user_img' 	=> $query->row()->foto,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('user/dashboard');
		} else {
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}
	
	function perfil(){
		$crud = new grocery_CRUD();
		$crud->where('row_id',$this->session->userdata('user_id'));
		$crud->set_table('usuarios');
		$crud->set_theme('datatables');
		$crud->set_language('spanish');
		$crud->set_subject('Usuario');
		$state = $crud->getState();
		if($state == 'list' || $state == 'success'){
			redirect('user/dashboard');
		} else {
			$crud->unset_add();
			$crud->unset_delete();
			$crud->field_type('usuario','readonly');
			$crud->field_type('clave','password');
			$crud->field_type('id_nivel','hidden');
			$crud->field_type('row_id', 'hidden');
			$crud->field_type('id_estatus', 'hidden');
			$crud->set_field_upload('foto','assets/uploads/users/');
			$output = $crud->render();
			$data['titulo']="Configuración de Usuario";
			$this->load->view('include/head');
			$this->load->view('include/header');
			$this->load->view('include/sidebar');
			$this->load->view('admin/main',$data);
			$this->load->view('admin/grocery_crud',$output);
			$this->load->view('include/footer');		
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('user/index');
	}

}