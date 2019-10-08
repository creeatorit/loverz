<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Hobbies_Interests extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('hobbies_interests/index');
    }
}