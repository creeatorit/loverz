<?php

class Usuario {
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $telefone;
    private $nascimento;
    private $local_nascimento;
    private $estado_civil;
    private $foto;
    private $sexo;
    private $senha;
    private $status;
    private $sobre;
    private $profissao;
    private $nivel;
    private $website;
    private $cod_confirmacao;


    protected $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
    }


    public function salvar() {
        
       if (is_null($this->id)) {
           $this->CI->db->insert(strtolower(get_class($this)), $this);
       } else {
           $this->CI->db->where('id', $this->id);
           $this->CI->db->update(strtolower(get_class($this)), $this);
       }
       
    }
    
        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getApelido() {
        return $this->apelido;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getLocal_nascimento() {
        return $this->local_nascimento;
    }

    function getEstado_civil() {
        return $this->estado_civil;
    }

    function getFoto() {
        return $this->foto;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getSenha() {
        return $this->senha;
    }

    function getStatus() {
        return $this->status;
    }

    function getSobre() {
        return $this->sobre;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getNivel() {
        return $this->nivel;
    }
    
    function getWebsite() {
        return $this->website;
    }
    
    function getCodConfirmacao() {
        return $this->cod_confirmacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
        $this->CI->db->set('nome', $this->nome);
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
        $this->CI->db->set('sobrenome', $this->sobrenome);
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
        $this->CI->db->set('apelido', $this->apelido);
    }

    function setEmail($email) {
        $this->email = $email;
        $this->CI->db->set('email', $this->email);
    }
    

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        $this->CI->db->set('telefone', $this->telefone);
    }

    function setNascimento($nascimento) {
        $this->nascimento = implode("-", array_reverse(explode("/", $nascimento)));
        $this->CI->db->set('nascimento', $this->nascimento);
    }

    function setLocal_nascimento($local_nascimento) {
        $this->local_nascimento = $local_nascimento;
        $this->CI->db->set('local_nascimento', $this->local_nascimento);
    }

    function setEstado_civil($estado_civil) {
        $this->estado_civil = $estado_civil;
        $this->CI->db->set('estado_civil', $this->estado_civil);
    }

    function setFoto($foto) {
        $this->foto = $foto;
        $this->CI->db->set('foto', $this->foto);
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
        $this->CI->db->set('sexo', $this->sexo);
    }

    function setSenha($senha) {
        $this->senha = md5($senha);
        $this->CI->db->set('senha', $this->senha);
    }

    function setStatus($status) {
        $this->status = $status;
        $this->CI->db->set('status', $this->status);
    }

    function setSobre($sobre) {
        $this->sobre = $sobre;
        $this->CI->db->set('sobre', $this->sobre);
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
        $this->CI->db->set('profissao', $this->profissao);
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
        $this->CI->db->set('nivel', $this->nivel);
    }
    
    function setWebsite($website) {
        $this->website = $website;
        $this->CI->db->set('website', $this->website);
    }
    
    function setCodConfirmacao($codigo) {
        $this->cod_confirmacao = $codigo;
        $this->CI->db->set('cod_confirmacao', $this->cod_confirmacao);
    }


    
}