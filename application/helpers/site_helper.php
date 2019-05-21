<?php

function returnJson($res = false, $datos = array(), $msg = '')
{
    echo json_encode(array('res' => $res, 'dataObj' => $datos, 'msg' => $msg));
}

function validar_campos_tablas($data){
	//$CI = load
}

?>
