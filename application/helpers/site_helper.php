<?php

function returnJson($res = false, $datos = array(), $msg = '')
{
    echo json_encode(array('res' => $res, 'dataObj' => $datos, 'msg' => $msg));
}


/**
	*validar campos en tablas
	*@array = nameTable, colum, value
	*return true = no existe el registro or false = existe el registro
	*/
function validar_campos_tablas($data)
{
	$CI = get_instance();
	$val = array(
		$data[1] => $data[2]
	);
	$validar = $CI->db->get_where($data[0], $val)->num_rows();	
	if($validar>0){		
		return false;
	}else{
		return true;
	}
}

?>
