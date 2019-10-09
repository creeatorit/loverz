<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Photos extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('photos/index');
    }
}