<?php 

class Familia_serv extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('familia/Familia_model');
	}

	public function registrar_familia_serv(){
		$this->Familia_model->registrar_familia();
	}
}
?>