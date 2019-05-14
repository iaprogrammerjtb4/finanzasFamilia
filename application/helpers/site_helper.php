<?php

function returnJson($res = false, $datos = array(), $msg = '')
{
    echo json_encode(array('res' => $res, 'dataObj' => $datos, 'msg' => $msg));
}
?>
