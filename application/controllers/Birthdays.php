<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Birthdays extends CI_Controller
{
	public function __construct()
{
	parent ::__construct();
	// de construct function wordt gebruikt over de hele class.


}

	public function index()
{
	
	//
	
	//De HomeModel.php wordt geladen 
	$this->load->model('HomeModel');
	//
	//de database naam is birthdays en daarin worden alle gegevens opgehaald.
	$data['birthdays'] = $this->HomeModel->get_birthdays();
	//

	// de view show_calendar met alle data wordt geladen.
	$this->load->view('show_calendar', $data);
	//


	
	echo "<h1>Het project is bijna afgerond.</h1>";



	}


// het knopje toevoegen heb ik de function Create gegeven, zie show_calendar.php
public function Create()
//
{	
	// de view add_namen word geladen. 
	$this->load->view('add_namen');
	//

	//de HomeModel wordt daarin geladen.
	$this->load->model('HomeModel');
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
		
		//als je person,day,month,year invult in je input zijn de gegevens opgeslagen in de database.
		if($this->HomeModel->add($data))
		{

			echo "Data Insert Successfully";
		}
		else 
		{
			echo "Data Not Inserted";
		}
		// na het invullen van de input en het klikken op enter gaat de pagina weer terug naar Birthdays.php
		redirect('Birthdays');
		//
	}

// de function 
public function delete(){
	// de HomeModel.php wordt geladen.
	$this->load->model('HomeModel');
	// 

	//	de $id variable is aangemaakt, omdat ik meerdere id's in mijn database heb staan. 
	$id = $this->input->get('id');
	//

	// deleteuser($id) function staat in de HomeModel.php.
	if($this->HomeModel->deleteuser($id))
	{
		$data['birthdays'] = $this->HomeModel->get_birthdays();
		$this->load->view('show_calendar',$data);
	}
	//

	//nadat je op delete drukt, blijf je op dezelfde pagina(Birthdays.php)
	redirect('Birthdays');
//


}


// 
public function get_user(){
	$this->load->model('HomeModel'); 
	$data['birthdays'] = $this->HomeModel->getuser();
	$this->load->view('show_calendar', $data);
	redirect('Birthdays');
}


//bezig met edit
public function Edit($id){
	$this->load->model('HomeModel');
	$data['person'] = $this->HomeModel->getuserbyid($id)[0];
	$this->load->view('edit_namen',$data);

//

}

// bezig met edit
public function updateuser(){
	$firstname = $this->input->post('person');
	$lastname = $this->input->post('day');
	$date = $this->input->post('month');
	$year = $this->input->post('year');
	$id= $this->input->post('eid');
	$data = array('person'=>$firstname ,'day'=>$lastname ,'month'=>$date ,'year'=>$year);


	 
	$this->load->model('HomeModel');
	if($this->HomeModel->updateuserbyid($data,$id))
	{
		$data['birthdays'] = $this->HomeModel->getuser();
	$this->load->view('show_calendar', $data);
	
	}
	} 

}
//
?>
