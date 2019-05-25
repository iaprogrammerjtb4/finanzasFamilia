<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Familia_model  extends CI_Model{
	
	public function __construct(){
		parent::__construct();				
	}

	public function registrar_familia($idfamilia = null, $nombre, $pais, $ciudad, $barrio, $bucle){
		$value = false;
	    $data = array();	    
		if($idfamilia){
			$this->db->where('fa_id', $idfamilia);
			$updatef= $this->db->update('sys_familia', array(
	        	'fa_nombre' => $nombre, 
	        	'fa_pais' => $pais, 
	        	'fa_ciudad' => $ciudad,
	        	'fa_barrio' => $barrio,         	
	        ));
	        if($updatef){
	        	$data = $updatef;
	        	$value = true;
	        	$msg = 'Se actulizaron los datos';
	        }else{
	        	$msg = 'No se actulizaron los datos';
	        }
		}else{
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
	        $this->db->set('fa_fecha_creacion', 'NOW()', FALSE);
	        $this->db->insert('sys_familia', array(
	        	'fa_nombre' => $nombre, 
	        	'fa_pais' => $pais, 
	        	'fa_ciudad' => $ciudad,
	        	'fa_barrio' => $barrio,         	
	        	'fa_id_sys_bucle' => $bucle
	        ));
	        $idrf = $this->db->insert_id();
	        if($idrf){
	        	$ldf = $this->db->get_where('sys_familia', array('fa_id' => $idrf))->result_array();
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
		}
		
        return array($value, $data, $msg);
	}

	public function cambiar_estado_familia_serv($idfamilia,$estado){
		$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
		$this->form_validation->set_rules('estado', 'estado', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $this->db->where('fa_id', $idfamilia);
        $cef = $this->db->update('sys_familia', array(
        	'fa_estado'=>$estado
        ));
        if($cef){
        	$value = true;
        	$msg = 'Estado cambiado';        	
        }else{
        	$msg= 'Error al intentar cambiar el estado';
        }
        return array($value, $data, $msg);
	}

	public function listar_familias(){
		$lf = $this->db->get('sys_familia')->result_array();
		if($lf){
			$value = true;
			$data = $lf;
			$msg = 'Listado de las familias registradas';
		}else
		{
			$value = true;
			$data = $lf;
			$msg = 'Parece que no hay registros';			
		}
		return array($value, $data, $msg);
	}	

	public function actualizar_bucle_familia($idfamilia, $idbucle){
		$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
		$this->form_validation->set_rules('idbucle', 'idbucle', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $this->db->where('fa_id', $idfamilia);
        $updatefb = $this->db->update('sys_familia', array('fa_id_sys_bucle' => $idbucle));
        if($updatefb){
	        $data = $updatef;
	        $value = true;
	        $msg = 'Se actulizo el bucle';
	    }else{
	       	$msg = 'No se actulizo el bucle';
	    }
	    return array($value, $data, $msg);
	}

	public function registrar_razones($nombre, $descripcion){
		$this->form_validation->set_rules('nombre', 'nombre', 'required');
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $rr = $this->db->insert('sys_razones', array(
        	'raz_nombre'=> $nombre, 
        	'raz_descripcion' => $descripcion
        ));
        if($rr){
        	$value = true;
        	$msg = 'Se ha agregado la razón con éxito';
        }else{
        	$msg ='No se agrego la razón';
        }
        return array($value, $data, $msg);
	}

	public function registrar_gastos_familia($idfamilia, $idrazon, $comentario, $cantidad, 	$constante, $idbucle){
		$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
		$this->form_validation->set_rules('idrazon', 'idrazon', 'required');		
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $this->db->set('gas_fecha_creacion','now()',false);
        $rgf = $this->db->insert('sys_gastos', array(        	
        	'gas_id_sys_familia' => $idfamilia, 
        	'gas_id_sys_razones' => $idrazon, 
        	'gas_comentario' => $comentario, 
        	'gas_cantidad' => $cantidad, 
        	'gas_constante' => $constante, 
        	'gas_id_sys_bucle' => $idbucle
        ));
        if($rgf){
        	$value = true;
        	$data = $rgf;
        	$msg = 'Gasto ingresado con exito';
        }else{
        	$msg = 'No se ingreseo el gasto';
        }
        return array($value, $data, $msg);
	}

}
 ?>
