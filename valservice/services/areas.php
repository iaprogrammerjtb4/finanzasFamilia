<?php

$services[] =array(
		'nombre'=>'Agregar o editar  areas',
		'url'=>'services/Areas_serv/Gestareas_serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'idEdit','valor'=>'','info'=>''),
			array('nombre'=>'nombre','valor'=>'','info'=>''),

		)
);


$services[] =array(
		'nombre'=>'Listar areas',
		'url'=>'services/Areas_serv/listar_serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(

		)
);


$services[] =array(
		'nombre'=>'detalle areas',
		'url'=>'services/Areas_serv/detalles_Serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'id_area','valor'=>'','info'=>''),

		)
);


$services[] =array(
		'nombre'=>'Detalle area',
		'url'=>'services/Areas_serv/estado_Serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'id_area','valor'=>'','info'=>''),

		)
);


$services[] =array(
		'nombre'=>'Cambiar estado del area',
		'url'=>'services/Areas_serv/estado_Serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'id_area','valor'=>'1','info'=>''),
			array('nombre'=>'estado','valor'=>'2','info'=>''),

		)
);
