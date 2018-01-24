<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class create extends CI_Controller
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
		
		$this->load->model('HomeModel');
		
		//als je de firstname en lastname invult zijn de gegevens opgeslagen in de database.
		if($this->HomeModel->add($data))
		{

			echo "Data Insert Successfully";
		}
		else 
		{
			echo "Data Not Inserted";
		}
		
		redirect('Birthdays');
	}

// de function 
public function delete(){

	$this->load->model('HomeModel');

	$id = $this->input->get('id');

	if($this->HomeModel->deleteuser($id))
	{
		$data['birthdays'] = $this->HomeModel->get_birthdays();
		$this->load->view('show_calendar',$data);
	}
	redirect('Birthdays');


}
}

