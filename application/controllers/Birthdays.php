<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Birthdays extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();


}

	public function index()
{
	
	//
	
	//de calendar object wordt geladen 
	$this->load->model('HomeModel');
	$data['birthdays'] = $this->HomeModel->get_birthdays();
	$this->load->view('show_calendar', $data);

		

	



	echo "<h1>Bezig met de het toevoegen van verjaardagen, als je op een naam klikt word het opgeslagen</h1>";



	}
}










?>
