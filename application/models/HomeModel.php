<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//model is verbonden met de database calendar, birthdays op phpmyadmin.
class HomeModel extends CI_Model {

  // de codes hieronder horen bij de create!
  public function getData() {
    $query = $this->db->get('birthdays');
    return $query->result();
  }

public function get_birthdays(){

	$this->db->order_by('month','ASC');
	$query = $this->db->get('birthdays');
	return $query->result();
}
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

public function updateuserbyid($data,$id)

{

	$this->load->database();
	$this->db->where('id', $id);
	$this->db->update('birthdays',$data);
	return true;
}


function getuser(){

	$this->load->database();
	$data = $this->db->get('birthdays');
	return $data->result();
}

function getuserbyid($id){

	$this->load->database();
	$this->db->where('id', $id);
	$data = $this->db->get('birthdays');
	return $data->result();
}



function deleteuser($id)
{
	$this->load->database();
	$this->db->where('id',$id);
	$this->db->delete('birthdays');
	return true;
}


}