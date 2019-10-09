<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends MY_Controller {

   public function __construct() {

      parent::__construct();
      
      // Load model
      $this->load->model('Usuarios_model');
      $this->load->library('usuarios');
   }

   /**
    * Método responsável por exibir o perfil do usuário logados
    * @return view
    */
   public function index() {
     
    	$this->load->view('profile/index');
    }
    
    public function setting() {
        $this->load->view('profile/setting');
    }
    
    public function personal_information() {
        
        
        $this->usuarios->setNome("Rafael");
        echo $this->usuarios->getNome();exit;
        
        $data['user'] = $this->Usuarios_model->get($this->session->userdata('userID'));
        $this->load->view('profile/personal_information', $data);
        
    }
}