<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Posts extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('posts/index');
    }
}