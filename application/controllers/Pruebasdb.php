<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pruebasdb extends CI_Controller {

	public function clientes_beta(){
		$this->load->database();
		$query = $this->db->query('SELECT id, nombre, correo FROM clientes limit 10 ');
		$resp = array(
			'error' => FALSE,
			'mensaje'=> "Registros Cargados Correctamente",
			'total_registros'=>$query->num_rows(),
			'clientes' => $query->result()
		);
		echo json_encode($resp);
	}
	public function cliente($id){
		$this->load->database();
		$query = $this->db->query('SELECT * FROM clientes where id = '.$id);
		$fila = $query->row();
		if(isset($fila)){
			$resp = array(
				'error' => FALSE,
				'mensaje'=> "Registros Cargados Correctamente",
				'total_registros'=>1,
				'cliente' => $fila
			);
		}else{
			$resp = array(
				'error' => TRUE,
				'mensaje'=> "Registros Invalido",
				'total_registros'=>0,
				'cliente' => NULL
			);
		}
		echo json_encode($resp);
	}
}