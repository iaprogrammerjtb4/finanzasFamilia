<?php 

class Familia_serv extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('familia/Familia_model');
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
}
?>