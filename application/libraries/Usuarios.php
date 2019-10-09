<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios {
    
    private $table = 'usuarios';
    
    private $nome;
    private $email;
    
    public function setNome($n) {
        $this->nome = $n;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
}