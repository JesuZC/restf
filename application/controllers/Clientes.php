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
		echo $cliente_id;
	}
	public function clientes_get(){
		echo json_encode($this->Clientes_model->get_clientes());
	}
}