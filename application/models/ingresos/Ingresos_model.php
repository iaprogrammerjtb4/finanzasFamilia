<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ingresos_model  extends CI_Model{
	
	public function __construct(){
		parent::__construct();				
	}

	public function crear_fondo($idfamilia, $ffinalizacion, $cantidad, $comentario){
		$this->form_validation->set_rules('idfamilia', 'idfamilia', 'required');
		$this->form_validation->set_rules('ffinalizacion', 'ffinalizacion', 'required');
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
		$this->form_validation->set_rules('comentario', 'comentario', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $vif = validar_campos_tablas(array('sys_familia','fa_id',$idfamilia));
        if(!$vif){
	        $this->db->set('fon_fecha_creacion', 'now()', false);
	        $cf = $this->db->insert('sys_fondo', array(
	        	'fon_id_sys_familia' => $idfamilia,         	
	        	'fon_fecha_finalizacion'=>$ffinalizacion, 
	        	'fon_cantidad'=>$cantidad, 
	        	'fon_comentarios'=>$comentario
	        ));
	        if($cf){
	        	$value = true;
	        	$msg ='Fondo creado con éxito';
	        }else{
	        	$msg = 'No se pudo crear el fondo';
	        }
	    }else{
	    	$msg = 'La familia no existe';
	    }
        return array($value, $data, $msg);
	}

	public function registrar_ingreso($idfondo, $idintegrante, $cantidad, $comentario){
		$this->form_validation->set_rules('idfondo', 'idfondo', 'required');
		$this->form_validation->set_rules('idintegrante', 'idintegrante', 'required');
		$this->form_validation->set_rules('cantidad', 'cantidad', 'required');
		$this->form_validation->set_rules('comentario', 'comentario', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $this->db->set('ing_fecha', 'now()', false);
        $ri = $this->db->insert('sys_ingresos', array(
        	'ing_id_sys_fondo' => $idfondo, 
        	'ing_id_sys_integrantes' => $idintegrante, 
        	'ing_cantidad' => $cantidad, 
        	'ing_comentario' => $comentario        	
        ));
        if($ri){
        	$value = true;
        	$msg = 'El ingreso fue exitoso';
        }else{
        	$msg = 'Error al registrar ingreso';
        }
		return array($value, $data, $msg);
	}

	public function registrar_cuentas($idgasto, $idfondo, $factura, $comentario){
		$this->form_validation->set_rules('idgasto', 'idgasto', 'required');
		$this->form_validation->set_rules('idfondo', 'idfondo', 'required');		
		$this->form_validation->set_rules('factura', 'factura', 'required');		
		$this->form_validation->set_rules('comentario', 'comentario', 'required');
        $this->form_validation->set_message('required', 'Debe completar el campo %s.');
		$r = $this->form_validation->run();
        if (!$r) {
            return array(false, array(), validation_errors());
        }
        $value = false;
        $data = array();
        $this->db->set('cue_fecha', 'now()', false);
        $rc = $this->db->insert('sys_cuentas', array(
        	'cue_id_sys_gastos' => $idgasto, 
        	'cue_id_sys_fondo' => $idfondo, 
        	'cue_factura' => $factura, 
        	'cue_comentario' => $comentario
        ));
        if($rc){
        	$value = true;
        	$msg = 'Se registro la cuenta con éxito';
        }else{
        	$msg = 'No se registro la cuenta';
        }
		return array($value, $data, $msg);
	}
}
 ?>
