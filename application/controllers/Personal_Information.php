<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Personal_Information extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('personal_information/index');
    }
}