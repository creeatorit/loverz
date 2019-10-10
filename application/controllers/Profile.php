<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Profile extends MY_Controller {

   public function __construct() {

      parent::__construct();
      
      // Load model
      $this->load->model('Usuarios_model');
      $this->load->library('usuario');
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
        
        // Validation form
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('sobrenome', 'Sobrenome', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('website', 'Website', 'trim|min_length[3]|max_length[100]');
        $this->form_validation->set_rules('datetimepicker', 'Nascimento', 'trim');
        $this->form_validation->set_rules('telefone', 'Telefone', 'trim');
        $this->form_validation->set_rules('sobre', 'Sobre', 'trim');
        $this->form_validation->set_rules('profissao', 'Profissão', 'trim');
        $this->form_validation->set_rules('sexo', 'Sexo', 'trim');
        
        if ($this->form_validation->run() == FALSE) {
            // Se exitir algum erro de validação, transforma em json para recuperar no jquery
            if($this->form_validation->error_array() > null) {
                $data['formErrors'] = $this->form_validation->error_array();
            }
        } else {
            $usuario = new Usuario;   
            $usuario->setId($this->session->userdata('userID'));
            $usuario->setNome($this->input->post('nome'));
            $usuario->setSobrenome($this->input->post('sobrenome'));
            $usuario->setEmail($this->input->post('email'));
            $usuario->setWebsite($this->input->post('website'));
            $usuario->setNascimento($this->input->post('datetimepicker'));
            $usuario->setTelefone($this->input->post('telefone'));
            $usuario->setSobre($this->input->post('sobre'));
            $usuario->setProfissao($this->input->post('profissao'));
            $usuario->setSexo($this->input->post('sexo'));
            $usuario->salvar();
            redirect(base_url());
        }
        
        $this->load->view('profile/personal_information', $data);
        
    }
}