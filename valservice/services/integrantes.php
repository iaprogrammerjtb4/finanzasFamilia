<?php

$services[] =array(
		'nombre'=>'Registro y actualización de Integrantes',
		'url'=>'Integrante_serv/registrar_integrante_serv',
		'descripcion'=>'',
		'color'=>'#25465a',
		'campos'=>array(
			array('nombre'=>'idintegrante','valor'=>'','info'=>'Para actulizar'),
			array('nombre'=>'idfamilia','valor'=>'2','info'=>''),	
			array('nombre'=>'nombre','valor'=>'Armando','info'=>''),
			array('nombre'=>'correo','valor'=>'correo@correo.co','info'=>''),
			array('nombre'=>'acceso','valor'=>'qwerty','info'=>''),			
		)
);

$services[] =array(
		'nombre'=>'cambiar estado integrante',
		'url'=>'Integrante_serv/cambiar_estado_integrante_serv',
		'descripcion'=>'Esta es',
		'color'=>'#0A0A10',
		'campos'=>array(
			array('nombre'=>'idintegrante','valor'=>'1','info'=>''),
			array('nombre'=>'estado','valor'=>'2','info'=>'1:activa, 2:inactiva'),			
		)
);

$services[] =array(
		'nombre'=>'Listar integrantes de la familia',
		'url'=>'Integrante_serv/listar_integrante_familia_serv',
		'descripcion'=>'Esta es',
		'color'=>'#0A0A10',
		'campos'=>array(
			array('nombre'=>'idfamilia','valor'=>'1','info'=>''),			
		)
);


$services[] =array(
		'nombre'=>'Listar datos del integrante',
		'url'=>'Integrante_serv/listar_integrante_serv',
		'descripcion'=>'Esta es',
		'color'=>'#0A0A10',
		'campos'=>array(
			array('nombre'=>'idintegrante','valor'=>'1','info'=>''),			
		)
);

?>