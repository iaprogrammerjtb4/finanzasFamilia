<?php 

class Integrante_serv extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('integrante/Integrante_model');
		$this->load->database();
	}

	public function registrar_integrante_serv(){		
		$idintegrante = $this->input->post('idintegrante');
		$idfamilia = $this->input->post('idfamilia');
		$nombre = $this->input->post('nombre');
		$acceso = $this->input->post('acceso');

		$ri = $this->Integrante_model->registrar_integrante($idintegrante, $idfamilia,$nombre, $acceso);
		returnJson($ri[0], $ri[1], $ri[2]);
	}
}

?>