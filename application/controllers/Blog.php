<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index()
    {
        echo 'Hello World!';
    }
    public function comments($id)
    {
    	if(is_numeric($id)){
    		$comments = array(
    			array('id'=>1, 'mensaje' => 'hola 1'),
    			array('id'=>2, 'mensaje' => 'hola 2'),
    			array('id'=>3, 'mensaje' => 'hola 3'),
    			array('id'=>4, 'mensaje' => 'hola 4')
    		);
    		if($id >= count($comments) OR $id < 0){
	    		$respuesta = array('error'=>true, 'mensaje'=>'El ID no existe');
	    		echo json_encode($respuesta);
    			return;
    		}
        echo json_encode($comments[$id]);	
    	}else{
    		$respuesta = array('error'=>true, 'mensaje'=>'El ID debe ser un numero entero');
    		echo json_encode($respuesta);
    	}
    }
}