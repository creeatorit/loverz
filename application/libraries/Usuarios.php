<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios {
    
    private $table = 'usuarios';
    
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $website;
    private $nascimento;
    private $telefone;
    private $sobre;
    private $profissao;
    private $sexo;
    
    function getNome() {
        return "teste";
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmail() {
        return $this->email;
    }

    function getWebsite() {
        return $this->website;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSobre() {
        return $this->sobre;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setWebsite($website) {
        $this->website = $website;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSobre($sobre) {
        $this->sobre = $sobre;
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


    
}