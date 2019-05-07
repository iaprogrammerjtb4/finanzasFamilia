<?php

//---------------------------------
$services = array();


$loadServ = isset($_GET['service'])?$_GET['service']:$servicesLibs[0];
$_GET['service']= $loadServ; // Evitar el undefined


if(is_file('services/'.$loadServ.'.php')){
	include('services/'.$loadServ.'.php');
}

function js_array($array)
{
    $temp = array_map('js_str', $array);
    return '[' . implode(',', $temp) . ']';
}