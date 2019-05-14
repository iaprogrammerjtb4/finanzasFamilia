<?php

$services[] =array(
		'nombre'=>'Registro y actualización de productos',
		'url'=>'services/Productos_serv/registro_productos_serv',
		'descripcion'=>'',
		'color'=>'#25465a',
		'campos'=>array(
			array('nombre'=>'idproducto','valor'=>'2','info'=>'Id del producto a actulizar'),
			array('nombre'=>'nombre','valor'=>'ProductoX','info'=>'Nombre del producto'),
			array('nombre'=>'descripcion','valor'=>'Este es el producto X insertado desde el valservice','info'=>'Descripción del producto'),
		)
);

?>