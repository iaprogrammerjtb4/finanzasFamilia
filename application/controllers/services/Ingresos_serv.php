<?php 

class Ingresos_serv extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('ingresos/Ingresos_model');
		$this->load->database();
	}

	public function crear_fondo_serv(){
		$idfamilia = $this->input->post('idfamilia');
		$ffinalizacion = $this->input->post('ffinalizacion');
		$cantidad = $this->input->post('cantidad');
		$comentario = $this->input->post('comentario');
		$cf = $this->Ingresos_model->crear_fondo($idfamilia, $ffinalizacion, $cantidad, $comentario);
		returnJson($cf[0], $cf[1], $cf[2]);
	}

	public function registrar_ingreso_serv(){
		$idfondo = $this->input->post('idfondo');
		$idintegrante = $this->input->post('idintegrante');		
		$cantidad = $this->input->post('cantidad');
		$comentario = $this->input->post('comentario');

		$ri = $this->Ingresos_model->registrar_ingreso($idfondo, $idintegrante, $cantidad, $comentario);
		returnJson($ri[0], $ri[1], $ri[2]	);
	}	

	public function registrar_cuentas_serv(){
		//'cue_id_sys_gastos', 'cue_id_sys_fondo', 'cue_factura', 'cue_fecha', 'cue_comentario'
		$idgasto = $this->input->post('idgasto');
		$idfondo = $this->input->post('idfondo');
		$factura = $this->input->post('factura');
		$comentario = $this->input->post('comentario');

		$rc = $this->Ingresos_model->registrar_cuentas($idgasto, $idfondo, $factura, $comentario);

		returnJson($rc[0], $rc[1], $rc[2]);
	}
}

?>