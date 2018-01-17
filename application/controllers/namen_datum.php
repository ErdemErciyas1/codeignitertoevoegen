<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class namen_datum extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();


}

public function index()
{	
	//de calendar wordt geladen 
	$this->load->view('edit_namen');
	//

	$this->load->model('HomeModel');
		$data['records'] = $this->HomeModel->getData();
		//de datababase namen worden zichtbaar gesteld in de view.
		//$this->load->view('HomeView' ,$data);
		//
}


public function add_user()
	{


		// de codes hieronder zorgen ervoor dat de gegevens firstname, day, month en year worden opgeslagen in de database.	
        
        $firstname = $this->input->post('person');
		$lastname = $this->input->post('day');
		$date = $this->input->post('month');
		$year = $this->input->post('year');
		
		$data = array('person'=>$firstname,'day'=>$lastname,'month'=>$date,'year'=>$year);

		//
		
		$this->load->model('Add_users');
		
		//als je de firstname en lastname invult zijn de gegevens opgeslagen in de database.
		if($this->Add_users->add($data))
		{

			echo "Data Insert Successfully";
		}
		else 
		{
			echo "Data Not Inserted";
		}
		
	}



      

}