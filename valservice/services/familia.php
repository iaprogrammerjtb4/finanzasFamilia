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

$services[] =array(
		'nombre'=>'cambiar estado familia',
		'url'=>'Familia_serv/cambiar_estado_familia_serv',
		'descripcion'=>'Registrar o actualizar familias al sistema',
		'color'=>'#0A0A1A',
		'campos'=>array(
			array('nombre'=>'idfamilia','valor'=>'1','info'=>'Para actulizar los datos de la familia'),
			array('nombre'=>'estado','valor'=>'2','info'=>'1:activa, 2:inactiva'),			
		)
);

$services[] =array(
		'nombre'=>'Listar familias registradas',
		'url'=>'Familia_serv/listar_familias_serv',
		'descripcion'=>'',
		'color'=>'#110A10',
		'campos'=>array(
		)
);

$services[] =array(
		'nombre'=>'Actulizar bucle familia',
		'url'=>'Familia_serv/actualizar_bucle_familia_serv',
		'descripcion'=>'',
		'color'=>'#110A10',
		'campos'=>array(			
			array('nombre'=>'idfamilia','valor'=>'1','info'=>'Para actulizar el bucle'),
			array('nombre'=>'idbucle','valor'=>'2','info'=>'Bucle id'),					
		)
);