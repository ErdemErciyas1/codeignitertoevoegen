<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class click_namen extends CI_Controller
{
		public function __construct()
		{
		parent ::__construct();

		}



function index(){

	$this->load->view('clicknamen');
}
}