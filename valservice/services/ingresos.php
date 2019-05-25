<?php

$services[] =array(
		'nombre'=>'Registrar ingreso',
		'url'=>'_serv/cambiar_estado_familia_serv',
		'descripcion'=>'Registrar o actualizar familias al sistema',
		'color'=>'#0F0F0F',
		'campos'=>array(
			array('nombre'=>'idfamilia','valor'=>'1','info'=>'Para actulizar los datos de la familia'),
			array('nombre'=>'estado','valor'=>'2','info'=>'1:activa, 2:inactiva'),			
		)
);

?>