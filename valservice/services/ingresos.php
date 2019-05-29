<?php

$services[] =array(
		'nombre'=>'Crear fondo',
		'url'=>'Ingresos_serv/crear_fondo_serv',
		'descripcion'=>'Registrar o actualizar familias al sistema',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'idfamilia','valor'=>'2','info'=>'Familia a crear fondo'),
			array('nombre'=>'ffinalizacion','valor'=>'2019-05-16 00:00:00','info'=>'Terminación del fondo date()'),
			array('nombre'=>'cantidad','valor'=>'3000000','info'=>'La cantidad que tiene el fondo'),
			array('nombre'=>'comentario','valor'=>'Mes de prueba de finanzasFamiliares','info'=>''),

		)
);



$services[] =array(
		'nombre'=>'Registrar ingreso',
		'url'=>'Ingresos_serv/registrar_ingreso_serv',
		'descripcion'=>'Registrar el ingreso o aporte del integrante',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'idfondo','valor'=>'1','info'=>'Fondo de la familia'),
			array('nombre'=>'idintegrante','valor'=>'2','info'=>'integrante la familia'),
			array('nombre'=>'cantidad','valor'=>'250000','info'=>'cantidad que aporta'),
			array('nombre'=>'comentario','valor'=>'pa qeu pagen las cuentas','info'=>'comentario')
		)
);


$services[] =array(
		'nombre'=>'Registrar cuentas',
		'url'=>'Ingresos_serv/registrar_cuentas_serv',
		'descripcion'=>'Registrar cuentas ',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'idgasto','valor'=>'3','info'=>''),
			array('nombre'=>'idfondo','valor'=>'2','info'=>'Fondo de la familia'),
			array('nombre'=>'factura','valor'=>'2000000','info'=>'integrante la familia'),
			array('nombre'=>'comentario','valor'=>'pa qeu pagen las cuentas','info'=>'comentario')
		)
);


?>