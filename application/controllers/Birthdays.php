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



public function Create()
{	
	//de calendar wordt geladen 
	$this->load->view('add_namen');
	//

	$this->load->model('HomeModel');
		
		
		
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



public function get_user(){
	$this->load->model('HomeModel'); 
	$data['birthdays'] = $this->HomeModel->getuser();
	$this->load->view('show_calendar', $data);
}


public function Edit(){
	$this->load->view('add_namen');
	$this->load->model('HomeModel');		
$id = $this->input->get('id');
$data['Birthdays'] = $this->HomeModel->getuserbyid($id);
	


}


public function updateuser(){
	$firstname = $this->input->post('person');
	$lastname = $this->input->post('day');
	$date = $this->input->post('month');
	$year = $this->input->post('year');
	$id = $this->input->post('eid');
	$data = array('person'=>$firstname ,'day'=>$lastname ,'month'=>$date ,'year'=>$year,'eid'=>$id);





	 
	$this->load->model('HomeModel');
	if($this->HomeModel->updateuserbyid($data, $id))
	{

		$data['birthdays'] = $this->HomeModel->getuser();
	$this->load->view('show_calendar', $data);

	} 
}

}











?>
