<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Change_Password extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('change_password/index');
    }
}