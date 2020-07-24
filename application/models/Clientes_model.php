<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_model{
	public $id;
	public $nombre;
	public $activo;
	public $correo;
	public $zip;
	public $telefono1;
	public $telefono2;
	public $pais;
	public $direccion; 
	public function __construnct(){
		parent:: __construnct();
		$this->load->database();
		$this->load->library('Form_validation');
	}
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
	public function insert_cliente($data){
		$this->load->helper('utilidades');
		$dataG = capitalizar_todo($data);
		$this->nombre=$dataG['nombre'];
		$this->id="";
		$this->activo=$dataG['activo'];
		$this->correo=$dataG['correo'];
		$this->zip=$dataG['zip'];
		$this->telefono1=$dataG['telefono1'];
		$this->telefono2=$dataG['telefono2'];
		$this->pais=$dataG['pais'];
		$this->direccion=$dataG['direccion']; 
		$this->db->insert('clientes',$this);
        if ($this->db->affected_rows() > 0) {
            $respuesta = array(
                'error' => FALSE,
                'mensaje' => "se ha guardado Correctamente",
                'data' => $dataG
            );
        } else {
            $respuesta = array(
                'error' => TRUE,
                'mensaje' => "error al guardar",
                'data' => $data
            );
        }
        return $respuesta;
	}
	public function update(){
		return "actuaizado";
	}
	public function delete(){
		return "borrado";
	}
}