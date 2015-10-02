<?php
class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->pagina = '';
		$timezone = @date_default_timezone_get();
        if (!isset($timezone) || $timezone == '') {
            $timezone = @ini_get('date.timezone');
        }
        if (!isset($timezone) || $timezone == '') {
            $timezone = 'UTC';
        }
        date_default_timezone_set($timezone); 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}
	
	function index(){
		if($this->session->userdata('is_logged_in')){
			if($this->session->userdata('user_nivel')== 1 || $this->session->userdata('user_nivel')== 2 || $this->session->userdata('user_nivel')== 3){
				redirect('admin/dashboard');
			} else if ($this->session->userdata('user_nivel')== 4){
				redirect('admin/cxc');
			} else if ($this->session->userdata('user_nivel')== 5){
				redirect('gastos/gastos');
			} else if ($this->session->userdata('user_nivel')== 6){
				redirect('admin/diferencias');
			}
        } else {
        	$this->load->view('admin/login');	
        }
	}

	function procesar_fechas($fecha_inicial,$fecha_final){
		$sSQL_where="";
		$fecha_actual = date("Y-m-d");
		$restar=0;
		$hour = date("H");
		if($fecha_actual==$fecha_inicial){
			if ($hour >= 0 && $hour < 8) {
				$restar=1;
			}
		}
				
		if($fecha_inicial!=""){
			$sSQL_where.=" AND ventas.fecha >= DATE_SUB(STR_TO_DATE('".trim($fecha_inicial)." 08:00:00','%Y-%m-%d %H:%i:%S'), INTERVAL ".$restar." DAY) ";
		}
		if($fecha_final!=""){
			$sSQL_where.=" AND ventas.fecha <=  DATE_ADD(DATE_SUB(STR_TO_DATE('".trim($fecha_final)." 23:59:59','%Y-%m-%d %H:%i:%S'), INTERVAL ".$restar." DAY), INTERVAL 8 HOUR ) ";
		}
		//Guardar en sesion
		$data = array(
			'fecha_inicial' => $fecha_inicial,
			'fecha_final' => $fecha_final
		);
		$this->session->set_userdata($data);
		return $sSQL_where;
	}
	
	function plu_primera_tabla($row_p){
		$sSQL_Where=$this->procesar_fechas($this->session->userdata('fecha_inicial'),$this->session->userdata('fecha_final'));
		$sSQL="";
		$sSQL.=" SELECT productos.descripcion AS PLU, SUM( ventas.monto ) AS MONTO ";
		$sSQL.=" FROM  ventas_productos ventas, productos ";
		$sSQL.=" WHERE productos.id=LEFT(ventas.producto , 2 ) AND (ventas.producto LIKE  '1%'";
		$sSQL.=" OR ventas.producto LIKE  '2%'";
		$sSQL.=" OR ventas.producto LIKE  '3%')";
		$sSQL.=" AND ventas.origen='".$row_p->origen."' ".$sSQL_Where;
		$sSQL.=" GROUP BY LEFT(ventas.producto , 2 ) ";
		$devolucion="";
		$contenido='		
		<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Monto</th>				
			</tr>
		</thead>
		<tbody>
		';
		$query = $this->db->query($sSQL);
		$total_gran=0;
		foreach ($query->result() as $row){
			$contenido.='						
			<tr>
				<td>'.$row->PLU.'</td>
				<td style="text-align: right;">$'.number_format($row->MONTO,2).'</td>
			</tr>
			';
			$total_gran+=$row->MONTO;
		}
			$contenido.='						
			<tr>
				<td style="text-align: right;font-weight: bold;">TOTAL</td>
				<td style="text-align: right;font-weight: bold;">$'.number_format($total_gran,2).'</td>
			</tr>
			';
		$contenido.='
			</tbody>
		</table>
		';
		return $contenido;
	}
}