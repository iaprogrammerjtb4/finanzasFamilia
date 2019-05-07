<?php


$services[] =array(
		'nombre'=>'Agregar Funcionarios O editar ',
		'url'=>'services/Funcionarios_serv/gesFunc_serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'idEdit','valor'=>'','info'=>''),
			array('nombre'=>'image','valor'=>'dsdsd','info'=>''),
			array('nombre'=>'nombreUsuario','valor'=>'maleja13','info'=>''),
			array('nombre'=>'rol_id','valor'=>'1','info'=>''),
			array('nombre'=>'area_id','valor'=>'1','info'=>''),
			array('nombre'=>'nombres','valor'=>'Maria Alejandra','info'=>''),
			array('nombre'=>'apellidos','valor'=>'Vargas Liz ','info'=>''),
			array('nombre'=>'tipoDoc_id','valor'=>'1','info'=>''),
			array('nombre'=>'documento','valor'=>'123456985','info'=>''),
			array('nombre'=>'cuidad','valor'=>'1','info'=>''),
			array('nombre'=>'direcccion','valor'=>'calle 12 a','info'=>''),
			array('nombre'=>'telefono','valor'=>'2315640','info'=>''),
			array('nombre'=>'celular','valor'=>'3132233223','info'=>''),
			array('nombre'=>'correo','valor'=>'alejandra12vargasliz@gmail.com','info'=>''),
			array('nombre'=>'password','valor'=>'123456','info'=>''),
		)
);


$services[] =array(
		'nombre'=>'Listar  usuarios',
		'url'=>'services/Funcionarios_serv/listar_Serv',
		'descripcion'=>'',
		'color'=>'',
);


$services[] =array(
		'nombre'=>'Detalle del funcionario',
		'url'=>'services/Funcionarios_serv/Obtenerdatos_Serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'funcionario_id','valor'=>'1','info'=>''),

		)
);

$services[] =array(
		'nombre'=>'Cambiar estado del   usuarios',
		'url'=>'services/Funcionarios_serv/estadoFun_Serv',
		'descripcion'=>'',
		'color'=>'',
		'campos'=>array(
			array('nombre'=>'funcionario_id','valor'=>'1','info'=>''),
			array('nombre'=>'estado','valor'=>'2','info'=>''),

		)
);


