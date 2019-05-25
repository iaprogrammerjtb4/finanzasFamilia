<?php 

class Familia_serv extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('familia/Familia_model');
		$this->load->database();
	}

	public function registrar_familia_serv(){
		//$this->Familia_model->registrar_familia();
		$idfamilia = $this->input->post('idfamilia');
		$nombre = $this->input->post('nombre');
		$pais = $this->input->post('pais');
		$ciudad = $this->input->post('ciudad');
		$barrio = $this->input->post('barrio');
		$bucle = $this->input->post('bucle');

		$rf = $this->Familia_model->registrar_familia($idfamilia,$nombre, $pais, $ciudad, $barrio, $bucle);
		returnJson($rf[0], $rf[1], $rf[2]);
	}

	public function cambiar_estado_familia_serv(){
		$idfamilia = $this->input->post('idfamilia');
		$estado = $this->input->post('estado');

		$cef = $this->Familia_model->cambiar_estado_familia_serv($idfamilia,$estado);
		returnJson($cef[0], $cef[1], $cef[2]);
	}

	public function listar_familias_serv(){
		$lf = $this->Familia_model->listar_familias();
		returnJson($lf[0], $lf[1], $lf[2]);
	}
	
	public function actualizar_bucle_familia_serv(){
		$idfamilia = $this->input->post('idfamilia');
		$idbucle = $this->input->post('idbucle');
		$abf = $this->Familia_model->actualizar_bucle_familia($idfamilia, $idbucle);
		returnJson($abf[0], $abf[1], $abf[2]);
	}

	public function registrar_razones_serv(){		
		$nombre = $this->input->post('nombre');
		$descripcion = $this->input->post('descripcion');
		$rr = $this->Familia_model->registrar_razones($nombre, $descripcion);
		returnJson($rr[0], $rr[1], $rr[2]);
	}

	public function registrar_gastos_familia_serv(){
		$idfamilia = $this->input->post('idfamilia');
		$idrazon = $this->input->post('idrazon');
		$comentario = $this->input->post('comentario');
		$cantidad = $this->input->post('cantidad');
		$constante = $this->input->post('constante');
		$idbucle = $this->input->post('idbucle');
		$rgf = $this->Familia_model->registrar_gastos_familia($idfamilia, $idrazon, $comentario, $cantidad, 	$constante, $idbucle);
		returnJson($rgf[0], $rgf[1], $rgf[2]);
	}

}

?>