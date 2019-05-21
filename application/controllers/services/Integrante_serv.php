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
		$correo = $this->input->post('correo');
		$acceso = $this->input->post('acceso');

		$ri = $this->Integrante_model->registrar_integrante($idintegrante, $idfamilia,$nombre, $correo, $acceso);
		returnJson($ri[0], $ri[1], $ri[2]);
	}

	public function cambiar_estado_integrante_serv(){		
		$idintegrante = $this->input->post('idintegrante');
		$estado = $this->input->post('estado');

		$cei = $this->Integrante_model->cambiar_estado_integrante($idintegrante, $estado);
		returnJson($cei[0], $cei[1], $cei[2]);
	}

	public function listar_integrante_familia_serv(){
		$idfamilia = $this->input->post('idfamilia');		
		$lif = $this->Integrante_model->listar_integrante_familia($idfamilia);
		returnJson($lif[0], $lif[1], $lif[2]);	
	}

	public function listar_integrante_serv(){
		$idintegrante = $this->input->post('idintegrante');
		$li = $this->Integrante_model->listar_integrante($idintegrante);
		returnJson($li[0], $li[1], $li[2]);	
	}
}

?>