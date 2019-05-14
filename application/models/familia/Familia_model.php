<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Familia_model  extends CI_Model{
	
	public function __construct(){
		parent::__construct();				
	}

	public function registrar_familia($idfamilia, $nombre, $pais, $ciudad, $barrio, $bucle){
		$this->form_validation->set_rules('nombre', 'Nombre familia', 'required');
		$this->form_validation->set_rules('pais', 'Pais', 'required');
		$this->form_validation->set_rules('ciudad', 'Ciudad', 'required');
		$this->form_validation->set_rules('barrio', 'Barrio', 'required');
		$this->form_validation->set_rules('bucle', 'Bucle', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }

        $value = false;
        $data = array();
        $this->db->set('fa_fecha_creacion','now()',false);
        $this->db->insert('sys_familia', array(
        	'fa_nombre' => $nombre, 
        	'fa_pais' => $pais, 
        	'fa_ciudad' => $ciudad,
        	'fa_barrio' => $barrio,         	
        	'fa_id_sys_bucle' => $bucle
        ));
        $idrf = $this->db->insert_id();
        if($idrf){
        	$ldf = $this->get_where('sys_familia', array('fa_id' => $idrf))->row_result();
        	if($ldf){
        		$value = true;
        		$data = $ldf;
        		$msg = 'La familia se ha registrado con éxito con estos datos.';
        	}else{
        		$msg = 'Error al registrar los datos, inténtalo de nuevo o contáctanos.';
        	}
        }else{
        	$msg = 'Por favor, inténtelo de nuevo, si el problema persiste, contáctenos.';
        }
        return array($value, $data, $msg);
	}
}
 ?>
