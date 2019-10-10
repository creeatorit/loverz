<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public $table = 'usuario';
        
	function __construct() 	{
		parent::__construct();
	}
        
	public function login($data) {
		$this->db->select('*')->from($this->table);
		$this->db->where('email', $data['email']);
		$this->db->where('senha', md5($data['senha']));
		$result = $this->db->get()->result();
		return $result[0];
	}
        
        /* Consulta registro pelo $id */
        public function get($id) {
            $this->db->select('*')->from($this->table);
            $this->db->where('id', $id);
            $result = $this->db->get()->result();
            return $result[0];
        }
        
        
        /* Verifica se o código existe no banco de dados e retorna $id do usuário */
        public function confirma_codigo($codigo) {
            $this->db->select('id')->from($this->table);
            $this->db->where('cod_confirmacao', $codigo);
            if($result = $this->db->get()->result()) {
                $this->db->where('id', $result[0]->id);
                $this->db->set('cod_confirmacao', null);
                $this->db->set('confirmado', true);
                $this->db->set('status', true);
                $this->db->update($this->table);
                return $result[0]->id;
            }
            return false;
        }
}

