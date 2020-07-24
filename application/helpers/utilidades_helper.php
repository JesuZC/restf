<?php 
function capitalizar($data_cruda,$campos_capitalizar){
	$data_lista= $data_cruda;
	foreach ($data_cruda as $nombre_campo => $valor_campo){
		if(in_array($nombre_campo, array_values($campos_capitalizar))){
			$data_lista[$nombre_campo]=strtoupper($valor_campo);
		}
	}
	return $data_lista;
}
function capitalizar_todo($data_cruda){
	$data_lista= $data_cruda;
	foreach ($data_cruda as $nombre_campo => $valor_campo){
		if(is_string($valor_campo)){
			$data_lista[$nombre_campo]=strtoupper($valor_campo);
		}else{
			$data_lista[$nombre_campo]=$valor_campo;
		}
	}
	return $data_lista;
}
function obtener_mes($mes){
	if( !is_numeric($mes) ){
    		$respuesta = array('error'=>true, 'mensaje'=>'El mes tine que ser un numero');
    		echo json_encode($respuesta);
			return;
	}
	$mes -= 1;
	$meses= array(
		'enero',
		'febrero',
		'marzo',
		'abril',
		'mayo',
		'junio',
		'julio',
		'agosto',
		'septiembre',
		'octubre',
		'noviembre',
		'diciembre'
	);
	if($mes < 0 OR $mes > 11){
		$respuesta = array('error'=>true, 'mensaje'=>'El mes debe ser un nemro entre 1 y 12');
		echo json_encode($respuesta);
		return;
	}
	return $meses[$mes];
 	}
?>