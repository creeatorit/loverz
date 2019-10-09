<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public $table = 'usuarios';
        
	function __construct() 	{
		parent::__construct();
	}
        
	function login($data) {
		$this->db->select('*')->from($this->table);
		$this->db->where('email', $data['email']);
		$this->db->where('senha', md5($data['senha']));
		$result = $this->db->get()->result();
		return $result[0];
	}
}

