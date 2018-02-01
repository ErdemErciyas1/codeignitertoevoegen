<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//model is verbonden met de database calendar, birthdays op phpmyadmin.
class HomeModel extends CI_Model {

  // de codes hieronder horen bij de create!
  public function getData() {
  	// de get function haalt de gegevens op via de database.
    $query = $this->db->get('birthdays');

    //// het resultaat die je opvraagt krijg je terug.
    return $query->result();
     //
  }

//de function get_birthdays heeft te maken met de add_namen pagina en de DELETE function. 
public function get_birthdays(){
	// de maand wordt alfabetisch georderd.
	$this->db->order_by('month','ASC');
	$query = $this->db->get('birthdays');
	// het resultaat die je opvraagt krijg je terug.
	return $query->result();
	//
}
		//de function add heeft te maken met de add_namen pagina.
  		public function add($data)
		{
			$this->load->database();
			
			$count = $this->db->insert('birthdays', $data);
			if($count>0)
			{
				return true;
			}
			else
			{
				return false; 
			}
			//
}
//bezig met edit
public function updateuserbyid($data,$id)

{

	$this->load->database();
	$this->db->where('id', $id);
	$this->db->update('birthdays',$data);
	return true;
}

//bezig met edit
function getuser(){

	$this->load->database();
	$data = $this->db->get('birthdays');
	return $data->result();
}
//bezig met edit

function getuserbyid($id){

	$this->load->database();

	$this->db->where('id', $id);
	$data = $this->db->get('birthdays');	
	return $data->result();
}


// deleteuser($id) staat in de controller function delete();
function deleteuser($id)
{
	$this->load->database();
	// where geeft aan waar id als id variable word gemaakt.
	$this->db->where('id',$id);
	//

	$this->db->delete('birthdays');
	return true;
}


}