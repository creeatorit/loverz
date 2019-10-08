<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends MY_Controller {

   public function __construct() {

      parent::__construct();

      /*
      // Load form helper library
      $this->load->helper('form');
      $this->load->helper('url');

      // Load form validation
      $this->load->library('form_validation');

      // Load model
      $this->load->model('Cursos_model', 'model');
      */
   }

   /**
    * Método responsável por exibir o perfil do usuário logados
    * @return view
    */
   public function index() {

   	/*
      // Load model módulos
      $this->load->model('Modulos_model');
      
      $data['title'] = "Cursos";
      $data['active'] = 'cursos';
     }
     */
     
    	$this->load->view('profile/index');
    }
}