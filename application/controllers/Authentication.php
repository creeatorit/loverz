<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Authentication extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

		// Load model
		$this->load->model('Usuarios_model');
                $this->load->library('usuario');
		
	}

	public function index()
	{
		
		$this->login();
	}

	public function register()
	{
		// Verifica se já exite um usuário logado e redireciona para dashboard
		if ($this->session->userdata('logged') > 0) {
			redirect(base_url('dashboard'));
		}

		// Validation form
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('sobrenome', 'Sobrenome', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('estado_civil', 'Estado civil', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			// Se exitir algum erro de validação, transforma em json para recuperar no jquery
			if($this->form_validation->error_array() > null) {
				$json_response['formErrors'] = $this->form_validation->error_array();
				exit(json_encode($json_response));
			}
		} else {
                    $user = new Usuario();
                    $user->setNome($this->input->post('nome'));
                    $user->setSobrenome($this->input->post('sobrenome'));
                    $user->setEmail($this->input->post('email'));
                    $user->setSenha($this->input->post('senha'));
                    $user->setCodConfirmacao(md5(rand(999,9999)));
                    $user->salvar();
                    
                    redirect(base_url('account-activation'));
                    
                    
                    /*
			// Verifica se o e-mail enviado, já consta no banco de dados
			$data = array(
				'nome' => $this->input->post('nome'),
                                'sobrenome' => $this->input->post('sobrenome'),
				'email' => $this->input->post('email'),
				'senha' => $this->input->post('senha')
			);
			$consult = $this->Usuarios_model->verificarEmail($data['email']);
			
			if (!$consult) {
				$result = $this->Usuarios_model->store($data);
				if ($result) {
					// Valores do sweetalert para recuperar no jquery em caso de cadastrado com sucesso
					$swal = array(
						'title' => 'Sucesso!',
						'text' => 'Cadastro realizado com sucesso.',
						'icon' => 'success'
					);
				} else {
					// Valores do sweetalert para recuperar no jquery em caso de algum erro no cadastro
					$swal = array(
						'title' => 'Oops!',
						'text' => 'Não foi possível efetuar o cadastro. Tente novamente.',
						'icon' => 'error'
					);
				}
			} else {
				// Valores do sweetalert para recuperar no jquery em caso do e-mail já tiver sido cadastrado antes
				$swal = array(
					'title' => 'Oops!',
					'text' => 'Esse e-mail já possui uma conta.',
					'icon' => 'error'
				);
			}
			// Transforma o resultado em json para pegar no jquery
			echo json_encode($swal);
			exit;*/
			
		}
		$this->load->view('admin/page-register');
	}
        
        /* Verifica dados de login e senha */
	public function login()
	{
		
		// Verifica se já exite um usuário logado e redireciona para dashboard
		if ($this->session->userdata('logged') > 0) {
			redirect(base_url('profile'));
		}
		// Validation form
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|valid_email');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[3]', 'O campo Senha deve ter no mínimo 3 caracteres.');
		
		if ($this->form_validation->run() == FALSE) {
			$data['error'] = validation_errors();
			$this->session->set_flashdata($data);
		} else {
                    $data = array(
                            'email' => $this->input->post('email'), 
                            'senha' => $this->input->post('senha')
                    );
                    $result = $this->Usuarios_model->login($data);
                    if ($result) {
                        $this->session->set_userdata('logged', true);
                        $this->session->set_userdata('userID', $result->id);
                        redirect(base_url('profile'));
                    } else {
                            $data['error'] = 'Usuários ou senha incorretos!';							
                            $this->session->set_userdata($data['error']);	
                    }
		}
		
		$this->load->view('authentication/index');
	}

	public function logout() {
		$this->session->unset_userdata('logged');
		redirect(base_url());
	}
        
        /* Método para novos usuários ativar sua conta */
        public function account_activation() {
            
            // Validation form
            $this->form_validation->set_rules('codigo', 'Codigo confirmação', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                if($this->form_validation->error_array() > null) {
                    $data['formErrors'] = $this->form_validation->error_array();
                }
            } else {
                
                if ($result = $this->Usuarios_model->confirma_codigo($this->input->post('codigo'))) {
                    // Conta ativada com sucesso                                        
                    $this->session->set_userdata('logged', true);
                    $this->session->set_userdata('userID', $result->id);
                    redirect(base_url('profile'));
                } else {
                    $data['formErrors'] = array('Código expirado ou inválido, tente novamente!');
                }
                
            }
            
            $this->load->view('authentication/account_activation', $data = array());
        }
}
