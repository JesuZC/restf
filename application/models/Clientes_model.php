<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_model{
	public $id;
	public $nombre;
	public $activo;
	public $correo;
	public $zip;
	public $telefono1;
	public $telefono;
	public $pais;
	public $direccion; 
	public function get_clientes(){
		$this->load->database();
		$this->db->select('nombre, id');
		$this->db->from('cLientes');
		$this->db->limit(10);
		$consulta = $this->db->get();
		return $consulta->result_array();
	}
	public function get_cliente($id){
		$this->id=1;
		$this->nombre='Aruma Yatzil';
		$this->correo='aruma.yatzil27@gmail.com';
		return $this;
	}
	public function insert(){
		return "insertado";

	}
	public function update(){
		return "actuaizado";
	}
	public function delete(){
		return "borrado";
	}
}