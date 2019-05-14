<?php

$services[] =array(
		'nombre'=>'registrar familia',
		'url'=>'Familia_serv/registrar_familia_serv',
		'descripcion'=>'Registrar o actualizar familias al sistema',
		'color'=>'#AA0A1A',
		'campos'=>array(
			array('nombre'=>'idfamilia','valor'=>'','info'=>'Para actulizar los datos de la familia'),
			array('nombre'=>'nombre','valor'=>'Támara','info'=>''),
			array('nombre'=>'pais','valor'=>'Colombia','info'=>''),
			array('nombre'=>'ciudad','valor'=>'Soacha','info'=>''),
			array('nombre'=>'barrio','valor'=>'HogarEsSoacha','info'=>''),
			array('nombre'=>'bucle','valor'=>'1','info'=>'Id del bucle: 1:Semanal 2:Mensual 3:Trimestral 4:semestral 5:anual'),
		)
);

