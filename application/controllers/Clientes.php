<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;
require APPPATH.'/libraries/RestController.php';
class Clientes extends RestController{
    public function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('Clientes_model');
    }
	public function cliente_get(){
		$cliente_id = $this->uri->segment(3);
		echo json_encode($this->Clientes_model->get_cliente($cliente_id));
	}
	public function clientes_get(){
		echo json_encode($this->Clientes_model->get_clientes());
	}
	public function login_post(){
		
	}
	public function cliente_post(){
		$data = array(
			'nombre' => "Julian Alambriz Perez",
			'activo' => 1,
			'correo' => "juAl@gmail.com",
			'zip' => "12a0zp",
			'telefono1' => "7621201234",
			'telefono2' => "7772345678",
			'pais' => "españa",
			'direccion' => "coño tio, col. playa alegre #45 "
		);
		$resp = $this->Clientes_model->insert_cliente($data);
		if($resp['error']==TRUE){
			$this->response(json_encode($resp), RestController::HTTP_OK);
			return;
		}else{
			$this->response(json_encode($resp), RestController::HTTP_OK);
		}
	}
}