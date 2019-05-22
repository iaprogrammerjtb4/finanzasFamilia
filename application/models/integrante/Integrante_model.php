<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Integrante_model  extends CI_Model{
	
	public function __construct(){
		parent::__construct();				
	}
	public function registrar_integrante($idintegrante = null, $idfamilia,$nombre, $correo, $acceso){	
		$value = false;
	    $data = array();
		if($idintegrante){
			$this->db->where('inte_id', $idfamilia);			
			$updatei= $this->db->update('sys_integrantes', array(
	        	'inte_id_sys_familia' => $idfamilia, 
	        	'inte_nombre' => $nombre,
	        	'inte_correo' => $correo,
	        	'inte_acceso' => $acceso 	        	
	        ));
	        if($updatei){
	        	$data = $updatei;
	        	$value = true;
	        	$msg = 'Se actulizaron los datos';
	        }else{
	        	$msg = 'No se actulizaron los datos';
	        }

		}else{
			$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
			$this->form_validation->set_rules('nombre', 'Nombre familia', 'required');
			$this->form_validation->set_rules('acceso', 'acceso', 'required');
	        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
			$r = $this->form_validation->run();
	        if (!$r) {
	            return array(false, array(), validation_errors());
	        }
	        $this->db->set('inte_fecha_ingreso', 'now()', false);
	        $this->db->insert('sys_integrantes', array(
	        	'inte_id_sys_familia' => $idfamilia, 
	        	'inte_nombre' => $nombre,
	        	'inte_correo' => $correo,
	        	'inte_acceso' => $acceso 	        	
	        ));
	        $idin = $this->db->insert_id();
	        if($idin){
	        	$ldf = $this->db->get_where('sys_integrantes', array('inte_id' => $idin))->result_array();
	        	if($ldf){
	        		$value = true;
	        		$data = $ldf;
	        		$msg = 'Se ha registrado con éxito a una sesión';
	        	}else{
	        		$msg = 'No se ha registrado';
	        	}
	        }else{
	        	$msg = 'Por favor, inténtelo de nuevo, si el problema persiste, contáctenos.';
	        }
		}
		return array($value, $data, $msg);
	}

	public function cambiar_estado_integrante($idintegrante, $estado){
		$this->form_validation->set_rules('idintegrante', 'idintegrante', 'required');
		$this->form_validation->set_rules('estado', 'estado', 'required');
	    $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
	    if (!$r) {
	    	return array(false, array(), validation_errors());
	    }
	    $value = false;
	    $data = array();
	    switch ($estado) {
	    	case 1:
	    		$msg = 'Se puesto en estado activo';		
	    	break;
	    	
	    	case 2:
	    		$msg = 'Se puesto en estado inactivo';		
	    	break;
	    	default:
	    		$msg = 'error en la consulta';
	    	break;
	    }
	    	
	    $cei = $this->db->update('sys_integrantes', array('inte_estado' => $estado));
	    if($cei){
	    	$value = true;
	    }else{
	    	$msg = 'Error al actualizar';
	    }
	    return array($value, $data, $msg);
	}

	public function listar_integrante_familia($idfamilia){
		$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
	    $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
	    if (!$r) {
	    	return array(false, array(), validation_errors());
	    }
	    $value = false;
	    $data = array();
	    $lif = $this->db->get_where('sys_integrantes', array('inte_id_sys_familia'=> $idfamilia))->result_array();
	    if($lif){
	    	$value = true;
	    	$data = $lif;
	    	$msg = 'Listado de integrantes';
	    }else{
	    	$msg = 'NO se encontraron integrantes';
	    }
		return array($value, $data, $msg);
	}

	public function listar_integrante($idintegrante){
		$this->form_validation->set_rules('idintegrante', 'idintegrante', 'required');
	    $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
	    if (!$r) {
	    	return array(false, array(), validation_errors());
	    }
	    $value = false;
	    $data = array();
	    $li = $this->db->get_where('sys_integrantes', array('inte_id'=>$idintegrante))->result_array();
	    if($li){
	    	$value = true;
	    	$data = $li;
	    }else{
	    	$msg = 'No se encontraron datos';
	    }
	 	return array($value, $data, $msg);   
	}
}
 ?>
