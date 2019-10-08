<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Account_Settings extends MY_Controller {

   public function __construct() {

      parent::__construct();

   }

   public function index() {
     
    	$this->load->view('account_settings/index');
    }
}